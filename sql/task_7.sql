-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 14 2021 г., 17:17
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `task_7`
--

CREATE TABLE `task_7` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `wrapbootstrap` varchar(255) DEFAULT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `task_7`
--

INSERT INTO `task_7` (`id`, `first_name`, `full_name`, `specialization`, `role`, `image`, `twitter`, `wrapbootstrap`, `banned`) VALUES
(1, 'Sunny', 'Sunny A.', '(UI/UX Expert)', 'Lead Author', 'sunny.png', '@myplaneticket', 'myorange', 0),
(2, 'Jos', 'Jos K.', '(ASP.NET Developer)', 'Partner &amp; Contributor', 'josh.png', '@atlantez', 'Walapa', 0),
(3, 'Jovanni', 'Jovanni L.', '(PHP Developer)', 'Partner & Contributor', 'jovanni.png', '@lodev09', 'lodev09', 1),
(4, 'Roberto', 'Roberto R.', '(Rails Developer)', 'Partner & Contributor', 'roberto.png', '@sildur', 'sildur', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `task_7`
--
ALTER TABLE `task_7`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `task_7`
--
ALTER TABLE `task_7`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
