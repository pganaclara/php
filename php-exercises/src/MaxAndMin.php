<?php

/**
 * Find the max and min values in the a given array.
 *
 * @inheritDoc
 */
class MaxAndMin {

  /**
   * Find max a min values in an array.
   *
   * @param array $number
   *   Receive an array to find a max and min values.
   *
   * @return array
   *   Return an array with max and min values of the array
   */
  public static function findMaxAndMin(array $number): array {
    // Place your code here:
    return $result = array (max($number), min($number));
  }

}
