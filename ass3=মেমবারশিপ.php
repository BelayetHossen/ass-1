<?php 
    $user= 7;

    switch($user){
        case 1:
            echo "You are now <strong>Silver</strong> member";
            break;

         case 5:
             echo "You are now <strong>Gold</strong> member";
            break;

         case 10:
             echo "You are now <strong>Plutinum</strong> member";
            break;

        default:
            echo "You need to try more";
            break;

    }
