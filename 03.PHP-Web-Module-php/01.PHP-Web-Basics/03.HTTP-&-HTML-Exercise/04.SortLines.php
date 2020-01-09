<?php

if (isset($_GET['lines']))
{
    $arr = array_map('trim', explode(PHP_EOL, htmlspecialchars($_GET['lines'])));
    $arr = array_filter($arr);
    asort($arr);

    $sortedLines = implode("\n", $arr);
}
?>

<form>
    <textarea rows="10" name="lines"><?= $sortedLines ?></textarea><br>
    <input type="submit" value="Sort">
</form>
