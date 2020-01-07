<?php

$input = readline();

$register = [];

while ($input != "login")
{
    $items = explode(" -> ", $input);
    $user = $items[0];
    $password = $items[1];

    $register[$user] = $password;

    $input = readline();
}

$tryLog = readline();
$count = 0;
while($tryLog != "end")
{
    $items = explode(" -> ", $tryLog);
    $user = $items[0];
    $password = $items[1];

    if(key_exists($user, $register) && $password == $register[$user])
    {
        echo "$user: logged in successfully" . PHP_EOL;
    }
    else
    {
        echo "$user: login failed" . PHP_EOL;
        $count++;
    }

    $tryLog = readline();
}
echo "unsuccessful login attempts: $count";

