<?php

include_once "db.inc.php";


function getAge($userDob){
    $dob = new DateTime($userDob);
    $now = new DateTime();
    $difference = $now->diff($dob);

    $age = $difference->y;

    return $age;
}

function getTime() {
    
}
