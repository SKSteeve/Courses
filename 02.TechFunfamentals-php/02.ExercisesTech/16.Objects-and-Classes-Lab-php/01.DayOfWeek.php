<?php

$dateStr = readline();
$date = new DateTime($dateStr);

echo $date->format('l') . PHP_EOL;