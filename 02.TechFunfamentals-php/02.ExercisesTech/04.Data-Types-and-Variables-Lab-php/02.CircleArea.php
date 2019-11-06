<?php

$radius = floatval(readline());

$area = pi() * $radius * $radius;
echo number_format($area , 12 , '.' , '');