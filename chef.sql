-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 03 月 31 日 09:31
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `chef`
--

-- --------------------------------------------------------

--
-- 表的结构 `addressmanage`
--

CREATE TABLE IF NOT EXISTS `addressmanage` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(45) DEFAULT NULL COMMENT '***地址管理 ',
  `openid` varchar(350) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL COMMENT '详细地址',
  `username` varchar(32) DEFAULT NULL COMMENT '姓名',
  `phoneNumber` varchar(250) DEFAULT NULL COMMENT '电话',
  `backphonenumber` varchar(250) DEFAULT NULL COMMENT '备用联系电话号码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `basket`
--

CREATE TABLE IF NOT EXISTS `basket` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '＊＊＊菜篮子',
  `phone` varchar(45) DEFAULT NULL,
  `openid` varchar(350) DEFAULT NULL,
  `dishName` varchar(45) DEFAULT NULL COMMENT '菜品名 ',
  `num` int(20) DEFAULT NULL COMMENT '数量',
  `price` int(11) DEFAULT NULL COMMENT '价格',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bookingmanage`
--

CREATE TABLE IF NOT EXISTS `bookingmanage` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '＊＊＊订单管理',
  `phone` varchar(45) DEFAULT NULL,
  `openid` varchar(350) DEFAULT NULL,
  `thumbnail` varchar(350) DEFAULT NULL COMMENT '缩略图',
  `dishName` varchar(45) DEFAULT NULL COMMENT '菜品名',
  `num` int(11) DEFAULT NULL COMMENT '数量',
  `price` int(11) DEFAULT NULL COMMENT '价格',
  `bookingNumber` varchar(150) DEFAULT NULL COMMENT '订单号',
  `static` tinyint(4) DEFAULT NULL COMMENT '状态',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `coupon`
--

CREATE TABLE IF NOT EXISTS `coupon` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '＊＊＊优惠劵',
  `phone` varchar(150) DEFAULT NULL,
  `openid` varchar(250) DEFAULT NULL,
  `thumbnail` varchar(250) DEFAULT NULL COMMENT '缩略图',
  `name` varchar(45) DEFAULT NULL COMMENT '名称',
  `onlydate` varchar(450) DEFAULT NULL COMMENT '使用期限',
  `number` varchar(350) DEFAULT NULL COMMENT '优惠值',
  `standard` varchar(350) DEFAULT NULL COMMENT '使用门槛',
  `static` tinyint(4) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '＊＊＊餐品',
  `pid` int(11) DEFAULT NULL COMMENT '组id',
  `foodName` varchar(50) DEFAULT NULL COMMENT '名称',
  `thumbnail` varchar(250) DEFAULT NULL COMMENT '缩略图',
  `specialty` varchar(500) DEFAULT NULL COMMENT '特点',
  `monthSalesm` int(11) DEFAULT NULL COMMENT '月销量',
  `price` varchar(32) DEFAULT NULL COMMENT '单价',
  `foodPic` varchar(250) DEFAULT NULL COMMENT '大图片',
  `masterMaterial` text COMMENT '主料',
  `subordinationMaterial` text COMMENT '辅料  ',
  `dishFeature` text COMMENT '菜品',
  `note` text COMMENT '简介',
  `dishShow` text COMMENT '菜品展示',
  `appraise` int(11) DEFAULT NULL COMMENT '消费评价 ',
  `dishScore` int(11) DEFAULT NULL COMMENT '菜品评分',
  `chefScore` int(11) DEFAULT NULL COMMENT '厨师评分',
  `waiterScore` int(11) DEFAULT NULL COMMENT '服务员评分',
  `usid` varchar(32) DEFAULT NULL COMMENT '用户评价ID',
  `addtime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- 转存表中的数据 `food`
--

