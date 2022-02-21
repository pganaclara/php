<?php

use PHPUnit\Framework\TestCase;

/**
 * Test class for the convertMetersToCentimeters function.
 *
 * @inheritDoc
 */
class MetersToCentimetersTest extends TestCase {

  /**
   * Test data provider.
   *
   * @return array
   *   $meters
   */
  public function provider() {
    return [
        [0, 0],
        [1, 100],
        [10, 1000],
    ];
  }

  /**
   * Tests the convertMetersToCentimeters function.
   *
   * @dataProvider provider
   */
  public function testConvertMetersToCentimeters($meters, $expected_in_centimeters):void {
    $this->assertEquals(
          $expected_in_centimeters,
          MetersToCentimeters::convertMetersToCentimeters($meters)
      );
  }

}
