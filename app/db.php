<?php 
require "libs/rb.php";

// Подключаемся к БД
R::setup( 'mysql:host=localhost;dbname=forkee',
'root', '' );

// Проверка подключения к БД
if(!R::testConnection()) die('No DB connection!');

session_start();
?>

