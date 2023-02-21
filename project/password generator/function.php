<?php
function password_generator($pwd_length){
    $original = '0abQd1efhAijk3_l&ZBm8Nno^pqY@r9s2FVDCtu7vw*xyz!#$%E_GHIJcK%L4M6gOPR*STU5WX';
    $output = '';
    for($i=0;$i<$pwd_length;$i++){
        $random    = mt_rand(0,35);//rand()
        $character = $original[$random];
        $output   .= $character;
    }
    return $output;
}


