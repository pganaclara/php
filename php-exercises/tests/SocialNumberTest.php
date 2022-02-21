<?php

use PHPUnit\Framework\TestCase;

/**
 * Test class of the SocialNumber class.
 *
 * @inheritDoc
 */
class SocialNumberTest extends TestCase {

  /**
   * Test data provider.
   *
   * @return bool
   *   true
   *   false
   */
  public function provider(): array {
    return [
        ["08636481694", TRUE],
        ["11111111111", FALSE],
        ["61445455065", FALSE],
        ["21608135080", TRUE],
    ];
  }

  /**
   * Tests the Social Number function.
   *
   * @dataProvider provider
   */
  public function testSocialNumber($socialNumber, $expected_socialNumber): void {
    $this->assertEquals(
          $expected_socialNumber,
          SocialNumber::ValidateSocialNumber($socialNumber)
      );
  }

}
