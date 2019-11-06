<?php

function repeatStr($str,$count)
{
    for($i = 0; $i<$count; $i++)
    {
        echo $str;
    }
}
repeatStr(readline(),intval(readline()));