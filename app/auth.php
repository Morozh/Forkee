<?php
    require "includes/db.php"; // подключаем файл для соединения с БД

    $data = $_POST;

    if(isset($data['signin'])) {
        $errors = array();
        $user = R::findOne('users', 'usmail = ?', array($data['user_email']));

        if ($user) {
            if(password_verify($data['psword'], $user->password)) {
                $_SESSION['logged_user'] = $user;
                header('Location: test.php');
                echo 'Вы авторизованы!';
            } else {
                $errors[] = 'Пароль неверно введен!';
            }
        }

        else {
            $errors[] = 'Пользователь с таким email-ом не найден!';
        }

        if(!empty($errors)) {
            echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
        }

    }
?>