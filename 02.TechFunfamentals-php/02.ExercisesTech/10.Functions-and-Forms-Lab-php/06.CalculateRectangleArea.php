<?php

function rectangleArea($width,$length)
{
    $area = $width * $length;
    echo $area;
}
rectangleArea(intval(readline()), intval(readline()));