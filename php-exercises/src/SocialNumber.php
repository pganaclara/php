<?php

/**
 * Validate the social number.
 *
 * @inheritDoc
 */
class SocialNumber {

  /**
   * Return boolean if the social number is valid or not.
   *
   * @param string $socialNumber
   *   Receive a string with the social number do be validated.
   *
   * @return bool
   *   Return a bool with the validation
   */
  public static function validateSocialNumber(string $socialNumber): bool {
    // Place your code here:

    $socialNumber = str_split($socialNumber);

    $socialNumber = array_map(
      function($value) { return (int)$value; },
      $socialNumber
  );

    $count = array_count_values($socialNumber);
    if(count($count) === 1){
      return false;
    }

    $sum = 0;
    $rest = 0.0;
    for ($i=0; $i < 9; $i++) { 
      $sum += $socialNumber[$i]*(10 - $i);
    }

    $rest = ($sum * 10)%11;
    if($rest === 10) $rest = 0;

    $sum2 = 0;
    $rest2 = 0.0;
    for ($j=0; $j < 10; $j++) { 
      $sum2 += $socialNumber[$j]*(11 - $j);
    }

    $rest2 = ($sum2 * 10)%11;
    if($rest2 === 10) $rest2 = 0;
  
  if(($rest === $socialNumber[9]) and ($rest2 === $socialNumber[10])){
      return true;
    } else {
      return false;
    }
  }
}