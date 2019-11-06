<?php
$n = intval(readline());
$p = intval(readline());

$mask = 1 << $p;
$mask = ~$mask;
echo  $n & $mask;