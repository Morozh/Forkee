<?php
    require "db.php"; // подключаем файл для соединения с БД
?>


<?php
    // Создаем переменную для сбора данных от пользователя по методу POST

    $data = $_POST;

    // Пользователь нажимает на кнопку "Авторизоваться" и код начинает выполняться

    if(isset($data['signin'])) {

        // Создаем массив для сбора ошибок

        $errors = array();

        // Проводим поиск пользователей в таблице users

        $user = R::findOne('users', 'usmail = ?', array($data['user_email']));

        if ($user) {
            // Если логин существует, тогда проверяем пароль
            if(password_verify($data['pass'], $user->password)) {
                header('Location: index.php');
                $_SESSION['logged_user'] = $user;
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
