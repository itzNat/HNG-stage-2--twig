<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;

session_start();

// Create Request object
$request = Request::createFromGlobals();

// Initialize Twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
    'cache' => __DIR__ . '/../var/cache',
]);

// Add global variables to Twig
$twig->addGlobal('session', $_SESSION);
$twig->addGlobal('request', $request);

// Add custom filters
$twig->addFilter(new \Twig\TwigFilter('time_ago', function($dateString) {
    $date = new DateTime($dateString);
    $now = new DateTime();
    $diff = $now->diff($date);

    if ($diff->y > 0) return $diff->y . ' year' . ($diff->y > 1 ? 's' : '') . ' ago';
    if ($diff->m > 0) return $diff->m . ' month' . ($diff->m > 1 ? 's' : '') . ' ago';
    if ($diff->d > 0) return $diff->d . ' day' . ($diff->d > 1 ? 's' : '') . ' ago';
    if ($diff->h > 0) return $diff->h . ' hour' . ($diff->h > 1 ? 's' : '') . ' ago';
    if ($diff->i > 0) return $diff->i . ' minute' . ($diff->i > 1 ? 's' : '') . ' ago';
    
    return 'Just now';
}));

// Define routes
$routes = new RouteCollection();

// Public routes
$routes->add('landing', new Route('/', [
    '_controller' => function($request, $twig) {
        $flash = $_SESSION['flash'] ?? null;
        unset($_SESSION['flash']);
        
        return new Response($twig->render('pages/landing.html.twig', [
            'flash' => $flash
        ]));
    }
]));

$routes->add('login', new Route('/auth/login', [
    '_controller' => function($request, $twig) {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $password = $request->request->get('password');

            $dataService = new TicketFlow\Service\DataService();
            $users = $dataService->getUsers();
            $user = array_filter($users, fn($u) => $u['email'] === $email && $u['password'] === $password);

            if (!empty($user)) {
                $user = reset($user);
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'email' => $user['email']
                ];
                $_SESSION['flash'] = ['type' => 'success', 'message' => 'Welcome back! Login successful.'];
                header('Location: /dashboard');
                exit;
            } else {
                $_SESSION['flash'] = ['type' => 'error', 'message' => 'Invalid email or password. Please sign up first.'];
            }
        }

        $flash = $_SESSION['flash'] ?? null;
        unset($_SESSION['flash']);

        return new Response($twig->render('pages/auth/login.html.twig', [
            'flash' => $flash
        ]));
    }
]));

$routes->add('signup', new Route('/auth/signup', [
    '_controller' => function($request, $twig) {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $password = $request->request->get('password');
            $confirmPassword = $request->request->get('confirmPassword');

            $errors = [];

            if ($password !== $confirmPassword) {
                $errors[] = 'Passwords do not match';
            }

            $dataService = new TicketFlow\Service\DataService();
            $users = $dataService->getUsers();
            $existingUser = array_filter($users, fn($u) => $u['email'] === $email);

            if (!empty($existingUser)) {
                $errors[] = 'User already exists. Please login instead.';
            }

            if (empty($email) || empty($password)) {
                $errors[] = 'Please fill all fields';
            }

            if (strlen($password) < 6) {
                $errors[] = 'Password must be at least 6 characters';
            }

            if (empty($errors)) {
                $newUser = [
                    'id' => uniqid(),
                    'email' => $email,
                    'password' => $password,
                    'createdAt' => date('c')
                ];

                $users[] = $newUser;
                $dataService->saveUsers($users);

                $_SESSION['user'] = [
                    'id' => $newUser['id'],
                    'email' => $newUser['email']
                ];
                $_SESSION['flash'] = ['type' => 'success', 'message' => 'Account created successfully! Welcome to TicketFlow.'];

                header('Location: /dashboard');
                exit;
            } else {
                $_SESSION['flash'] = ['type' => 'error', 'message' => implode('<br>', $errors)];
            }
        }

        $flash = $_SESSION['flash'] ?? null;
        unset($_SESSION['flash']);

        return new Response($twig->render('pages/auth/signup.html.twig', [
            'flash' => $flash
        ]));
    }
]));

$routes->add('logout', new Route('/auth/logout', [
    '_controller' => function() {
        session_destroy();
        $_SESSION['flash'] = ['type' => 'info', 'message' => 'You have been logged out successfully.'];
        header('Location: /');
        exit;
    }
]));

