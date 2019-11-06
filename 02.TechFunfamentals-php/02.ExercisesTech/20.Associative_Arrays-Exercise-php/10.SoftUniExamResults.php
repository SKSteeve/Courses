<?php

$users = [];
$submissions = [];

$command = readline();
while ($command != "exam finished")
{
    $arr = explode("-", $command);
    $name = $arr[0];
    $lang = $arr[1];
    if($lang == "banned")
    {
        unset($users[$name]);
    }
    else
    {
        $points = $arr[2];
        if (!key_exists($name, $users))
        {
            $users[$name] = $points;
        }
        else
        {
            if ($points > $users[$name])
            {
                $users[$name] = $points;
            }
        }
        if (!key_exists($lang, $submissions))
        {
            $submissions[$lang] = 1;
        }
        else
        {
            $submissions[$lang]++;
        }
    }
    $command = readline();
}

ksort($users);
arsort($users);
ksort($submissions);
arsort($submissions);
echo "Results:" . PHP_EOL;
foreach ($users as $user => $points)
{
    echo "$user | $points" . PHP_EOL;
}
echo "Submissions:" . PHP_EOL;
foreach ($submissions as $lang => $count)
{
    echo "$lang - $count" . PHP_EOL;
}