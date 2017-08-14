<?php

namespace App\Recipe;

trait HasAttributes
{
  protected $atts = [];

  public function __construct($atts = [])
  {
    $this->atts = (array) $atts;
  }

  public function __isset($key)
  {
    return isset($this->atts[$key]);
  }

  public function __set($key, $value)
  {
    $this->atts[$key] = $value;
  }

  public function set($key, $value)
  {
    $this->__set($key, $value);
  }

  public function __get($key)
  {
    if (array_key_exists($key, $this->atts)) {
      return $this->atts[$key];
    }
  }

  public function get($key)
  {
    return $this->__get($key);
  }
}
