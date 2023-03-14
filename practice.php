<?php
//    function cals(int ...$num){
//            echo array_sum($num);
//    }
//
//cals(3,3,2,9,4,2);

// echo md5('mazbaul');
$students = array(
    array(
        'fname'=>'Shahin',
        'lname'=>'Ahmed',
        'age'=>12,
        'class'=>7,
        'roll'=>11
    ),
    array(
        'fname'=>'Rahim',
        'lname'=>'Ahmed',
        'age'=>11,
        'class'=>7,
        'roll'=>13
    ),
    array(
        'fname'=>'Nikhil',
        'lname'=>'Chandra',
        'age'=>12,
        'class'=>7,
        'roll'=>14
    )
);
$filename = "./file.txt";

$data = json_encode($students);
file_put_contents($filename,"$data");

$data = file_get_contents($filename);
$data = json_decode($data,true);

print_r($data);