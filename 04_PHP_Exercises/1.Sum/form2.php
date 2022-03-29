<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$res = $num1 + $num2;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="form2.php" method="get">
    <label>Number 1
        <input type="number" name="num1">
    </label>
    <label>Number 2
        <input type="number" name="num2">
    </label>
    <input type="submit" value="Add">
    <br>
    <label>Sum:</label>
    <?=$res?>
</form>
</body>
</html>