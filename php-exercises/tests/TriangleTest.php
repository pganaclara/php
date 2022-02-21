<?php

use PHPUnit\Framework\TestCase;

/**
 * Test class of the Triangle class.
 *
 * @inheritDoc
 */
class TriangleTest extends TestCase {

  /**
   * Test data provider.
   *
   * @return string
   *   Return the type o the triangle
   */
  public function provider(): array {
    return [
        [[2, 2, 2], "Equilateral"],
        [[5, 5, 4], "Isosceles"],
        [[3, 2, 5], "Scalene"],
    ];
  }

  /**
   * Tests the triangleType function.
   *
   * @dataProvider provider
   */
  public function testAverage($numbers, $expected_in_triangle): void {
    $this->assertEquals(
          $expected_in_triangle,
          Triangle::triangleType($numbers)
      );
  }

}
