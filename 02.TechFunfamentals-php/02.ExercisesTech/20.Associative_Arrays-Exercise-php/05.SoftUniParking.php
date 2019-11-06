<?php

$numCommands = intval(readline());
$register = [];
for($i = 0; $i < $numCommands; $i++)
{
    $tokens = explode(' ', readline());
    $command = $tokens[0];
    $name = $tokens[1];
    switch ($command)
    {
        case 'register':
            $licenseNum = $tokens[2];
            if(key_exists($name, $register))
            {
                echo "ERROR: already registered with plate number " . $register[$name] . PHP_EOL;
            }
            else
            {
                $register[$name] = $licenseNum;
                echo "$name registered $licenseNum successfully" . PHP_EOL;
            }
            break;
        case 'unregister':
            if(!key_exists($name, $register))
            {
                echo "ERROR: user $name not found" . PHP_EOL;
            }
            else
            {
                unset($register[$name]);
                echo "$name unregistered successfully" . PHP_EOL;
            }
            break;
    }
}
foreach ($register as $name => $license)
{
    echo "$name => $license". PHP_EOL;
}