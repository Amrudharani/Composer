<?php
namespace Amrudha;
error_reporting(0);

class Palindrome {
	static function calculatestr($str){
$myArray = array(); // php array
$myArray = str_split($str); //split the array
$len = sizeof($myArray); // get the size of array
$newString = "";

for ($i = $len; $i >= 0; $i--) {
	$newString.=$myArray[$i];
}

if ($str == $newString) {
	echo "Output: " . $str . " is a palindrome";
} else {
	echo "Output: " . $str . " is not a palindrome";

}
}
}
