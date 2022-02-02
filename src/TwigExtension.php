<?php

namespace Drupal\twig_kint;

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
    return 'twig_kint.twig_extension';
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