<?php
// src/Controller/BaseController.php
namespace TicketFlow\Controller;

use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;

class BaseController
{
  protected function render(Environment $twig, string $template, array $data = []): string
  {
    return $twig->render($template, $data);
  }

  protected function json($data): string
  {
    return json_encode($data);
  }

  protected function redirect(string $url): void
  {
    header("Location: $url");
    exit;
  }

  protected function isAuthenticated(): bool
  {
    return isset($_SESSION['user']);
  }

  protected function getUser()
  {
    return $_SESSION['user'] ?? null;
  }
}
