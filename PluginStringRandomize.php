<?php
class PluginStringRandomize{
  public function randomize($length = 10, $characters = 'abcdefghijklmnopqrstuvxyz'){
    $randomString = ''; 
    for ($i = 0; $i < $length; $i++) { 
      $index = rand(0, strlen($characters) - 1); 
      $randomString .= $characters[$index]; 
    }
    return $randomString;
  }
}
