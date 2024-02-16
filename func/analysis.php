<?php

function validation($choosen_word, $discovered_letters, $attemps, $max_attemps){

    //Player letter input
    echo "\n";
    $play_letter = readline("Type a letter: ");
    echo "\n";
    $play_letter = strtolower($play_letter);

    if (str_contains($choosen_word, $play_letter)) { //Validate if the letter is in the string
        $offset = 0;

        //Find the position of the letter in the string
        while (($letter_pos = strpos($choosen_word, $play_letter, $offset)) !== false) {
            $discovered_letters[$letter_pos] = $play_letter; //Replace the found letter in the empty cells
            $offset = $letter_pos + 1;
        }
    }else {
        $attemps++;

        echo "Incorrect letter, you have: " . (MAX_ATTEMPS - $attemps) . " attemps\n";
        sleep(2);
    }

    return [$discovered_letters, $attemps, $max_attemps]; //Arry with the values of the function
}

?>