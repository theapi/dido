<?php

namespace Drupal\dido\Event;

class OutputEvent extends Event Implements OutputEventInterface {

  /**
   * @inheritDoc
   */
  static public function name() {
    return self::NAME;
  }

}
