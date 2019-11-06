<?php

$width = intval(readline());
$length = intval(readline());
$cakeSize = $width * $length;
$pieces = 0;

while($cakeSize > 0)
{
    $command = readline();
    if($command == "STOP")
    {
        break;
    }
    $command = intval($command);
    $cakeSize = $cakeSize - $command;
}
if($cakeSize <= 0)
{
    echo "No more cake left! You need " . abs($cakeSize) . " pieces more.";
}
else
{
    echo $cakeSize . " pieces are left.";
}

