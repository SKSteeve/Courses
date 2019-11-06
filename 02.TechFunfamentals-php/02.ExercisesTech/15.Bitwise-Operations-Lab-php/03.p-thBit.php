<?php
$n = intval(readline());
$p = intval(readline());

$n = $n >> $p;
echo  $n & 1;