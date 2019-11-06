<?php

$password = strrev(readline());
$newPass = readline();
$counter = 0;
while ($newPass != $password)
{
    $counter++;
    if($counter >= 4)
    {
        echo "User " . strrev($password) . " blocked!";
        return;
    }
    echo "Incorrect password. Try again." . PHP_EOL;
    $newPass = readline();
}
if($password == $newPass)
{
    echo "User " . strrev($password) . " logged in.";
}
