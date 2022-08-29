-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 29 2022 г., 14:24
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wsr`
--

-- --------------------------------------------------------

--
-- Структура таблицы `school_clothes`
--

CREATE TABLE `school_clothes` (
  `id` int NOT NULL,
  `gender` varchar(20) NOT NULL,
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `size` text NOT NULL,
  `price` float NOT NULL,
  `structure` text,
  `country` varchar(20) NOT NULL,
  `description` text,
  `id_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `school_clothes`
--

INSERT INTO `school_clothes` (`id`, `gender`, `name`, `size`, `price`, `structure`, `country`, `description`, `id_image`) VALUES
(19, 'Для девочек', 'Брюки для девочек', '[\"122\",\"128\",\"134\",\"140\",\"146\",\"152\",\"164\",\"170\"]', 1599, '67% Вискоза, 28% Нейлон, 5% Эластан', 'Китай', 'Тип полотна - интерлок\r\n- Дизайн полотна - однотонный\r\n- Посадка - прилегающая\r\n- Силуэт - прямой\r\n- Полная длина\r\n- Застёжка на молнию\r\n- Задние накладные карманы, имитация \r\nкарманов спереди\r\n- Конструктивные особенности - кокетка на \r\nспинке; пояс, регулируемый по ширине', '[\"66901820299.jpg\",\"66901830299.jpg\"]'),
(23, 'Для девочек', 'Кардиган для девочек', '[\"122\",\"128\",\"134\",\"140\",\"146\",\"152\",\"164\",\"170\"]', 1599, '53% Вискоза, 27% Полиэстер, 20% Нейлон', 'Китай', '- Тип вязки - базовая\r\n- Класс вязки - cредней плотности\r\n- Дизайн пряжи - однотонный\r\n- Посадка - полуприлегающая\r\n- Силуэт - прямой\r\n- Длина - до бёдер\r\n- Длинный рукав реглан\r\n- V-образный вырез горловины\r\n- Застёжка на пуговицы', '[\"66901560299.jpg\",\"66901570299.jpg\"]'),
(30, 'Для девочек', 'Кардиган для девочек', '[\"122\",\"128\",\"134\",\"140\",\"146\",\"152\",\"164\",\"170\"]', 1199, '55% Полиэстер, 41% Вискоза, 4% Эластан', 'Китай', '- Тип вязки - в рубчик\r\n- Класс вязки - тонкая\r\n- Дизайн пряжи - однотонная\r\n- Посадка - полуприлегающая\r\n- Силуэт - прямой\r\n- Удлинённая модель\r\n- Длинный втачной рукав\r\n- Конструктивные особенности - прямая \r\nлиния низа', '[\"67318020299.jpg\",\"67318030299.jpg\",\"69245110299.jpg\",\"69245130299.jpg\",\"69401010299.jpg\"]'),
(32, 'Для мальчиков', 'Жилет вязаный для мальчиков', '[\"122\",\"128\",\"134\",\"140\",\"146\",\"152\",\"164\",\"170\"]', 899, '100% Хлопок', 'Китай', '- Тип вязки - базовая (кулирная гладь)\r\n- Класс вязки - тонкая\r\n- Дизайн пряжи - однотонная\r\n- Посадка - полуприлегающая\r\n- Силуэт - прямой\r\n- Длина - до бёдер\r\n- V-образный вырез горловины', '[\"67244950299.jpg\",\"67244960299.jpg\",\"67244980299.jpg\",\"67244990299.jpg\",\"67245000299.jpg\",\"67245010299.jpg\"]'),
(36, 'Для мальчиков', 'Поло для мальчиков', '[\"122\",\"128\",\"134\",\"140\",\"146\",\"152\",\"164\",\"170\"]', 999, '60% Хлопок, 40% Полиэстер', 'Бангладеш', '- Тип ткани - пике\r\n- Дизайн ткани - меланж\r\n- Посадка - полуприлегающая\r\n- Силуэт - прямой\r\n- Длина - до бёдер\r\n- Короткий втачной рукав\r\n- Воротник - поло\r\n- Застёжка на пуговицы\r\n- Конструктивные особенности - рукава на \r\nрибе', '[\"67246730299.jpg\",\"67246750299.jpg\",\"67246760299.jpg\",\"67246770299.jpg\",\"67246780299.jpg\"]');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `fatherName` varchar(20) NOT NULL,
  `dataBorn` date NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `lastName`, `fatherName`, `dataBorn`, `login`, `password`) VALUES
(44, 'Svetlana', '', '', '1986-07-16', 'admin', '$2y$10$fsGa8/k.BRloRpj5d.RvnOJ4cZORdj3uN2uEoRzOvA8hoC/a1expq'),
(46, 'Дмитрий', 'Петров', 'Васильевич', '1983-05-12', 'dimon', '$2y$10$yGxCTsd1IckReRZ6WWDnqepwTBQp7In53h8rvoS07WjK9fh1ZDb1i'),
(47, 'Марина', 'Иванова', 'Сергеевна', '1989-09-05', 'marina', '$2y$10$erS7OMsPQhfZZa8Q2n9am.Rp4lXWl15VEU8DujzjmyPfwRAvofmN6'),
(48, 'Григорий', 'Смирнов', 'Петрович', '1988-01-14', 'goga', '$2y$10$gcqet8dFfAN5EMr/leEnlOQXPMDtfxdLm.t8Su.C3Ec/l6HrKoZHW'),
(49, 'Николай', 'Орлов', 'Сергеевич', '1991-11-14', 'koly123', '$2y$10$ss3g9ya26OucRsrEGVP1euoxAoTSKyBMYRsguBJrwLcS0mjX.LPP6'),
(50, 'Елена', 'Дрокова', 'Дмитриевна', '1999-10-25', 'lenok', '$2y$10$cRyq6RzSbfRQsZDUcyZ8wu2GLflYHehPpxAw9Z5QsqlGjKhiW6fA6'),
(51, 'Роман', 'Федотов', 'Даниилович', '1986-02-18', 'roma86', '$2y$10$Qo.kAmANg5IOZYXxeeVGO.0z3rbI9yc.vzdk7Tv/7md79.9H0XAg6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `school_clothes`
--
ALTER TABLE `school_clothes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `school_clothes`
--
ALTER TABLE `school_clothes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
