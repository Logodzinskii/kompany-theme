-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 29 2022 г., 16:03
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kitchen`
--

-- --------------------------------------------------------

--
-- Структура таблицы `price_kitchens`
--

CREATE TABLE `price_kitchens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameProject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameFacades` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageFacades` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeFacades` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `price_kitchens`
--

INSERT INTO `price_kitchens` (`id`, `nameProject`, `nameFacades`, `imageFacades`, `typeFacades`, `created_at`, `updated_at`) VALUES
(1, 'kitchen', 'Фрезеровка', 'images/frez.png', '[{\"nameFacades\":\"\\u041f\\u043b\\u0435\\u043d\\u043a\\u0430\",\"priceFacades\":\"16250\"},{\"nameFacades\":\"\\u042d\\u043c\\u0430\\u043b\\u044c\",\"priceFacades\":\"17250\"}]', NULL, NULL),
(2, 'kitchen', '3D Фрезеровка', 'images/3dfrez.png', '[{\"nameFacades\":\"\\u041f\\u043b\\u0435\\u043d\\u043a\\u0430\",\"priceFacades\":\"18250\"},{\"nameFacades\":\"\\u042d\\u043c\\u0430\\u043b\\u044c\",\"priceFacades\":\"19250\"}]', NULL, NULL),
(3, 'kitchen', 'Прямой', 'images/prjam.png', '[{\"nameFacades\":\"\\u041f\\u043b\\u0435\\u043d\\u043a\\u0430\",\"priceFacades\":\"20250\"},{\"nameFacades\":\"\\u042d\\u043c\\u0430\\u043b\\u044c\",\"priceFacades\":\"21250\"},{\"nameFacades\":\"\\u041f\\u043b\\u0430\\u0441\\u0442\\u0438\\u043a\",\"priceFacades\":\"22250\"}]', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `price_kitchens`
--
ALTER TABLE `price_kitchens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `price_kitchens`
--
ALTER TABLE `price_kitchens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
