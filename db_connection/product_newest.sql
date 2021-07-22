/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : lotfi

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 22/07/2021 14:30:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `Id` int(3) NOT NULL,
  `Category_name` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Type` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'Book', 'Weight');
INSERT INTO `category` VALUES (2, 'DVD', 'Size');
INSERT INTO `category` VALUES (3, 'Furniture ', 'Dimension');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `SKU` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Name` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Price` decimal(6, 2) NOT NULL,
  `CatId` int(3) NOT NULL,
  `Attribute` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`SKU`) USING BTREE,
  INDEX `CatId`(`CatId`) USING BTREE,
  CONSTRAINT `CatId` FOREIGN KEY (`CatId`) REFERENCES `category` (`Id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('dsdsd', 'dsad', 33.00, 3, 'cm x cm x cm');
INSERT INTO `products` VALUES ('DSJ321', 'Furiniture', 50.00, 3, '100cm x 100cm x 100cm');
INSERT INTO `products` VALUES ('FDH786', 'Sofa', 700.00, 3, '72cm x 220cm x 86cm');
INSERT INTO `products` VALUES ('HRE345', 'Ikea table', 50.00, 3, '50cm x 50cm x 50cm');
INSERT INTO `products` VALUES ('IOU897', 'Book', 5.00, 1, '1 kg');
INSERT INTO `products` VALUES ('JET324', 'Ikea table', 20.00, 3, '50cm x 50cm x 50cm');
INSERT INTO `products` VALUES ('KHD457', 'DISK', 10.00, 2, '1200 Mb');
INSERT INTO `products` VALUES ('KJH897', 'Book', 20.00, 1, '2 kg');
INSERT INTO `products` VALUES ('LJD094', 'DVD', 10.00, 2, '500 Mb');

SET FOREIGN_KEY_CHECKS = 1;
