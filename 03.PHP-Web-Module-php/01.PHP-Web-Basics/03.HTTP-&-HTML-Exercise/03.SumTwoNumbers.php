<?php

if (isset($_GET['num1']) && isset($_GET['num2']))
{
    $num1 = htmlspecialchars($_GET['num1']);
    $num2 = htmlspecialchars($_GET['num2']);
    echo "$num1 + $num2 = " . ($num1 + $num2) . PHP_EOL;
}
?>

<form>
    <div>First Number:</div>
    <input type="number" name="num1">
    <div>Second Number:</div>
    <input type="number" name="num2">
    <div><input type="submit"></div>
</form>
