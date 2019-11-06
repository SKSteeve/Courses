<?php

function raised($num,$power)
{
    $pow = $num;
    for($i = 1; $i < $power; $i++)
    {
        $num *= $pow;
    }
    echo $num;
}

raised(intval(readline()), intval(readline()));