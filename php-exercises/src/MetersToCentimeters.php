<?php

/**
 * Convert meters to centimeters.
 *
 * @inheritDoc
 */
class MetersToCentimeters {

  /**
   * Convert meters to centimeters.
   *
   * @param float $meter
   *   Receive an float value of the meters to be converted to centimeters.
   *
   * @return float
   *   Return a float value converted in centimeters
   */
  public static function convertMetersToCentimeters(float $meter) : float {
    // Place your code here:
    return $meter*100;
  }

}
