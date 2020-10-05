<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Поиск
    <?php
    echo $_GET['search'];
    ?>
    </title>
</head>
<body>
<h2>Поисковый запрос: <?php echo $_GET['search']; ?></h2>
<?php
$search_get = $_GET['search'];
$connect= mysqli_connect("127.0.0.1","root","root","Forkee");
$sql = "SELECT * FROM `vacansy` WHERE `name` LIKE '%$search_get%' ";

$select = mysqli_query($connect, $sql);
while ($select_while = mysqli_fetch_assoc($select)) {
    ?>
    <?php echo $select_while['id_vac']; ?> 
    <?php echo $select_while['name']; ?> 
    <?php echo $select_while['City']; ?> 

    <?php
       
}


?>
</body>
</html>