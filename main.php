<?php

function main(){

    //paths
    include __DIR__ . '/config/cfg.php'; //This Include the relative path in dynamic form of the cfg code in the current file wherever it is.
    include __DIR__ . '/func/analysis.php';
    include __DIR__ . '/func/clear.php';

    //main loop
    while ($attemps < MAX_ATTEMPS && $discovered_letters != $choosen_word) {
        //Initialization
        echo "...HANGMAN GAME...";
        echo "\n\n";

        echo "Your word have $word_length letters\n\n";

        echo "   " . $discovered_letters . "   ";
        echo "\n\n";

        //Validation
        $arr_result = validation($choosen_word, $discovered_letters, $attemps, MAX_ATTEMPS);

        //Assign the returned values from the validation function
        $discovered_letters = $arr_result[0];
        $attemps = $arr_result[1];
        $arr_result[2] = MAX_ATTEMPS;

        sleep(1);
        clean_screen();
    }

    //Final Message
    if ($attemps < MAX_ATTEMPS) {
        echo "CONGRATULATIONS!, YOU FIND THE WORD\n\n";
    }else {
        echo "YOU LOSE!, TRY AGAIN.\n\n";
    }

    echo "The word is: $choosen_word \n";
    echo "You discovered: $discovered_letters \n";
}

main();

?>