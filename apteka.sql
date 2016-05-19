-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 19 2016 г., 08:48
-- Версия сервера: 5.5.45
-- Версия PHP: 5.4.44

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `apteka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `name` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`name`, `s_name`, `messages`) VALUES
('Akmat', 'pochta.akmat@gmail.com', 'dfkjgksdjfg;j;dhkldfghdjghdfh');

-- --------------------------------------------------------

--
-- Структура таблицы `orderss`
--

CREATE TABLE IF NOT EXISTS `orderss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gorod` varchar(255) NOT NULL,
  `telefon` int(11) NOT NULL,
  `datee` date NOT NULL,
  `timee` time NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE IF NOT EXISTS `tovar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `artikul` text NOT NULL,
  `proizvoditel` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `name`, `artikul`, `proizvoditel`, `price`, `img`) VALUES
(1, 'Налгезин таб №10\r\n', '1015417', 'КРКА', 800, '1.jpg'),
(2, 'Дип Рилиф гель 5% 50 №1', '1005995', 'Ментолатум', 600, '2.jpg'),
(3, 'Лолисан Леденцы с медом и лимоном упк №12', '1091834', 'Lozen Pharma', 899.99, '3.jpg'),
(4, 'Мезим форте таб 10000ЕД', '1086643', ' Берлин-Хеми', 755, '4.jpg'),
(5, 'Белый уголь таб 210мг №10', '1025327', 'Омнифарма Киев', 555, '5.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
