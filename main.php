<?php

function main(){

    //paths
    include __DIR__ . '/config/cfg.php'; //This Include the relative path in dynamic form of the cfg code in the current file wherever it is.
    include __DIR__ . '/func/analysis.php';
    include __DIR__ . '/func/clear.php';
    include __DIR__ . '/func/hangman.php';

    $running = true;

    //main loop
    while ($running) {

        //Initialization
        echo "...HANGMAN GAME...";
        echo "\n\n";

        echo "Your word have $word_length letters\n\n";

        hangman_sprite($attemps);
        echo "\n\n";

        echo "   " . $discovered_letters . "   ";
        echo "\n\n";

        //Validation
        $arr_result = validation($choosen_word, $discovered_letters, $attemps, $max_attemps);

        //Assign the returned values from the validation function
        $discovered_letters = $arr_result[0];
        $attemps = $arr_result[1];
        $max_attemps = $arr_result[2];

        sleep(1);
        clean_screen();

        //Final Message
        if ($attemps < $max_attemps && $discovered_letters == $choosen_word) {
            echo "CONGRATULATIONS!, YOU FIND THE WORD\n\n";

            $restart = readline("Do you want to keep playing ?(Y/n): ");
            $restart = strtolower($restart);
            echo "\n\n";
        
            if ($restart !== "y"){
                $running = false;
            }

            //Changing the word and empty cells
            $choosen_word = $words_arr[rand(0, (count($words_arr) - 1))];
            $choosen_word = strtolower($choosen_word);
            $word_length = strlen($choosen_word);
        
            $discovered_letters = str_pad("", $word_length, "_");

        }elseif ($attemps == $max_attemps) {
            echo "YOU LOSE!, TRY AGAIN.\n\n";
            $running = false;
        }
    }

    echo "The word is: $choosen_word \n\n";
    echo "You discovered: $discovered_letters \n\n";
}

main();

?>