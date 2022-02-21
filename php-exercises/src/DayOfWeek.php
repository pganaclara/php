<?php

/**
 * Return a day of the week of a given integer.
 *
 * @inheritDoc
 */
class DayOfWeek {

  /**
   * Return the day of the week.
   *
   * @param int $number
   *   Receive a integer.
   *
   * @return string
   *   Return a day of the week.
   */
  public static function whatDayOfWeek($number): string {
    // Place your code here:
    switch ($number) {
      case 1:
        return 'Sunday';
        break;
      
      case 2:
        return 'Monday';
        break;
      
      case 3:
        return 'Tuesday';
        break;

      case 4:
        return 'Wednesday';
        break;

      case 5:
        return 'Thursday';
        break;

      case 6:
        return 'Friday';
        break;

      case 7:
        return 'Saturday';
        break;
    }
  }

}
