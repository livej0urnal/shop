-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 01 2019 г., 16:14
-- Версия сервера: 5.6.38
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
-- База данных: `shoplocal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_up` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) NOT NULL,
  `content` text,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `recent_img` varchar(255) DEFAULT NULL,
  `related_img` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `related` enum('0','1') DEFAULT '0',
  `recent` enum('0','1') DEFAULT '0',
  `enable` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `category_id`, `created_up`, `name`, `content`, `keywords`, `description`, `img`, `recent_img`, `related_img`, `author`, `related`, `recent`, `enable`) VALUES
(1, 1, '2018-03-13 00:00:00', 'WAYS ADVERTISING AGENCIES CAN PROTECT THEMSELVES', '<p>We possess within us two minds. So far I have written only of the conscious mind. It&#39;s the fastest-funded project and also the most funded - by far. We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly with feeling and emotion are quickened, charged and changed into their physical equivalent. &quot;Be who you are and say what you feel, because those who mind don&#39;t matter, and those who matter don&#39;t mind.&quot; Bernard M. Baruch Afela Theme is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power and complexity that it literally staggers the imagination. Our theme is the best flexible theme Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly with feeling and emotion are quickened, charged. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly with feeling and emotion are quickened, charged and changed into their physical equivalent.</p>\r\n', 'Multi-purpose', '<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>\r\n', 'post_img_1.jpg', 'post_thumb_2.jpg', 'gallery_post_img_1.jpg', 'Admin', '1', '1', '1'),
(2, 2, '2018-03-02 20:55:48', 'LATEST SUMMER COLLECTION', '<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>\r\n', '', '<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>\r\n', 'post_img_3.jpg', 'post_thumb_2.jpg', 'gallery_post_img_3.jpg', 'Vlada', '1', '1', '1'),
(3, 1, '2018-03-02 20:55:50', 'Latest summer collection', '<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>\r\n\r\n<p><img alt=\"\" src=\"/upload/global/comment_1.jpg\" style=\"height:70px; width:70px\" /></p>\r\n', '', '<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>\r\n', 'post_img_3.jpg', 'post_thumb_1.jpg', 'gallery_post_img_2.jpg', 'Admin', '1', '1', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `name`, `keywords`, `description`) VALUES
(1, 'Business', 'test keywords', 'test blog description'),
(2, 'Science', 'test keywords', 'test description'),
(3, 'Sport', NULL, NULL),
(4, 'Politics', NULL, NULL),
(5, 'Lifestyle', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `blogcomments`
--

CREATE TABLE `blogcomments` (
  `id` int(10) NOT NULL,
  `article_id` int(10) NOT NULL,
  `author` varchar(255) NOT NULL,
  `img_author` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blogcomments`
--

INSERT INTO `blogcomments` (`id`, `article_id`, `author`, `img_author`, `content`) VALUES
(1, 1, 'Alina', 'comment_1.jpg', '<p>This template is so awesome. I didn&rsquo;t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>\r\n\r\n<p>All of my good.</p>\r\n'),
(2, 3, 'Amigor', 'comment_2.jpg', 'This is goooood!'),
(3, 1, 'Igor', 'comment_3.jpg', 'This is work!!'),
(4, 2, 'Vlada', 'comment_1.jpg', 'This is a good platform of my site');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `keywords`, `description`, `img`) VALUES
(1, 0, 'For Man', '', '', 'banner.jpg'),
(2, 0, 'For Woman', NULL, NULL, 'banner.jpg'),
(3, 0, 'Accessories', NULL, NULL, ''),
(4, 0, 'Bags', NULL, NULL, ''),
(5, 1, 'Shirts', NULL, NULL, ''),
(6, 1, 'Jeans', NULL, NULL, ''),
(7, 1, 'Accessories', NULL, NULL, ''),
(8, 1, 'Shoes', NULL, NULL, ''),
(9, 2, 'Dresses', '', 'Category description', 'banner.jpg'),
(10, 2, 'Coats', NULL, NULL, ''),
(11, 2, 'Sandals', NULL, NULL, ''),
(12, 3, 'Wallets', '', '', ''),
(13, 3, 'Watches', '', NULL, ''),
(14, 3, 'Scarfs', NULL, NULL, ''),
(15, 4, 'Leather', NULL, NULL, ''),
(16, 4, 'Sports', NULL, NULL, ''),
(17, 4, 'Street Style', 'сумки описание...', 'сумки описание...', ''),
(18, 4, 'Creative', '', '', 'banner.img');

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filePath` varchar(400) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `isMain` tinyint(1) DEFAULT NULL,
  `modelName` varchar(150) NOT NULL,
  `urlAlias` varchar(400) NOT NULL,
  `name` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1520957338),
('m140622_111540_create_image_table', 1520957342),
('m140622_111545_add_name_to_image_table', 1520957342);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `qty` int(10) NOT NULL,
  `sum` float NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `created_at`, `updated_at`, `qty`, `sum`, `status`, `name`, `email`, `phone`, `address`) VALUES
