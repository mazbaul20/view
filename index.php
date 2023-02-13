<?php
    //GPA and grade point using switch statement
   /*  $mark = 80;
    switch($mark){
        case($mark>100):
            echo"you are wrong!";
            break;
        case($mark>=80):
            echo"Grade A+, GPA 4.0";
            break;
        case($mark>=75):
            echo"Grade A, GPA 3.75";
            break;
        case($mark>=70):
            echo"Grade A-, GPA 3.5";
            break;
        case($mark>=65):
            echo"Grade B+, GPA 3.25";
            break;
        case($mark>=60):
            echo"Grade A+, GPA 3.0";
            break;
        case($mark>=55):
            echo"Grade B-, GPA 2.75";
            break;
        case($mark>=50):
            echo"Grade C+, GPA 2.50";
            break;
        case($mark>=45):
            echo"Grade C, GPA 2.25";
            break;
        case($mark>=40):
            echo"Grade D, GPA 2.00";
            break;
        default:
            echo"Failled";
    }
 */

 function Series(){
    $result=0;
    for($i=1;$i<=100;$i++){
        $result+=$i;
    }
    return "1+2+3....100 = ".$result;
 }
 echo Series();