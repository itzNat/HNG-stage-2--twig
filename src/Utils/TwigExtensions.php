<?php
// src/Utils/TwigExtensions.php
namespace TicketFlow\Utils;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TwigExtensions extends AbstractExtension
{
  public function getFilters()
  {
    return [
      new TwigFilter('time_ago', [$this, 'timeAgo']),
    ];
  }

  public function timeAgo($dateString)
  {
    $date = new \DateTime($dateString);
    $now = new \DateTime();
    $diff = $now->diff($date);

    if ($diff->y > 0) return $diff->y . ' year' . ($diff->y > 1 ? 's' : '') . ' ago';
    if ($diff->m > 0) return $diff->m . ' month' . ($diff->m > 1 ? 's' : '') . ' ago';
    if ($diff->d > 0) return $diff->d . ' day' . ($diff->d > 1 ? 's' : '') . ' ago';
    if ($diff->h > 0) return $diff->h . ' hour' . ($diff->h > 1 ? 's' : '') . ' ago';
    if ($diff->i > 0) return $diff->i . ' minute' . ($diff->i > 1 ? 's' : '') . ' ago';

    return 'Just now';
  }
}