(10, '2018-02-25 17:08:41', '2018-02-25 17:08:41', 2, 170, '1', 'Igor', 'admin@d.ru', '+380986392868', 'Adress Kremenchug'),
(11, '2018-02-25 17:09:32', '2018-03-08 00:00:00', 4, 270, '0', 'Igor', 'admin@d.ru', '+380986392868', 'Adress Kremenchug'),
(12, '2018-02-25 17:11:13', '2018-03-08 00:00:00', 5, 150, '0', 'Igor', 'admin@d.ru', '+380986392868', 'Adress Kremenchug'),
(13, '2018-02-25 17:21:39', '2018-02-25 17:21:39', 2, 140, '0', 'Igor', 'admin@d.ru', '+380986392868', 'Adress Kremenchug'),
(14, '2018-02-25 17:22:18', '2018-02-25 17:22:18', 2, 140, '0', 'Igor', 'admin@d.ru', '+380986392868', 'Adress Kremenchug'),
(15, '2018-02-25 17:23:33', '2018-02-25 17:23:33', 2, 140, '0', 'Igor', 'admin@d.ru', '+380986392868', 'Adress Kremenchug'),
(16, '2018-02-25 17:24:57', '2018-02-25 17:24:57', 2, 140, '0', 'Igor', 'admin@d.ru', '+380986392868', 'Adress Kremenchug'),
(18, '2018-03-05 21:42:35', '2018-03-06 00:00:00', 1, 70, '1', 'Igor', 'admin@d.ru', '+380986392868', 'Kremenchug'),
(19, '2018-03-06 22:11:43', '2018-03-06 22:11:43', 4, 280, '0', 'Igor', 'admin@d.ru', '+380986392868', 'Kremenchug'),
(20, '2018-04-02 21:54:34', '2018-04-02 21:54:34', 1, 20, '0', 'Igor', 'admin@d.ru', '+380986392868', 'Kremenchug'),
(21, '2018-04-07 01:05:50', '2018-04-07 01:05:50', 1, 20, '0', 'Igor', 'admin@d.ru', '+380986392868', 'Kremenchug'),
(22, '2018-08-25 15:13:14', '2018-08-25 15:13:14', 1, 150, '0', 'Igor', 'anubis3009@gmail.com', '+38098866638', 'Kremenchug');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty_item` int(11) NOT NULL,
  `sum_item` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `name`, `price`, `qty_item`, `sum_item`) VALUES
(40, 9, 5, 'Minty Dress', 0, 1, 0),
(41, 10, 4, 'Sexy Pink Dress', 70, 1, 70),
(42, 10, 6, 'Sexy White Dress', 100, 1, 100),
(43, 11, 4, 'Sexy Pink Dress', 70, 1, 70),
(44, 11, 5, 'Minty Dress', 0, 1, 0),
(45, 11, 6, 'Sexy White Dress', 100, 2, 200),
(46, 12, 4, 'Sexy Pink Dress', 70, 1, 70),
(47, 12, 3, 'Long Black Dress', 20, 4, 80),
(48, 13, 4, 'Sexy Pink Dress', 70, 2, 140),
(49, 14, 4, 'Sexy Pink Dress', 70, 2, 140),
(50, 15, 4, 'Sexy Pink Dress', 70, 2, 140),
(51, 16, 4, 'Sexy Pink Dress', 70, 2, 140),
(52, 17, 6, 'Sexy White Dress', 100, 5, 500),
(53, 17, 7, 'Elegant Pink Dress', 500, 15, 7500),
(54, 18, 4, 'Sexy Pink Dress', 70, 1, 70),
(55, 19, 4, 'Sexy Pink Dress', 70, 4, 280),
(56, 20, 3, 'Long Black Dress', 20, 1, 20),
(57, 21, 3, 'Long Black Dress', 20, 1, 20),
(58, 22, 17, 'Chaz Kangeroo Hoodies  ', 150, 1, 150);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text,
  `price` float NOT NULL DEFAULT '0',
  `old_price` float NOT NULL DEFAULT '0',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'no-image.png',
  `cover_img` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `single_img` varchar(255) DEFAULT NULL,
  `hit` enum('0','1') NOT NULL DEFAULT '0',
  `new` enum('0','1') NOT NULL DEFAULT '0',
  `sale` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `content`, `price`, `old_price`, `keywords`, `description`, `img`, `cover_img`, `single_img`, `hit`, `new`, `sale`) VALUES
(1, 9, 'Night Party Dress', '<p><strong>Великолепные</strong> джинсы винтажно-голубого цвета. Настоящая находка для любителей качественного денима. Особенности: Зауженные к низу Пять карманов Высококачественный деним Высокая посадка (high fit) Выгодно подчеркивают фигуру</p>\r\n', 10, 0, '', '', '/img/shop/shop_item_1.jpg', '/img/shop/collection_3.jpg', '/img/shop/single_img_1.jpg', '0', '0', '1'),
(2, 9, 'Elegant White Dress', '<p>MR520 &ndash; амбициозный восточноевропейский бренд, который предлагает качественную и стильную одежду, сделанную специально для молодых людей, следящих за своим внешним видом. Женские джинсы фасона boyfriend fit (в переводе с англ. &ndash; &quot;джинсы моего парня&quot;). Модель с зауженными штанинами. Застегивается на пуговицы. Изделие с низкой посадкой. Джинсы дополнены прорезными карманами спереди и накладными карманами сзади. Изделие декорировано эффектом потертости, вареным эффектом и необычными швами.</p>\r\n', 56, 0, '', '', '/img/shop/shop_item_2.jpg', '/img/shop/shop_item_2_back.jpg', '/img/shop/single_img_2.jpg', '1', '1', '0'),
(3, 9, 'Long Black Dress', '<p>Испанский бренд модной одежды &quot;Mango&quot; родился в 1984 году в Барселоне, где и по сей день находится штаб-квартира компании. В том же городе появился и первый магазин &mdash; на улице Пасео де Грасия (Paseo de Gracia). Компания, основанная братьями Исааком и Нахманом Андиком (Isaac &amp; Nahman Andic), очень быстро набрала популярность &mdash; всего лишь годом позднее был открыт магазин в другом городе, на этот раз в Валенсии. Одежда &quot;Mango&quot; отличается высоким качеством, приемлемой ценой, современным дизайном и неповторимым стилем.</p>\r\n', 20, 0, 'Тест кейвордс', '<p>Тест дескриптшион</p>\r\n', '/img/shop/shop_item_3.jpg', '/img/shop/shop_item_3_back.jpg', '/img/shop/single_img_3.jpg', '1', '1', '0'),
(4, 9, 'Sexy Pink Dress', '\r\n\r\nTom Tailor Group — один из ведущих и быстро развивающихся Fashion холдингов германии и европы, продукция которого ориентирована на целевую аудиторию в возрасте от 0 до 60 лет.\r\n\r\nTom Tailor известен на рынке текстиля с 1962 года и до сих пор сохраняет стандарты немецкого качества. Tom Tailor предлагает повседневную одежду и аксессуары высокого качества для женщин, мужчин и детей.\r\n\r\nОдежда от Tom Tailor поможет создать активный повседневный образ с нотками элегантности.', 70, 0, NULL, NULL, '/img/shop/shop_item_4.jpg', '/img/shop/shop_item_4_back.jpg', '/img/shop/single_img_3.jpg', '1', '1', '1'),
(5, 9, 'Minty Dress', NULL, 0, 0, NULL, NULL, '/img/shop/shop_item_5.jpg', '/img/shop/shop_item_5_back.jpg', '/img/shop/no-image.jpg', '0', '1', '0'),
(6, 9, 'Sexy White Dress', NULL, 100, 0, NULL, NULL, '/img/shop/shop_item_6.jpg', '/img/shop/shop_item_6_back.jpg', '/img/shop/single_img_4.jpg', '0', '1', '0'),
(7, 9, 'Elegant Pink Dress', '\r\n\r\nCasual марка молодежной женской одежды ONLY является частью датской компании Bestseller AS. Изначально Bestseller занимался производством детской одежды, а в 1995 году появилась на свет марка ONLY. Популярность этой марки возрастала быстрыми темпами и теперь ONLY владеет 770 магазинами в более чем 40 странах мира.\r\n\r\nONLY — бренд стильной молодежной одежды. Это бренд для тех, кто любит добиваться успеха и быть не таким, как все. Демократичные цены, модные модели, экологически чистые ткани делают одежду от ONLY сверхпопулярной.', 500, 0, NULL, NULL, '/img/shop/shop_item_7.jpg', '/img/shop/shop_item_7_back.jpg', '/img/shop/single_img_2.jpg', '0', '1', '0'),
(8, 9, 'Gray California Dress', '\r\n\r\nКомпания SK House — это украинский производитель модной женской одежды с безупречной репутацией и тысячами поклонников по всему СНГ. SK House изготавливает качественный и долговечный товар, созданный из высококачественных тканей. Компания использует современные методы пошива и, изучая текущие мировые тенденции и локальные требования покупателей, создает модели, которые не задерживаются на полках длительное время и быстро раскупаются во всех странах.', 99, 0, NULL, NULL, '/img/shop/shop_item_8.jpg', '/img/shop/shop_item_8_back.jpg', '/img/shop/no-image.jpg', '0', '1', '1'),
(9, 9, 'Minty Dress', NULL, 0, 0, NULL, NULL, '/img/shop/shop_item_9.jpg', '/img/shop/shop_item_9_back.jpg', '/img/shop/no-image.jpg', '0', '0', '0'),
(10, 9, 'Sexy White Dress', 'Простота, инновационный стиль бренда, высококачественные требования к продукции, благодаря этому GUSSACI Italy пользуется высокой репутацией во многих странах Европы. Превосходное качество, отличный дизайн, соответствующие цены делают \"Гуссачи\" модным и популярным!\r\n\r\nОсобенности:\r\n\r\nКоличество основных отделений: 1. Сумка имеет прорезной карман на молнии, а также два небольших накладных кармана для хранения мобильного телефона, разных портативных гаджетов и мелочей. На лицевой стороне модели есть узкий прорезной карман на \"молнии\". На тыльной стороне модели есть прорезной карман на \"молнии\". Особенностью данной модели является возможность изменения ее формы при помощи дополнительной внешней застежки-молнии. Сумка имеет 2 ручки для переноса на локте или в руке. Их длина не регулируется и составляет 45 см, а высота от крайней точки ручки до сумки — 16 см. В комплект к изделию прилагается съемный плечевой ремень. Его длина может регулироваться при помощи металлической пряжки от 78 до 137.5 см. Сумка закрывается при помощи застежки-молнии.\r\n\r\nМатериал подкладки: плотная ткань.\r\nМатериал сумки: кожезаменитель.\r\nЦвет фурнитуры: золото.\r\nРазмеры сумки: 26 х 25 х 10.5 см', 15, 150, NULL, NULL, '/img/shop/shop_item_10.jpg', '/img/shop/shop_item_10_back.jpg', '/img/shop/single_img_5.jpg', '0', '1', '0'),
(11, 9, 'Elegant Pink Dress', '\r\n\r\nОсобенность стиля Michael Kors заключается в том, что простота его коллекций гармонирует с роскошью. Этому дизайнеру под силу объединить американский утилитаризм в манере одеваться с европейской изысканностью и шармом. Все его работы отличает изящная утонченность, которая рождается из строгих, почти примитивных линий. Все аксессуары поддерживают общий стиль человека с безупречным вкусом.\r\n\r\nМодели Michael Kors могут оставаться оригинальными, стильными и неотразимыми в течение многих лет, что особо важно для покупательниц, не желающих постоянно обновлять свой гардероб.', 200, 0, NULL, NULL, '/img/shop/shop_item_11.jpg', '/img/shop/shop_item_11_back.jpg', '/img/shop/single_img_1.jpg', '0', '1', '1'),
(12, 9, 'Gray California Dress', '\r\n\r\nОсобенность стиля Michael Kors заключается в том, что простота его коллекций гармонирует с роскошью. Этому дизайнеру под силу объединить американский утилитаризм в манере одеваться с европейской изысканностью и шармом. Все его работы отличает изящная утонченность, которая рождается из строгих, почти примитивных линий. Все аксессуары поддерживают общий стиль человека с безупречным вкусом.\r\n\r\nМодели Michael Kors могут оставаться оригинальными, стильными и неотразимыми в течение многих лет, что особо важно для покупательниц, не желающих постоянно обновлять свой гардероб.', 205, 300, NULL, NULL, '/img/shop/shop_item_12.jpg', '/img/shop/shop_item_12_back.jpg', '/img/shop/no-image.jpg', '1', '0', '0'),
(13, 1, 'Endeavor Daytrip  ', 'Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman\'s wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!', 100, 0, NULL, NULL, '/img/shop/shop_item_13.jpg', '/img/shop/shop_item_13_back.jpg', '/img/shop/single_img_6.jpg', '0', '1', '0'),
(14, 1, 'Driven Backpacks  ', 'Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which has since evolved into a full ready-to-wear collection in which every item is a vital part of a woman\'s wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!', 26.99, 30, NULL, NULL, '/img/shop/shop_item_14.jpg', '/img/shop/shop_item_14_back.jpg', '/img/shop/single_img_7.jpg', '1', '1', '1'),
(15, 1, 'Bess Yoga Shorts  ', 'Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman\'s wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!', 30, 50, NULL, NULL, '/img/shop/shop_item_15.jpg', '/img/shop/shop_item_15_back.jpg', '/img/shop/single_img_8.jpg', '1', '1', '1'),
(16, 2, 'Savvy Shoulder Totes  ', 'Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which has since evolved into a full ready-to-wear collection in which every item is a vital part of a woman\'s wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!', 120, 150, NULL, NULL, '/img/shop/shop_item_16.jpg', '/img/shop/shop_item_16_back.jpg', '/img/shop/single_img_9.jpg', '1', '1', '1'),
(17, 2, 'Chaz Kangeroo Hoodies  ', 'Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman\'s wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!', 150, 299, NULL, 'Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.', '/img/shop/shop_item_17.jpg', '/img/shop/shop_item_17_back.jpg', '/img/shop/single_img_10.jpg', '1', '1', '1'),
(18, 2, 'Drawstring Shorts  ', 'Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman\'s wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!', 3000, 5000, '', 'Test', '/img/shop/shop_item_18.jpg', '/img/shop/shop_item_18_back.jpg', '/img/shop/single_img_11.jpg', '1', '1', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `image`, `title`, `description`, `link`, `class`) VALUES
(1, '/img/slider/1.jpg', 'Collection 2017', '<p>A-ha Theme is the Best E-Commerce solutions</p>\r\n', '/category/1', 'right-align'),
(2, '/img/slider/2.jpg', 'Winter Sales', 'A-ha Theme is the Best E-Commerce solution', '/category/2', 'text-center'),
(3, '/img/slider/3.jpg', 'Autumn 2017', '<p>A-ha Theme is the Best E-Commerce solution</p>\r\n', '/category/9', 'left-align'),
(4, '/img/slider/4.jpg', 'Summer 2017', '<p>A-ha Theme is the Best E-Commerce solution</p>\r\n', '/category/4', 'right-align'),
(5, '/img/slider/3.jpg', 'TEST SLIDER', '<p>Test sliders</p>\r\n', '/category/9', 'left-align');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'admin', '$2y$13$6T/4d8jh1H92.zJDTro/z.a8zFGbOma1tTe9qMkAwnwtKdp7IkUM6', 'w8e4YR6uNIcqthf1zPPJnvLWC');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blogcomments`
--
ALTER TABLE `blogcomments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`,`parent_id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `blogcomments`
--
ALTER TABLE `blogcomments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
