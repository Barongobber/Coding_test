SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `product_sku` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_type` enum('dvd','furniture','book') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_price` decimal(10, 2) NOT NULL,
  `product_attribute` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`product_sku`) USING BTREE
);

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('blabla', 'dvd', 'dvd apa aka', 22.00, '33');
INSERT INTO `product` VALUES ('book2321', 'book', 'Book Narnia', 32.00, '2');
INSERT INTO `product` VALUES ('Furniture1', 'furniture', 'Chair', 33.00, '33x22x25');
INSERT INTO `product` VALUES ('FURNITURE2', 'furniture', 'test', 33.00, '33x33x33');

SET FOREIGN_KEY_CHECKS = 1;
