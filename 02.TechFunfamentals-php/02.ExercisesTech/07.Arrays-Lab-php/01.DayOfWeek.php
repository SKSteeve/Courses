<?php

$arr = ["Monday" , "Tuesday" , "Wednesday" , "Thursday" , "Friday" , "Saturday" , "Sunday"];

$input = intval(readline());
if($input >= 1 && $input <= 7)
{
    echo $arr[$input - 1];
}
else
{
    echo "Invalid Day!";
}