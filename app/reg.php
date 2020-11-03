<?php 
require "db.php"; // подключаем файл для соединения с БД
 // Создаем переменную для сбора данных от пользователя по методу POST
$data = $_POST;

// Пользователь нажимает на кнопку "Зарегистрироватьcя" и код начинает выполняться

if(isset($data['signup'])) {

// Регистрируем

// Создаем массив для сбора ошибок

$errors = array();

// Проводим проверки

// trim — удаляет пробелы (или другие символы) из начала и конца строки

if(trim($data['fname']) == '') {

$errors[] = "Введите имя!";

}

if(trim($data['lname']) == '') {

$errors[] = "Введите фамилию";

}

if(trim($data['user_email']) == '') {

$errors[] = "Введите электронную почту";

}

if(trim($data['pass']) == '') {

$errors[] = "Введите пароль";

}

if($data['confpass'] == '') {

$errors[] = "Подтвердите пароль";

}

if($data['confpass'] != $data['pass']) {

$errors[] = "Повторный пароль введен не верно!";

}

// функция mb_strlen - получает длину строки

// Если логин будет меньше 5 символов и больше 90, то выйдет ошибка


if (mb_strlen($data['fname']) < 3 || mb_strlen($data['fname']) > 50){

$errors[] = "Недопустимая длина имени";

}

if (mb_strlen($data['lname']) < 5 || mb_strlen($data['lname']) > 50){

$errors[] = "Недопустимая длина фамилии";

}

if (mb_strlen($data['pass']) < 2 || mb_strlen($data['pass']) > 8){

$errors[] = "Недопустимая длина пароля (от 2 до 8 символов)";

}

// проверка на правильность написания Email

if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['user_email'])) {

$errors[] = 'Неверно введен е-mail';

}


// Проверка на уникальность email

if(R::count('users', "Email = ?", array($data['user_email'])) > 0) {

$errors[] = "Пользователь с таким Email существует!";

}

if(empty($errors)) {

// Все проверено, регистрируем

// Создаем таблицу users

$user = R::dispense('users');

// добавляем в таблицу записи

$user->name = $data['fname'];

$user->surname = $data['lname'];

$user->usmail = $data['user_email'];

//$user->status = 2;

// Хешируем пароль

$user->password = password_hash($data['pass'], PASSWORD_DEFAULT);

// Сохраняем таблицу

R::store($user);

echo '<div style="color: green; ">Вы успешно зарегистрированы! Можно <a href="login.php">авторизоваться</a>.</div><hr>';

} else {

// array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент.

echo '<div style="color: red; ">' . array_shift($errors). '</div>';

}

}
?>