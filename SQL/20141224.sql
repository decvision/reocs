-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成日時: 2014 年 12 月 24 日 02:33
-- サーバのバージョン: 5.5.33
-- PHP のバージョン: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `reoc`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `cake_sessions`
--

CREATE TABLE `cake_sessions` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `data` text NOT NULL,
  `expires` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `cake_sessions`
--

INSERT INTO `cake_sessions` (`id`, `data`, `expires`) VALUES
('06f773312103b51569ccbc218dd506ff', 'Config|a:3:{s:9:"userAgent";s:32:"31ee7814f2648f9d96028fd759c772b5";s:4:"time";i:1418310252;s:9:"countdown";i:10;}', 1418310252),
('2ee43dc73ea3fa82555740dfa2d6ef17', 'Config|a:3:{s:9:"userAgent";s:32:"f40f062742418008a152df2f40783c64";s:4:"time";i:1420200164;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:5:"alert";s:6:"params";a:2:{s:6:"plugin";s:9:"BoostCake";s:5:"class";s:11:"alert-error";}}}Auth|a:1:{s:8:"redirect";s:14:"/charas/view/1";}', 1420200164),
('39f800671ff01ecd91d41b23b6c8f3fd', 'Config|a:3:{s:9:"userAgent";s:32:"f40f062742418008a152df2f40783c64";s:4:"time";i:1420200164;s:9:"countdown";i:10;}', 1420200164),
('41c71c8d78e755beb57668406450b45d', 'Config|a:3:{s:9:"userAgent";s:32:"31ee7814f2648f9d96028fd759c772b5";s:4:"time";i:1419580715;s:9:"countdown";i:10;}Message|a:2:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:5:"alert";s:6:"params";a:2:{s:6:"plugin";s:9:"BoostCake";s:5:"class";s:11:"alert-error";}}s:5:"flash";a:3:{s:7:"message";s:39:"キャラクターを投稿しました";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:6:{s:2:"id";s:1:"7";s:9:"user_code";s:4:"test";s:9:"user_name";s:9:"テスト";s:12:"mail_address";s:13:"test@test.com";s:7:"created";s:19:"2014-04-30 21:16:39";s:7:"updated";s:19:"2014-04-30 21:16:39";}}', 1419580716),
('66010a09980b71c454e0e92067b9fc1d', 'Config|a:3:{s:9:"userAgent";s:32:"f40f062742418008a152df2f40783c64";s:4:"time";i:1427981815;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:5:"alert";s:6:"params";a:2:{s:6:"plugin";s:9:"BoostCake";s:5:"class";s:11:"alert-error";}}}Auth|a:1:{s:4:"User";a:6:{s:2:"id";s:1:"7";s:9:"user_code";s:4:"test";s:9:"user_name";s:9:"テスト";s:12:"mail_address";s:13:"test@test.com";s:7:"created";s:19:"2014-04-30 21:16:39";s:7:"updated";s:19:"2014-04-30 21:16:39";}}', 1427981815),
('7b7780fc526ffe0f487eddcb6c0c39a3', 'Config|a:3:{s:9:"userAgent";s:32:"f40f062742418008a152df2f40783c64";s:4:"time";i:1427452653;s:9:"countdown";i:10;}Message|a:2:{s:4:"auth";a:3:{s:7:"message";s:44:"ユーザIDかパスワードが違います";s:7:"element";s:7:"default";s:6:"params";a:0:{}}s:5:"flash";a:3:{s:7:"message";s:39:"キャラクターを投稿しました";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:6:{s:2:"id";s:1:"7";s:9:"user_code";s:4:"test";s:9:"user_name";s:9:"テスト";s:12:"mail_address";s:13:"test@test.com";s:7:"created";s:19:"2014-04-30 21:16:39";s:7:"updated";s:19:"2014-04-30 21:16:39";}}', 1427452653),
('806e30d12e6f6ffec6ca756037aeabd0', 'Config|a:3:{s:9:"userAgent";s:32:"31ee7814f2648f9d96028fd759c772b5";s:4:"time";i:1418310250;s:9:"countdown";i:10;}', 1418310251),
('cf845818083bdf3a0f76c21954ffb482', 'Config|a:3:{s:9:"userAgent";s:32:"f40f062742418008a152df2f40783c64";s:4:"time";i:1434736656;s:9:"countdown";i:10;}Message|a:2:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:5:"alert";s:6:"params";a:2:{s:6:"plugin";s:9:"BoostCake";s:5:"class";s:11:"alert-error";}}s:5:"flash";a:3:{s:7:"message";s:33:"コメントが完了しました";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:6:{s:2:"id";s:1:"7";s:9:"user_code";s:4:"test";s:9:"user_name";s:9:"テスト";s:12:"mail_address";s:13:"test@test.com";s:7:"created";s:19:"2014-04-30 21:16:39";s:7:"updated";s:19:"2014-04-30 21:16:39";}}', 1434736657),
('dd33f376ec89c70d53cbdf62c2794e14', 'Config|a:3:{s:9:"userAgent";s:32:"31ee7814f2648f9d96028fd759c772b5";s:4:"time";i:1418310252;s:9:"countdown";i:10;}', 1418310252);

