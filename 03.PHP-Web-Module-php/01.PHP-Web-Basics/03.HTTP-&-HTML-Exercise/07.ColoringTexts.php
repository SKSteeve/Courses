<form>
    <input type="text" name="input"><br>
    <input type="submit" value="Color text">
</form>

<?php

if (isset($_GET['input']))
{
    $string = htmlspecialchars($_GET['input']);
    $string = str_replace(' ', '', $string);
    $arr = str_split($string);

    for ($i = 0; $i < count($arr); $i++)
    {
        if(ord($arr[$i]) % 2 == 0)
        {
            echo "<span style='color: red'>$arr[$i]</span> ";
        }
        else
        {
            echo "<span style='color: blue'>$arr[$i]</span> ";
        }
    }
}


