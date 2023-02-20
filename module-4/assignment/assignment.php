<?php
//1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
function sort_by_length($arr){
    usort($arr,function($a,$b){return (strlen($a) > strlen($b)) ? "1" : "0";});
    return $arr;
}

$country = array("Bangladesh","Nepal", "Canada", "Bhutan", "Pakistan", "Soudi Arab","Afghanistan");
$arr_sort = sort_by_length($country);
print_r($arr_sort);
echo PHP_EOL;

//2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function concatenate_two_strings($str1,$str2){
    $str1.=$str2;
    return $str1;
}
$string1 = "Hello";
$string2 = "Sir";
$concate = concatenate_two_strings($string1,$string2);
echo $concate;
echo PHP_EOL;

//3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function remove_fl_element($arr){
    array_shift($arr);
    array_pop($arr);
    return $arr;
}
$array = ['Moinul','Mazbaul','Khalek','Mamun','Jannat','Jibon','Mehedi'];
$arrView = remove_fl_element($array);
print_r($arrView);
echo PHP_EOL;

//4.Write a PHP function to check if a string contains only letters and whitespace.

function contains_only_letters_and_whitespace($str) {
    if(preg_match('/^[a-zA-Z\s]+$/',$str)){
        return "contains only letters and whitespace\n";
    }
    return "contains non-letter or non-whitespace characters\n";
}
$str1 = "Hello world ";
echo contains_only_letters_and_whitespace($str1);

//5.Write a PHP function to find the second largest number in an array of numbers.

function Find_secend_largest_number($arr){
    $count = count($arr);
    rsort($arr);
    for($i=0;$i<$count;$i++){
        if($arr[$i] < $arr[0]){
            return $arr[1];
        }
    }
    return null;
}

$arr = array(8,19,27,87,92,99,89);
$assignm_5 = Find_secend_largest_number($arr);
echo "Secend largest number = ".$assignm_5;

