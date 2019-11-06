<?php

$pounds = floatval(readline());
$toDollars = $pounds * 1.31;

echo number_format($toDollars,3,'.','');