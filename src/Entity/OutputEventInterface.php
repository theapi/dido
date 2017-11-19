<?php

namespace Drupal\dido\Event;

interface OutputEventInterface {

  const NAME = 'dido.output';

  /**
   * getName() is deprecated in Symfony 3 (Drupal 8.4)
   * @return string
   */
  static public function name();
}
