<?php

use PHPUnit\Framework\TestCase;

/**
 * Test class of the CelsiusToFahrenheit class.
 *
 * @inheritDoc
 */
class CelsiusToFahrenheitTest extends TestCase {

  /**
   * Test data provider.
   *
   * @return array
   *   $celsius
   */
  public function provider() {
    return [
        [0, 32],
        [25, 77],
        [1, 33.8],
    ];
  }

  /**
   * Tests the convertCelsiusToFahrenheit function.
   *
   * @dataProvider provider
   */
  public function testConvertCelsiusToFahrenheit($celsius, $expected_in_fahrenheit): void {
    $this->assertEquals(
          $expected_in_fahrenheit,
          CelsiusToFahrenheit::convertCelsiusToFahrenheit($celsius)
      );
  }

}
