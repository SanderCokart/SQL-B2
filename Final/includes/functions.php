<?php

include_once "db.inc.php"; //access to datebase

//function to calcuate someones age
function getAge($userDob){
    $dob = new DateTime($userDob);
    $now = new DateTime();
    $difference = $now->diff($dob);

    $age = $difference->y;

    return $age;
}

// function to calculate someone's time on earth
function getTime($userDob) {
    $dob = new DateTime($userDob);
    $now = new DateTime();
    $difference = $dob->diff($now);


    return $difference->y." Years<br>".$difference->m." Months<br>".$difference->d." Days";
}

//function to calculate the amount of days, hours, minutes and seconds someone has spend on earth.
function getDays($userDob){
    $now = time();
    $past = strtotime($userDob);

    $difference = $now - $past;


    return  'Days: '. floor($difference/(60*60*24)).
            '<br>Hours: '. floor($difference/(60*60)).
            '<br>Minutes: '. floor($difference / (60)).
            '<br>Seconds: '. $difference;
}
