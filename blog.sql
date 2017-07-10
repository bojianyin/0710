/*
Navicat MySQL Data Transfer

Source Server         : lbo
Source Server Version : 100108
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 100108
File Encoding         : 65001

Date: 2017-07-10 18:01:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(11) COLLATE utf8_bin NOT NULL,
  `pid` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of category
-- ----------------------------

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `loginip` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `logintime` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('1', 'admin', '123456', '0.0.0.0', '1499680822');

-- ----------------------------
-- Table structure for session
-- ----------------------------
DROP TABLE IF EXISTS `session`;
CREATE TABLE `session` (
  `session_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `session_expire` int(11) NOT NULL,
  `session_data` blob,
  UNIQUE KEY `session_id` (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of session
-- ----------------------------
INSERT INTO `session` VALUES ('0jhhq70k4el05m4m26s0uitkn7', '1499681902', 0x7665726966797C733A33323A223134623733363761323833373764346435313361346433333439383631643266223B);
INSERT INTO `session` VALUES ('0d965fab57603c8f614576c3c81c5d22', '1499682263', 0x7665726966797C733A33323A226533363936323866656436626632656562653531623132656665353730653662223B7569647C733A313A2231223B757365727C733A353A2261646D696E223B6C6F67696E69707C733A373A22302E302E302E30223B6C6F67696E74696D657C733A31303A2231343939363830353638223B);
SET FOREIGN_KEY_CHECKS=1;
