<?php

namespace TicketFlow\Service;

class DataService
{
  private string $dataDir;

  public function __construct()
  {
    $this->dataDir = __DIR__ . '/../../data/';
    $this->ensureDataDirectory();
  }

  private function ensureDataDirectory(): void
  {
    if (!is_dir($this->dataDir)) {
      mkdir($this->dataDir, 0755, true);
    }
  }

  public function getUsers(): array
  {
    return $this->getData('users.json', []);
  }

  public function saveUsers(array $users): void
  {
    $this->saveData('users.json', $users);
  }

  public function getTickets(): array
  {
    return $this->getData('tickets.json', $this->getDemoTickets());
  }

  public function saveTickets(array $tickets): void
  {
    $this->saveData('tickets.json', $tickets);
  }

  public function getActivities(): array
  {
    return $this->getData('activities.json', $this->getDemoActivities());
  }

  public function saveActivities(array $activities): void
  {
    $this->saveData('activities.json', $activities);
  }

  private function getData(string $filename, array $default = []): array
  {
    $filepath = $this->dataDir . $filename;
    if (!file_exists($filepath)) {
      return $default;
    }

    $data = file_get_contents($filepath);
    return json_decode($data, true) ?: $default;
  }

  private function saveData(string $filename, array $data): void
  {
    $filepath = $this->dataDir . $filename;
    file_put_contents($filepath, json_encode($data, JSON_PRETTY_PRINT));
  }

  private function getDemoTickets(): array
  {
    return [
      [
        'id' => '1',
        'title' => 'Login Issue - Unable to access account',
        'description' => 'Users are reporting they cannot login to their accounts. Getting authentication errors.',
        'status' => 'open',
        'priority' => 'high',
        'assignee' => 'Sarah Chen',
        'createdAt' => date('c', time() - 2 * 60 * 60),
        'updatedAt' => date('c', time() - 30 * 60),
        'createdBy' => 'system'
      ],
      [
        'id' => '2',
        'title' => 'Payment Gateway Integration',
        'description' => 'Integrate new payment gateway for international transactions.',
        'status' => 'in_progress',
        'priority' => 'high',
        'assignee' => 'Mike Ross',
        'createdAt' => date('c', time() - 5 * 60 * 60),
        'updatedAt' => date('c', time() - 1 * 60 * 60),
        'createdBy' => 'system'
      ],
      [
        'id' => '3',
        'title' => 'Mobile App Crash on iOS',
        'description' => 'App crashes when navigating to profile section on iOS devices.',
        'status' => 'open',
        'priority' => 'medium',
        'assignee' => 'Alex Johnson',
        'createdAt' => date('c', time() - 8 * 60 * 60),
        'updatedAt' => date('c', time() - 2 * 60 * 60),
        'createdBy' => 'system'
      ],
      [
        'id' => '4',
        'title' => 'Update Documentation',
        'description' => 'Update API documentation with new endpoints and examples.',
        'status' => 'closed',
        'priority' => 'low',
        'assignee' => 'You',
        'createdAt' => date('c', time() - 24 * 60 * 60),
        'updatedAt' => date('c', time() - 3 * 60 * 60),
        'createdBy' => 'system'
      ]
    ];
  }

  private function getDemoActivities(): array
  {
    return [
      [
        'id' => '1',
        'action' => 'created',
        'ticket' => 'Login Issue - Unable to access account',
        'ticketId' => '1',
        'user' => 'Sarah Chen',
        'time' => date('c', time() - 2 * 60 * 60),
        'icon' => '➕'
      ],
      [
        'id' => '2',
        'action' => 'updated',
        'ticket' => 'Payment Gateway Integration',
        'ticketId' => '2',
        'user' => 'Mike Ross',
        'time' => date('c', time() - 1 * 60 * 60),
        'icon' => '✏️'
      ]
    ];
  }
}