// Protected routes
$routes->add('dashboard', new Route('/dashboard', [
    '_controller' => function($request, $twig) {
        if (!isset($_SESSION['user'])) {
            header('Location: /auth/login');
            exit;
        }

        $dataService = new TicketFlow\Service\DataService();
        $tickets = $dataService->getTickets();
        $activities = $dataService->getActivities();

        $stats = [
            'total' => count($tickets),
            'open' => count(array_filter($tickets, fn($t) => $t['status'] === 'open')),
            'inProgress' => count(array_filter($tickets, fn($t) => $t['status'] === 'in_progress')),
            'closed' => count(array_filter($tickets, fn($t) => $t['status'] === 'closed')),
            'high' => count(array_filter($tickets, fn($t) => $t['priority'] === 'high')),
            'medium' => count(array_filter($tickets, fn($t) => $t['priority'] === 'medium')),
            'low' => count(array_filter($tickets, fn($t) => $t['priority'] === 'low')),
        ];

        $recentActivities = array_slice($activities, 0, 4);

        $flash = $_SESSION['flash'] ?? null;
        unset($_SESSION['flash']);

        return new Response($twig->render('pages/dashboard.html.twig', [
            'user' => $_SESSION['user'],
            'stats' => $stats,
            'recentActivities' => $recentActivities,
            'flash' => $flash,
            'current_page' => 'dashboard'
        ]));
    }
]));

$routes->add('tickets', new Route('/tickets', [
    '_controller' => function($request, $twig) {
        if (!isset($_SESSION['user'])) {
            header('Location: /auth/login');
            exit;
        }

        $dataService = new TicketFlow\Service\DataService();
        $allTickets = $dataService->getTickets();
        
        $filter = $request->query->get('filter', 'all');
        $search = $request->query->get('search', '');

        // Apply filters
        $tickets = $allTickets;
        if ($filter !== 'all') {
            $tickets = array_filter($tickets, function($ticket) use ($filter) {
                if (in_array($filter, ['open', 'in_progress', 'closed'])) {
                    return $ticket['status'] === $filter;
                }
                return $ticket['priority'] === $filter;
            });
        }

        // Apply search
        if (!empty($search)) {
            $tickets = array_filter($tickets, function($ticket) use ($search) {
                return stripos($ticket['title'], $search) !== false || 
                       stripos($ticket['description'], $search) !== false;
            });
        }

        $tickets = array_values($tickets);

        $flash = $_SESSION['flash'] ?? null;
        unset($_SESSION['flash']);

        return new Response($twig->render('pages/tickets/index.html.twig', [
            'user' => $_SESSION['user'],
            'tickets' => $tickets,
            'filter' => $filter,
            'search' => $search,
            'flash' => $flash,
            'current_page' => 'tickets'
        ]));
    }
]));

$routes->add('tickets_create', new Route('/tickets/create', [
    '_controller' => function($request, $twig) {
        if (!isset($_SESSION['user'])) {
            header('Location: /auth/login');
            exit;
        }

        if ($request->isMethod('POST')) {
            $ticketData = [
                'id' => uniqid(),
                'title' => $request->request->get('title'),
                'description' => $request->request->get('description', ''),
                'status' => $request->request->get('status', 'open'),
                'priority' => $request->request->get('priority', 'medium'),
                'assignee' => $request->request->get('assignee', 'Unassigned'),
                'createdAt' => date('c'),
                'updatedAt' => date('c'),
                'createdBy' => $_SESSION['user']['email']
            ];

            // Validate
            $errors = [];
            if (empty($ticketData['title'])) {
                $errors[] = 'Title is required';
            }
            if (empty($ticketData['status'])) {
                $errors[] = 'Status is required';
            }

            if (empty($errors)) {
                $dataService = new TicketFlow\Service\DataService();
                $tickets = $dataService->getTickets();
                array_unshift($tickets, $ticketData);
                $dataService->saveTickets($tickets);

                // Add activity
                $activities = $dataService->getActivities();
                array_unshift($activities, [
                    'id' => uniqid(),
                    'action' => 'created',
                    'ticket' => $ticketData['title'],
                    'ticketId' => $ticketData['id'],
                    'user' => 'You',
                    'time' => date('c'),
                    'icon' => '➕'
                ]);
                $dataService->saveActivities($activities);

                $_SESSION['flash'] = ['type' => 'success', 'message' => 'Ticket created successfully!'];
                header('Location: /tickets');
                exit;
            } else {
                $_SESSION['flash'] = ['type' => 'error', 'message' => implode('<br>', $errors)];
            }
        }

        return new Response($twig->render('pages/tickets/form.html.twig', [
            'user' => $_SESSION['user'],
            'ticket' => null,
            'action' => 'Create',
            'current_page' => 'tickets'
        ]));
    }
]));

