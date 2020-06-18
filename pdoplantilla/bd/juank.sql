/*
Navicat MariaDB Data Transfer

Source Server         : LocalHost_MySQL
Source Server Version : 100411
Source Host           : localhost:3306
Source Database       : juank

Target Server Type    : MariaDB
Target Server Version : 100411
File Encoding         : 65001

Date: 2020-05-27 01:42:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `t_id` varchar(50) DEFAULT '',
  `num_id` varchar(20) DEFAULT '',
  `tel` varchar(20) DEFAULT '',
  `f_nacimiento` date DEFAULT NULL,
  `f_h_creacion` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('1', 'Juank', 'cc', '80921396', '3165006116', '1986-01-15', '2020-05-26 21:57:35');
INSERT INTO `customer` VALUES ('2', '4', null, null, '4', null, null);
INSERT INTO `customer` VALUES ('3', 'PACIENTE PRUEBA                                   ', null, null, '45', null, null);
INSERT INTO `customer` VALUES ('4', 'HELDA GONZALEZ', null, null, '1234578', null, null);
INSERT INTO `customer` VALUES ('5', 'HELDA GONZALEZ', null, null, '1234578', null, null);
INSERT INTO `customer` VALUES ('6', 'VALERY BOHORQUEZ QUITIAN', null, null, '3165006116', null, null);
INSERT INTO `customer` VALUES ('7', 'JESUS GALAN VARGAS', null, null, '754', null, '0000-00-00 00:00:00');
INSERT INTO `customer` VALUES ('8', 'JESUS GALAN VARGAS', null, null, '34', null, '0000-00-00 00:00:00');
INSERT INTO `customer` VALUES ('9', 'LINA HIROMI FUJIMOTO', null, null, '654', null, '0000-00-00 00:00:00');
INSERT INTO `customer` VALUES ('10', 'LINA HIROMI FUJIMOTO', null, null, '3165006116', null, '0000-00-00 00:00:00');
INSERT INTO `customer` VALUES ('11', 'HELDA GONZALEZ', null, null, '7451', null, '0000-00-00 00:00:00');
INSERT INTO `customer` VALUES ('12', 'MARIA LETICIA BERMUDEZ GUTIERREZ', null, null, '465', null, '0000-00-00 00:00:00');
INSERT INTO `customer` VALUES ('13', 'PACIENTE PRUEBA                                   ', null, null, '654', null, '0000-00-00 00:00:00');
