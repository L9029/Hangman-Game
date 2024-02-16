<?php
$words_arr = ["Python"];
$choosen_word = $words_arr[rand(0, (count($words_arr) - 1))]; //Select randomly the word for the game
$choosen_word = strtolower($choosen_word); //Set the word in lower case
$word_length = strlen($choosen_word); //Size of the word

$discovered_letters = str_pad("", $word_length, "_"); //Create a string with the same length of the word

//Attemps
define("MAX_ATTEMPS", 6);
$attemps = 0;

?>