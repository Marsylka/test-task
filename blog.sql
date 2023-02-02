-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 02 2023 г., 15:22
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `grope`
--

CREATE TABLE `grope` (
  `gr_id` int NOT NULL,
  `gr_name` varchar(191) NOT NULL,
  `gr_temp` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `id_date` datetime NOT NULL,
  `ord_prod` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_date`, `ord_prod`) VALUES
(6, '2023-02-15 10:38:00', '2'),
(7, '2023-02-02 04:49:35', '2'),
(8, '2023-02-02 04:56:57', '4'),
(9, '2023-02-02 04:57:04', '5'),
(10, '2026-05-26 00:00:00', '6'),
(16, '2023-02-02 06:34:27', '8'),
(18, '2023-02-02 06:38:34', '4'),
(20, '2023-02-02 06:56:13', '9'),
(23, '2023-02-02 14:16:29', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `grop` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `cost`, `price`, `grop`) VALUES
(1, 'ovssnka', '30.00', '113.00', 'zlaky'),
(2, 'grechka', '60.50', '90.80', 'zlaky'),
(5, 'bonaqva', '10.00', '22.00', 'voda'),
(6, 'hlib', '15.00', '33.00', 'zlaky'),
(7, 'pizza', '60.00', '120.00', 'fastfood'),
(8, 'zhivchik', '15.00', '34.00', 'voda'),
(9, 'mouse', '333.00', '444.00', 'animal');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `grope`
--
ALTER TABLE `grope`
  ADD PRIMARY KEY (`gr_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `grope`
--
ALTER TABLE `grope`
  MODIFY `gr_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
