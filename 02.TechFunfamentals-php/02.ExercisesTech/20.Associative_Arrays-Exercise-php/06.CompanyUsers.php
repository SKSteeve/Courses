<?php

$input = readline();
$companiesAndIDs = [];
while($input != "End")
{
    $tokens = explode(' -> ', $input);
    $companyName = $tokens[0];
    $id = $tokens[1];
    if(key_exists($companyName, $companiesAndIDs))
    {
        if(!in_array($id, $companiesAndIDs[$companyName]))
        {
            $companiesAndIDs[$companyName][] = $id;
        }
    }
    else
    {
        $companiesAndIDs[$companyName][] = $id;
    }
    $input = readline();
}
ksort($companiesAndIDs);
foreach ($companiesAndIDs as $key => $value)
{
    echo $key . PHP_EOL;
    foreach ($value as $id)
    {
        echo "-- " . $id . PHP_EOL;
    }
}