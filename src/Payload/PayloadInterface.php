<?php

namespace Drupal\dido\Payload;

interface PayloadInterface {

  /**
   * Add a key value pair to the payload.
   * @param $key string
   * @param $value string
   *
   * @return self
   */
  public function setValue($key, $value);

  /**
   * Check if a value, identified by key, has been set.
   * @param $key
   *
   * @return boolean
   */
  public function hasValue($key);

  /**
   * Get a single value for the payload identified by key.
   * @param $key
   *
   * @return string
   */
  public function getValue($key);

  /**
   * Get the array of key value pairs.
   * @return array
   */
  public function getValues();



}
