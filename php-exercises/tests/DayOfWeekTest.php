<?php

use PHPUnit\Framework\TestCase;

/**
 * Test class of the DayOfWeek class.
 *
 * @inheritDoc
 */
class DayOfWeekTest extends TestCase {

  /**
   * Test data provider.
   *
   * @return array
   *   $number
   */
  public function provider() {
    return [
        [1, "Sunday"],
        [2, "Monday"],
        [3, "Tuesday"],
    ];
  }

  /**
   * Tests the dayOfWeek function.
   *
   * @dataProvider provider
   */
  public function testDayOfWeek($number, $expected_day): void {
    $this->assertEquals(
          $expected_day,
          DayOfWeek::WhatDayOfWeek($number)
      );
  }

}
