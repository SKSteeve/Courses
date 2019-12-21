<?php

$strRemove = readline();
$strToCheck = readline();

while(true)
{
    $oldStr = $strToCheck;
    $strToCheck = str_replace($strRemove, '', $strToCheck);

    if ($oldStr == $strToCheck)
    {
        echo $strToCheck;
        break;
    }
}