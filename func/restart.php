<?php

function restart_loop() {
    $restart = readline("Do you want to keep playing ?(Y/n): ");
    $restart = strtolower($restart);
    echo "\n\n";
        
    if ($restart !== "y"){
        return false;
    }

    return true;
}

?>