<?php

/**
 *
 */
class Person {

  // Place your code here:
  private $name;
  private $age;
  private $gender;

  
  public function __construct($name, $age, $gender) {
   // Place your code here:
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
  }

  /**
     * Gets the value of name.
     *
     * @return mixed
     */
  public function getName() {
    // Place your code here:
    return $this->name;
  }

  /**
     * Gets the value of age.
     *
     * @return mixed
     */
  public function getAge() {
    // Place your code here:
    return $this->age;
  }

    /**
     * Gets the value of gender.
     *
     * @return mixed
     */
    public function getGender() 
    {
          // Place your code here:
          return $this->gender;
    }

  /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
  public function setName($name) {
    // Place your code here:
    $this->name = $name;

    return $this;
  }

  /**
     * Sets the value of age.
     *
     * @param mixed $age the age
     *
     * @return self
     */
  public function setAge($age) {
    // Place your code here:
    $this->age = $age;

    return $this;
  }

  /**
     * Sets the value of gender.
     *
     * @param mixed $gender the gender
     *
     * @return self
     */
  public function setGender($gender) {
    // Place your code here:
    $this->gender = $gender;

    return $this;
  }

  /**
   * Adds 1 to age
   * 
   * @return self
   */
  public function birthday() {
    // Place your code here:
    return ++$this->age;
  }

}
