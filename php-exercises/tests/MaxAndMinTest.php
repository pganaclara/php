<?php

use PHPUnit\Framework\TestCase;

/**
 * Test class of the MaxAndMin class.
 *
 * @inheritDoc
 */
class MaxAndMinTest extends TestCase {

  /**
   * Test data provider.
   *
   * @return array
   *   $number
   */
  public function provider(): array {
    return [
        [[0, 32, -5, 10], [32, -5]],
        [[25, 77, 100, 3, 95], [100, 3]],
        [[1, 33, 9], [33, 1]],
    ];
  }

  /**
   * Tests the findMaxAndMin function.
   *
   * @dataProvider provider
   */
  public function testMaxAndMin($number, $expected_in_max_min): void {
    $this->assertEquals(
          $expected_in_max_min,
          MaxAndMin::findMaxAndMin($number)
      );
  }

}
