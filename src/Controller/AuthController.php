<?php
// src/Controller/AuthController.php
namespace TicketFlow\Controller;

use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;
use TicketFlow\Service\DataService;

class AuthController extends BaseController
{
  private DataService $dataService;

  public function __construct()
  {
    $this->dataService = new DataService();
  }

  public function login(Request $request, Environment $twig)
  {
    if ($request->isMethod('POST')) {
      $email = $request->request->get('email');
      $password = $request->request->get('password');

      $users = $this->dataService->getUsers();
      $user = array_filter($users, fn($u) => $u['email'] === $email && $u['password'] === $password);

      if (!empty($user)) {
        $user = reset($user);
        $_SESSION['user'] = [
          'id' => $user['id'],
          'email' => $user['email']
        ];
        $_SESSION['flash'] = ['type' => 'success', 'message' => 'Welcome back! Login successful.'];
        $this->redirect('/dashboard');
      } else {
        $_SESSION['flash'] = ['type' => 'error', 'message' => 'Invalid email or password. Please sign up first.'];
      }
    }

    $flash = $_SESSION['flash'] ?? null;
    unset($_SESSION['flash']);

    return $this->render($twig, 'pages/auth/login.html.twig', [
      'flash' => $flash
    ]);
  }

  public function signup(Request $request, Environment $twig)
  {
    if ($request->isMethod('POST')) {
      $email = $request->request->get('email');
      $password = $request->request->get('password');
      $confirmPassword = $request->request->get('confirmPassword');

      $errors = [];

      if ($password !== $confirmPassword) {
        $errors[] = 'Passwords do not match';
      }

      $users = $this->dataService->getUsers();
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
        $this->dataService->saveUsers($users);

        $_SESSION['user'] = [
          'id' => $newUser['id'],
          'email' => $newUser['email']
        ];
        $_SESSION['flash'] = ['type' => 'success', 'message' => 'Account created successfully! Welcome to TicketFlow.'];

        $this->redirect('/dashboard');
      } else {
        $_SESSION['flash'] = ['type' => 'error', 'message' => implode('<br>', $errors)];
      }
    }

    $flash = $_SESSION['flash'] ?? null;
    unset($_SESSION['flash']);

    return $this->render($twig, 'pages/auth/signup.html.twig', [
      'flash' => $flash
    ]);
  }

  public function logout()
  {
    session_destroy();
    $_SESSION['flash'] = ['type' => 'info', 'message' => 'You have been logged out successfully.'];
    $this->redirect('/');
  }
}
