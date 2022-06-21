-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 22 2022 г., 00:29
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wurstach`
--

-- --------------------------------------------------------

--
-- Структура таблицы `anons`
--

CREATE TABLE `anons` (
  `ID_Anons` int(11) NOT NULL,
  `Anons_title` varchar(32) NOT NULL,
  `Anons_text` varchar(64) NOT NULL,
  `Anons_img` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `anons`
--

INSERT INTO `anons` (`ID_Anons`, `Anons_title`, `Anons_text`, `Anons_img`) VALUES
(1, 'Вестибюль работает', 'Вестибюль снова работает в штатном режиме, после долгожданного р', '01_0001.jpg'),
(2, 'Итальянская мебель', 'Наши поставщики поставляют только настоящую итальянскую мебель', '01_0004.jpg'),
(3, 'Цены вырастают', 'С 2022 года цены на квартиры стремительно растут', '01_0005.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `category_tenants`
--

CREATE TABLE `category_tenants` (
  `ID_Category` int(11) NOT NULL,
  `Category_name` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `category_tenants`
--

INSERT INTO `category_tenants` (`ID_Category`, `Category_name`) VALUES
(1, 'Льготный'),
(2, 'Не льготный');

-- --------------------------------------------------------

--
-- Структура таблицы `category_voting`
--

CREATE TABLE `category_voting` (
  `ID_Category_voting` int(11) NOT NULL,
  `Category_voting` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `category_voting`
--

INSERT INTO `category_voting` (`ID_Category_voting`, `Category_voting`) VALUES
(15, 'За'),
(16, 'Против');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `ID_Feedback` int(11) NOT NULL,
  `Text_message` text DEFAULT NULL,
  `fio_feedback` varchar(128) NOT NULL,
  `email_feedback` varchar(64) NOT NULL,
  `Feedback_category` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`ID_Feedback`, `Text_message`, `fio_feedback`, `email_feedback`, `Feedback_category`) VALUES
(1, 'Здравствуйте, в подъезде уже месяц треснутая плитка', '', '0', '0'),
(2, 'Здравствуйте, подскажите, пожалуйста, где я могу узнать задолженность', '', '0', '0'),
(7, 'dsadasdas', 'dasdsasad', 'ddsadsa@dasdsa', 'Remont');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback_category`
--

CREATE TABLE `feedback_category` (
  `ID_Feedback_category` int(11) NOT NULL,
  `Feedback_category` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `feedback_category`
--

INSERT INTO `feedback_category` (`ID_Feedback_category`, `Feedback_category`) VALUES
(14, 'Remont'),
(15, 'Голосование'),
(16, 'Счёт'),
(17, 'Задолженности'),
(18, 'Данные о расходах и доходах'),
(19, 'Общее количество объектов на районе'),
(20, 'Другое');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title_news` varchar(32) NOT NULL,
  `text_news` varchar(128) NOT NULL,
  `img_news` varchar(64) NOT NULL,
  `role_news` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_news`, `title_news`, `text_news`, `img_news`, `role_news`) VALUES