-- --------------------------------------------------------

--
-- テーブルの構造 `charas`
--

CREATE TABLE `charas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `parent_chara_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `view_count` bigint(20) DEFAULT '0',
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_code` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=72 ;

--
-- テーブルのデータのダンプ `charas`
--

INSERT INTO `charas` (`id`, `user_id`, `parent_chara_id`, `name`, `status`, `color`, `sex`, `view_count`, `image`, `image_path`, `image_type`, `created`, `updated`) VALUES
(64, 7, 0, 'test', '', 'red', '', 0, '1548435i.jpg', '64', 'image/jpeg', '2014-08-15 21:10:29', '2014-08-15 21:10:29'),
(65, 7, 0, 'test', '', 'green', '', 2, '3936165.jpg', '65', 'image/jpeg', '2014-08-15 21:10:49', '2014-08-15 21:10:49'),
(66, 7, 0, 'test', '', 'white', '', 16, '3941919.jpg', '66', 'image/jpeg', '2014-08-15 21:11:13', '2014-08-15 21:11:13'),
(67, 7, 0, 'ggg', '', 'red', '', 58, '3944553.jpg', '67', 'image/jpeg', '2014-08-15 21:11:31', '2014-08-15 21:11:31'),
(68, 7, 0, 'test', '', 'black', '', 3, '3944496.jpg', '68', 'image/jpeg', '2014-08-15 21:11:57', '2014-08-15 21:11:57'),
(69, 7, 0, 'gdgd', '', 'blue', '', 3, '143963487_624.jpg', '69', 'image/jpeg', '2014-08-15 21:15:57', '2014-08-15 21:15:57'),
(70, 7, 0, 'test', '', 'blue', 'famale', 27, '3920856.jpg', '70', 'image/jpeg', '2014-08-20 20:52:03', '2014-08-20 20:52:03'),
(71, 12, 0, 'tteest', '', 'green', '', 20, 'news_large_sw_manga_yokoku.jpg', '71', 'image/jpeg', '2014-08-21 21:58:45', '2014-08-21 21:58:45');

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `chara_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `status` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `chara_id` (`chara_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`id`, `chara_id`, `user_id`, `status`, `created`, `updated`) VALUES
(1, 67, 7, 'aaa', '2014-12-22 02:21:04', '2014-12-22 02:21:04'),
(2, 67, 7, 'vvv', '2014-12-22 02:24:46', '2014-12-22 02:24:46'),
(3, 67, 7, 'ddd', '2014-12-22 02:56:54', '2014-12-22 02:56:54');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_code` (`user_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `user_code`, `user_name`, `password`, `mail_address`, `created`, `updated`) VALUES
(5, 'foo', 'foo', '3ac010a51d696c6c62c3eaa152c2e08c7f2939f7', 'foo@foo.com', '2014-04-29 13:03:58', '2014-04-29 13:03:58'),
(7, 'test', 'テスト', '4671956ade620796fab4bcc7752635cff57b6624', 'test@test.com', '2014-04-30 21:16:39', '2014-04-30 21:16:39'),
(8, 'ttt', 'ttt', '5839148b5b594ba17394ea192ceab46349b87d78', 'test@test.com', '2014-04-30 23:30:19', '2014-04-30 23:30:19'),
(9, 'rrrr', 'rrrr', '4c9505f42025ac2630832164dfde0498e359e13d', 'test@test.com', '2014-04-30 23:39:59', '2014-04-30 23:39:59'),
(10, 'oooo', 'oooo', '01930bb59a1b4576aa4fab4b6754d09248006718', 'test@test.com', '2014-05-01 00:05:44', '2014-05-01 00:05:44'),
(11, 'rere', 'rere', 'df41334fdd37d4ce85066b2623fcef41b9de8442', 'rere@rere.com', '2014-05-06 18:48:18', '2014-05-06 18:48:18'),
(12, 'testUser', 'test', '4671956ade620796fab4bcc7752635cff57b6624', 'test@test.co.jp', '2014-05-25 18:16:01', '2014-05-25 18:16:01');

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `charas`
--
ALTER TABLE `charas`
  ADD CONSTRAINT `charas_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- テーブルの制約 `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`chara_id`) REFERENCES `charas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
