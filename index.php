<?php
/* $students = array(
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
} */


// $file_path = './users.csv';
// $new_file_path = "./user.csv";
// if(file_exists($file_path)){
//     rename($file_path, $new_file_path);
//     echo 'File renamed';
// }else{
//     echo 'File does not exist';
// }

$filename = "./user.csv";

date_default_timezone_set('asia/dhaka');
$time = date("d.M.Y h:i:sa");
$time = serialize($time);
// file_put_contents($filename,$time,FILE_APPEND | LOCK_EX);

$data = file_get_contents($filename);
$result = unserialize($data);

print_r($result);


