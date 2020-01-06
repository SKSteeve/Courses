<?php

$str = explode(', ', readline());

$arrTowns = [];
for($i = 0; $i < count($str); $i++)
{
    if($i % 2 == 0)
    {
        if(!key_exists($str[$i], $arrTowns))
        {
            $arrTowns[$str[$i]] = $str[$i+1];
        }
        else
        {
            $arrTowns[$str[$i]] += $str[$i+1];
        }
    }
}

foreach ($arrTowns as $town => $val)
{
    echo "$town => $val" . PHP_EOL;
}