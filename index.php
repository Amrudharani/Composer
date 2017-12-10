<?php
require_once __DIR__ . '/vendor/autoload.php';

  $str = isset($argv[1]) ? $argv[1] : null;

  if (isset($str)) {
    Amrudha\Palindrome::calculatestr($str);
  }
  else {
    echo "Please provide a String!\n";
  }

