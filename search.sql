/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : search

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-11-10 14:35:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '标题',
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '文章内容',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', 'TNTSearch', '让全文检索变的简单而强大', null, '2018-11-10 01:54:07');
INSERT INTO `articles` VALUES ('2', 'jieba-php', '\"结巴\"中文分词:做最好的php中文分词、中文断词组件', null, null);
INSERT INTO `articles` VALUES ('3', '哈哈哈哈', '哈哈哈哈', null, null);
INSERT INTO `articles` VALUES ('4', '哈哈', '获得完蛋了', null, null);
INSERT INTO `articles` VALUES ('5', '噢噢噢噢', '分为但是分为氛围', null, null);
INSERT INTO `articles` VALUES ('6', 'TNTSearch', '一个用PHP编写的功能齐全的全文搜索引擎', null, null);
INSERT INTO `articles` VALUES ('7', 'jieba-php', '\"结巴\"中文分词:做最好的php中文分词、中文断词组件', null, null);
INSERT INTO `articles` VALUES ('8', '哈哈', '啊哈哈哈哈哈哈哈哈哈哈破飞机哦', null, null);
INSERT INTO `articles` VALUES ('9', '嘿', '哦wood就玛瑙', null, null);
INSERT INTO `articles` VALUES ('10', '呵', '草草草草草草草草草草', null, null);
