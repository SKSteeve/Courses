<?php

$input = readline();

$pattName = '/(?<name>(?<=%)[A-Z][a-z]+(?=%))/';
$pattProduct = '/(?<product>(?<=<)\w+(?=>))/';
$pattCount = '/(?<count>(?<=\|)[0-9]+(?=\|))/';
$pattPrice = '/(?<price>[\d]+[.]?[\d]+(?=\$))/';

$totalIncome = 0;

while($input != "end of shift")
{
    if(preg_match($pattName, $input, $nameMat)
        && preg_match($pattProduct, $input, $productMat)
        && preg_match($pattCount, $input, $countMat)
        && preg_match($pattPrice, $input, $priceMat) == 1)
    {
        $totalPrice = number_format($countMat['count'] * $priceMat['price'], 2, '.', '');
        echo $nameMat['name'] . ": " . $productMat['product'] . " - " . $totalPrice . PHP_EOL;

        $totalIncome += $totalPrice;
    }

    $input = readline();
}

echo "Total income: " . number_format($totalIncome, 2, '.', '');
