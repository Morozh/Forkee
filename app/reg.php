<?php 
require "db.php";

    $data = $_POST;

if(isset($data['signup'])) {

$errors = array();

if(trim($data['fname']) == '') {
    $errors[] = "Введите имя!";
}

if(trim($data['lname']) == '') {
    $errors[] = "Введите фамилию";
}

if(trim($data['user_email']) == '') {
    $errors[] = "Введите электронную почту";
}

if(trim($data['psword']) == '') {
    $errors[] = "Введите пароль";
}

if($data['c_psword'] == '') {
    $errors[] = "Подтвердите пароль";
}

if($data['c_psword'] != $data['psword']) {
    $errors[] = "Повторный пароль введен не верно!";
}

if (mb_strlen($data['fname']) < 3 || mb_strlen($data['fname']) > 50){
    $errors[] = "Недопустимая длина имени";
}

if (mb_strlen($data['lname']) < 5 || mb_strlen($data['lname']) > 50){
    $errors[] = "Недопустимая длина фамилии";
}

if (mb_strlen($data['psword']) < 2 || mb_strlen($data['psword']) > 8){
    $errors[] = "Недопустимая длина пароля (от 2 до 8 символов)";
}

if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['user_email'])) {
    $errors[] = 'Неверно введен е-mail';
}

if(R::count('users', "usmail = ?", array($data['user_email'])) > 0) {
    $errors[] = "Пользователь с таким Email существует!";
}

if(empty($errors)) {

    $user = R::dispense('users');
    $user->name = $data['fname'];
    $user->surname = $data['lname'];
    $user->usmail = $data['user_email'];
    //$user->status = 2;
    $user->password = password_hash($data['psword'], PASSWORD_DEFAULT);

    R::store($user);
    echo '<div style="color: green; ">Вы успешно зарегистрированы! Можно <a href="login.php">авторизоваться</a>.</div><hr>';
} else {
    echo '<div style="color: red; ">' . array_shift($errors). '</div>';
}

}
?>