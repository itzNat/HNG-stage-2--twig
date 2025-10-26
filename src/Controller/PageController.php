<?php
// src/Controller/PageController.php
namespace TicketFlow\Controller;

use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;

class PageController extends BaseController
{
    public function landing(Request $request, Environment $twig)
    {
        $flash = $_SESSION['flash'] ?? null;
        unset($_SESSION['flash']);

        return $this->render($twig, 'pages/landing.html.twig', [
            'flash' => $flash
        ]);
    }
}