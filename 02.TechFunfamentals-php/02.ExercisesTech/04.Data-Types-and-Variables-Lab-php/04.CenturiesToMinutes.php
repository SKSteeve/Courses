<?php

$centuries = intval(readline());

$years = $centuries * 100;
$days = intval($centuries * 36524.22);
$hours = $days * 24;
$mins = $hours * 60;

echo "$centuries centuries = $years years = $days days = $hours hours = $mins minutes";