$routes->add('tickets_edit', new Route('/tickets/edit/{id}', [
    '_controller' => function($request, $twig, $id) {
        if (!isset($_SESSION['user'])) {
            header('Location: /auth/login');
            exit;
        }

        $dataService = new TicketFlow\Service\DataService();
        $tickets = $dataService->getTickets();
        $ticketIndex = array_search($id, array_column($tickets, 'id'));

        if ($ticketIndex === false) {
            $_SESSION['flash'] = ['type' => 'error', 'message' => 'Ticket not found'];
            header('Location: /tickets');
            exit;
        }

        $ticket = $tickets[$ticketIndex];

        if ($request->isMethod('POST')) {
            $updatedTicket = [
                'id' => $ticket['id'],
                'title' => $request->request->get('title', $ticket['title']),
                'description' => $request->request->get('description', $ticket['description']),
                'status' => $request->request->get('status', $ticket['status']),
                'priority' => $request->request->get('priority', $ticket['priority']),
                'assignee' => $request->request->get('assignee', $ticket['assignee']),
                'createdAt' => $ticket['createdAt'],
                'updatedAt' => date('c'),
                'createdBy' => $ticket['createdBy']
            ];

            // Validate
            $errors = [];
            if (empty($updatedTicket['title'])) {
                $errors[] = 'Title is required';
            }
            if (empty($updatedTicket['status'])) {
                $errors[] = 'Status is required';
            }

            if (empty($errors)) {
                $tickets[$ticketIndex] = $updatedTicket;
                $dataService->saveTickets($tickets);

                // Add activity
                $activities = $dataService->getActivities();
                array_unshift($activities, [
                    'id' => uniqid(),
                    'action' => 'updated',
                    'ticket' => $updatedTicket['title'],
                    'ticketId' => $updatedTicket['id'],
                    'user' => 'You',
                    'time' => date('c'),
                    'icon' => '✏️'
                ]);
                $dataService->saveActivities($activities);

                $_SESSION['flash'] = ['type' => 'success', 'message' => 'Ticket updated successfully!'];
                header('Location: /tickets');
                exit;
            } else {
                $_SESSION['flash'] = ['type' => 'error', 'message' => implode('<br>', $errors)];
            }
        }

        return new Response($twig->render('pages/tickets/form.html.twig', [
            'user' => $_SESSION['user'],
            'ticket' => $ticket,
            'action' => 'Edit',
            'current_page' => 'tickets'
        ]));
    }
]));

$routes->add('tickets_delete', new Route('/tickets/delete/{id}', [
    '_controller' => function($request, $twig, $id) {
        if (!isset($_SESSION['user'])) {
            header('Location: /auth/login');
            exit;
        }

        $dataService = new TicketFlow\Service\DataService();
        $tickets = $dataService->getTickets();
        $ticketIndex = array_search($id, array_column($tickets, 'id'));

        if ($ticketIndex !== false) {
            $ticket = $tickets[$ticketIndex];
            array_splice($tickets, $ticketIndex, 1);
            $dataService->saveTickets($tickets);

            // Add activity
            $activities = $dataService->getActivities();
            array_unshift($activities, [
                'id' => uniqid(),
                'action' => 'deleted',
                'ticket' => $ticket['title'],
                'ticketId' => $ticket['id'],
                'user' => 'You',
                'time' => date('c'),
                'icon' => '🗑️'
            ]);
            $dataService->saveActivities($activities);

            $_SESSION['flash'] = ['type' => 'success', 'message' => 'Ticket deleted successfully!'];
        } else {
            $_SESSION['flash'] = ['type' => 'error', 'message' => 'Ticket not found'];
        }

        header('Location: /tickets');
        exit;
    }
]));

// Route the request
$context = new RequestContext();
$context->fromRequest($request);
$matcher = new UrlMatcher($routes, $context);

try {
    $parameters = $matcher->match($request->getPathInfo());
    $controller = $parameters['_controller'];
    
    $response = call_user_func($controller, $request, $twig, $parameters);
} catch (Exception $e) {
    // Try matching again after normalizing trailing slash (helps when URL has an extra '/')
    try {
        $trimmedPath = rtrim($request->getPathInfo(), '/');
        if ($trimmedPath === '') {
            $trimmedPath = '/';
        }
        $parameters = $matcher->match($trimmedPath);
        $controller = $parameters['_controller'];
        $response = call_user_func($controller, $request, $twig, $parameters);
    } catch (Exception $e2) {
        if (isset($twig) && method_exists($twig, 'isDebug') && $twig->isDebug()) {
            $msg = "Page not found\n" . $e->getMessage() . "\n" . $e2->getMessage();
            $response = new Response(nl2br(htmlspecialchars($msg)), 404);
        } else {
            $response = new Response('Page not found', 404);
        }
    }
}

$response->send();