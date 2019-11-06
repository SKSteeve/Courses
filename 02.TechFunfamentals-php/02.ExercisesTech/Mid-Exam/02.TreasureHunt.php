<?php

$loot = explode('|', readline());
$input = readline();
while ($input != "Yohoho!")
{
    $items = explode(' ', $input);
    $command = $items[0];

    switch ($command)
    {
        case "Loot":
            for($i = 1; $i < count($items); $i++)
            {
                if(!in_array($items[$i], $loot))
                {
                    array_splice($loot, 0, 0, $items[$i]);
                }
            }
            break;
        case "Drop":
            $index = $items [1];
            if($index >= 0 && $index < count($loot))
            {
                $removedInArr = array_splice($loot, $index, 1);
                $removed = $removedInArr[0];
                $loot[] = $removed;
            }
            break;
        case "Steal":
            $lastCountToRemove = $items[1];
            $countLoot = count($loot);
            $indexToStart = $countLoot - $lastCountToRemove;
            if($indexToStart < 0)
            {
                $indexToStart = 0;
            }
            $removedItems = array_splice($loot, $indexToStart, $lastCountToRemove);
            echo implode(', ', $removedItems).PHP_EOL;
            break;
    }
    $input = readline();
}
$count = count($loot);
if($count == 0)
{
    echo "Failed treasure hunt.";
    return;
}
else
{
    $sum = 0;
    for ($i=0; $i<$count; $i++)
    {
        $sum += strlen($loot[$i]);
    }
    $avgTGain = number_format($sum / $count, 2, '.', '');

    echo "Average treasure gain: $avgTGain pirate credits.";
}

