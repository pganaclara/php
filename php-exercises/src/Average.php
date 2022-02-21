<?php

/**
 * Find the average number in a given array.
 *
 * @inheritDoc
 */
class Average {

  /**
   * Find average number in an array.
   *
   * @param array $numbers
   *   Receive the array to calculate a average number.
   *
   * @return float
   *   Return a value of a average number of the array
   */
  public static function findAverage(array $numbers): float {
    // Place your code here:
    $sum = 0.0;
    for ($i=0; $i < count($numbers); $i++) { 
      
      $sum+=$numbers[$i];
    }

    return $sum/count($numbers);
  }

}
