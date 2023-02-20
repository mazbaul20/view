<?php
$students = array(
    array(
        "Name" => "Rahim",
        "Age" => 24,
        "Country" => "Bangladesh"
),
    array(
        "Name" => "Shimu",
        "Age" => 25,
        "Country" => "Bangladesh"
    ),
    array(
        "Name" => "Shafi",
        "Age" => 26,
        "Country"  => "London"
    ),
    array(
        "Name" => "Sabbir",
        "Age" => 23,
        "Country" => "Wales"
    )
);

foreach($students as $student){
    foreach($student as $key=>$value){
        echo $key." - ".$value."\n";
    }
}






