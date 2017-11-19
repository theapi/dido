<?php

namespace Drupal\dido\Event;

use Drupal\dido\Payload\PayloadInterface;

class OutputEvent extends Event Implements OutputEventInterface {

  /**
   * @inheritDoc
   */
  static public function name() {
    return self::NAME;
  }

  /**
   * @inheritDoc
   */
  public function setPayload(PayloadInterface $payload) {
    $this->payload = $payload;

    return $this;
  }

  /**
   * @inheritDoc
   */
  public function getPayload() {
    if ($this->payload instanceof PayloadInterface) {
      return $this->payload;
    }

    throw new \InvalidArgumentException (
      t('Payload is not set')
    );
  }

}
