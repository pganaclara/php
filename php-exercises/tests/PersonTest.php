<?php

use PHPUnit\Framework\TestCase;

/**
 * Functional test for class person.
 */
class PersonTest extends TestCase {

  /**
   * {@inheritDoc}
   */
  public function setUp(): void {
    $this->Person = new Person("John Doe", 37, "Male");
  }

  /**
   * Test of the constructor, verify if has the expected 3 parameters.
   */
  public function testConstructor() {
    // $this->Person = new Person("John Doe", 37, "Male");
    $this->assertEquals("John Doe", $this->Person->getName());
    $this->assertEquals(37, $this->Person->getAge());
    $this->assertEquals("Male", $this->Person->getGender());
  }

  /**
   * Test if the birthday method returns age +1.
   */
  public function testBirthday() {
    $this->assertEquals(($this->Person->getAge() + 1), $this->Person->birthday());
  }

}
