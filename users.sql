-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лют 02 2019 р., 20:58
-- Версія сервера: 10.1.37-MariaDB
-- Версія PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `users`
--

-- --------------------------------------------------------

--
-- Структура таблиці `myusers`
--

CREATE TABLE `myusers` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `years` int(2) NOT NULL DEFAULT '1',
  `genus` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `repassword` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `myusers`
--

INSERT INTO `myusers` (`id`, `name`, `surname`, `years`, `genus`, `username`, `email`, `password`, `repassword`) VALUES
(2, 'Vika', 'Moskalenko', 17, 'w', 'moskalenkovi', 'vika01mos@gmail.com', '123', '123'),
(3, 'Vika', 'Moskalenko', 17, 'w', 'moskalenkovi', 'vika01mos@gmail.com', '123', '123'),
(4, 'Vika', 'Moskalenko', 17, 'w', 'moskalenkovi', 'vika01mos@gmail.com', '123', '123'),
(5, 'Vika', 'Moskalenko', 17, 'w', 'vsd', 'vika01mos@gmail.com', '123', '123');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `myusers`
--
ALTER TABLE `myusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `myusers`
--
ALTER TABLE `myusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
