-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 09 2018 г., 12:27
-- Версия сервера: 5.6.38
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `resume_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `list_users`
--

CREATE TABLE `list_users` (
  `id` int(11) NOT NULL,
  `name, surname` tinytext NOT NULL,
  `email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `list_users`
--

INSERT INTO `list_users` (`id`, `name, surname`, `email`) VALUES
(1, 'john johnson', 'johnson@email.com'),
(2, 'ivan ivanov', 'ivan@mail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `user_resume`
--

CREATE TABLE `user_resume` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `surname` tinytext NOT NULL,
  `birthdate` date NOT NULL,
  `country` tinytext NOT NULL,
  `tel` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `address` tinytext NOT NULL,
  `datebeginstudy0` date NOT NULL,
  `dateendstudy0` date NOT NULL,
  `studyname0` tinytext NOT NULL,
  `professionstudy0` tinytext NOT NULL,
  `doctor0` tinytext NOT NULL,
  `datebeginstudy1` date DEFAULT NULL,
  `dateendstudy1` date DEFAULT NULL,
  `studyname1` tinytext,
  `professionstudy1` tinytext,
  `doctor1` tinytext,
  `datebeginstudy2` date DEFAULT NULL,
  `dateendstudy2` date DEFAULT NULL,
  `studyname2` tinytext,
  `professionstudy2` tinytext,
  `doctor2` tinytext,
  `datebeginstudy3` date DEFAULT NULL,
  `dateendstudy3` date DEFAULT NULL,
  `studyname3` tinytext,
  `professionstudy3` tinytext,
  `doctor3` tinytext,
  `datebeginstudy4` date DEFAULT NULL,
  `dateendstudy4` date DEFAULT NULL,
  `studyname4` tinytext,
  `professionstudy4` tinytext,
  `doctor4` tinytext,
  `datebeginwork0` date NOT NULL,
  `dateendwork0` date NOT NULL,
  `workname0` tinytext NOT NULL,
  `professionwork0` tinytext NOT NULL,
  `datebeginwork1` date DEFAULT NULL,
  `dateendwork1` date DEFAULT NULL,
  `workname1` tinytext,
  `professionwork1` tinytext,
  `datebeginwork2` date DEFAULT NULL,
  `dateendwork2` date DEFAULT NULL,
  `workname2` tinytext,
  `professionwork2` tinytext,
  `datebeginwork3` date DEFAULT NULL,
  `dateendwork3` date DEFAULT NULL,
  `workname3` tinytext,
  `professionwork3` tinytext,
  `datebeginwork4` date DEFAULT NULL,
  `dateendwork4` date DEFAULT NULL,
  `workname4` tinytext,
  `professionwork4` tinytext,
  `interests` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_resume`
--

INSERT INTO `user_resume` (`id`, `name`, `surname`, `birthdate`, `country`, `tel`, `email`, `address`, `datebeginstudy0`, `dateendstudy0`, `studyname0`, `professionstudy0`, `doctor0`, `datebeginstudy1`, `dateendstudy1`, `studyname1`, `professionstudy1`, `doctor1`, `datebeginstudy2`, `dateendstudy2`, `studyname2`, `professionstudy2`, `doctor2`, `datebeginstudy3`, `dateendstudy3`, `studyname3`, `professionstudy3`, `doctor3`, `datebeginstudy4`, `dateendstudy4`, `studyname4`, `professionstudy4`, `doctor4`, `datebeginwork0`, `dateendwork0`, `workname0`, `professionwork0`, `datebeginwork1`, `dateendwork1`, `workname1`, `professionwork1`, `datebeginwork2`, `dateendwork2`, `workname2`, `professionwork2`, `datebeginwork3`, `dateendwork3`, `workname3`, `professionwork3`, `datebeginwork4`, `dateendwork4`, `workname4`, `professionwork4`, `interests`) VALUES
(1, 'john', 'johnson', '1983-01-06', 'Польша', '0991234567', 'johnson@email.com', 'varshava, 35', '2007-01-01', '2010-02-01', 'ZNTU', 'biology', 'magistr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-03-01', '2017-05-31', 'motor-sich', 'worker', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'shoping'),
(2, 'ivan', 'ivanov', '1988-12-15', 'Украина', '0671351390', 'ivan@mail.com', 'kyiv, 310', '2010-09-01', '2012-06-01', 'ZNU', 'chemistry', 'bakalavr', '2013-10-01', '2014-06-01', 'ZGIA', 'mathematic', 'magistr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-05-01', '2016-12-31', 'ZAZ', 'celler', '2017-01-12', '2018-05-01', 'school', 'teacher', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'photography');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `list_users`
--
ALTER TABLE `list_users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_resume`
--
ALTER TABLE `user_resume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `list_users`
--
ALTER TABLE `list_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user_resume`
--
ALTER TABLE `user_resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