(1, 'Ремонтные работы', 'Дорогие жильцы, завтра 31.05.2022 будут проведены ремонтные работы. В связи с проблемами отопления', '16.04.18.jpg', 1),
(2, 'Ремонтные работы', 'Дорогие жильцы, завтра 20.08.2022 будут проведены внеплановые ремонт работы в связи с деформацией дороги.', '16.04.25.jpg', 1),
(3, 'Парковка вновь открыта!', 'Уважаемые жильцы, парковая зона снова доступна и до конца 23 года будет действовать акция.', '16.05.10.jpg', 1),
(4, 'Закрытие паркинга', 'Дорогие жильцы, завтра 21.05.2020 парковка временно не доступна в связи с ремонтными работами.', '16.05.16.jpg', 0),
(5, 'Капремонт', 'Дорогие жильцы, завтра 27.06.2019 будет проведен капремонт на основании голосования жильцов.', '16.05.16.jpg', 0),
(6, 'Ремонтные работы', 'Дорогие жильцы, завтра 20.11.2017 будут проведены ремонтные работы.', '16.05.30.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `personal_account`
--

CREATE TABLE `personal_account` (
  `ID_Tenant` int(11) DEFAULT NULL,
  `ID_Role` int(11) DEFAULT NULL,
  `ID_utilities` int(11) DEFAULT NULL,
  `ID_Feedback` int(11) DEFAULT NULL,
  `ID_account_tenant` int(11) NOT NULL,
  `email_tenant` varchar(32) DEFAULT NULL,
  `password_tenant` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `personal_account`
--

INSERT INTO `personal_account` (`ID_Tenant`, `ID_Role`, `ID_utilities`, `ID_Feedback`, `ID_account_tenant`, `email_tenant`, `password_tenant`) VALUES
(1, 2, 3, 2, 4, 'kuznetsov@mpt.ru', 'c8837b23ff8aaa8a2dde915473ce0991');

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE `prices` (
  `ID_Prices` int(11) NOT NULL,
  `Rooms` int(32) NOT NULL,
  `Floors` int(32) NOT NULL,
  `Area` decimal(64,0) NOT NULL,
  `Price` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`ID_Prices`, `Rooms`, `Floors`, `Area`, `Price`) VALUES
(1, 1, 2, '89', 17940000),
(2, 1, 2, '90', 18100000),
(3, 1, 2, '131', 39000000),
(4, 2, 15, '132', 38000000),
(5, 3, 11, '136', 40000000),
(6, 2, 14, '190', 32000000),
(7, 3, 12, '80', 28000000);

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `ID_Role` int(11) NOT NULL,
  `Role_Name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`ID_Role`, `Role_Name`) VALUES
(2, 'Пользователь'),
(3, 'Гость');

-- --------------------------------------------------------

--
-- Структура таблицы `tenants`
--

CREATE TABLE `tenants` (
  `ID_Category` int(11) DEFAULT NULL,
  `ID_Tenant` int(11) NOT NULL,
  `Second_Name_Tenant` varchar(20) DEFAULT NULL,
  `First_Name_Tenant` varchar(20) DEFAULT NULL,
  `Middle_Name_Tenant` varchar(20) DEFAULT NULL,
  `Apartment_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tenants`
--

INSERT INTO `tenants` (`ID_Category`, `ID_Tenant`, `Second_Name_Tenant`, `First_Name_Tenant`, `Middle_Name_Tenant`, `Apartment_number`) VALUES
(1, 1, 'Кузнецов', 'Владимир', 'Николаевич', 72),
(2, 2, 'Арюков', 'Александр', 'Дмитриевич', 71);

-- --------------------------------------------------------

--
-- Структура таблицы `utulities`
--

CREATE TABLE `utulities` (
  `ID_utilities` int(11) NOT NULL,
  `debt_warning` varchar(60) DEFAULT NULL,
  `Amount_owed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `utulities`
--

INSERT INTO `utulities` (`ID_utilities`, `debt_warning`, `Amount_owed`) VALUES
(2, 'Имеется задолженность', 4000),
(3, 'Задолженности нет', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `voting_procedure`
--

CREATE TABLE `voting_procedure` (
  `ID_Tenant` int(11) DEFAULT NULL,
  `ID_voting_procedure` int(11) NOT NULL,
  `Text_procedure` text DEFAULT NULL,
  `ID_Category_voting` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `voting_procedure`
--

INSERT INTO `voting_procedure` (`ID_Tenant`, `ID_voting_procedure`, `Text_procedure`, `ID_Category_voting`) VALUES
(1, 1, 'Хорошая идея, спасиб', 15),
(2, 2, 'Зачем вы хотите что-то менять', 16),
(1, 3, 'Потрясающая идея', 15);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `anons`
--
ALTER TABLE `anons`
  ADD PRIMARY KEY (`ID_Anons`);

--
-- Индексы таблицы `category_tenants`
--
ALTER TABLE `category_tenants`
  ADD PRIMARY KEY (`ID_Category`);

--
-- Индексы таблицы `category_voting`
--
ALTER TABLE `category_voting`
  ADD PRIMARY KEY (`ID_Category_voting`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID_Feedback`);

--
-- Индексы таблицы `feedback_category`
--
ALTER TABLE `feedback_category`
  ADD PRIMARY KEY (`ID_Feedback_category`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Индексы таблицы `personal_account`
--
ALTER TABLE `personal_account`
  ADD PRIMARY KEY (`ID_account_tenant`),
  ADD KEY `ID_Feedback` (`ID_Feedback`),
  ADD KEY `ID_Role` (`ID_Role`),
  ADD KEY `ID_Tenant` (`ID_Tenant`),
  ADD KEY `ID_utilities` (`ID_utilities`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`ID_Prices`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID_Role`);

--
-- Индексы таблицы `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`ID_Tenant`),
  ADD KEY `ID_Category` (`ID_Category`);

--
-- Индексы таблицы `utulities`
--
ALTER TABLE `utulities`
  ADD PRIMARY KEY (`ID_utilities`);

--
-- Индексы таблицы `voting_procedure`
--
ALTER TABLE `voting_procedure`
  ADD PRIMARY KEY (`ID_voting_procedure`),
  ADD KEY `ID_Category_voting` (`ID_Category_voting`),
  ADD KEY `ID_Tenant` (`ID_Tenant`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category_tenants`
--
ALTER TABLE `category_tenants`
  MODIFY `ID_Category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `category_voting`
--
ALTER TABLE `category_voting`
  MODIFY `ID_Category_voting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID_Feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `feedback_category`
--
ALTER TABLE `feedback_category`
  MODIFY `ID_Feedback_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `personal_account`
--
ALTER TABLE `personal_account`
  MODIFY `ID_account_tenant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `prices`
--
ALTER TABLE `prices`
  MODIFY `ID_Prices` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `ID_Role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tenants`
--
ALTER TABLE `tenants`
  MODIFY `ID_Tenant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `utulities`
--
ALTER TABLE `utulities`
  MODIFY `ID_utilities` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `voting_procedure`
--
ALTER TABLE `voting_procedure`
  MODIFY `ID_voting_procedure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `personal_account`
--
ALTER TABLE `personal_account`
  ADD CONSTRAINT `personal_account_ibfk_1` FOREIGN KEY (`ID_Feedback`) REFERENCES `feedback` (`ID_Feedback`),
  ADD CONSTRAINT `personal_account_ibfk_2` FOREIGN KEY (`ID_Role`) REFERENCES `role` (`ID_Role`),
  ADD CONSTRAINT `personal_account_ibfk_3` FOREIGN KEY (`ID_Tenant`) REFERENCES `tenants` (`ID_Tenant`),
  ADD CONSTRAINT `personal_account_ibfk_4` FOREIGN KEY (`ID_utilities`) REFERENCES `utulities` (`ID_utilities`);

--
-- Ограничения внешнего ключа таблицы `tenants`
--
ALTER TABLE `tenants`
  ADD CONSTRAINT `tenants_ibfk_1` FOREIGN KEY (`ID_Category`) REFERENCES `category_tenants` (`ID_Category`);

--
-- Ограничения внешнего ключа таблицы `voting_procedure`
--
ALTER TABLE `voting_procedure`
  ADD CONSTRAINT `voting_procedure_ibfk_1` FOREIGN KEY (`ID_Category_voting`) REFERENCES `category_voting` (`ID_Category_voting`),
  ADD CONSTRAINT `voting_procedure_ibfk_2` FOREIGN KEY (`ID_Tenant`) REFERENCES `tenants` (`ID_Tenant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
