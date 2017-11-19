<?php

namespace Drupal\dido\Event;

class InputEvent extends Event Implements InputEventInterface {

  /**
   * @inheritDoc
   */
  static public function name() {
    return self::NAME;
  }

}
