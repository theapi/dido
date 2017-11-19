<?php

namespace Drupal\dido\Event;

interface InputEventInterface {

  const NAME = 'dido.input';

  /**
   * getName() is deprecated in Symfony 3 (Drupal 8.4)
   * @return string
   */
  static public function name();
}
