<?php
$Students = [
    [
        "Name" => "Rahim",
        "Age" => 24,
        "Country" => "Bangladesh"
    ],

    [
        "Name" => "Shimu",
        "Age" => 25,
        "Country" => "Bangladesh"
    ],

    [
        "Name" => "Shafi",
        "Age" => 26,
        "Country"  => "London"
    ],

    [
        "Name" => "Sabbir",
        "Age" => 23,
        "Country" => "Wales"
    ]
];

foreach($Students as $student){
    foreach($student as $key=>$value){
        echo $key." - ".$value."\n";
    }
}



