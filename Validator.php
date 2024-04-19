<?php

class Validator {

  // Pure method - tāpēc static
  public static function string($data, $min = 0, $max = INF) {
   $data = trim($data);

    return  is_string($data)
            && strlen($data) >= $min
            && strlen($data) <= $max;
  }
  
  public static function number($data, $min = 0, $max = INF) {
    $data = trim($data);
 
     return  is_numeric($data)
             && $data >= $min
             && $data <= $max;
   }

   public static function email($value) {
      return filter_var($value, FILTER_VALIDATE_EMAIL);
   }

   public static function password($value) {
      // Define validation criteria
      $minLength = 8;
      $maxLength = 20;
      
      // Check if password meets all criteria
      return strlen($value) >= $minLength && 
            strlen($value) <= $maxLength &&
            preg_match('/[A-Z]/', $value) &&
            preg_match('/[a-z]/', $value) &&
            preg_match('/\d/', $value) &&
            preg_match('/[^a-zA-Z0-9]/', $value);
      }
}