<?php
$words_arr = ["Python", "Php", "Java", "Javascript"];
$choosen_word = $words_arr[rand(0, (count($words_arr) - 1))]; //Select randomly the word for the game
$choosen_word = strtolower($choosen_word); //Set the word in lower case
$word_length = strlen($choosen_word); //Size of the word

//Empty Cells
$discovered_letters = str_pad("", $word_length, "_"); //Create a string with the same length of the word

//Attemps
$max_attemps =  6;
$attemps = 0;

?>