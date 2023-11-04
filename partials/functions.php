<?php 

function generatePassword($password_length) {
  $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_+=';
  $password = '';

  for ($i = 0; $i < $password_length; $i++) {
    $index_random = rand(0, strlen($characters) - 1);
    $char = $characters[$index_random];
    $password .= $char;
  }

  return $password;
}

?>