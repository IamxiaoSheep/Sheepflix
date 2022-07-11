<?php

class FormSanitizer {

  public static function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    //Option of just trimming the ends of the string instead of all the spaces
    //$inputText = trim($inputText);
    $inputText = strtolower($inputText);
    $inputText = ucfirst($inputText);
    return $inputText;

  }
  public static function sanitizeFormUserName($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
  }
  public static function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
  }
  public static function sanitizeFormEmail($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
  }
}

?>