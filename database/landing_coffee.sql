-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 17 2018 г., 03:46
-- Версия сервера: 5.7.20
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
-- База данных: `landing_coffee`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin_navigates`
--

CREATE TABLE `admin_navigates` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin_navigates`
--

INSERT INTO `admin_navigates` (`id`, `title`, `slug`, `icon`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Шапка', 'headers', 'notika-icon notika-menus', 1, NULL, NULL),
(2, 'Информация', 'informations', 'notika-icon notika-menus', 1, NULL, NULL),
(3, 'Кофи ', 'coffees', 'notika-icon notika-menus', 1, NULL, NULL),
(4, 'Галерея', 'galleries', 'notika-icon notika-menus', 1, NULL, NULL),
(5, 'Продукты', 'products', 'notika-icon notika-menus', 1, NULL, NULL),
(6, 'Прогресс', 'progresses', 'notika-icon notika-menus', 1, NULL, NULL),
(8, 'Подвал', 'footers', 'notika-icon notika-menus', 1, NULL, NULL),
(9, 'Меню', 'navigates', 'notika-icon notika-menus', 1, NULL, NULL),
(10, 'Контакты', 'contacts', 'notika-icon notika-menus', 1, NULL, NULL),
(11, 'Соц сети', 'socials', 'notika-icon notika-menus', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `navigate_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `active`, `navigate_id`, `created_at`, `updated_at`) VALUES
(1, 'Фон шапки сайта', 'header', 1, 6, NULL, NULL),
(2, 'Прогресс', 'progress', 1, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `coffees`
--

CREATE TABLE `coffees` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `coffees`
--

INSERT INTO `coffees` (`id`, `title`, `price`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Affogato', 25, 'Usage of the Internet is becoming more common due to rapid advance.', 1, '2018-12-13 21:02:55', '2018-12-13 21:02:55'),
(2, 'Ristretto', 25, 'Usage of the Internet is becoming more common due to rapid advance.', 1, '2018-12-13 21:03:31', '2018-12-13 21:03:31'),
(3, 'Piccolo Latte', 25, 'Usage of the Internet is becoming more common due to rapid advance.', 1, '2018-12-13 21:03:56', '2018-12-13 21:03:56'),
(4, 'Coffee Latte', 25, 'Usage of the Internet is becoming more common due to rapid advance.', 1, '2018-12-13 21:04:26', '2018-12-13 21:04:26'),
(5, 'Mocha', 25, 'Usage of the Internet is becoming more common due to rapid advance.', 1, '2018-12-13 21:05:18', '2018-12-13 21:05:18'),
(6, 'Macchiato', 25, 'Usage of the Internet is becoming more common due to rapid advance.', 1, '2018-12-13 21:06:00', '2018-12-13 21:06:00'),
(7, 'Espresso', 25, 'Usage of the Internet is becoming more common due to rapid advance.', 1, '2018-12-13 21:06:25', '2018-12-13 21:06:25'),
(8, 'Americano', 25, 'Usage of the Internet is becoming more common due to rapid advance.', 1, '2018-12-13 21:06:49', '2018-12-13 21:06:49'),
(9, 'Americano', 25, 'Usage of the Internet is becoming more common due to rapid advance.', 1, '2018-12-13 21:07:12', '2018-12-13 21:07:12'),
(10, 'Cappuccino', 25, 'Usage of the Internet is becoming more common due to rapid advance.', 0, '2018-12-13 21:07:40', '2018-12-13 21:12:58');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `active`, `created_at`, `updated_at`) VALUES
(3, 'awdwa@awdawd.com', 1, '2018-12-16 16:40:09', '2018-12-16 16:40:09'),
(4, 'estes@awd.com', 1, '2018-12-16 18:58:58', '2018-12-16 18:58:58');

-- --------------------------------------------------------

--
-- Структура таблицы `footers`
--

CREATE TABLE `footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_us` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyrite` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `footers`
--

INSERT INTO `footers` (`id`, `about_us`, `copyrite`, `background`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.', 'awdaw dawd awda wdww', 'footer-bg — копия.jpg', 1, '2018-12-06 14:57:28', '2018-12-14 15:10:36');

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `size`, `active`, `created_at`, `updated_at`) VALUES
(1, 'g3.jpg', '750 x 420', 1, NULL, '2018-12-14 14:48:17'),
(2, 'g2.jpg', '360 x 420', 1, NULL, '2018-12-14 14:47:48'),
(3, 'g1.jpg', '360 x 280', 1, NULL, '2018-12-14 14:40:22'),
(4, 'g4.jpg', '360 x 280', 1, NULL, '2018-12-14 14:48:06'),
(5, 'g5.jpg', '360 x 280', 1, NULL, '2018-12-14 14:48:39');

-- --------------------------------------------------------

--
-- Структура таблицы `headers`
--

CREATE TABLE `headers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `headers`
--

INSERT INTO `headers` (`id`, `title`, `link`, `background`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Начни день с черный кофей.', 'http://landingcoffee.loc#coffee', 'header-bg.jpg', 1, '2018-12-13 20:13:54', '2018-12-16 22:40:22');

-- --------------------------------------------------------

--
-- Структура таблицы `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `process` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clients` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `information`
--

INSERT INTO `information` (`id`, `process`, `title`, `clients`, `video`, `image`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, NULL, 'текст для азвани', NULL, 'https://www.youtube.com/watch?v=_VuyDiLEjOs', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur volutpat nunc, vitae maximus elit porta vitae. Sed eros felis, finibus nec arcu eu, rhoncus accumsan velit. Cras vitae lacus egestas, aliquet neque sed, volutpat eros. Quisque nisl nisl, fringilla nec convallis id, mollis ac dolor. Donec molestie diam eu mi placerat sodales. Cras placerat tincidunt eleifend. Etiam fringilla commodo laoreet. Nulla facilisi.', 1, '2018-12-13 20:42:20', '2018-12-13 20:57:37');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2018_12_05_110845_create_navigates_table', 1),
(7, '2018_12_05_132723_create_categories_table', 2),
(8, '2018_12_05_155233_create_headers_table', 3),
(10, '2018_12_06_163035_create_footers_table', 4),
(11, '2018_12_06_173724_create_navigates_table', 5),
(13, '2018_12_06_214343_create_information_table', 6),
(14, '2018_12_07_002304_create_coffees_table', 7),
(16, '2018_12_07_121231_create_galleries_table', 8),
(17, '2018_12_07_135446_create_products_table', 9),
(18, '2018_12_07_161928_create_progresses_table', 10),
(19, '2018_12_14_174558_create_contacts_table', 11),
(21, '2018_12_16_194831_create_socials_table', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `navigates`
--

CREATE TABLE `navigates` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `navigates`
--

INSERT INTO `navigates` (`id`, `title`, `slug`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Главный', 'home', 1, '2018-12-06 16:10:33', '2018-12-07 15:49:41'),
(2, 'О нас', 'about', 1, '2018-12-06 16:12:23', '2018-12-07 15:55:32'),
(3, 'Кофе', 'coffee', 1, '2018-12-07 15:55:26', '2018-12-07 15:55:26'),
(4, 'Обзор', 'review', 1, '2018-12-07 15:57:28', '2018-12-07 15:57:28'),
(5, 'Галерея', 'gallery', 1, '2018-12-07 15:57:59', '2018-12-07 15:57:59');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `icon`, `title`, `star`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'r1.png', 'WWE waewae', 3, 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.', 1, '2018-12-13 21:24:07', '2018-12-13 21:24:07'),
(2, 'r2.png', 'lorem ipusm', 4, 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.', 1, '2018-12-13 21:25:03', '2018-12-14 08:56:51');

-- --------------------------------------------------------

--
-- Структура таблицы `progresses`
--

CREATE TABLE `progresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `progresses`
--

INSERT INTO `progresses` (`id`, `title`, `value`, `active`, `created_at`, `updated_at`) VALUES
(2, 'Happy Client', 100, 1, '2018-12-14 09:00:37', '2018-12-14 09:00:37'),
(3, 'Total Projects', 200, 1, '2018-12-14 09:01:04', '2018-12-14 09:01:04'),
(4, 'Cups Coffee', 300, 1, '2018-12-14 09:01:16', '2018-12-14 09:01:16'),
(5, 'Total Submitted', 400, 1, '2018-12-14 09:01:29', '2018-12-14 09:01:29');

-- --------------------------------------------------------

--
-- Структура таблицы `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `socials`
--

INSERT INTO `socials` (`id`, `icon`, `title`, `link`, `active`, `created_at`, `updated_at`) VALUES
(3, 'fa-facebook', 'Facebook', 'https://www.facebook.com/profile.php?id=100031418014085&ref=bookmarks', 1, '2018-12-16 18:53:07', '2018-12-16 18:53:07'),
(4, 'fa-twitter', 'Twitter', 'https://twitter.com/jorayev2494', 1, '2018-12-16 18:56:05', '2018-12-16 18:56:05'),
(5, 'fa-instagram', 'Instagram', 'https://www.instagram.com/jorayev2494/?hl=ru', 1, '2018-12-16 18:57:05', '2018-12-16 18:57:05'),
(6, 'fa-vk', 'Vkontakte', 'https://vk.com/yakub2494', 1, '2018-12-16 18:58:10', '2018-12-16 18:58:10');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adimin', 'admin@admin.com', NULL, '$2y$10$AP9mmWLjkQ24TNX3Sv1kBOmmDUsSQvuc9qSxN5IyzQtmQdHyPzlGO', NULL, '2018-12-16 19:12:10', '2018-12-16 19:12:10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin_navigates`
--
ALTER TABLE `admin_navigates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_navigate_id_foreign` (`navigate_id`);

--
-- Индексы таблицы `coffees`
--
ALTER TABLE `coffees`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `navigates`
--
ALTER TABLE `navigates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `progresses`
--
ALTER TABLE `progresses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin_navigates`
--
ALTER TABLE `admin_navigates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `coffees`
--
ALTER TABLE `coffees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `navigates`
--
ALTER TABLE `navigates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `progresses`
--
ALTER TABLE `progresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_navigate_id_foreign` FOREIGN KEY (`navigate_id`) REFERENCES `admin_navigates` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
