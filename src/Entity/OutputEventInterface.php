<?php

namespace Drupal\dido\Event;

use Drupal\dido\Payload\PayloadInterface;

interface OutputEventInterface {

  const NAME = 'dido.output';

  /**
   * getName() is deprecated in Symfony 3 (Drupal 8.4)
   * @return string
   */
  static public function name();

  /**
   * The data that was input into the system.
   * @param \Drupal\dido\Payload\PayloadInterface $payload
   *
   * @return self
   */
  public function setPayload(PayloadInterface $payload);

  /**
   * The payload.
   * @return \Drupal\dido\Payload\PayloadInterface
   *
   * @throws \InvalidArgumentException
   */
  public function getPayload();

}
