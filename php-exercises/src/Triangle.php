<?php

/**
 * Find a type of a triangle based on a given side length.
 *
 * @inheritDoc
 */
class Triangle {

  /**
   * Return a type of a triangle.
   *
   * @param array $numbers
   *   Receive the values of the length of the sides of the triangle.
   *
   * @return string
   *   Return the type of the triangle:
   *    scalene, equilateral or isosceles based on the lengths of the sides.
   */
  public static function triangleType(array $numbers): String {
    // Place your code here:
    if($numbers[0] === $numbers[1]){
      if($numbers[0] === $numbers[2]){
        return 'Equilateral';
      } else {
        return 'Isosceles';
      }
    } else {
      return 'Scalene';
    }
  }
}
