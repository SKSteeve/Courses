<form action="">
    Categories: <input type="text" name="categories"><br>
    Tags: <input type="text" name="tags"><br>
    Months: <input type="text" name="months"><br>
    <input type="submit" value="Generate">
</form>

<?php

if (isset($_GET['categories']) && isset($_GET['tags']) && isset($_GET['months']))
{
    $categories = htmlspecialchars($_GET['categories']);
    $tags = htmlspecialchars($_GET['tags']);
    $months = htmlspecialchars($_GET['months']);

    $categories = explode(', ', $categories);
    $tags = explode(', ', $tags);
    $months = explode(', ', $months);

    echo "<h2>Categories</h2>";
    echo "<ul>";
    foreach ($categories as $value)
    {
        echo "<li>$value</li>";
    }
    echo "</ul>";

    echo "<h2>Tags</h2>";
    echo "<ul>";
    foreach ($tags as $value)
    {
        echo "<li>$value</li>";
    }
    echo "</ul>";

    echo "<h2>Months</h2>";
    echo "<ul>";
    foreach ($months as $value)
    {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}
?>
