-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Дек 14 2017 г., 16:52
-- Версия сервера: 5.6.35
-- Версия PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guestbook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `text` text,
  `author` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `text`, `author`, `status`, `ip`, `browser`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 1, 1, NULL, NULL),
(2, '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', 1, 1, NULL, NULL),
(9, 'Всем привеееет! и Пока! Куку!', 1, 0, '0', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(13, 'Красный замок мой! Я король\r\nА Старки в Винтерфеле', 101, 1, '0', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(18, 'Всем привет я себа', 104, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(19, 'Нэд Старк мой друг!\r\n', 101, 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(20, 'Бета тестирование проекта началось', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(21, 'Многие считают, что Станнис был бы никудышным королем, особенно в этом уверен его младший брат Ренли Баратеон. Действительно, Станнис больше похож на воина, чем на короля. Он слишком жесток и не очень-то и милосерден, но справедлив. Таких людей не любит простой народ. Но все же, несмотря на это, Станнис отличный полководец и способен завоевать Железный трон.', 105, 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(23, 'Где Гарри?', 114, 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(25, 'хрум-хрум, обожаю яблоки', 115, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(27, 'Робин Бобин Гуталин на носу горячий блин', 118, 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(32, 'я тут король', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(33, '{jxdddd', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(34, 'new message from admin', 1, 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(36, 'qsqw', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(37, 'ddd', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(38, 'dddd', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(39, 'ddd', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(40, 'ddddd', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(41, 'sadadasd', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(42, 'asdsad', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(43, 'ddd', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(45, 'dsdsdsd', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(46, ' Ghjdthjxyjt cjj,otybt gjkct bvtyyb href', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(47, 'Всем куку ', 122, 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(48, 'Всем доброго дня!', 122, 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(52, 'Тестовое собщение от РУстема', 127, 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(53, 'Сейчас накидаю вам тэгов -\r\n ,\r\nмежду span,\r\n\r\n\r\n', 128, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(54, 'Сейчас накидаю вам тэгов -\r\n ,\r\nмежду span,\r\n\r\n\r\n', 128, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(55, 'Сейчас накидаю вам тэгов -\r\n<br> ,\r\nмежду span,\r\n\r\n\r\n', 128, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(57, 'Сейчас накидаю вам тэгов которые обходят обработчик %)\r\n<br> ,\r\n<span>между span</span>,\r\n\r\n\r\n', 128, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(58, 'Сейчас накидаю вам тэгов -\r\n ,\r\nмежду span,\r\n\r\n\r\n', 128, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(59, 'посмотрим разрешены ли требуемые в ТЗ ТЕГИ\r\n<a href=”” title=””> </a>\r\n<code> </code>\r\n<i> </i>\r\n<strike></strike>\r\n<strong> </strong>', 101, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(60, 'посмотрим разрешены ли требуемые в ТЗ ТЕГИ\r\n<a href=”” title=””> </a>\r\n<code> </code>\r\n<i> </i>\r\n<strike></strike>\r\n<strong> </strong>\r\n\r\nИ до кучи которые запрещены\r\n -br\r\n - html', 101, 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(61, 'Проверка связи от админского аккаунта', 1, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(62, 'Всем привет, это проверка связи', 127, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(63, 'Make America great again!', 129, 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(64, 'happy Xmass', 129, 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30'),
(65, 'Warm welcome!', 129, 0, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_4) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `homepage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `pass`, `is_admin`, `email`, `homepage`) VALUES
(1, 'Sergey', '123', 1, 'admin@admin.com', 'Rockman.com'),
(101, 'Robert', '123', 0, 'robert@ms', 'korolevskaya.gavan.west'),
(104, 'Себастьян', '', 0, 'seba@aaa.so', 'seba.vomsadasd'),
(105, 'Станис', '', 1, 'stanis@throne.com', 'baraetron.com'),
(108, 'Rock', '321', 0, 'rockman@mail.dd', 'rockcool.com'),
(111, 'Volan', 'demort', 0, 'harry@mail.com', 'horrorpage'),
(114, 'Волан ', '', 0, 'volan@dd.com', 'volandemort.com'),
(115, 'Steve ', '', 0, 'apple@dev.com', 'apple.com'),
(118, 'Робин', '', 0, 'bobin@22.dd', 'robinbobin.com'),
(122, 'Марина', '33', 0, 'marina@ss.ss', 'marinc.com'),
(127, 'Рустем', 'rus', 0, 'rustem4ik@ddd.com', 'rustem.com'),
(128, 'Крутой_коддер', ' php', 1, 'codder@php.net', 'php.net'),
(129, 'Дональд', 'usa', 0, 'donaid@usa.com', 'whitehouse.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
