<?php

function passLength($password)
{
    //char length >= 6 && <= 10
    $charLength = false;
    if (strlen($password) >= 6 && strlen($password) <= 10) {
        $charLength = true;
    }
    return $charLength;
}
function passLettersAndDigitsOnly($password)
{
    //must consist only letters and digits
    $onlyLettersAndDigits = true;
    for ($i = 0; $i < strlen($password); $i++) {
        $charIndex = ord($password[$i]);
        if ($charIndex > 122 || $charIndex < 97 && $charIndex > 90 || $charIndex < 65 && $charIndex > 57 || $charIndex < 48) {
            $onlyLettersAndDigits = false;
            return $onlyLettersAndDigits;
        }
    }
    return $onlyLettersAndDigits;
}
function passAtLeastTwoDigits($password)
{
    //digits at least 2
    $atLeastTwoDigits = false;
    $countDigits = 0;
    for ($i = 0; $i < strlen($password); $i++)
    {
        $charIndex = ord($password[$i]);
        if ($charIndex >= 48 && $charIndex <= 57)
        {
            $countDigits++;
        }
    }
    if ($countDigits >= 2)
    {
        $atLeastTwoDigits = true;
    }
    return $atLeastTwoDigits;
}


//GlobalFunction
function passIsCorrect($password)
{
    // check if pass is correct
    if (passLength($password) && passAtLeastTwoDigits($password) && passLettersAndDigitsOnly($password))
    {
        echo "Password is valid";
        return;
    }
    if(!passLength($password))
    {
        echo "Password must be between 6 and 10 characters" . PHP_EOL;
    }
    if(!passLettersAndDigitsOnly($password))
    {
        echo "Password must consist only of letters and digits" . PHP_EOL;
    }
    if(!passAtLeastTwoDigits($password))
    {
        echo "Password must have at least 2 digits" . PHP_EOL;
    }
}

passIsCorrect(readline());