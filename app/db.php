<?php 

// Подключаем библиотеку RedBeanPHP

require "rb.php";

// Подключаемся к БД

R::setup( 'mysql:host=localhost; dbname=forkee_database',

'root', 'root' );

// Проверка подключения к БД

 if(!R::testConnection()) die('No DB connection!');

 // Создаем сессию для авторизации
 ?>

