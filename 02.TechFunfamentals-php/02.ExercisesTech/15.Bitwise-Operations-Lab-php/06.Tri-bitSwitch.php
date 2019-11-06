<?php

$num = intval(readline());
$position = intval(readline());

$mask = 7;
$mask = $mask << $position;

echo $num ^ $mask;