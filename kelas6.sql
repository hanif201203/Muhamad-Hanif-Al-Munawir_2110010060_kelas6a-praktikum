/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : kelas6

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 11/05/2024 10:54:52
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `npm` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
BEGIN;
INSERT INTO `mahasiswa` (`id`, `npm`, `nama`, `jurusan`) VALUES (1, '2110010460', 'Ahmad Jaya', 'SI');
INSERT INTO `mahasiswa` (`id`, `npm`, `nama`, `jurusan`) VALUES (5, '34536554', 'Andi', 'TI');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
