<?php

$numPeople = intval(readline());
$capacityElev = intval(readline());

$courses = ceil($numPeople / $capacityElev);

echo $courses;
