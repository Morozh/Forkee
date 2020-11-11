<?php 
  require "includes/db.php";

  $host = 'localhost';
  $user = 'root'; 
  $password = 'root'; //vacancy.php 6 string, db.php 4 string
  $db_name = 'forkee'; 
  $link = mysqli_connect($host, $user, $password, $db_name);
?>
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

</body>
</html> 