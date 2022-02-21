<?php

use PHPUnit\Framework\TestCase;

/**
 * Test class of the Average class.
 *
 * @inheritDoc
 */
class AverageTest extends TestCase {

  /**
   * Test data provider.
   *
   * @return array
   *   Return the average value of the array
   */
  public function provider(): array {
    return [
        [[2, 2, 2, 2], 2],
        [[10, 25, 15, 32, 85, 5], 28.666666666666668],
        [[1, 2, 5, 3, 8], 3.8],
    ];
  }

  /**
   * Tests the findAverage function.
   *
   * @dataProvider provider
   */
  public function testAverage($numbers, $expected_in_average): void {
    $this->assertEquals(
          $expected_in_average,
          Average::findAverage($numbers)
      );
  }

}
