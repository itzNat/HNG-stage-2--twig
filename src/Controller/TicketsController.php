<?php
// src/Controller/TicketsController.php
namespace TicketFlow\Controller;

use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;
use TicketFlow\Service\DataService;

class TicketsController extends BaseController
{
  private DataService $dataService;

  public function __construct()
  {
    $this->dataService = new DataService();
  }

  public function index(Request $request, Environment $twig)
  {
    $tickets = $this->dataService->getTickets();
    $filter = $request->query->get('filter', 'all');
    $search = $request->query->get('search', '');

    // Apply filters
    if ($filter !== 'all') {
      $tickets = array_filter($tickets, function ($ticket) use ($filter) {
        if (in_array($filter, ['open', 'in_progress', 'closed'])) {
          return $ticket['status'] === $filter;
        }
        return $ticket['priority'] === $filter;
      });
    }

    // Apply search
    if (!empty($search)) {
      $tickets = array_filter($tickets, function ($ticket) use ($search) {
        return stripos($ticket['title'], $search) !== false ||
          stripos($ticket['description'], $search) !== false;
      });
    }

    $flash = $_SESSION['flash'] ?? null;
    unset($_SESSION['flash']);

    return $this->render($twig, 'pages/tickets/index.html.twig', [
      'user' => $this->getUser(),
      'tickets' => array_values($tickets),
      'filter' => $filter,
      'search' => $search,
      'flash' => $flash
    ]);
  }

  public function create(Request $request, Environment $twig)
  {
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
        'createdBy' => $this->getUser()['email']
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
        $tickets = $this->dataService->getTickets();
        array_unshift($tickets, $ticketData);
        $this->dataService->saveTickets($tickets);

        // Add activity
        $activities = $this->dataService->getActivities();
        array_unshift($activities, [
          'id' => uniqid(),
          'action' => 'created',
          'ticket' => $ticketData['title'],
          'ticketId' => $ticketData['id'],
          'user' => 'You',
          'time' => date('c'),
          'icon' => '➕'
        ]);
        $this->dataService->saveActivities($activities);

        $_SESSION['flash'] = ['type' => 'success', 'message' => 'Ticket created successfully!'];
        $this->redirect('/tickets');
      } else {
        $_SESSION['flash'] = ['type' => 'error', 'message' => implode('<br>', $errors)];
      }
    }

    return $this->render($twig, 'pages/tickets/form.html.twig', [
      'user' => $this->getUser(),
      'ticket' => null,
      'action' => 'Create'
    ]);
  }

  public function edit(Request $request, Environment $twig, string $id)
  {
    $tickets = $this->dataService->getTickets();
    $ticketIndex = array_search($id, array_column($tickets, 'id'));

    if ($ticketIndex === false) {
      $_SESSION['flash'] = ['type' => 'error', 'message' => 'Ticket not found'];
      $this->redirect('/tickets');
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
        $this->dataService->saveTickets($tickets);

        // Add activity
        $activities = $this->dataService->getActivities();
        array_unshift($activities, [
          'id' => uniqid(),
          'action' => 'updated',
          'ticket' => $updatedTicket['title'],
          'ticketId' => $updatedTicket['id'],
          'user' => 'You',
          'time' => date('c'),
          'icon' => '✏️'
        ]);
        $this->dataService->saveActivities($activities);

        $_SESSION['flash'] = ['type' => 'success', 'message' => 'Ticket updated successfully!'];
        $this->redirect('/tickets');
      } else {
        $_SESSION['flash'] = ['type' => 'error', 'message' => implode('<br>', $errors)];
      }
    }

    return $this->render($twig, 'pages/tickets/form.html.twig', [
      'user' => $this->getUser(),
      'ticket' => $ticket,
      'action' => 'Edit'
    ]);
  }

  public function delete(string $id)
  {
    $tickets = $this->dataService->getTickets();
    $ticketIndex = array_search($id, array_column($tickets, 'id'));

    if ($ticketIndex !== false) {
      $ticket = $tickets[$ticketIndex];
      array_splice($tickets, $ticketIndex, 1);
      $this->dataService->saveTickets($tickets);

      // Add activity
      $activities = $this->dataService->getActivities();
      array_unshift($activities, [
        'id' => uniqid(),
        'action' => 'deleted',
        'ticket' => $ticket['title'],
        'ticketId' => $ticket['id'],
        'user' => 'You',
        'time' => date('c'),
        'icon' => '🗑️'
      ]);
      $this->dataService->saveActivities($activities);

      $_SESSION['flash'] = ['type' => 'success', 'message' => 'Ticket deleted successfully!'];
    } else {
      $_SESSION['flash'] = ['type' => 'error', 'message' => 'Ticket not found'];
    }

    $this->redirect('/tickets');
  }
}
