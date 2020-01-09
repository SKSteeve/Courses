<form>
    <textarea rows="5" cols="50" name="input"></textarea>
    <input type="submit">
</form>

<?php

if (isset($_GET['input']))
{
    $str = htmlspecialchars(strtolower($_GET['input']));
    $pattern = '/\w+/';
    preg_match_all($pattern, $str, $matches);
    $words = $matches[0];

    $wordsCount = [];

    for ($i = 0; $i < count($words); $i++)
    {
        $w1 = $words[$i];
        if(key_exists($w1, $wordsCount))
        {
            $wordsCount[$w1]++;
            continue;
        }
        $wordsCount[$w1] = 1;
    }

    echo "<table border='2'>";
    foreach ($wordsCount as $word => $value)
    {
        echo "<tr><td>$word</td><td>$value</td></tr>";
    }
    echo "</table>";
}

?>