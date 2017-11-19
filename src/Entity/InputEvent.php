<?php

namespace Drupal\dido\Event;

use Drupal\dido\Payload\PayloadInterface;

class InputEvent extends Event Implements InputEventInterface {

  /**
   * @var PayloadInterface
   */
  protected $payload;

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
