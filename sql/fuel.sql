/*
Navicat MySQL Data Transfer

Source Server         : bd
Source Server Version : 50140
Source Host           : localhost:3306
Source Database       : fuel

Target Server Type    : MYSQL
Target Server Version : 50140
File Encoding         : 65001

Date: 2012-08-10 13:43:42
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `authentications`
-- ----------------------------
DROP TABLE IF EXISTS `authentications`;
CREATE TABLE `authentications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `provider` varchar(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `expires` int(12) DEFAULT '0',
  `refresh_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of authentications
-- ----------------------------
INSERT INTO `authentications` VALUES ('1', '3', 'facebook', '100001209866392', null, '1344433881', '0', 'AAACn73RjAj4BALs6mP8g1r7nE8a3iUiL7ZCIF83QZBx2u6ueZBEgfDxd1BtybqTHkPPZCz8IkpSuHVbnc3aPpD8g9HxRAZA7GMYdPCxrOWQZDZD', '1349616601', null);
INSERT INTO `authentications` VALUES ('2', '4', 'vkontakte', '56841991', null, '1344460235', '0', 'fc8134dfafc644deffe263d89affccb4b2fffe2ffe263d93becd40de350b074', '1344546557', null);

-- ----------------------------
-- Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` mediumtext,
  `post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------

-- ----------------------------
-- Table structure for `groups`
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups
-- ----------------------------

-- ----------------------------
-- Table structure for `groups_users`
-- ----------------------------
DROP TABLE IF EXISTS `groups_users`;
CREATE TABLE `groups_users` (
  `group_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`group_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups_users
-- ----------------------------

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('package', 'ninjauth', '001_create_authentications');
INSERT INTO `migration` VALUES ('package', 'ninjauth', '002_add_refresh_tokens');
INSERT INTO `migration` VALUES ('package', 'ninjauth', '003_Allow_null_secret');

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `content` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `author_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', 'Post one', 'Необычным термином «рыба» в веб-дизайне принято называть временный текст, вставленный в макет страницы. Возникает вполне логичный вопрос: а зачем, собственно, нужна эта «рыба»? Зачем проделывать лишнюю работу и размещать на макете ещё какой-то текст? Задумайтесь: а разве в сети мы видим пустые страницы? Текст создает определенный рисунок и является одним из инструментов веб-дизайнера. Недаром же существует столько разных шрифтов, не так ли? \r\n\r\n Таким образом, основная задача «рыбы» состоит в том, чтобы продемонстрировать нам, как страница будет выглядеть в сети Интернет. \r\n\r\n Существует четыре самых распространенных способа работы с «рыбой». Первый из них заключается в том, что макет остается совершенно пустым. Сразу оговорюсь, что этот способ является самым худшим, так как не дает представления о сайте, наполненном контентом.', '2012-08-01 22:05:39', '2');
INSERT INTO `posts` VALUES ('2', 'Post two', 'Необычным термином «рыба» в веб-дизайне принято называть временный текст, вставленный в макет страницы. Возникает вполне логичный вопрос: а зачем, собственно, нужна эта «рыба»? Зачем проделывать лишнюю работу и размещать на макете ещё какой-то текст? Задумайтесь: а разве в сети мы видим пустые страницы? Текст создает определенный рисунок и является одним из инструментов веб-дизайнера. Недаром же существует столько разных шрифтов, не так ли? \r\n\r\n Таким образом, основная задача «рыбы» состоит в том, чтобы продемонстрировать нам, как страница будет выглядеть в сети Интернет. \r\n\r\n Существует четыре самых распространенных способа работы с «рыбой». Первый из них заключается в том, что макет остается совершенно пустым. Сразу оговорюсь, что этот способ является самым худшим, так как не дает представления о сайте, наполненном контентом.', '2012-08-01 22:05:42', '2');
INSERT INTO `posts` VALUES ('3', 'Post three', 'Необычным термином «рыба» в веб-дизайне принято называть временный текст, вставленный в макет страницы. Возникает вполне логичный вопрос: а зачем, собственно, нужна эта «рыба»? Зачем проделывать лишнюю работу и размещать на макете ещё какой-то текст? Задумайтесь: а разве в сети мы видим пустые страницы? Текст создает определенный рисунок и является одним из инструментов веб-дизайнера. Недаром же существует столько разных шрифтов, не так ли? \r\n\r\n Таким образом, основная задача «рыбы» состоит в том, чтобы продемонстрировать нам, как страница будет выглядеть в сети Интернет. \r\n\r\n Существует четыре самых распространенных способа работы с «рыбой». Первый из них заключается в том, что макет остается совершенно пустым. Сразу оговорюсь, что этот способ является самым худшим, так как не дает представления о сайте, наполненном контентом.', '2012-08-01 22:05:49', '2');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `group` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_login` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `profile_fields` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', 'Max', 'NtgTF8q6Z9UyyUwQS7Ma5Bvj+uTrK/F66iMji9su1XY=', '100', 'forsag1982@gmail.com', '1344074648', '3f2b1d2843f9dbcf655aa892f9f569ab7f5e6769', 'a:0:{}', '1343842962');
INSERT INTO `users` VALUES ('3', 'sun.way.944', 'NtgTF8q6Z9UyyUwQS7Ma5Bvj+uTrK/F66iMji9su1XY=', '1', 'forsag@gmail.com', '1344506079', 'ab72960e309dcc196a318c7d2a0fddde5270bd5c', 'a:1:{s:9:\"full_name\";s:7:\"Sun Way\";}', '1344433881');
INSERT INTO `users` VALUES ('4', 'Vkontakte', 'NtgTF8q6Z9UyyUwQS7Ma5Bvj+uTrK/F66iMji9su1XY=', '1', 'fxzxorsag@gmail.com', '1344506148', 'bb1599302be3518e90f8b85860cdc82a5b870133', 'a:1:{s:9:\"full_name\";s:14:\"Николай\";}', '1344460235');
