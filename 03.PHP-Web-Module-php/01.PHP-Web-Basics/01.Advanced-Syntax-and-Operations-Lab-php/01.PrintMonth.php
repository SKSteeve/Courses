<?php

$arr = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

$num = readline();

if($num < 1 || $num > 12)
{
    echo "Invalid Month!";
}
else
{
    echo $arr[$num-1];
}
