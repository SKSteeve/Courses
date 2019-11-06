<?php

$pirateShipStatus = array_map('intval', explode('>', readline()));
$warShipStatus =  array_map('intval', explode('>', readline()));
$maxHealthSection = intval(readline());

$input = readline();
while ($input != "Retire")
{
    $items = explode(' ', $input);
    $command = $items[0];

    switch ($command)
    {
        case "Fire":
            $index = $items[1];
            $dmg = $items[2];
            if($index >= 0 && $index < count($warShipStatus))
            {
                $warShipStatus[$index] = $warShipStatus[$index] - $dmg;
                if($warShipStatus[$index] <= 0)
                {
                    echo "You won! The enemy ship has sunken.";
                    return;
                }
            }
            break;
        case "Defend":
            $startIndex = $items[1];
            $endIndex = $items[2];
            $dmg = $items[3];
            if($startIndex >= 0 && $startIndex < count($pirateShipStatus) && $endIndex >= 0 && $endIndex < count($pirateShipStatus) && $startIndex <= $endIndex)
            {
                for($i = $startIndex; $i <= $endIndex; $i++)
                {
                    $pirateShipStatus[$i] = $pirateShipStatus[$i] - $dmg;
                    if($pirateShipStatus[$i] <= 0)
                    {
                        echo "You lost! The pirate ship has sunken.";
                        return;
                    }
                }
            }
            break;
        case "Repair":
            $index = $items[1];
            $health = $items[2];
            if($index >= 0 && $index < count($pirateShipStatus))
            {
                $pirateShipStatus[$index] = $pirateShipStatus[$index] + $health;
                if($pirateShipStatus[$index] >= $maxHealthSection)
                {
                    $pirateShipStatus[$index] = $maxHealthSection;
                }
            }
            break;
        case "Status":
            $countNeedRepair = 0;
            $minPercent = $maxHealthSection * 0.2;
            for($i = 0; $i < count($pirateShipStatus); $i++)
            {
                if($pirateShipStatus[$i] < $minPercent)
                {
                   $countNeedRepair++;
                }
            }
            echo $countNeedRepair . " sections need repair." . PHP_EOL;
            break;
    }
    $input = readline();
}
$sumPirateShip = 0;
for($i = 0; $i < count($pirateShipStatus); $i++)
{
    $sumPirateShip += $pirateShipStatus[$i];
}

$sumWarship = 0;
for($i = 0; $i < count($warShipStatus); $i++)
{
    $sumWarship += $warShipStatus[$i];
}

echo "Pirate ship status: $sumPirateShip" . PHP_EOL;
echo "Warship status: $sumWarship";