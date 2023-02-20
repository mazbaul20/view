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


function contains_only_letters_and_whitespace($str) {
    return preg_match('/[a-zA-Z\s]/',$str);
}
$str1 = "Hello world";
$str2 = "219";
if(contains_only_letters_and_whitespace($str1)){
    echo "String 1 contains only letters and whitespace\n";
}else{
    echo "String 1 contains non-letter or non-whitespace characters\n";
}
if(contains_only_letters_and_whitespace($str2)){
    echo "String 2 contains only letters and whitespace\n";
}else{
    echo "String 2 contains non-letter or non-whitespace characters\n";
}




