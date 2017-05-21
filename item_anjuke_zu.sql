/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-21 15:05:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `item_anjuke_zu`
-- ----------------------------
DROP TABLE IF EXISTS `item_anjuke_zu`;
CREATE TABLE `item_anjuke_zu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `local` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1321 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of item_anjuke_zu
-- ----------------------------