INSERT INTO `food` (`id`, `pid`, `foodName`, `thumbnail`, `specialty`, `monthSalesm`, `price`, `foodPic`, `masterMaterial`, `subordinationMaterial`, `dishFeature`, `note`, `dishShow`, `appraise`, `dishScore`, `chefScore`, `waiterScore`, `usid`, `addtime`) VALUES
(1, 1, '蓉记姜葱香辣蟹', 'upload/image/2016-03-25/rjx.jpg', '肥而不腻，色泽鲜艳，味道巴适', 100, '168', 'upload/image/2016-03-25/rjx.jpg', '广东汕头肉蟹', '洋葱，甜椒，青椒', '', '这道菜色泽鲜亮、 肥而不腻、 入口醇香、 香辣下饭, 绝对是米饭杀手。', NULL, 10, 5, 5, 5, NULL, '0000-00-00 00:00:00'),
(2, 1, '渝记精品毛血旺', 'upload/image/2016-03-25/yjxw.jpg', '肥而不腻，色泽鲜艳，味道巴适。', 100, '58', 'upload/image/2016-03-25/yjxw.jpg', '鸭血', '黑毛肚、豆芽、老姜、八品猪黄喉、蒜苗、鱿鱼花、芹菜、鳝鱼片、山东大蒜\r\n', NULL, '这道菜色泽鲜亮、 肥而不腻、 入口醇香、 香辣下饭, 绝对是米饭杀手。', NULL, 10, 5, 5, 5, NULL, '2016-03-25 02:41:39'),
(3, 1, '烂肉豇豆', 'upload/image/2016-03-25/lrjd.jpg', '肥而不腻，色泽鲜艳，味道巴适。', 100, '28', 'upload/image/2016-03-25/lrjd.jpg', '新繁泡豇豆', '八品绞肉，宜宾芽菜', NULL, '这道菜色泽鲜亮、 肥而不腻、 入口醇香、 香辣下饭, 绝对是米饭杀手。', NULL, 10, 5, 5, 5, NULL, '2016-03-25 04:39:08'),
(4, 2, '寿桃', 'upload/image/2016-03-25/st.jpg', '香甜松软。', 100, '28', 'upload/image/2016-03-25/st.jpg', '八品猪肚、八品绞肉、八品猪舌、八品猪心、八品五花肉。', '青笋、胡萝卜', NULL, '这道菜色泽鲜亮、 肥而不腻、 入口醇香、 香辣下饭, 绝对是米饭杀手', NULL, 9, 5, 4, 5, NULL, '2016-03-25 01:24:23'),
(5, 2, '香蕉沙司', 'upload/image/2016-03-25/xjss.jpg', '香甜松软。', 123, '26', 'upload/image/2016-03-25/xjss.jpg', '八品猪肚、八品绞肉、八品猪舌、八品猪心、八品五花肉。', '青笋、胡萝卜', NULL, '这道菜色泽鲜亮、 肥而不腻、 入口醇香、 香辣下饭, 绝对是米饭杀手', NULL, 10, 5, 5, 5, NULL, '2016-03-25 01:22:38'),
(6, 3, '泰式涮多宝', 'upload/image/2016-03-25/tssdb.jpg', '泰式热带风味，香鲜河虾。', 23, '188', 'upload/image/2016-03-25/tssdb.jpg', '泰式热带风味，香鲜河虾。', '泰式热带风味，香鲜河虾。', NULL, '泰式热带风味，香鲜河虾。', NULL, 10, 5, 5, 5, NULL, '2016-03-25 04:23:26'),
(7, 3, '清蒸鲈鱼', 'upload/image/2016-03-25/qzly.jpg', '肥而不腻，色泽鲜艳，味道巴适。', 234, '68', 'upload/image/2016-03-25/qzly.jpg', '肥而不腻，色泽鲜艳，味道巴适。', '肥而不腻，色泽鲜艳，味道巴适。', NULL, '肥而不腻，色泽鲜艳，味道巴适。', NULL, 10, 5, 5, 5, NULL, '2016-03-25 03:22:17'),
(8, 4, '鲜椒拌贡菜', 'upload/image/2016-03-25/xjbgc.jpg', '肥而不腻，色泽鲜艳，味道巴适。', 234, '28', 'upload/image/2016-03-25/xjbgc.jpg', '肥而不腻，色泽鲜艳，味道巴适。', '肥而不腻，色泽鲜艳，味道巴适。', NULL, '肥而不腻，色泽鲜艳，味道巴适。', NULL, 10, 5, 5, 5, NULL, '2016-03-25 10:27:12'),
(9, 4, '韭香双仁', 'upload/image/2016-03-25/fxsr.jpg', '肥而不腻，色泽鲜艳，味道巴适。', 123, '32', 'upload/image/2016-03-25/fxsr.jpg', '肥而不腻，色泽鲜艳，味道巴适。', '肥而不腻，色泽鲜艳，味道巴适。', NULL, '肥而不腻，色泽鲜艳，味道巴适。', NULL, 10, 5, 5, 5, NULL, '2016-03-25 04:34:30'),
(10, 5, '金银萝卜炖排骨', 'upload/image/2016-03-25/jylbdpg.jpg', '肥而不腻，色泽鲜艳，味道巴适。', 213, '48', 'upload/image/2016-03-25/jylbdpg.jpg', '肥而不腻，色泽鲜艳，味道巴适。', '肥而不腻，色泽鲜艳，味道巴适。', NULL, '肥而不腻，色泽鲜艳，味道巴适。', NULL, 10, 5, 5, 5, NULL, '2016-03-25 07:43:20'),
(11, 5, '清炖滋补甲鱼汤', 'upload/image/2016-03-25/qdzbjyt.jpg', '肥而不腻，色泽鲜艳，味道巴适。', 343, '88', 'upload/image/2016-03-25/qdzbjyt.jpg', '肥而不腻，色泽鲜艳，味道巴适。', '肥而不腻，色泽鲜艳，味道巴适。', NULL, '肥而不腻，色泽鲜艳，味道巴适。', NULL, 10, 5, 5, 5, NULL, '2016-03-25 01:21:18'),
(12, 6, '红花汁扣辽参', 'upload/image/2016-03-25/hhzkls.jpg', '肥而不腻，色泽鲜艳，味道巴适。', 234, '208', 'upload/image/2016-03-25/hhzkls.jpg', '肥而不腻，色泽鲜艳，味道巴适。', '肥而不腻，色泽鲜艳，味道巴适。', NULL, '肥而不腻，色泽鲜艳，味道巴适。', NULL, 10, 5, 5, 5, NULL, '2016-03-25 03:27:26'),
(13, 6, '清汤竹荪炖血燕', 'upload/image/2016-03-25/qtzsdxy.png', '肥而不腻，色泽鲜艳，味道巴适。', 123, '388', 'upload/image/2016-03-25/qtzsdxy.png', '肥而不腻，色泽鲜艳，味道巴适。', '肥而不腻，色泽鲜艳，味道巴适。', NULL, '肥而不腻，色泽鲜艳，味道巴适。', NULL, 10, 5, 5, 5, NULL, '2016-03-25 05:35:30'),
(14, 7, '日常589元系列', 'upload/image/2016-03-25/shiguo.jpg', '包含17道丰富菜品，详情页可看到各色菜品。', 132, '589', 'upload/image/2016-03-25/shiguo.jpg', NULL, NULL, '58元石锅酱仔排，28元玉米香脆骨，48元菌香豉汁肥牛，28元腊味荷兰豆，58元香辣仔兔，48元葱油干烧裸斑，48元金银萝卜炖排骨，22元百合苡仁老南瓜，12元葱香鸡蛋干等等17道菜系。\r\n', '菜品丰富多样，价格实惠。', '12元葱香鸡蛋干', 10, 5, 5, 5, NULL, '2016-03-25 02:41:28'),
(15, 7, '日常789元系列', 'upload/image/2016-03-25/sllyt.jpg', '肥而不腻，色泽鲜艳，味道巴适。', 241, '798', 'upload/image/2016-03-25/sllyt.jpg', NULL, NULL, '58元石锅酱仔排，28元玉米香脆骨，48元菌香豉汁肥牛，28元腊味荷兰豆，58元香辣仔兔，48元葱油干烧裸斑，48元金银萝卜炖排骨，22元百合苡仁老南瓜，12元葱香鸡蛋干等等17道菜系。', '菜品丰富多样，价格实惠。', '58元石锅酱仔排', 10, 5, 5, 5, NULL, '2016-03-25 01:35:34'),
(16, 1, '菌香豉汁肥牛', 'upload/image/2016-03-25/jxfn.jpg', '味道鲜美，肉质嫩滑', 122, '48', 'upload/image/2016-03-25/jxfn.jpg', '澳洲肥牛', '杏鲍菇，义林散木耳，安居二金条，红美人椒', '', '味道鲜美，肉质嫩滑', NULL, 10, 5, 5, 5, NULL, NULL),
(17, 1, '山地土豆烧甲鱼', 'upload/image/2016-03-25/sjy.jpg', '味道鲜美，肉质嫩滑', 244, '78', 'upload/image/2016-03-25/sjy.jpg', '湖南汉寿甲鱼', '去皮小土豆，大蒜，老姜，大葱、洋葱', NULL, '味道鲜美，肉质嫩滑', NULL, 10, 5, 5, 5, NULL, NULL),
(18, 1, ' 虾仁炒荷兰豆', 'upload/image/2016-03-25/xrchd.jpg', '味道鲜美，肉质嫩滑', 0, '58', 'upload/image/2016-03-25/xrchd.jpg', '荷兰豆', '广东青虾仁、甜椒', NULL, '风味虾仁，清新爽口', NULL, 10, 5, 5, 5, NULL, NULL),
(19, 1, '四季香锅牛蛙', 'upload/image/2016-03-25/sjxgnw.jpg', '味道鲜美，肉质嫩滑', 0, '58', 'upload/image/2016-03-25/sjxgnw.jpg', '美国牛蛙', '土豆、老姜、藕、洋葱、花菜、甜椒、山东大蒜、青椒', NULL, '味道鲜美，肉质嫩滑', NULL, 10, 5, 5, 5, NULL, NULL),
(20, 1, '腊味荷兰豆', 'upload/image/2016-03-25/lwhld.jpg', '味道鲜美，肉质嫩滑', 0, '28', 'upload/image/2016-03-25/lwhld.jpg', '荷兰豆', '腊肉，甜椒、山东大蒜', NULL, '味道鲜美，肉质嫩滑', NULL, 10, 5, 5, 5, NULL, NULL),
(21, 1, '仔姜红汤人字飞', 'upload/image/2016-03-25/rzf.jpg', '味道鲜美，肉质嫩滑', 12, '108', 'upload/image/2016-03-25/rzf.jpg', '邛崃大雁', '黄豆、新繁泡酸萝卜、仔姜、新繁泡姜、安居二金条、新繁泡二荆条', NULL, '味道鲜美，肉质嫩滑', NULL, 10, 5, 5, 5, NULL, NULL),
(22, 1, '香辣仔兔', 'upload/image/2016-03-25/xlzt.jpg', '味道鲜美，肉质嫩滑', 22, '58', 'upload/image/2016-03-25/xlzt.jpg', '广汉白兔', '洋葱、青椒、甜椒、朝天椒、汉源花椒', NULL, '味道鲜美，肉质嫩滑', NULL, 10, 5, 5, 5, NULL, NULL),
(23, 1, '川式豆捞', 'upload/image/2016-03-25/csdl.jpg', '四川风味，鲜香味美', 21, '68', 'upload/image/2016-03-25/csdl.jpg', '六和鸡脯肉', '珍珠米、鲜香菇、大竹糯米、杏鲍菇、去皮绿豆、老姜、金针菇、甘孜松茸、生菜', NULL, '四川风味，鲜香味美', NULL, 10, 5, 5, 5, NULL, NULL),
(24, 1, '湘味豆腐', 'upload/image/2016-03-25/xwdf.jpg', '湖南风味，香嫩爽口', 12, '28', 'upload/image/2016-03-25/xwdf.jpg', '千叶豆腐', '蒜苗、八品猪五花、山东大蒜', NULL, '湖南风味，香嫩爽口', NULL, 10, 5, 5, 5, NULL, NULL),
(25, 1, '烧椒大鲫鱼', 'upload/image/2016-03-25/sjdjy.jpg', '味道鲜美，肉质嫩滑', 121, '78', 'upload/image/2016-03-25/sjdjy.jpg', '通威大鲫鱼', '安居二金条、红小米辣、芹菜、香菜、小葱', NULL, '味道鲜美，肉质嫩滑', NULL, 10, 5, 5, 5, NULL, NULL),
(26, 1, '生焗山药', 'upload/image/2016-03-25/sjsy.jpg', '新鲜有营养的湖北佛手山药，细腻爽口', 22, '28', 'upload/image/2016-03-25/sjsy.jpg', '湖北佛手山药', '蒜苗、八品猪五花、山东大蒜', NULL, '新鲜有营养的湖北佛手山药，细腻爽口', NULL, 10, 4, 5, 5, NULL, NULL),
(27, 1, '双味大对虾', 'upload/image/2016-03-25/ddx.jpg', '味道鲜美，肉质嫩滑', 423, '68', 'upload/image/2016-03-25/ddx.jpg', '福建漳州大对虾', '吐司、冰花酸梅酱、卡夫奇妙酱', NULL, '味道鲜美，肉质嫩滑', NULL, 10, 5, 5, 5, NULL, NULL),
(28, 1, '鸿运蹄花虾', 'upload/image/2016-03-25/hythx.jpg', '味道鲜美，肉质嫩滑', 155, '98', 'upload/image/2016-03-25/hythx.jpg', '福建漳州基围虾', '猪蹄、洋葱、老姜、杏鲍菇、东北大葱、山东大蒜', NULL, '味道鲜美，肉质嫩滑', NULL, 10, 5, 5, 5, NULL, NULL),
(29, 1, '小炒肥牛王', 'upload/image/2016-03-25/xcfnw.jpg', '味道鲜美，肉质嫩滑', 87, '48', 'upload/image/2016-03-25/xcfnw.jpg', '澳洲肥牛', '蒜苗、香菜、二金条', NULL, '味道鲜美，肉质嫩滑', NULL, 10, 5, 5, 5, NULL, NULL),
(30, 1, '丝瓜烧油条', 'upload/image/2016-03-25/sgyt.jpg', '听说香脆酥软的油条和丝瓜更配哦', 134, '28', 'upload/image/2016-03-25/sgyt.jpg', '油条', '丝瓜、山东大蒜、青豆、广红', NULL, '听说香脆酥软的油条和丝瓜更配哦', NULL, 10, 5, 5, 5, NULL, NULL),
(31, 1, '孜然东山羊', 'upload/image/2016-03-25/zrdsy.jpg', '肥而不腻，色泽鲜艳，味道巴适。', 12, '168', 'upload/image/2016-03-25/zrdsy.jpg', '东山羊', '蒜苗、甜椒、口蘑', NULL, '肥而不腻，色泽鲜艳，味道巴适。', NULL, 10, 5, 5, 5, NULL, NULL),
(32, 1, '番茄煲牛尾', 'upload/image/2016-03-25/fqbnw.jpg', '酸甜可口的番茄配上牛尾，肥而不腻', 123, '168', 'upload/image/2016-03-25/fqbnw.jpg', '山东君博牛尾', '番茄，山东大蒜，老姜', NULL, '酸甜可口的番茄配上牛尾，肥而不腻', NULL, 10, 5, 5, 5, NULL, NULL),
(33, 1, '口味格格肉', 'upload/image/2016-03-25/kwggr.jpg', '肥而不腻，色泽鲜艳，味道巴适。', 78, '78', 'upload/image/2016-03-25/kwggr.jpg', '八品猪梅肉', '口蘑、山东大蒜、干葱', NULL, '肥而不腻，色泽鲜艳，味道巴适。', NULL, 10, 5, 5, 5, NULL, NULL),
(34, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `packagegroup`
--

CREATE TABLE IF NOT EXISTS `packagegroup` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '＊＊＊套餐分类组 ',
  `pid` int(11) DEFAULT NULL,
  `packname` varchar(45) DEFAULT NULL COMMENT '套餐名',
  `packicon` varchar(250) DEFAULT NULL COMMENT '图标',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `packagegroup`
--

INSERT INTO `packagegroup` (`id`, `pid`, `packname`, `packicon`) VALUES
(1, 1, '热菜', 'upload/image/2016-03-25/t1.png'),
(2, 2, '小吃', 'upload/image/2016-03-25/t2.png'),
(3, 3, '海河鲜', 'upload/image/2016-03-25/t3.png'),
(4, 4, '凉菜', 'upload/image/2016-03-25/t4.png'),
(5, 5, '汤', 'upload/image/2016-03-25/t5.png'),
(6, 6, '燕鲍翅', 'upload/image/2016-03-25/t6.png'),
(7, 7, '套餐', 'upload/image/2016-03-25/t7.png');

-- --------------------------------------------------------

--
-- 表的结构 `system`
--

CREATE TABLE IF NOT EXISTS `system` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '＊＊＊系统表',
  `siteName` varchar(250) DEFAULT NULL COMMENT '站名',
  `keyWord` varchar(250) DEFAULT NULL COMMENT '关键字',
  `copyright` varchar(250) DEFAULT NULL COMMENT '版权',
  `tel` varchar(32) DEFAULT NULL COMMENT '电话',
  `address` varchar(250) DEFAULT NULL COMMENT '地址',
  `eMail` varchar(50) DEFAULT NULL COMMENT 'eMail',
  `keyWordDescriber` varchar(350) DEFAULT NULL COMMENT '关键字描述',
  `banner` text COMMENT 'banner',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `system`
--

INSERT INTO `system` (`id`, `siteName`, `keyWord`, `copyright`, `tel`, `address`, `eMail`, `keyWordDescriber`, `banner`) VALUES
(1, '大厨到家', '大厨', '12347689765463523456877654', '023-234653455', '成都市高新区天府二街', '21342@126.com', '23456765434567898765435678654', 'a:5:{i:0;a:4:{s:5:"title";s:1:"1";s:3:"url";s:1:"#";s:11:"description";s:1:"#";s:5:"thumb";s:20:"skin/img/banner1.png";}i:1;a:4:{s:5:"title";s:1:"2";s:3:"url";s:1:"#";s:11:"description";s:1:"#";s:5:"thumb";s:20:"skin/img/banner2.png";}i:2;a:4:{s:5:"title";s:1:"3";s:3:"url";s:7:"http://";s:11:"description";s:0:"";s:5:"thumb";s:20:"skin/img/banner3.png";}i:3;a:4:{s:5:"title";s:1:"4";s:3:"url";s:7:"http://";s:11:"description";s:0:"";s:5:"thumb";s:17:"skin/img/card.png";}i:4;a:4:{s:5:"title";s:1:"5";s:3:"url";s:7:"http://";s:11:"description";s:0:"";s:5:"thumb";s:17:"skin/img/card.png";}}');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '＊＊＊用户表',
  `openid` varchar(32) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL COMMENT '用户名',
  `headerpic` varchar(350) DEFAULT NULL COMMENT '头像',
  `taste` varchar(45) DEFAULT NULL COMMENT '个人口味  ',
  `Cuisine` varchar(45) DEFAULT NULL COMMENT '喜好菜系',
  `phone` varchar(45) DEFAULT NULL COMMENT '用户唯一标示',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `openid`, `username`, `headerpic`, `taste`, `Cuisine`, `phone`, `addtime`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, '15708434450', '2016-03-30 02:29:47');

-- --------------------------------------------------------

--
-- 表的结构 `userscore`
--

CREATE TABLE IF NOT EXISTS `userscore` (
  `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '＊＊＊用户评价表',
  `usid` varchar(32) DEFAULT NULL COMMENT '某用户评价ID',
  `note` text COMMENT '评价内容',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '评价时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `vipcard`
--

CREATE TABLE IF NOT EXISTS `vipcard` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '＊＊＊会员卡 ',
  `phone` varchar(45) DEFAULT NULL,
  `openid` varchar(350) DEFAULT NULL,
  `balance` int(30) DEFAULT NULL COMMENT '余额',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
