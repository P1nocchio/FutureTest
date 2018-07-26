-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 26 2018 г., 22:00
-- Версия сервера: 5.5.58-log
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `future_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt` datetime NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id_user`, `user_name`, `dt`, `comment`) VALUES
(1, 'Артемий', '2018-07-26 18:54:53', 'Почему такое сложное задание??? Мне кажется, нужно быть первоклассным программистом, чтобы выполнить его :('),
(2, 'Евдоким', '2018-07-26 18:55:30', 'Если включить мозги, то все элементарно, Ватсон!'),
(3, 'Савва', '2018-07-26 18:56:40', 'Спасибо за Ваше тестовое задание. Оно, действительно, изумительное'),
(4, 'Астапенко Н.И.', '2018-07-26 19:53:19', 'Я сверстал эту страничку. Хотел еще реализовать динамическое появление комментариев через Ajax - не вышло.'),
(5, 'Астапенко Н.И.', '2018-07-26 19:57:15', 'Использовал Bootstrap 4.'),
(6, 'Астапенко Н.И.', '2018-07-26 20:04:40', 'Ура'),
(7, 'Астапенко Н.И.', '2018-07-26 20:05:10', 'Работает!'),
(8, 'Астапенко Н.И.', '2018-07-26 21:15:33', 'Отлично!'),
(9, 'Никита', '2018-07-26 21:57:29', 'qwerty');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
