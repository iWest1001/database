-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 08 2019 г., 08:53
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newuvt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gruppa`
--

CREATE TABLE `gruppa` (
  `ID_gruppi` int(11) NOT NULL,
  `napravlenie` varchar(100) NOT NULL,
  `kod_naprav` varchar(4) NOT NULL,
  `podgruppa` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gruppa`
--

INSERT INTO `gruppa` (`ID_gruppi`, `napravlenie`, `kod_naprav`, `podgruppa`) VALUES
(1, 'ТТП', '11', 'а'),
(2, 'ИТ', '12', 'а'),
(3, 'МЭ', '21', 'а'),
(4, 'СМФ', '22', 'б');

-- --------------------------------------------------------

--
-- Структура таблицы `poseshaet`
--

CREATE TABLE `poseshaet` (
  `ID_poses` int(11) NOT NULL,
  `ID_gruppi` int(11) NOT NULL,
  `ID_zanyatiya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `poseshaet`
--

INSERT INTO `poseshaet` (`ID_poses`, `ID_gruppi`, `ID_zanyatiya`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 5),
(4, 3, 6),
(5, 3, 7),
(6, 3, 8),
(7, 3, 9),
(8, 3, 10),
(9, 3, 11),
(10, 3, 12),
(11, 3, 13),
(12, 4, 5),
(13, 4, 6),
(14, 4, 7),
(15, 4, 8),
(16, 4, 9),
(17, 4, 10),
(18, 4, 11),
(19, 4, 12),
(20, 4, 13);

-- --------------------------------------------------------

--
-- Структура таблицы `prepodavatel`
--

CREATE TABLE `prepodavatel` (
  `ID_prep` int(11) NOT NULL,
  `Familiya` varchar(100) NOT NULL,
  `Imya` varchar(100) NOT NULL,
  `Otchestvo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prepodavatel`
--

INSERT INTO `prepodavatel` (`ID_prep`, `Familiya`, `Imya`, `Otchestvo`) VALUES
(1, 'Величко', 'Юрий', 'Андреевич'),
(2, 'Никитенко', 'Анатолий', 'Георгиевич');

-- --------------------------------------------------------

--
-- Структура таблицы `propuski`
--

CREATE TABLE `propuski` (
  `ID_prop` int(11) NOT NULL,
  `ID_student` int(11) NOT NULL,
  `ID_zanyatiya` int(11) NOT NULL,
  `prichina` varchar(20) NOT NULL,
  `poyasnenie` varchar(100) NOT NULL,
  `dop_svedeniya` varchar(100) NOT NULL,
  `chasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `propuski`
--

INSERT INTO `propuski` (`ID_prop`, `ID_student`, `ID_zanyatiya`, `prichina`, `poyasnenie`, `dop_svedeniya`, `chasi`) VALUES
(1, 1, 1, 'ув', 'болел', '', 2),
(2, 2, 1, 'не ув', 'не явился', '', 2),
(3, 3, 2, 'ув', 'болел', '', 2),
(4, 4, 2, 'не ув', 'опоздал', '', 2),
(5, 1, 2, 'не ув', 'ушёл', '', 2),
(6, 1, 3, 'ув', 'работал', '', 2),
(7, 15, 5, 'ув', 'болел', '', 10),
(8, 15, 6, 'не ув', 'не пришел', '', 4),
(9, 16, 7, 'ув', 'болел', '', 16),
(10, 16, 8, 'не ув', 'не пришел', '', 2),
(11, 17, 9, 'ув', 'болел', '', 14),
(12, 17, 10, 'не ув', 'не пришел', '', 8),
(13, 18, 11, 'ув', 'болел', '', 12),
(14, 18, 12, 'не ув', 'не пришел', '', 6),
(15, 19, 13, 'ув', 'болел', '', 10),
(16, 19, 5, 'не ув', 'не пришел', '', 16),
(17, 15, 6, 'ув', 'болел', '', 18),
(18, 15, 7, 'ув', 'болел', '', 18),
(19, 16, 8, 'не ув', 'не пришел', '', 6),
(20, 17, 9, 'ув', 'болел', '', 22),
(21, 18, 10, 'не ув', 'не пришел', '', 4),
(22, 19, 11, 'ув', 'болел', '', 16),
(23, 15, 12, 'не ув', 'не пришел', '', 2),
(24, 16, 13, 'ув', 'болел', '', 10),
(60, 1, 5, 'ув', 'нет', 'пртт', 8),
(61, 1, 5, 'ув', 'нет', 'нет', 2),
(62, 1, 5, 'ув', 'нет', 'отсутствовал', 5),
(63, 1, 5, 'ув', 'нет', 'отсутствовал', 1),
(64, 19, 5, 'ув', 'нет', 'отсутствовал', 2),
(65, 19, 5, 'ув', 'нет', 'отсутствовал', 8),
(66, 18, 5, 'не ув', 'нет', 'кушал', 2),
(67, 2, 5, 'не ув', 'нет', 'болел', 4),
(68, 2, 5, 'не ув', 'нет', 'болел', 4),
(69, 16, 9, 'не ув', 'нет', 'проспал', 2),
(70, 16, 9, 'не ув', 'нет', 'проспал', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `ID_student` int(11) NOT NULL,
  `ID_gruppi` int(11) NOT NULL,
  `Familiya` varchar(100) NOT NULL,
  `Imya` varchar(100) NOT NULL,
  `Otchestvo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`ID_student`, `ID_gruppi`, `Familiya`, `Imya`, `Otchestvo`) VALUES
(1, 1, 'Тагиров', 'Денис', 'Русланович'),
(2, 1, 'Яблонский', 'Иван', 'Дмитриевич'),
(3, 1, 'Тапиров', 'Иван', 'Русланович'),
(4, 2, 'Яковлев', 'Максим', 'Игоревич'),
(12, 2, 'Обама', 'Барак', 'Узбекович'),
(14, 2, 'Масляков', 'Игорян', 'иванович'),
(15, 3, 'Клюкин', 'Сергей ', 'Александрович'),
(16, 3, 'Игошин', 'Иван ', 'Владимирович'),
(17, 4, 'Кашмиров', 'Владислав ', 'Викторович'),
(18, 4, 'Лобанов', 'Андрей ', 'Владимирович'),
(19, 4, 'Протопопов', 'Александр ', 'Иванович');

-- --------------------------------------------------------

--
-- Структура таблицы `zanyatiya`
--

CREATE TABLE `zanyatiya` (
  `ID_zanyatiya` int(11) NOT NULL,
  `ID_prepod` int(11) NOT NULL,
  `predmet` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `vremya` varchar(100) NOT NULL,
  `mesto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zanyatiya`
--

INSERT INTO `zanyatiya` (`ID_zanyatiya`, `ID_prepod`, `predmet`, `data`, `vremya`, `mesto`) VALUES
(1, 1, 'Математика', '2019-06-19', '12:30', 'Главный'),
(2, 1, 'Математика', '2019-06-20', '10:15', 'К2'),
(3, 2, 'Физика', '2019-06-19', '8:30', 'Главный'),
(4, 2, 'Физика', '2019-06-21', '12:30', 'К2'),
(5, 1, 'Сети', '2019-09-05', '12:30', 'Главный'),
(6, 2, 'Математика', '2019-10-05', '9:30', 'К2'),
(7, 1, 'Физ-Ра', '2019-11-05', '12:30', 'Лабораторный'),
(8, 2, 'Английский', '2019-12-05', '9:30', 'Главный'),
(9, 1, 'Графика', '2020-01-05', '12:30', 'К2'),
(10, 2, 'Программирование', '2020-02-05', '9:30', 'Лабораторный'),
(11, 1, 'СПК', '2020-03-05', '12:30', 'Главный'),
(12, 2, 'Философия', '2020-04-05', '9:30', 'К2'),
(13, 1, 'Базы данных', '2020-05-05', '12:30', 'Лабораторный');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gruppa`
--
ALTER TABLE `gruppa`
  ADD PRIMARY KEY (`ID_gruppi`);

--
-- Индексы таблицы `poseshaet`
--
ALTER TABLE `poseshaet`
  ADD PRIMARY KEY (`ID_poses`);

--
-- Индексы таблицы `prepodavatel`
--
ALTER TABLE `prepodavatel`
  ADD PRIMARY KEY (`ID_prep`);

--
-- Индексы таблицы `propuski`
--
ALTER TABLE `propuski`
  ADD PRIMARY KEY (`ID_prop`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID_student`);

--
-- Индексы таблицы `zanyatiya`
--
ALTER TABLE `zanyatiya`
  ADD PRIMARY KEY (`ID_zanyatiya`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gruppa`
--
ALTER TABLE `gruppa`
  MODIFY `ID_gruppi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `poseshaet`
--
ALTER TABLE `poseshaet`
  MODIFY `ID_poses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `prepodavatel`
--
ALTER TABLE `prepodavatel`
  MODIFY `ID_prep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `propuski`
--
ALTER TABLE `propuski`
  MODIFY `ID_prop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `ID_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `zanyatiya`
--
ALTER TABLE `zanyatiya`
  MODIFY `ID_zanyatiya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
