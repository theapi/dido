<?php

namespace Drupal\dido\Payload;

class Payload implements PayloadInterface {

  /**
   * The key value pairs of the payload.
   * @var array
   */
  protected $data = [];

  /**
   * @inheritDoc
   */
  public function setValue($key, $value) {
    $this->data[$key] = $value;

    return $this;
  }

  /**
   * @inheritDoc
   */
  public function hasValue($key) {
    return isset($this->data[$key]);
  }

  /**
   * @inheritDoc
   */
  public function getValue($key) {
    if (!isset($this->data[$key])) {
      throw new \InvalidArgumentException(
        t('Payload key %key is not set', ['%key' => $key])
      );
    }

    return $this->data[$key];
  }

  /**
   * @inheritDoc
   */
  public function getValues() {
    return $this->data;
  }

}
