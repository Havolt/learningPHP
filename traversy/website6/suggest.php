<?php

$people[] = "Nero";
$people[] = "Fred";
$people[] = "John";
$people[] = "Steve";
$people[] = "Susan";
$people[] = "Alex";
$people[] = "Cait";
$people[] = "Mark";
$people[] = "Alan";
$people[] = "Barney";
$people[] = "Henry";
$people[] = "Barry";
$people[] = "Rupert";
$people[] = "Lenny";
$people[] = "Zerena";
$people[] = "Brendan";
$people[] = "Chris";
$people[] = "Dante";


//Get Quesry String

$q = $_REQUEST['q'];

$suggestion = "";

//Get Suggestions
if($q !== ''){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ''){
                $suggestion = $person;
            }else{
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No suggestion" : $suggestion;



