-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 04 2017 г., 09:49
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `notes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `notes_content`
--

CREATE TABLE `notes_content` (
  `n_id` smallint(4) UNSIGNED NOT NULL,
  `n_last_date` datetime NOT NULL,
  `u_id` int(4) NOT NULL,
  `n_title` varchar(32) NOT NULL,
  `n_content` text,
  `f_id` int(4) UNSIGNED NOT NULL,
  `n_deleted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `notes_content`
--

INSERT INTO `notes_content` (`n_id`, `n_last_date`, `u_id`, `n_title`, `n_content`, `f_id`, `n_deleted`) VALUES
(1, '2017-03-27 15:03:00', 1, 'First Note', 'Some very very long Text. My note text and notes notes and notes.', 0, 1),
(2, '2017-04-01 08:45:39', 1, 'Note 2', 'Lorem ipsum', 0, 1),
(3, '2017-04-01 09:36:07', 1, 'Note 3', 'Lorem ipsum dolor sit amet, consectetur', 0, 0),
(4, '2017-04-05 06:15:25', 2, 'Movies', 'Titanic\r\nTerminator', 0, 1),
(5, '2017-04-05 06:15:25', 2, 'Sites', 'google.com yahoo.com facebook.com', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `notes_folders`
--

CREATE TABLE `notes_folders` (
  `f_id` int(4) NOT NULL,
  `f_title` varchar(32) NOT NULL,
  `u_id` int(4) NOT NULL,
  `n_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `notes_users`
--

CREATE TABLE `notes_users` (
  `u_id` int(4) UNSIGNED NOT NULL,
  `u_name` varchar(32) NOT NULL,
  `u_password` varchar(32) NOT NULL,
  `u_email` varchar(64) NOT NULL,
  `u_admin` tinyint(1) NOT NULL DEFAULT '0',
  `n_id` int(4) DEFAULT NULL,
  `f_id` int(4) DEFAULT NULL,
  `u_last_active_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `notes_users`
--

INSERT INTO `notes_users` (`u_id`, `u_name`, `u_password`, `u_email`, `u_admin`, `n_id`, `f_id`, `u_last_active_time`) VALUES
(1, 'Ivan', 'ivan', 'i.makhambetov@gmail.com', 1, NULL, NULL, '0000-00-00 00:00:00'),
(2, 'Max', 'max', 'max@mail.ru', 0, NULL, NULL, '0000-00-00 00:00:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `notes_content`
--
ALTER TABLE `notes_content`
  ADD PRIMARY KEY (`n_id`),
  ADD UNIQUE KEY `N_ID` (`n_id`);

--
-- Индексы таблицы `notes_folders`
--
ALTER TABLE `notes_folders`
  ADD PRIMARY KEY (`f_id`),
  ADD UNIQUE KEY `f_title` (`f_title`);

--
-- Индексы таблицы `notes_users`
--
ALTER TABLE `notes_users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_name` (`u_name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `notes_content`
--
ALTER TABLE `notes_content`
  MODIFY `n_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `notes_folders`
--
ALTER TABLE `notes_folders`
  MODIFY `f_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `notes_users`
--
ALTER TABLE `notes_users`
  MODIFY `u_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
