<?php

function clean_screen(){
    //Determine which OS have the user and clean the screen
    if (PHP_OS === "WINNT") {
        system("cls");
    }else {
        system("clear");
    }
}

?>