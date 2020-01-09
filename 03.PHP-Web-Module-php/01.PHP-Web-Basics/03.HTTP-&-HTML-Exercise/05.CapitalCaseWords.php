<?php

if(isset($_GET['text']))
{
    $str = htmlspecialchars($_GET['text']);
    $patt = '/\b[A-Z]+\b/';

    preg_match_all($patt, $str, $matches);
    $words = $matches[0];
    $words = implode(', ', $words);
}
?>

<form>
    <textarea rows="10" name="text"><?= $words ?></textarea><br>
    <input type="submit" value="Extract">
</form>


