<?php

function num($number)
{
    $arr = [ "h","e","i","i","o" ];
    if ($number >= 0) {
        echo $arr[$number];
        num($number - 1);
    }
}
num(4);




?>
