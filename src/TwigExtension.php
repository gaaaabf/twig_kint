<?php

namespace Drupal\twig_ext;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Kint;

/**
 * Twig PHP Extension
 */
class TwigExtension extends AbstractExtension {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'total_control.twig_extension';
  }

  /**
   * {@inheritdoc}
   */
  public function getFunctions() {
    return [
      new TwigFunction('dx', [$this, 'dx']),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function dx($text) {
    \Kint::dump($text);
  }
}