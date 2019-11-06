<?php
function findElement(&$arr, $n)
{
    // Forming prefix sum array from 0
    $prefixSum = array_fill(0, $n, NULL);
    $prefixSum[0] = $arr[0];
    for ($i = 1; $i < $n; $i++)
    {
        $prefixSum[$i] = $prefixSum[$i - 1] + $arr[$i];
    }

    // Forming suffix sum array from n-1
    $suffixSum = array_fill(0, $n, NULL);
    $suffixSum[$n - 1] = $arr[$n - 1];
    for ($i = $n - 2; $i >= 0; $i--)
    {
        $suffixSum[$i] = $suffixSum[$i + 1] + $arr[$i];
    }
    // Find the point where prefix
    // and suffix sums are same.
    for ($i = 1; $i < $n - 1; $i++)
    {
        if ($prefixSum[$i] == $suffixSum[$i])
        {
            return $arr[$i];
        }
    }

    return -1;
}

$arr = explode(' ' , readline());
$n = sizeof($arr);
echo findElement($arr, $n);

?>