<?php

//Hangman Sprite

function hangman_sprite($attemps = 0){
    
    switch ($attemps) {
        case 1:
            echo "
            ̣_____
            |   |
            O   |
                |
                |
                |
                |
            ____|____";
            break;
        
        case 2:
            echo "
            _____
             |  |
             O  |
             |  |
                |
                |
                |
                |
            ____|____";
            break;
        
        case 3:
            echo "
            _____
             |  |
             O  |
             |  |
            / \ |
                |
                |
                |
            ____|____";
            break;

        case 4:
            echo "
            _____
             |  |
             O  |
             |  |
            / \ |
             |  |
                |
                |
            ____|____";
            break;

        case 5:
            echo "
            _____
             |  |
             O  |
             |  |
            / \ |
             |  |
            /   |
                |
            ____|____";
            break;
        
        case 6:
            echo "
            _____
             |  |
             O  |
             |  |
            / \ |
             |  |
            / \ |
                |
            ____|____";
            break;

        default:
            echo "
            _____
             |  |
                |
                |
                |
                |
                |
                |
            ____|____";
            break;
    }
}

?>