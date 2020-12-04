-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 01 2020 г., 04:41
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yout`
--

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id` int(10) NOT NULL,
  `videoname` varchar(150) NOT NULL,
  `source` varchar(300) NOT NULL,
  `img` varchar(100) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `chanelname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `videoname`, `source`, `img`, `descr`, `chanelname`) VALUES
(1, 'Я 4 ГОДА СОБИРАЛ КОРОБКИ ОТ ХЛОПЬЕВ | sndk', 'https://www.youtube.com/embed/IELW-DWVOY0', 'img/sue.jpg', '1 959 427 просмотров•10 авг. 2020 г.', 'Сыендук'),
(2, 'lofi hip hop radio - beats to relax/study to', 'https://www.youtube.com/embed/5qap5aO4i9A', 'img/chil.jpg', 'Сейчас смотрят: 32 815•Трансляция началась 22 февр. 2020 г', 'ChilledCow'),
(3, 'Как работает цифровое омоложение в кино — CGI-лица актёров и зловещая долина', 'https://www.youtube.com/embed/QrSn_QBIs5E', 'img/xyz.jpg', '110 930 просмотров•4 нояб. 2020 г.', 'XYZ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
