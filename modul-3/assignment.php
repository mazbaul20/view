<?php
//1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

function isEven($num){
    if($num%2==0){
        return true;
    }else{
        return false;
    }
}

$number = 954;
if(isEven($number)){
    echo "{$number} is an Even Number";
}else{
    echo"{$number} is an Odd Number";
}
echo PHP_EOL;
// 2. 1+2+3...…….100  Write a loop to calculate the summation of the series

function Series(){
    $result=0;
    for($i=1;$i<=100;$i++){
        $result+=$i;
    }
    return "1+2+3....100 = ".$result;
 }
 echo Series();