<?php
    require "db.php";

    $data = $_POST;

    if(isset($data['signin'])) {
        $errors = array();
        $user = R::findOne('users', 'usmail = ?', array($data['user_email']));

        if ($user) {
            if(password_verify($data['psword'], $user->password)) {
                $_SESSION['logged_user'] = $user;
                header('Location: ../index.php');
            } else {
                $errors[] = 'Пароль неверно введен!';
            }
        }

        else {
            $errors[] = 'Пользователь с таким email-ом не найден!';
        }

        if(!empty($errors)) {
            echo '<div style="color: red; ">' . array_shift($errors). '</div>
            <a href="../index.php">Вернуться на главную</a>';
        }

    }
?>