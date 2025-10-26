<?php
// src/Controller/DashboardController.php
namespace TicketFlow\Controller;

use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;
use TicketFlow\Service\DataService;

class DashboardController extends BaseController
{
  private DataService $dataService;

  public function __construct()
  {
    $this->dataService = new DataService();
  }

  public function index(Request $request, Environment $twig)
  {
    $tickets = $this->dataService->getTickets();
    $activities = $this->dataService->getActivities();

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

    return $this->render($twig, 'pages/dashboard.html.twig', [
      'user' => $this->getUser(),
      'stats' => $stats,
      'recentActivities' => $recentActivities,
      'flash' => $flash
    ]);
  }
}
