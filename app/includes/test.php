<?php
    require "db.php";
?>
<?php if( isset($_SESSION['logged_user'])) : ?>
    Авторизован <a href="/app">На главную</a>
<?php else : ?>
    Вы не авторизованы <a href="..index.php">Вернуться на главную</a>
<?php endif; ?>
