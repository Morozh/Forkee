<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск</title>
</head>
<body>
    <form method = "get" action ="test_search.php">
        <input type="search" name="search" placeholder="search..">
        <input type="submit" name="subBtn" value="search">
    </form>

<?php
$connect= mysqli_connect("127.0.0.1","root","root","Forkee");
?>
</body>
</html>