-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2022-05-13 15:41:31
-- 服务器版本： 10.4.10-MariaDB
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `wkuanimalsprotection`
--

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `pid` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `pid` (`pid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `pid`, `uid`, `username`, `message`, `time`) VALUES
(4, 17, 2, 'shenyu', '测试时间', '2017-04-15 05:28:56'),
(7, 19, 2, 'shenyu', '第一次测试时间', '2017-04-15 05:31:23'),
(8, 19, 2, 'shenyu', '第二次测试', '2017-04-15 05:31:30'),
(9, 19, 2, 'shenyu', '第三次测试', ''),
(10, 21, 2, 'shenyu', '第一次测试时间', '2017-04-15 05:32:41'),
(11, 21, 2, 'shenyu', '第二次测试时间', '2017-04-15 05:32:47'),
(12, 21, 2, 'shenyu', '第三次测试时间', '2017-04-15 05:33:41'),
(13, 21, 2, 'shenyu', '第四次测试时间', '2017-04-15 05:34:35'),
(14, 21, 2, 'shenyu', '第四次测试时间', '2017-04-15 05:35:52'),
(15, 21, 2, 'shenyu', '第五次测试时间', '2017-04-15 05:36:16'),
(16, 21, 2, 'shenyu', '第五次测试时间', '17-04-15 05:37:23'),
(17, 21, 2, 'shenyu', '第六次测试时间', '2017-04-15 05:37:37'),
(18, 21, 2, 'shenyu', '第七次测试时间', '2017-04-15 13:38:39'),
(19, 26, 2, 'shenyu', '测试时间', '2017-04-15 13:38:55'),
(20, 26, 2, 'shenyu', '第二次测试时间', '2017-04-15 13:39:04'),
(21, 26, 2, 'shenyu', '第三次测试时间', '2017-04-15 13:39:10'),
(22, 26, 2, 'shenyu', '第四次测试时间', '2017-04-15 13:41:03'),
(23, 17, 1, 'king', '测试时间', '2017-04-15 13:54:12');

-- --------------------------------------------------------

--
-- 表的结构 `home_pet`
--

DROP TABLE IF EXISTS `home_pet`;
CREATE TABLE IF NOT EXISTS `home_pet` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uid` int(255) NOT NULL,
  `bin_data` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `vacc` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `home_pet`
--

INSERT INTO `home_pet` (`id`, `uid`, `bin_data`, `category`, `place`, `sex`, `age`, `vacc`, `message`) VALUES
(17, 3, 'uploads/banner.jpg', '测试bob', '测试bob', '测试bob', 2, '测试bob', '测试bob'),
(19, 2, 'uploads/col1.jpg', '波斯猫', '福州', '公', 2, '是', '蓝猫'),
(21, 2, 'uploads/lost-pet-3.jpg', '测试', '测试', '测试', 2, '测试', '测试'),
(22, 2, 'uploads/one.jpg', '测试', '测试', '测试', 2, '测试', '测试'),
(25, 1, 'uploads/sbly.jpg', '阿拉斯加犬', '福州鼓楼区', '母', 2, '已注射', '黑白相间'),
(26, 3, 'uploads/one.jpg', '测试bob', '测试', '测试', 2, '测试', '测试');

-- --------------------------------------------------------

--
-- 表的结构 `lost_comment`
--

DROP TABLE IF EXISTS `lost_comment`;
CREATE TABLE IF NOT EXISTS `lost_comment` (
  `pid` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `lost_comment`
--

INSERT INTO `lost_comment` (`pid`, `uid`, `username`, `message`) VALUES
(31, 2, 'shenyu', '我在北京西城区看到过这只宠物，可以过去再找找');

-- --------------------------------------------------------

--
-- 表的结构 `lost_pet`
--

DROP TABLE IF EXISTS `lost_pet`;
CREATE TABLE IF NOT EXISTS `lost_pet` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uid` int(255) NOT NULL,
  `bin_data` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `property` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `jing_du` double NOT NULL,
  `wei_du` double NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `lost_pet`
--

INSERT INTO `lost_pet` (`id`, `uid`, `bin_data`, `category`, `place`, `time`, `property`, `other`, `jing_du`, `wei_du`) VALUES
(31, 2, 'uploads/1.jpg', '测试', '浙江省温州市温州市瓯海区', '2017-03-03', '测试', '测试', 120.657432, 27.923342),
(37, 2, 'uploads/col3.jpg', '测试', '浙江省温州市温州市瓯海区', '2017-02-03', '测试', '测试', 120.660289, 27.924471),
(38, 2, 'uploads/three.jpg', '测试', '浙江省温州市温州市瓯海区', '2018-04-04', '测试', '测试', 120.660037, 27.92698),
(39, 2, 'uploads/two.jpg', '波斯猫', '浙江省温州市温州市瓯海区', '2017-04-04', '蓝色', '无', 120.661821, 27.926857);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `bin_data` varchar(255) NOT NULL,
  `pet_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `pet_user_id` int(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `bin_data`, `pet_id`, `user_id`, `pet_user_id`) VALUES
(6, 'uploads/cat.jpg', 9, 2, 0),
(7, 'uploads/cat.jpg', 9, 2, 0);

-- --------------------------------------------------------

--
-- 表的结构 `oncheck`
--

DROP TABLE IF EXISTS `oncheck`;
CREATE TABLE IF NOT EXISTS `oncheck` (
  `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `puid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bin_data` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `oncheck`
--

INSERT INTO `oncheck` (`id`, `user_id`, `pid`, `puid`, `username`, `bin_data`) VALUES
(10, 2, 18, 3, 'shenyu', 'uploads/lost-pet-1.jpg'),
(11, 2, 19, 2, 'shenyu', 'uploads/login.jpg'),
(12, 2, 17, 3, 'shenyu', 'uploads/banner.jpg'),
(13, 3, 21, 2, 'bob', 'uploads/lost-pet-3.jpg'),
(14, 2, 26, 3, 'shenyu', 'uploads/one.jpg'),
(15, 3, 22, 2, 'bob', 'uploads/one.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `pet`
--

DROP TABLE IF EXISTS `pet`;
CREATE TABLE IF NOT EXISTS `pet` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uid` int(255) NOT NULL,
  `bin_data` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(255) NOT NULL,
  `vacc` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- 表的结构 `stary_comment`
--

DROP TABLE IF EXISTS `stary_comment`;
CREATE TABLE IF NOT EXISTS `stary_comment` (
  `pid` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `stary_comment`
--

INSERT INTO `stary_comment` (`pid`, `uid`, `username`, `message`) VALUES
(30, 2, 'shenyu', '测试'),
(30, 2, 'shenyu', '测试'),
(30, 2, 'shenyu', '测试'),
(30, 2, 'shenyu', '测试'),
(30, 2, 'shenyu', '测试'),
(14, 2, 'shenyu', '这个宠物我在怡园见到过'),
(14, 2, 'shenyu', '123'),
(14, 2, 'shenyu', '123');

-- --------------------------------------------------------

--
-- 表的结构 `stary_pet`
--

DROP TABLE IF EXISTS `stary_pet`;
CREATE TABLE IF NOT EXISTS `stary_pet` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uid` int(255) NOT NULL,
  `bin_data` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `safe` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `jing_du` double NOT NULL,
  `wei_du` double NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `stary_pet`
--

INSERT INTO `stary_pet` (`id`, `uid`, `bin_data`, `category`, `place`, `safe`, `message`, `jing_du`, `wei_du`) VALUES
(14, 3, 'uploads/one.jpg', '哈士奇', '福建省福州市福州市鼓楼区洪山园路', '暂时安全', '黑白相间', 119.285691, 26.081485),
(16, 2, 'uploads/one.jpg', '哈士奇', '北京市北京市北京市海淀区北蜂窝路甲15号', '暂时安全', '无', 116.335135, 39.907187),
(18, 2, 'uploads/col3.jpg', '金毛', '浙江省杭州市杭州市下城区德胜快速路', '暂时安全', '无', 120.192738, 30.307999);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `policy` int(255) NOT NULL DEFAULT 1,
  `isdata` int(255) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `policy`, `isdata`) VALUES
(1, 'king', '123', 0, 0),
(2, 'shenyu', '1234', 1, 1),
(3, 'bob', '123', 1, 1),
(4, 'root', '123', 1, 0),
(5, 'Sue', '123', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `user_data`
--

DROP TABLE IF EXISTS `user_data`;
CREATE TABLE IF NOT EXISTS `user_data` (
  `uid` int(255) NOT NULL,
  `real_name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `user_data`
--

INSERT INTO `user_data` (`uid`, `real_name`, `sex`, `place`, `phone`) VALUES
(2, '神宇', '男', '福州', 1333),
(3, '鲍伯', '男', '福州市鼓楼区', 1333333333),
(3, '鲍伯', '男', '福州市鼓楼区', 1333333333);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
