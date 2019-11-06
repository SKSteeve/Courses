<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sum Two Numbers</title>
</head>
<body>
<?php
    if(isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = intval($_GET['num1']);
        $num2 = intval($_GET['num2']);
        $sum = $num1 * $num2;
        echo "$num1 * $num2 = $sum";
    }
?>

<form>
    N: <input type="number" name="num1" />
    M: <input type="number" name="num2" />
    <input type="submit" />
</form>
</body>
</html>