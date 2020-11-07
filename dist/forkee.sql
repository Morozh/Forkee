-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 07 2020 г., 20:48
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
(1, 'Москва'),
(2, 'Пермь'),
(3, 'Екатеринбург'),
(4, 'Вологда');

-- --------------------------------------------------------

--
-- Структура таблицы `enterprises`
--

CREATE TABLE `enterprises` (
  `id_enterprise` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sphere` int(11) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `spheres`
--

CREATE TABLE `spheres` (
  `id_sphere` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usmail` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `usmail`, `password`) VALUES
(5, 'Даниил', 'Пасторов', 'daniilpastorov@mail.ru', '$2y$10$GwIODcEDPKZylT4XZWpk1u3jnyyqFn7b8SWPHzd00QREeoQI0ClpC'),
(6, 'Akopyan', 'Ruslan', 'rus@mail.ru', '$2y$10$.bXg/favtyAa0BK2l/p3sO1M1vGKvLyCt/DRNVhdwWOqaTlEgeZBW'),
(7, 'Руслан', 'Акопян', 'rusl99-99@mail.ru', '$2y$10$FsMoAU4Xq/dep.GjTWi5k.cHS0/lvIFp3ndM02oa5ibYHfp6boG52'),
(9, 'Дима', 'Краков', '1223@mail.ru', '$2y$10$icxQJ.H5Tpk.dkn9kdufTOQpZKRFKrWLsTX2ZHs3ON3dDhX/Uv1FW'),
(10, 'Дима', 'Краков', '321@mail.ru', '$2y$10$IJtB0/RcAmtAPCaaOSscveySXyDkqjW92QUtGigq1kGyQvjvbtbCC'),
(11, 'Дима', 'Краков', '3211@mail.ru', '$2y$10$5pNcckc7yxHc.1depjNC1eOhG979eR2rF8MKDlMxdeyaqbnH21.VC');

-- --------------------------------------------------------

--
-- Структура таблицы `vacancies`
--

CREATE TABLE `vacancies` (
  `id_vacancy` int(11) NOT NULL,
  `title_vacancy` varchar(100) NOT NULL,
  `salary` decimal(8,0) NOT NULL,
  `enterprise` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `remote_work` tinyint(1) DEFAULT '0',
  `phone_number` varchar(20) NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `active` tinyint(1) DEFAULT '0',
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vacancies`
--

INSERT INTO `vacancies` (`id_vacancy`, `title_vacancy`, `salary`, `enterprise`, `city`, `remote_work`, `phone_number`, `description`, `active`, `date`) VALUES
(1, 'Front-end Developer', '5000', 'ЛУКОЙЛ', 'Moscow', 1, '89824772220', 'Refinement of an existing project in Vue (components and SPA-module), optimization. Interaction with server-side Rest API (json). Working with WebSocket.', 1, '18 october'),
(2, 'Back-end Developer', '3000', 'ЛУКОЙЛ', 'Moscow', 1, '89824772220', 'Embedding layout in CMS. JS programming. Analysis and implementation of the task.\r\nKnowledge of the basics: HTML, CSS, JS / JQuery. Understanding the structure of frameworks and cms. For example: ModX, WordPress, Laravel. Punctuality and responsibility.', 1, '7 november'),
(3, 'Dvornik', '3000', 'АЛЯУЛЮ', 'Perm', 0, '89824772220', 'Embedding layout in CMS. JS programming. Analysis and implementation of the task.\r\nKnowledge of the basics: HTML, CSS, JS / JQuery. Understanding the structure of frameworks and cms. For example: ModX, WordPress, Laravel. Punctuality and responsibility.', 0, '7 november'),
(4, 'Dvornik', '3000', 'АЛЯУЛЮ', 'Perm', 0, '89824772220', 'Embedding layout in CMS. JS programming. Analysis and implementation of the task. Knowledge of the basics: HTML, CSS, JS / JQuery. Understanding the structure of frameworks and cms. For example: ModX, WordPress, Laravel. Punctuality and responsibility.', 0, '7 november'),
(5, 'Dvornik', '3000', 'АЛЯУЛЮ', 'Perm', 0, '89824772220', 'Embedding layout in CMS. JS programming. Analysis and implementation of the task. Knowledge of the basics: HTML, CSS, JS / JQuery. Understanding the structure of frameworks and cms. For example: ModX, WordPress, Laravel. Punctuality and responsibility.', 0, '7 november');

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
  ADD PRIMARY KEY (`id_enterprise`);

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
  ADD PRIMARY KEY (`id_vacancy`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
