/*
Navicat MySQL Data Transfer

Source Server         : rycs
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : wx

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-06-25 16:49:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wx_account
-- ----------------------------
DROP TABLE IF EXISTS `wx_account`;
CREATE TABLE `wx_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '公众号名称',
  `appid` varchar(255) DEFAULT NULL,
  `appsecret` varchar(255) DEFAULT NULL,
  `msgkey` varchar(255) DEFAULT NULL,
  `tonken` varchar(255) DEFAULT NULL,
  `introduce` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `headerimg` varchar(255) DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL COMMENT '分组',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '公众号类型',
  `wxid` varchar(255) DEFAULT NULL COMMENT '原始id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wx_app
-- ----------------------------
DROP TABLE IF EXISTS `wx_app`;
CREATE TABLE `wx_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '插件名称',
  `is_open` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wx_app_part
-- ----------------------------
DROP TABLE IF EXISTS `wx_app_part`;
CREATE TABLE `wx_app_part` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `openid` varchar(255) NOT NULL,
  `appid` int(11) NOT NULL DEFAULT '1' COMMENT '应用id',
  `part` tinyint(3) NOT NULL DEFAULT '1' COMMENT '第几部',
  `times` tinyint(1) NOT NULL DEFAULT '0' COMMENT '次数',
  `create_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wx_app_res
-- ----------------------------
DROP TABLE IF EXISTS `wx_app_res`;
CREATE TABLE `wx_app_res` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '结果名称/结果图',
  `appid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wx_keyshf
-- ----------------------------
DROP TABLE IF EXISTS `wx_keyshf`;
CREATE TABLE `wx_keyshf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keys` varchar(255) DEFAULT NULL COMMENT '关键字',
  `app_id` int(11) DEFAULT NULL COMMENT '对应的appid',
  `hf` varchar(255) DEFAULT NULL COMMENT '回复',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '关键词触发开始/结束（1开始）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wx_wenti
-- ----------------------------
DROP TABLE IF EXISTS `wx_wenti`;
CREATE TABLE `wx_wenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wenti` text,
  `appid` int(11) DEFAULT NULL,
  `da` varchar(255) DEFAULT NULL COMMENT '回答内容限制格式',
  `sort` int(11) DEFAULT NULL COMMENT '问题排序',
  `callback` varchar(255) DEFAULT NULL COMMENT '如果回复内容不符合规则，则回复此字段，如果符合规则，则返回下一个问题',
  `baixun` varchar(255) DEFAULT NULL COMMENT '备选答案',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
