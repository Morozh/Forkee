-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 18 2020 г., 17:44
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `forkee`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id_city` int(11) NOT NULL,
  `title_city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id_city`, `title_city`) VALUES
(1, 'Moscow'),
(2, 'Perm'),
(3, 'Ekaterinburg'),
(4, 'Kazan'),
(5, 'Voronezh'),
(6, 'Penza'),
(7, 'Saratov'),
(8, 'Tver'),
(9, 'Tumen'),
(10, 'Tula');

-- --------------------------------------------------------

--
-- Структура таблицы `enterprises`
--

CREATE TABLE `enterprises` (
  `id_enterprise` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sphere` int(11) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `enterprises`
--

INSERT INTO `enterprises` (`id_enterprise`, `title`, `sphere`, `phone_number`) VALUES
(1, 'GALAGO', 1, '89824272220'),
(2, 'DomRU', 2, '89824112220'),
(3, 'PSU', 3, '89824772219'),
(4, 'Юг Руси', 4, '89824621193'),
(5, 'БАНК ВТБ', 5, '89824621193'),
(6, 'МТС', 5, '89824621193');

-- --------------------------------------------------------

--
-- Структура таблицы `spheres`
--

CREATE TABLE `spheres` (
  `id_sphere` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `spheres`
--

INSERT INTO `spheres` (`id_sphere`, `title`) VALUES
(1, 'IT Design'),
(2, 'IT Telecom'),
(3, 'Admin'),
(4, 'Driving'),
(5, 'Banking');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usmail` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `usmail`, `password`, `organization`) VALUES
(5, 'Даниил', 'Пасторов', 'daniilpastorov@mail.ru', '$2y$10$GwIODcEDPKZylT4XZWpk1u3jnyyqFn7b8SWPHzd00QREeoQI0ClpC', NULL),
(6, 'Akopyan', 'Ruslan', 'rus@mail.ru', '$2y$10$.bXg/favtyAa0BK2l/p3sO1M1vGKvLyCt/DRNVhdwWOqaTlEgeZBW', NULL),
(7, 'Руслан', 'Акопян', 'rusl99-99@mail.ru', '$2y$10$FsMoAU4Xq/dep.GjTWi5k.cHS0/lvIFp3ndM02oa5ibYHfp6boG52', NULL),
(9, 'Дима', 'Краков', '1223@mail.ru', '$2y$10$icxQJ.H5Tpk.dkn9kdufTOQpZKRFKrWLsTX2ZHs3ON3dDhX/Uv1FW', NULL),
(12, 'Павел', 'Дуров', 'qwe@mail.ru', '$2y$10$TYeiZl7/oPU6KekEWPSkte6w4R2TpyvrZWy4Z0lx1CmhvBIotIMCm', NULL),
(13, 'asdsa', 'asdsadsad', 'pap@mail.ru', '$2y$10$FAN2KN50AIW7Q63KYoKLEe5lU2NpIvsjD1tIZv1Se2Wh54kS9tm7O', NULL),
(14, 'Danil', 'Baraboshkin', 'dada@mail.ru', '$2y$10$Qz0QyXEd/3CQf7qGhLno8eJnz/WCY7Bh.bA0RUv4cL47/oYY7/Ecm', NULL),
(15, 'Kakao', 'Bukaka', 'rusl.demod@yandex.ru', '$2y$10$3XjkUsgJelf9ETRJXVOPFeiqSzxugbE7ZNFMNv1DTXs06EcbSiQkW', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `vacancies`
--

CREATE TABLE `vacancies` (
  `id_vacancy` int(11) NOT NULL,
  `title_vacancy` varchar(100) NOT NULL,
  `salary` decimal(8,0) NOT NULL,
  `enterprise` int(20) NOT NULL,
  `city` int(20) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `active` tinyint(1) DEFAULT '0',
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vacancies`
--

INSERT INTO `vacancies` (`id_vacancy`, `title_vacancy`, `salary`, `enterprise`, `city`, `phone_number`, `description`, `active`, `date`) VALUES
(1, 'Designer', '3000', 1, 1, '89824272220', 'Support and modernization of the company official website. Development of an internal corporate portal. Development of additional functionality for the company web services.\r\nHigher education. Experience as a web developer, frontend developer for at least a year. Knowledge of HTML5, CSS, and web site layout experience, including:..', 1, '9 november'),
(2, 'Oracle developer', '3000', 2, 2, '89824112220', 'Implementation of medium-level tasks for the development of a comprehensive corporate information system under the guidance of the developer. Continuous professional development.\r\nHigh learning ability. Preferably knowledge of Pl / sql, experience with Oracle or PostgreSQL, knowledge of the scala/java language, knowledge of the IntelliJ development environment...', 1, '9 november'),
(3, 'Admin', '250', 3, 3, '89824772219', 'PSU admin', 1, '9 november'),
(4, 'Personal Driver', '1000', 4, 3, '89824621193', 'Timely car delivery, if necessary, replacement of a personal driver. Maintaining the car in good condition. Execution of orders of the head.\r\nDriving license cat. В and С. Work experience as a personal / office driver at least 3 years. Neatness, activity, readiness for an irregular worker ...', 1, '14 november'),
(5, 'Senior Cashier', '3300', 5, 5, '89824621193', '\r\nReception, recalculation, issue of funds. High-quality service for clients of legal entities and individual entrepreneurs.\r\nWork experience in the cash register of the Bank at least 2 years. Professional certificate. Higher education.', 1, '14 november'),
(6, 'Shop Assistant', '1300', 6, 1, '89824621193', 'Consulting clients, connecting operator services. Sale of mobile phones, smartphones, tablets and accessories. Working with the cash desk, maintaining internal office reporting and ...\r\nEducation is not lower than secondary. Desire to develop in sales. Experience in sales is not required, training is provided.', 1, '13 november');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id_city`);

--
-- Индексы таблицы `enterprises`
--
ALTER TABLE `enterprises`
  ADD PRIMARY KEY (`id_enterprise`),
  ADD KEY `sphere` (`sphere`),
  ADD KEY `phone_number` (`phone_number`);

--
-- Индексы таблицы `spheres`
--
ALTER TABLE `spheres`
  ADD PRIMARY KEY (`id_sphere`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id_vacancy`),
  ADD KEY `city` (`city`),
  ADD KEY `enterprise` (`enterprise`),
  ADD KEY `phone_number` (`phone_number`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id_vacancy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `enterprises`
--
ALTER TABLE `enterprises`
  ADD CONSTRAINT `enterprises_ibfk_1` FOREIGN KEY (`sphere`) REFERENCES `spheres` (`id_sphere`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `vacancies`
--
ALTER TABLE `vacancies`
  ADD CONSTRAINT `vacancies_ibfk_1` FOREIGN KEY (`city`) REFERENCES `cities` (`id_city`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `vacancies_ibfk_2` FOREIGN KEY (`enterprise`) REFERENCES `enterprises` (`id_enterprise`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `vacancies_ibfk_3` FOREIGN KEY (`phone_number`) REFERENCES `enterprises` (`phone_number`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
