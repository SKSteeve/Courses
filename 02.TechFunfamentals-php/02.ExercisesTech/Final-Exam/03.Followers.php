<?php

$password = readline();
$lastGroup = strrpos($password, '<');

echo substr($password, $lastGroup + 1) . PHP_EOL;
