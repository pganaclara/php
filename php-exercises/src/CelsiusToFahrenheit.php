<?php

/**
 * Convert celsius to fahrenheit.
 *
 * @inheritDoc
 */
class CelsiusToFahrenheit {

  /**
   * Convert celsius to fahrenheit.
   *
   * @param float $temperature
   *   Receive a temperature celsius.
   *
   * @return float
   *   Return a temperature in fahrenheit.
   */
  public static function convertCelsiusToFahrenheit(float $temperature): float {
    // Place your code here:
    return (($temperature*9/5)+32);
  }

}
