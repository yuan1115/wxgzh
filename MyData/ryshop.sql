/*
Navicat MySQL Data Transfer

Source Server         : rycs
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : ryshop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-06-25 16:49:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for shop_admin
-- ----------------------------
DROP TABLE IF EXISTS `shop_admin`;
CREATE TABLE `shop_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_open` varchar(255) NOT NULL,
  `keys` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `key_is_open` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_advs
-- ----------------------------
DROP TABLE IF EXISTS `shop_advs`;
CREATE TABLE `shop_advs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '广告位名称',
  `image` int(11) DEFAULT NULL COMMENT '广告位图片',
  `sh_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_adv_space
-- ----------------------------
DROP TABLE IF EXISTS `shop_adv_space`;
CREATE TABLE `shop_adv_space` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '广告位名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_auths
-- ----------------------------
DROP TABLE IF EXISTS `shop_auths`;
CREATE TABLE `shop_auths` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(255) DEFAULT NULL COMMENT '节点名',
  `url` varchar(255) DEFAULT NULL COMMENT '节点对应的路由名称',
  `pid` int(11) DEFAULT NULL COMMENT '父级id',
  `introduce` varchar(255) DEFAULT NULL COMMENT '描述/备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_comments
-- ----------------------------
DROP TABLE IF EXISTS `shop_comments`;
CREATE TABLE `shop_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户id/商户id',
  `content` varchar(255) DEFAULT NULL COMMENT '评论内容/意见建议',
  `gid` int(11) DEFAULT NULL COMMENT '商品id',
  `create_time` datetime DEFAULT NULL COMMENT '时间',
  `is_show` varchar(255) DEFAULT NULL COMMENT '是否显示',
  `is_examine` varchar(255) DEFAULT NULL COMMENT '是否审核',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_express

_set
-- ----------------------------
DROP TABLE IF EXISTS `shop_express

_set`;
CREATE TABLE `shop_express

_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '快递名称',
  `sh_id` int(11) DEFAULT NULL,
  `is_free_shipping` tinyint(4) DEFAULT NULL COMMENT '是否包邮',
  `condition` varchar(255) DEFAULT NULL COMMENT '包邮条件（满多少包邮）',
  `postage` varchar(255) DEFAULT NULL COMMENT '单价邮费（每千克多少邮费）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_goods
-- ----------------------------
DROP TABLE IF EXISTS `shop_goods`;
CREATE TABLE `shop_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '商品名称',
  `jh_price` decimal(10,0) NOT NULL COMMENT '进货价格',
  `sale_price` decimal(10,0) NOT NULL COMMENT '售价',
  `sh_id` int(11) NOT NULL COMMENT '商户id',
  `cate_id` int(11) DEFAULT NULL COMMENT '分类id',
  `classify_id` int(11) DEFAULT NULL COMMENT '关联分类id',
  `attr_id` varchar(255) DEFAULT NULL COMMENT '属性id(多属性)',
  `discount_price` decimal(10,0) DEFAULT NULL COMMENT '折后价',
  `is_discount` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否打折，0不打折，1打折',
  `discount_rate` varchar(255) DEFAULT NULL COMMENT '折率，100表示不打折，95表示95折',
  `introduce` varchar(255) DEFAULT NULL COMMENT '商品简介',
  `content` text COMMENT '商品详情',
  `comment_count` int(11) NOT NULL DEFAULT '0' COMMENT '评论数量',
  `stock_count` int(11) NOT NULL DEFAULT '9999' COMMENT '库存',
  `discount_rate_is_cate` tinyint(4) NOT NULL DEFAULT '1' COMMENT '汇率是否按照商品分类',
  `main_pic` varchar(255) DEFAULT NULL COMMENT '商品主图',
  `broadcast_pic` text COMMENT '商品轮播图',
  `brand_id` int(11) DEFAULT NULL COMMENT '品牌id',
  `param_id` varchar(255) DEFAULT NULL COMMENT '参数id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_goods_attr_classify
-- ----------------------------
DROP TABLE IF EXISTS `shop_goods_attr_classify`;
CREATE TABLE `shop_goods_attr_classify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '属性分类名',
  `sh_id` int(11) DEFAULT NULL COMMENT '只做添加记录',
  `cate_id` int(11) DEFAULT NULL COMMENT '分类id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_goods_attr_value
-- ----------------------------
DROP TABLE IF EXISTS `shop_goods_attr_value`;
CREATE TABLE `shop_goods_attr_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '属性名',
  `name` varchar(255) NOT NULL,
  `sale_price` decimal(10,0) DEFAULT NULL COMMENT '属性对应的价格',
  `is_attr_price` decimal(10,0) DEFAULT NULL COMMENT '是否启用属性价格',
  `pic` varchar(255) DEFAULT NULL COMMENT '属性对应图片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_goods_brand
-- ----------------------------
DROP TABLE IF EXISTS `shop_goods_brand`;
CREATE TABLE `shop_goods_brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '品牌名称',
  `cate_id` int(11) DEFAULT NULL COMMENT '绑定分类id',
  `en_name` varchar(255) DEFAULT NULL COMMENT '英语名称',
  `logo` varchar(255) DEFAULT NULL COMMENT '品牌logo',
  `sh_id` int(11) DEFAULT NULL COMMENT '只是记录是哪个商户添加的',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_goods_classify
-- ----------------------------
DROP TABLE IF EXISTS `shop_goods_classify`;
CREATE TABLE `shop_goods_classify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '分类名称',
  `sh_id` int(11) DEFAULT NULL,
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父级id',
  `icon` varchar(255) DEFAULT NULL COMMENT '分类图标',
  `main_pic` varchar(255) DEFAULT NULL COMMENT '展示图片',
  `discount_rate` varchar(255) DEFAULT NULL COMMENT '折扣率',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_goods_param_classify
-- ----------------------------
DROP TABLE IF EXISTS `shop_goods_param_classify`;
CREATE TABLE `shop_goods_param_classify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '参数分类名',
  `cate_id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL COMMENT '父级id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_goods_param_value
-- ----------------------------
DROP TABLE IF EXISTS `shop_goods_param_value`;
CREATE TABLE `shop_goods_param_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `param_id` int(11) DEFAULT NULL COMMENT '参数id',
  `value` varchar(255) DEFAULT NULL COMMENT '参数值',
  `sh_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_images
-- ----------------------------
DROP TABLE IF EXISTS `shop_images`;
CREATE TABLE `shop_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgurl` varchar(255) NOT NULL COMMENT '图片url',
  `sh_id` int(11) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_merchant
-- ----------------------------
DROP TABLE IF EXISTS `shop_merchant`;
CREATE TABLE `shop_merchant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wx_name` int(11) DEFAULT NULL COMMENT '微信昵称',
  `create_time` datetime DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `is_open` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否启用',
  `tel` varchar(255) DEFAULT NULL,
  `wxgzh` varchar(255) DEFAULT NULL COMMENT '微信公众号',
  `wx_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '微信公众号类型',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `header_img` varchar(255) DEFAULT NULL COMMENT '头像',
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_roles
-- ----------------------------
DROP TABLE IF EXISTS `shop_roles`;
CREATE TABLE `shop_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) NOT NULL COMMENT '角色名称',
  `introduce` varchar(255) DEFAULT NULL COMMENT '描述',
  `auth` text,
  `is_open` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否启用',
  `keys` varchar(255) DEFAULT NULL COMMENT '密钥（根据权限节点生成）',
  `keys_is_open` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否启用密钥',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_system_set
-- ----------------------------
DROP TABLE IF EXISTS `shop_system_set`;
CREATE TABLE `shop_system_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website` varchar(255) DEFAULT NULL COMMENT '网站名称',
  `keys` varchar(255) DEFAULT NULL COMMENT '关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `upload` varchar(255) DEFAULT NULL COMMENT '图片上传路径设置',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shop_users
-- ----------------------------
DROP TABLE IF EXISTS `shop_users`;
CREATE TABLE `shop_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `openid` int(11) DEFAULT NULL COMMENT '小程序openid',
  `tel` varchar(255) DEFAULT NULL,
  `sh_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
