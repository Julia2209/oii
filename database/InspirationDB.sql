-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 16 2016 г., 19:20
-- Версия сервера: 5.6.26-log
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `InspirationDB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE `Orders` (
  `Id` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `UserId` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Orders`
--

INSERT INTO `Orders` (`Id`, `Date`, `UserId`) VALUES
(20, '2016-04-16 20:17:41', 1),
(21, '2016-04-16 20:19:25', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Products`
--

CREATE TABLE `Products` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` decimal(5,2) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Description` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Products`
--

INSERT INTO `Products` (`Id`, `Name`, `Price`, `Amount`, `Description`) VALUES
(1, 'Картина 1', '30.59', 5, 'Очень-очень красивая картина!'),
(2, 'Картина 2', '999.99', 2, 'Очень-очень дорогая картина!'),
(3, 'Картина 3', '70.59', 12, 'Очень-очень популярная картина!');

-- --------------------------------------------------------

--
-- Структура таблицы `ProductsInOrder`
--

CREATE TABLE `ProductsInOrder` (
  `Id` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ProductsInOrder`
--

INSERT INTO `ProductsInOrder` (`Id`, `OrderId`, `ProductId`) VALUES
(10, 20, 1),
(11, 20, 2),
(12, 20, 3),
(13, 21, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `Id` int(6) UNSIGNED NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `UserName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`Id`, `Email`, `Password`, `UserName`) VALUES
(1, 'nikolaeva.a25@gmail.com', 'password', 'ANNA'),
(2, 'nikolaeva.a@gmail.com', 'password', 'anna-anna'),
(3, 'dasdas@dsad.sadas', 'pass', 'anna'),
(4, 'anna.nikolayeva@dataart.com', 'pass', 'ann '),
(5, 'sdfasdf', 'dsfasdf', 'dsfsdf'),
(6, 'test@test.com', 'pass', 'anna');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `ProductsInOrder`
--
ALTER TABLE `ProductsInOrder`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `Products`
--
ALTER TABLE `Products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `ProductsInOrder`
--
ALTER TABLE `ProductsInOrder`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `Id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
