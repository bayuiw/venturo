/*
 Navicat Premium Data Transfer

 Source Server         : LOKAL
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : sekawan

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 14/05/2023 15:05:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for departments
-- ----------------------------
DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of departments
-- ----------------------------
INSERT INTO `departments` VALUES (1, 'IT');
INSERT INTO `departments` VALUES (2, 'Accounting');
INSERT INTO `departments` VALUES (3, 'Sales');
INSERT INTO `departments` VALUES (4, 'Produksi');
INSERT INTO `departments` VALUES (5, 'Operasional');

-- ----------------------------
-- Table structure for drivers
-- ----------------------------
DROP TABLE IF EXISTS `drivers`;
CREATE TABLE `drivers`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ktp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `valid` tinyint NULL DEFAULT NULL COMMENT '1 : Valid, 0 : Not Valid',
  `created_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_dt` datetime NULL DEFAULT NULL,
  `updated_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `updated_dt` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of drivers
-- ----------------------------
INSERT INTO `drivers` VALUES (1, 'Driver A', '530111000222555', '08123456789', 1, 'ADMIN', '2023-05-13 12:48:17', NULL, NULL);
INSERT INTO `drivers` VALUES (2, 'Driver B', '5301234234527282', '085234567854', 1, 'ADMIN', '2023-05-13 12:48:51', NULL, NULL);
INSERT INTO `drivers` VALUES (3, 'Driver C', '53073572373527', '08125438293', 1, 'ADMIN', '2023-05-13 12:49:07', NULL, NULL);
INSERT INTO `drivers` VALUES (4, 'Driver D', '56373892738290', '085728393728', 0, 'ADMIN', '2023-05-13 12:49:36', NULL, NULL);
INSERT INTO `drivers` VALUES (5, 'Bayu Indra', NULL, '081928372837', 0, 'ADMIN', '2023-05-13 22:45:38', NULL, NULL);
INSERT INTO `drivers` VALUES (6, 'Driver D', '873287462746', '08183273723', 1, 'ADMIN', '2023-05-13 23:19:31', NULL, NULL);
INSERT INTO `drivers` VALUES (7, 'Driver E', '734726287346', '08373847382', 1, 'ADMIN', '2023-05-14 13:54:23', NULL, NULL);

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `level` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'Positions',
  `id_department` int NULL DEFAULT NULL,
  `valid` tinyint NULL DEFAULT NULL COMMENT '1 : Valid, 0 : Not Valid',
  `created_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_dt` datetime NULL DEFAULT NULL,
  `updated_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `updated_dt` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES (2, 'Bayu Indra', '93724978', '08192879122', 'STAFF', 1, 1, 'ADMIN', '2023-05-13 22:51:09', 'ADMIN', '2023-05-13 22:53:59');
INSERT INTO `employees` VALUES (3, 'Bayu Indra SPV', '893748237', '09834823234', 'SPV', 1, 1, 'ADMIN', '2023-05-14 00:44:55', NULL, NULL);
INSERT INTO `employees` VALUES (4, 'Bayu Indra Mgr', '7347234764', '09834824234', 'MANAGER', 1, 1, 'ADMIN', '2023-05-14 00:45:19', NULL, NULL);
INSERT INTO `employees` VALUES (5, 'Bayu Act Mgr', '23747234876', '0823783723', 'MANAGER', 2, 1, 'ADMIN', '2023-05-14 02:22:42', NULL, NULL);
INSERT INTO `employees` VALUES (6, 'Staff Sales', '73472438798', '09876544566', 'STAFF', 3, 0, 'ADMIN', '2023-05-14 13:52:26', 'ADMIN', '2023-05-14 13:52:53');
INSERT INTO `employees` VALUES (7, 'roni', '6789', '0812345678', 'STAFF', 3, 1, 'ADMIN', '2023-05-14 14:45:48', NULL, NULL);

-- ----------------------------
-- Table structure for gasolines
-- ----------------------------
DROP TABLE IF EXISTS `gasolines`;
CREATE TABLE `gasolines`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gasolines
-- ----------------------------
INSERT INTO `gasolines` VALUES (1, 'Pertalite');
INSERT INTO `gasolines` VALUES (2, 'Pertamax');
INSERT INTO `gasolines` VALUES (3, 'Pertamax Turbo');
INSERT INTO `gasolines` VALUES (4, 'Pertamina Dex');
INSERT INTO `gasolines` VALUES (5, 'Dexlite');
INSERT INTO `gasolines` VALUES (6, 'Solar');

-- ----------------------------
-- Table structure for logs
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs`  (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `log_user_id` int NULL DEFAULT NULL,
  `log_user_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `log_dt` datetime NULL DEFAULT NULL,
  `log_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'TAMBAH, EDIT, HAPUS',
  `log_form` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `log_url` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `log_query` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of logs
-- ----------------------------
INSERT INTO `logs` VALUES ('LG-23051400001', 7, 'Bayu Indra SPV', '2023-05-14 06:37:27', 'APPROVE', 'Approval Approve Data', 'http://127.0.0.1/sekawan/Reservasi/approve', 'UPDATE `reservations_approval` SET `approve_dt` = \'2023-05-14 06:37:27\', `status` = \'APPROVE\', `open` = 0\nWHERE `id` = \'1\'');
INSERT INTO `logs` VALUES ('LG-23051400002', 1, 'ADMIN', '2023-05-14 06:39:34', 'TAMBAH', 'User', 'http://127.0.0.1/sekawan/User/simpan', 'INSERT INTO `users` (`id_employee`, `name`, `username`, `password`, `level`, `valid`, `created_by`, `created_dt`) VALUES (\'5\', \'Bayu Act Mgr\', \'bayu_act_mgr\', \'e10adc3949ba59abbe56e057f20f883e\', \'MANAGER\', 1, \'ADMIN\', \'2023-05-14 06:39:34\')');
INSERT INTO `logs` VALUES ('LG-23051400003', 8, 'Bayu Indra Mgr', '2023-05-14 06:40:11', 'APPROVE', 'Approval Approve Data', 'http://127.0.0.1/sekawan/Reservasi/approve', 'UPDATE `reservations_approval` SET `approve_dt` = \'2023-05-14 06:40:11\', `status` = \'APPROVE\', `open` = 0\nWHERE `id` = \'19\'');
INSERT INTO `logs` VALUES ('LG-23051400004', 9, 'Bayu Act Mgr', '2023-05-14 06:40:29', 'APPROVE', 'Approval Approve Data', 'http://127.0.0.1/sekawan/Reservasi/approve', 'UPDATE `reservations_approval` SET `approve_dt` = \'2023-05-14 06:40:29\', `status` = \'APPROVE\', `open` = 0\nWHERE `id` = \'20\'');
INSERT INTO `logs` VALUES ('LG-23051400005', 9, 'Bayu Act Mgr', '2023-05-14 06:40:29', 'AUTO', 'Set Status Reservasi APPROVE', 'http://127.0.0.1/sekawan/Reservasi/approve', 'UPDATE `reservations` SET `status` = \'APPROVE\'\nWHERE `id` = \'RV-23051400001\'');
INSERT INTO `logs` VALUES ('LG-23051400006', 1, 'ADMIN', '2023-05-14 07:32:00', 'EDIT', 'KM KELUAR', 'http://127.0.0.1/sekawan/Reservasi/simpan_realisasi', 'UPDATE `reservations` SET `km_out` = \'2500\', `out_dt` = \'2023-05-14 07:32:00\'\nWHERE `id` = \'RV-23051400001\'');
INSERT INTO `logs` VALUES ('LG-23051400007', 1, 'ADMIN', '2023-05-14 07:32:00', 'EDIT', 'KM MASUK', 'http://127.0.0.1/sekawan/Reservasi/simpan_realisasi', 'UPDATE `reservations` SET `km_in` = \'0\', `in_dt` = \'2023-05-14 07:32:00\'\nWHERE `id` = \'RV-23051400001\'');
INSERT INTO `logs` VALUES ('LG-23051400008', 1, 'ADMIN', '2023-05-14 07:38:55', 'EDIT', 'KM KELUAR', 'http://127.0.0.1/sekawan/Reservasi/simpan_realisasi', 'UPDATE `reservations` SET `km_out` = \'2500\', `out_dt` = \'2023-05-14 07:38:55\'\nWHERE `id` = \'RV-23051400001\'');
INSERT INTO `logs` VALUES ('LG-23051400009', 1, 'ADMIN', '2023-05-14 07:44:04', 'EDIT', 'KM KELUAR', 'http://127.0.0.1/sekawan/Reservasi/simpan_realisasi', 'UPDATE `reservations` SET `km_out` = \'2500\', `out_dt` = \'2023-05-14 07:44:04\'\nWHERE `id` = \'RV-23051400001\'');
INSERT INTO `logs` VALUES ('LG-23051400010', 1, 'ADMIN', '2023-05-14 07:44:04', 'EDIT', 'KM MASUK', 'http://127.0.0.1/sekawan/Reservasi/simpan_realisasi', 'UPDATE `reservations` SET `km_in` = \'3000\', `in_dt` = \'2023-05-14 07:44:04\'\nWHERE `id` = \'RV-23051400001\'');
INSERT INTO `logs` VALUES ('LG-23051400011', 1, 'ADMIN', '2023-05-14 09:11:36', 'TAMBAH', 'Servis', 'http://127.0.0.1/sekawan/Servis/simpan', 'INSERT INTO `service` (`service_dt`, `id_vehicle`, `valid`, `created_by`, `created_dt`) VALUES (\'2023-05-15\', NULL, 1, \'ADMIN\', \'2023-05-14 09:11:36\')');
INSERT INTO `logs` VALUES ('LG-23051400012', 1, 'ADMIN', '2023-05-14 09:14:43', 'EDIT', 'Servis', 'http://127.0.0.1/sekawan/Servis/simpan', 'UPDATE `service` SET `service_dt` = \'2023-05-15\', `id_vehicle` = \'2\', `valid` = 1, `updated_by` = \'ADMIN\', `updated_dt` = \'2023-05-14 09:14:43\'\nWHERE `id` = \'1\'');
INSERT INTO `logs` VALUES ('LG-23051400013', 1, 'ADMIN', '2023-05-14 09:16:29', 'EDIT', 'Servis', 'http://127.0.0.1/sekawan/Servis/simpan', 'UPDATE `service` SET `service_dt` = \'2023-05-15\', `id_vehicle` = \'2\', `valid` = 1, `updated_by` = \'ADMIN\', `updated_dt` = \'2023-05-14 09:16:29\'\nWHERE `id` = \'1\'');
INSERT INTO `logs` VALUES ('LG-23051400014', 1, 'ADMIN', '2023-05-14 09:16:35', 'HAPUS', 'Servis', 'http://127.0.0.1/sekawan/Servis/hapus', 'UPDATE `service` SET `valid` = 0\nWHERE `id` = \'1\'');
INSERT INTO `logs` VALUES ('LG-23051400015', 1, 'ADMIN', '2023-05-14 13:52:26', 'TAMBAH', 'Pegawai', 'http://127.0.0.1/sekawan/Pegawai/simpan', 'INSERT INTO `employees` (`name`, `phone`, `nip`, `level`, `id_department`, `valid`, `created_by`, `created_dt`) VALUES (\'Tes\', \'09876544566\', \'73472438798\', \'STAFF\', \'3\', 1, \'ADMIN\', \'2023-05-14 13:52:26\')');
INSERT INTO `logs` VALUES ('LG-23051400016', 1, 'ADMIN', '2023-05-14 13:52:53', 'EDIT', 'Pegawai', 'http://127.0.0.1/sekawan/Pegawai/simpan', 'UPDATE `employees` SET `name` = \'Staff Sales\', `phone` = \'09876544566\', `nip` = \'73472438798\', `level` = \'STAFF\', `id_department` = \'3\', `valid` = 1, `updated_by` = \'ADMIN\', `updated_dt` = \'2023-05-14 13:52:53\'\nWHERE `id` = \'6\'');
INSERT INTO `logs` VALUES ('LG-23051400017', 1, 'ADMIN', '2023-05-14 13:53:09', 'HAPUS', 'Pegawai', 'http://127.0.0.1/sekawan/Pegawai/hapus', 'UPDATE `employees` SET `valid` = 0\nWHERE `id` = \'6\'');
INSERT INTO `logs` VALUES ('LG-23051400018', 1, 'ADMIN', '2023-05-14 13:53:48', 'TAMBAH', 'Kendaraan', 'http://127.0.0.1/sekawan/Kendaraan/simpan', 'INSERT INTO `vehicles` (`merk`, `name`, `number_plate`, `km_per_liter`, `bbm`, `valid`, `created_by`, `created_dt`) VALUES (\'Mitsubishi\', \'XPander\', \'N 2324 CC\', \'11\', \'Pertamax\', 1, \'ADMIN\', \'2023-05-14 13:53:48\')');
INSERT INTO `logs` VALUES ('LG-23051400019', 1, 'ADMIN', '2023-05-14 13:54:03', 'EDIT', 'Kendaraan', 'http://127.0.0.1/sekawan/Kendaraan/simpan', 'UPDATE `vehicles` SET `merk` = \'Mitsubishi\', `name` = \'XPander Cross\', `number_plate` = \'N 2324 CC\', `km_per_liter` = \'11\', `bbm` = \'Pertalite\', `valid` = 1, `updated_by` = \'ADMIN\', `updated_dt` = \'2023-05-14 13:54:03\'\nWHERE `id` = \'3\'');
INSERT INTO `logs` VALUES ('LG-23051400020', 1, 'ADMIN', '2023-05-14 13:54:23', 'TAMBAH', 'Driver', 'http://127.0.0.1/sekawan/Driver/simpan', 'INSERT INTO `drivers` (`name`, `phone`, `ktp`, `valid`, `created_by`, `created_dt`) VALUES (\'Driver E\', \'08373847382\', \'734726287346\', 1, \'ADMIN\', \'2023-05-14 13:54:23\')');
INSERT INTO `logs` VALUES ('LG-23051400021', 1, 'ADMIN', '2023-05-14 13:54:41', 'HAPUS', 'User', 'http://127.0.0.1/sekawan/User/hapus', 'UPDATE `users` SET `valid` = 0\nWHERE `id` = \'2\'');
INSERT INTO `logs` VALUES ('LG-23051400022', 1, 'ADMIN', '2023-05-14 13:54:47', 'HAPUS', 'User', 'http://127.0.0.1/sekawan/User/hapus', 'UPDATE `users` SET `valid` = 0\nWHERE `id` = \'3\'');
INSERT INTO `logs` VALUES ('LG-23051400023', 1, 'ADMIN', '2023-05-14 13:56:47', 'TAMBAH', 'Servis', 'http://127.0.0.1/sekawan/Servis/simpan', 'INSERT INTO `service` (`service_dt`, `id_vehicle`, `valid`, `created_by`, `created_dt`) VALUES (\'2023-05-26\', \'3\', 1, \'ADMIN\', \'2023-05-14 13:56:47\')');
INSERT INTO `logs` VALUES ('LG-23051400024', 1, 'ADMIN', '2023-05-14 13:56:58', 'EDIT', 'Servis', 'http://127.0.0.1/sekawan/Servis/simpan', 'UPDATE `service` SET `service_dt` = \'2023-05-25\', `id_vehicle` = \'3\', `valid` = 1, `updated_by` = \'ADMIN\', `updated_dt` = \'2023-05-14 13:56:58\'\nWHERE `id` = \'2\'');
INSERT INTO `logs` VALUES ('LG-23051400025', 1, 'ADMIN', '2023-05-14 14:07:05', 'TAMBAH', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations` (`id`, `reservation_dt`, `id_vehicle`, `id_driver`, `id_employee`, `id_department`, `destination`, `status`, `valid`, `created_by`, `created_dt`) VALUES (\'RV-23051400005\', \'2023-05-17 14:06:00\', \'1\', \'2\', \'2\', \'1\', \'Malang\', \'PENDING\', 1, \'ADMIN\', \'2023-05-14 14:07:05\')');
INSERT INTO `logs` VALUES ('LG-23051400026', 1, 'ADMIN', '2023-05-14 14:07:51', 'TAMBAH', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations` (`id`, `reservation_dt`, `id_vehicle`, `id_driver`, `id_employee`, `id_department`, `destination`, `status`, `valid`, `created_by`, `created_dt`) VALUES (\'RV-23051400006\', \'2023-05-20 14:07:00\', \'2\', \'2\', \'2\', \'1\', \'Malang\', \'PENDING\', 1, \'ADMIN\', \'2023-05-14 14:07:51\')');
INSERT INTO `logs` VALUES ('LG-23051400027', 1, 'ADMIN', '2023-05-14 14:21:50', 'TAMBAH', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations` (`id`, `reservation_dt`, `id_vehicle`, `id_driver`, `id_employee`, `id_department`, `destination`, `status`, `valid`, `created_by`, `created_dt`) VALUES (\'RV-23051400007\', \'2023-05-16 18:30:00\', \'2\', \'2\', \'3\', \'1\', \'tambang\', \'PENDING\', 1, \'ADMIN\', \'2023-05-14 14:21:50\')');
INSERT INTO `logs` VALUES ('LG-23051400028', 8, 'Bayu Indra Mgr', '2023-05-14 14:24:08', 'APPROVE', 'Approval Approve Data', 'http://127.0.0.1/sekawan/Reservasi/approve', 'UPDATE `reservations_approval` SET `approve_dt` = \'2023-05-14 14:24:08\', `status` = \'APPROVE\', `open` = 0\nWHERE `id` = \'31\'');
INSERT INTO `logs` VALUES ('LG-23051400029', 9, 'Bayu Act Mgr', '2023-05-14 14:24:45', 'APPROVE', 'Approval Approve Data', 'http://127.0.0.1/sekawan/Reservasi/approve', 'UPDATE `reservations_approval` SET `approve_dt` = \'2023-05-14 14:24:45\', `status` = \'APPROVE\', `open` = 0\nWHERE `id` = \'32\'');
INSERT INTO `logs` VALUES ('LG-23051400030', 9, 'Bayu Act Mgr', '2023-05-14 14:24:45', 'AUTO', 'Set Status Reservasi APPROVE', 'http://127.0.0.1/sekawan/Reservasi/approve', 'UPDATE `reservations` SET `status` = \'APPROVE\'\nWHERE `id` = \'RV-23051400007\'');
INSERT INTO `logs` VALUES ('LG-23051400031', 1, 'ADMIN', '2023-05-14 14:31:35', 'EDIT', 'KM KELUAR', 'http://127.0.0.1/sekawan/Reservasi/simpan_realisasi', 'UPDATE `reservations` SET `km_out` = \'3000\', `out_dt` = \'2023-05-14 14:31:35\'\nWHERE `id` = \'RV-23051400007\'');
INSERT INTO `logs` VALUES ('LG-23051400032', 1, 'ADMIN', '2023-05-14 14:31:57', 'EDIT', 'KM KELUAR', 'http://127.0.0.1/sekawan/Reservasi/simpan_realisasi', 'UPDATE `reservations` SET `km_out` = \'3000\', `out_dt` = \'2023-05-14 14:31:57\'\nWHERE `id` = \'RV-23051400007\'');
INSERT INTO `logs` VALUES ('LG-23051400033', 1, 'ADMIN', '2023-05-14 14:31:57', 'EDIT', 'KM MASUK', 'http://127.0.0.1/sekawan/Reservasi/simpan_realisasi', 'UPDATE `reservations` SET `km_in` = \'3200\', `in_dt` = \'2023-05-14 14:31:57\'\nWHERE `id` = \'RV-23051400007\'');
INSERT INTO `logs` VALUES ('LG-23051400034', 1, 'ADMIN', '2023-05-14 14:40:43', 'HAPUS', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/selesai', 'UPDATE `reservations` SET `status` = \'SELESAI\'\nWHERE `id` = \'RV-23051400001\'');
INSERT INTO `logs` VALUES ('LG-23051400035', 1, 'ADMIN', '2023-05-14 14:43:52', 'TAMBAH', 'Servis', 'http://127.0.0.1/sekawan/Servis/simpan', 'INSERT INTO `service` (`service_dt`, `id_vehicle`, `valid`, `created_by`, `created_dt`) VALUES (\'2023-05-18\', \'2\', 1, \'ADMIN\', \'2023-05-14 14:43:52\')');
INSERT INTO `logs` VALUES ('LG-23051400036', 1, 'ADMIN', '2023-05-14 14:45:48', 'TAMBAH', 'Pegawai', 'http://127.0.0.1/sekawan/Pegawai/simpan', 'INSERT INTO `employees` (`name`, `phone`, `nip`, `level`, `id_department`, `valid`, `created_by`, `created_dt`) VALUES (\'roni\', \'0812345678\', \'6789\', \'STAFF\', \'3\', 1, \'ADMIN\', \'2023-05-14 14:45:48\')');
INSERT INTO `logs` VALUES ('LG-23051400037', 1, 'ADMIN', '2023-05-14 15:01:35', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations_approval` (`id_reservation`, `id_employee`, `name_employee`, `status`, `open`) VALUES (\'RV-23051400002\', \'4\', \'Bayu Indra Mgr\', \'PENDING\', 0)');
INSERT INTO `logs` VALUES ('LG-23051400038', 1, 'ADMIN', '2023-05-14 15:02:13', 'TAMBAH', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations` (`id`, `reservation_dt`, `id_vehicle`, `id_driver`, `id_employee`, `id_department`, `destination`, `status`, `valid`, `created_by`, `created_dt`) VALUES (\'RV-23051400008\', \'2023-05-25 15:01:00\', \'3\', \'3\', \'3\', \'1\', \'tambang\', \'PENDING\', 1, \'ADMIN\', \'2023-05-14 15:02:13\')');
INSERT INTO `logs` VALUES ('LOG120230513124817', 1, 'ADMIN', '2023-05-13 12:48:17', 'TAMBAH', 'Driver', 'http://127.0.0.1/sekawan/Driver/simpan', 'INSERT INTO `drivers` (`name`, `phone`, `ktp`, `valid`, `created_by`, `created_dt`) VALUES (\'Driver A\', \'08123456789\', \'530111000222555\', 1, \'ADMIN\', \'2023-05-13 12:48:17\')');
INSERT INTO `logs` VALUES ('LOG120230513124851', 1, 'ADMIN', '2023-05-13 12:48:51', 'TAMBAH', 'Driver', 'http://127.0.0.1/sekawan/Driver/simpan', 'INSERT INTO `drivers` (`name`, `phone`, `ktp`, `valid`, `created_by`, `created_dt`) VALUES (\'Driver B\', \'085234567854\', \'5301234234527282\', 1, \'ADMIN\', \'2023-05-13 12:48:51\')');
INSERT INTO `logs` VALUES ('LOG120230513124907', 1, 'ADMIN', '2023-05-13 12:49:07', 'TAMBAH', 'Driver', 'http://127.0.0.1/sekawan/Driver/simpan', 'INSERT INTO `drivers` (`name`, `phone`, `ktp`, `valid`, `created_by`, `created_dt`) VALUES (\'Driver C\', \'08125438293\', \'53073572373527\', 1, \'ADMIN\', \'2023-05-13 12:49:07\')');
INSERT INTO `logs` VALUES ('LOG120230513124936', 1, 'ADMIN', '2023-05-13 12:49:36', 'TAMBAH', 'Driver', 'http://127.0.0.1/sekawan/Driver/simpan', 'INSERT INTO `drivers` (`name`, `phone`, `ktp`, `valid`, `created_by`, `created_dt`) VALUES (\'Driver D\', \'085728393728\', \'56373892738290\', 1, \'ADMIN\', \'2023-05-13 12:49:36\')');
INSERT INTO `logs` VALUES ('LOG120230513125105', 1, 'ADMIN', '2023-05-13 12:51:05', 'HAPUS', 'Driver', 'http://127.0.0.1/sekawan/Driver/hapus', 'UPDATE `drivers` SET `valid` = 0\nWHERE `id` = \'4\'');
INSERT INTO `logs` VALUES ('LOG120230513155659', 1, 'ADMIN', '2023-05-13 15:56:59', 'TAMBAH', 'User', 'http://127.0.0.1/sekawan/User/simpan', 'INSERT INTO `users` (`name`, `username`, `password`, `level`, `valid`, `created_by`, `created_dt`) VALUES (\'Bayu\', \'bayu\', \'827ccb0eea8a706c4c34a16891f84e7b\', \'ADMIN\', 1, \'ADMIN\', \'2023-05-13 15:56:59\')');
INSERT INTO `logs` VALUES ('LOG120230513165534', 1, 'ADMIN', '2023-05-13 16:55:34', 'TAMBAH', 'User', 'http://127.0.0.1/sekawan/User/simpan', 'INSERT INTO `users` (`name`, `username`, `password`, `level`, `valid`, `created_by`, `created_dt`) VALUES (\'Tes\', \'tes\', \'e10adc3949ba59abbe56e057f20f883e\', \'ADMIN\', 1, \'ADMIN\', \'2023-05-13 16:55:34\')');
INSERT INTO `logs` VALUES ('LOG120230513165808', 1, 'ADMIN', '2023-05-13 16:58:08', 'EDIT', 'User', 'http://127.0.0.1/sekawan/User/simpan', 'UPDATE `users` SET `name` = \'Tes\', `username` = \'Tes\', `password` = \'d41d8cd98f00b204e9800998ecf8427e\', `level` = \'STAFF\', `valid` = 1, `updated_by` = \'ADMIN\', `updated_dt` = \'2023-05-13 16:58:08\'\nWHERE `id` = \'5\'');
INSERT INTO `logs` VALUES ('LOG120230513195205', 1, 'ADMIN', '2023-05-13 19:52:05', 'EDIT', 'User', 'http://127.0.0.1/sekawan/User/simpan', 'UPDATE `users` SET `name` = \'Tes\', `username` = \'Tes\', `level` = \'ADMIN\', `valid` = 1, `updated_by` = \'ADMIN\', `updated_dt` = \'2023-05-13 19:52:05\', `password` = \'e10adc3949ba59abbe56e057f20f883e\'\nWHERE `id` = \'5\'');
INSERT INTO `logs` VALUES ('LOG120230513195251', 1, 'ADMIN', '2023-05-13 19:52:51', 'HAPUS', 'User', 'http://127.0.0.1/sekawan/User/hapus', 'UPDATE `users` SET `valid` = 0\nWHERE `id` = \'5\'');
INSERT INTO `logs` VALUES ('LOG120230513202538', 1, 'ADMIN', '2023-05-13 20:25:38', 'TAMBAH', 'Kendaraan', 'http://127.0.0.1/sekawan/Kendaraan/simpan', 'INSERT INTO `vehicles` (`name`, `number_plate`, `km_per_liter`, `valid`, `created_by`, `created_dt`) VALUES (\'Avanza\', \'N 1234 A\', \'14\', 1, \'ADMIN\', \'2023-05-13 20:25:38\')');
INSERT INTO `logs` VALUES ('LOG120230513202623', 1, 'ADMIN', '2023-05-13 20:26:23', 'EDIT', 'Kendaraan', 'http://127.0.0.1/sekawan/Kendaraan/simpan', 'UPDATE `vehicles` SET `name` = \'Toyota Avanza\', `number_plate` = \'N 1234 AA\', `km_per_liter` = \'13\', `valid` = 1, `updated_by` = \'ADMIN\', `updated_dt` = \'2023-05-13 20:26:23\'\nWHERE `id` = \'1\'');
INSERT INTO `logs` VALUES ('LOG120230513203722', 1, 'ADMIN', '2023-05-13 20:37:22', 'EDIT', 'Kendaraan', 'http://127.0.0.1/sekawan/Kendaraan/simpan', 'UPDATE `vehicles` SET `name` = \'Avanza\', `number_plate` = \'N 1234 AA\', `km_per_liter` = \'13\', `valid` = 1, `updated_by` = \'ADMIN\', `updated_dt` = \'2023-05-13 20:37:22\'\nWHERE `id` = \'1\'');
INSERT INTO `logs` VALUES ('LOG120230513203807', 1, 'ADMIN', '2023-05-13 20:38:07', 'EDIT', 'Kendaraan', 'http://127.0.0.1/sekawan/Kendaraan/simpan', 'UPDATE `vehicles` SET `merk` = \'Toyota\', `name` = \'Avanza\', `number_plate` = \'N 1234 AA\', `km_per_liter` = \'13\', `bbm` = \'Pertamax\', `valid` = 1, `updated_by` = \'ADMIN\', `updated_dt` = \'2023-05-13 20:38:07\'\nWHERE `id` = \'1\'');
INSERT INTO `logs` VALUES ('LOG120230513224538', 1, 'ADMIN', '2023-05-13 22:45:38', 'TAMBAH', 'Driver', 'http://127.0.0.1/sekawan/Driver/simpan', 'INSERT INTO `drivers` (`name`, `phone`, `ktp`, `valid`, `created_by`, `created_dt`) VALUES (\'Bayu Indra\', \'081928372837\', NULL, 1, \'ADMIN\', \'2023-05-13 22:45:38\')');
INSERT INTO `logs` VALUES ('LOG120230513224629', 1, 'ADMIN', '2023-05-13 22:46:29', 'HAPUS', 'Driver', 'http://127.0.0.1/sekawan/Driver/hapus', 'UPDATE `drivers` SET `valid` = 0\nWHERE `id` = \'5\'');
INSERT INTO `logs` VALUES ('LOG120230513224836', 1, 'ADMIN', '2023-05-13 22:48:36', 'TAMBAH', 'Pegawai', 'http://127.0.0.1/sekawan/Pegawai/simpan', 'INSERT INTO `employees` (`name`, `phone`, `nip`, `level`, `id_department`, `valid`, `created_by`, `created_dt`) VALUES (NULL, NULL, NULL, NULL, NULL, 1, \'ADMIN\', \'2023-05-13 22:48:36\')');
INSERT INTO `logs` VALUES ('LOG120230513224859', 1, 'ADMIN', '2023-05-13 22:48:59', 'HAPUS', 'User', 'http://127.0.0.1/sekawan/User/hapus', 'UPDATE `users` SET `valid` = 0\nWHERE `id` = \'4\'');
INSERT INTO `logs` VALUES ('LOG120230513225109', 1, 'ADMIN', '2023-05-13 22:51:09', 'TAMBAH', 'Pegawai', 'http://127.0.0.1/sekawan/Pegawai/simpan', 'INSERT INTO `employees` (`name`, `phone`, `nip`, `level`, `id_department`, `valid`, `created_by`, `created_dt`) VALUES (\'Bayu Indra\', \'08192879122\', \'93724978\', \'ADMIN\', \'IT\', 1, \'ADMIN\', \'2023-05-13 22:51:09\')');
INSERT INTO `logs` VALUES ('LOG120230513225351', 1, 'ADMIN', '2023-05-13 22:53:51', 'EDIT', 'Pegawai', 'http://127.0.0.1/sekawan/Pegawai/simpan', 'UPDATE `employees` SET `name` = \'Bayu Indra\', `phone` = \'08192879122\', `nip` = \'93724978\', `level` = \'STAFF\', `id_department` = \'2\', `valid` = 1, `updated_by` = \'ADMIN\', `updated_dt` = \'2023-05-13 22:53:51\'\nWHERE `id` = \'2\'');
INSERT INTO `logs` VALUES ('LOG120230513225359', 1, 'ADMIN', '2023-05-13 22:53:59', 'EDIT', 'Pegawai', 'http://127.0.0.1/sekawan/Pegawai/simpan', 'UPDATE `employees` SET `name` = \'Bayu Indra\', `phone` = \'08192879122\', `nip` = \'93724978\', `level` = \'STAFF\', `id_department` = \'1\', `valid` = 1, `updated_by` = \'ADMIN\', `updated_dt` = \'2023-05-13 22:53:59\'\nWHERE `id` = \'2\'');
INSERT INTO `logs` VALUES ('LOG120230513231711', 1, 'ADMIN', '2023-05-13 23:17:11', 'TAMBAH', 'User', 'http://127.0.0.1/sekawan/User/simpan', 'INSERT INTO `users` (`id_employee`, `name`, `username`, `password`, `level`, `valid`, `created_by`, `created_dt`) VALUES (\'2\', \'Bayu Indra\', \'bayu\', \'e10adc3949ba59abbe56e057f20f883e\', \'STAFF\', 1, \'ADMIN\', \'2023-05-13 23:17:11\')');
INSERT INTO `logs` VALUES ('LOG120230513231931', 1, 'ADMIN', '2023-05-13 23:19:31', 'TAMBAH', 'Driver', 'http://127.0.0.1/sekawan/Driver/simpan', 'INSERT INTO `drivers` (`name`, `phone`, `ktp`, `valid`, `created_by`, `created_dt`) VALUES (\'Driver D\', \'08183273723\', \'873287462746\', 1, \'ADMIN\', \'2023-05-13 23:19:31\')');
INSERT INTO `logs` VALUES ('LOG120230513232021', 1, 'ADMIN', '2023-05-13 23:20:21', 'TAMBAH', 'Kendaraan', 'http://127.0.0.1/sekawan/Kendaraan/simpan', 'INSERT INTO `vehicles` (`merk`, `name`, `number_plate`, `km_per_liter`, `bbm`, `valid`, `created_by`, `created_dt`) VALUES (\'Daihatsu\', \'Grand Max\', \'N 6758 B\', \'10\', \'Pertalite\', 1, \'ADMIN\', \'2023-05-13 23:20:21\')');
INSERT INTO `logs` VALUES ('LOG120230514004455', 1, 'ADMIN', '2023-05-14 00:44:55', 'TAMBAH', 'Pegawai', 'http://127.0.0.1/sekawan/Pegawai/simpan', 'INSERT INTO `employees` (`name`, `phone`, `nip`, `level`, `id_department`, `valid`, `created_by`, `created_dt`) VALUES (\'Bayu Indra SPV\', \'09834823234\', \'893748237\', \'SPV\', \'1\', 1, \'ADMIN\', \'2023-05-14 00:44:55\')');
INSERT INTO `logs` VALUES ('LOG120230514004519', 1, 'ADMIN', '2023-05-14 00:45:19', 'TAMBAH', 'Pegawai', 'http://127.0.0.1/sekawan/Pegawai/simpan', 'INSERT INTO `employees` (`name`, `phone`, `nip`, `level`, `id_department`, `valid`, `created_by`, `created_dt`) VALUES (\'Bayu Indra Mgr\', \'09834824234\', \'7347234764\', \'MANAGER\', \'1\', 1, \'ADMIN\', \'2023-05-14 00:45:19\')');
INSERT INTO `logs` VALUES ('LOG120230514004559', 1, 'ADMIN', '2023-05-14 00:45:59', 'TAMBAH', 'User', 'http://127.0.0.1/sekawan/User/simpan', 'INSERT INTO `users` (`id_employee`, `name`, `username`, `password`, `level`, `valid`, `created_by`, `created_dt`) VALUES (\'3\', \'Bayu Indra SPV\', \'bayu_spv\', \'e10adc3949ba59abbe56e057f20f883e\', \'SPV\', 1, \'ADMIN\', \'2023-05-14 00:45:59\')');
INSERT INTO `logs` VALUES ('LOG120230514004626', 1, 'ADMIN', '2023-05-14 00:46:26', 'TAMBAH', 'User', 'http://127.0.0.1/sekawan/User/simpan', 'INSERT INTO `users` (`id_employee`, `name`, `username`, `password`, `level`, `valid`, `created_by`, `created_dt`) VALUES (\'4\', \'Bayu Indra Mgr\', \'bayu_mgr\', \'e10adc3949ba59abbe56e057f20f883e\', \'MANAGER\', 1, \'ADMIN\', \'2023-05-14 00:46:26\')');
INSERT INTO `logs` VALUES ('LOG120230514004855', 1, 'ADMIN', '2023-05-14 00:48:55', 'TAMBAH', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations` (`reservation_dt`, `id_vehicle`, `id_driver`, `id_employee`, `id_department`, `status`, `valid`, `created_by`, `created_dt`) VALUES (\'2023-05-14 00:46:00\', \'1\', \'1\', \'2\', \'1\', \'PENDING\', 1, \'ADMIN\', \'2023-05-14 00:48:55\')');
INSERT INTO `logs` VALUES ('LOG120230514010322', 1, 'ADMIN', '2023-05-14 01:03:22', 'TAMBAH', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations_approval` (`id_reservation`, `id_employee`, `status`) VALUES (0, \'4\', \'PENDING\')');
INSERT INTO `logs` VALUES ('LOG120230514010935', 1, 'ADMIN', '2023-05-14 01:09:35', 'TAMBAH', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations_approval` (`id_reservation`, `id_employee`, `status`) VALUES (\'RV-23051400002\', \'4\', \'PENDING\')');
INSERT INTO `logs` VALUES ('LOG120230514011644', 1, 'ADMIN', '2023-05-14 01:16:44', 'TAMBAH', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations` (`id`, `reservation_dt`, `id_vehicle`, `id_driver`, `id_employee`, `id_department`, `status`, `valid`, `created_by`, `created_dt`) VALUES (\'RV-23051400003\', \'2023-05-16 01:13:00\', \'1\', \'1\', \'2\', \'1\', \'PENDING\', 1, \'ADMIN\', \'2023-05-14 01:16:44\')');
INSERT INTO `logs` VALUES ('LOG120230514022242', 1, 'ADMIN', '2023-05-14 02:22:42', 'TAMBAH', 'Pegawai', 'http://127.0.0.1/sekawan/Pegawai/simpan', 'INSERT INTO `employees` (`name`, `phone`, `nip`, `level`, `id_department`, `valid`, `created_by`, `created_dt`) VALUES (\'Bayu Act Mgr\', \'0823783723\', \'23747234876\', \'MANAGER\', \'2\', 1, \'ADMIN\', \'2023-05-14 02:22:42\')');
INSERT INTO `logs` VALUES ('LOG120230514022257', 1, 'ADMIN', '2023-05-14 02:22:57', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'UPDATE `reservations_approval` SET `id_employee` = \'5\', `name_employee` = \'Bayu Act Mgr\'\nWHERE `id` = \'2\'');
INSERT INTO `logs` VALUES ('LOG120230514022330', 1, 'ADMIN', '2023-05-14 02:23:30', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'UPDATE `reservations_approval` SET `id_employee` = \'5\', `name_employee` = \'Bayu Act Mgr\'\nWHERE `id` = \'\'');
INSERT INTO `logs` VALUES ('LOG120230514022345', 1, 'ADMIN', '2023-05-14 02:23:45', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'UPDATE `reservations_approval` SET `id_employee` = \'5\', `name_employee` = \'Bayu Act Mgr\'\nWHERE `id` = \'\'');
INSERT INTO `logs` VALUES ('LOG120230514023128', 1, 'ADMIN', '2023-05-14 02:31:28', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations_approval` (`id_reservation`, `id_employee`, `name_employee`, `status`) VALUES (\'RV-23051400001\', \'5\', \'Bayu Act Mgr\', \'PENDING\')');
INSERT INTO `logs` VALUES ('LOG120230514023233', 1, 'ADMIN', '2023-05-14 02:32:33', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations_approval` (`id_reservation`, `id_employee`, `name_employee`, `status`) VALUES (\'RV-23051400001\', \'4\', \'Bayu Indra Mgr\', \'PENDING\')');
INSERT INTO `logs` VALUES ('LOG120230514023352', 1, 'ADMIN', '2023-05-14 02:33:52', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations_approval` (`id_reservation`, `id_employee`, `name_employee`, `status`) VALUES (\'RV-23051400001\', \'5\', \'Bayu Act Mgr\', \'PENDING\')');
INSERT INTO `logs` VALUES ('LOG120230514023417', 1, 'ADMIN', '2023-05-14 02:34:17', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations_approval` (`id_reservation`, `id_employee`, `name_employee`, `status`) VALUES (\'RV-23051400001\', \'5\', \'Bayu Act Mgr\', \'PENDING\')');
INSERT INTO `logs` VALUES ('LOG120230514023623', 1, 'ADMIN', '2023-05-14 02:36:23', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations_approval` (`id_reservation`, `id_employee`, `name_employee`, `status`) VALUES (\'RV-23051400001\', \'5\', \'Bayu Act Mgr\', \'PENDING\')');
INSERT INTO `logs` VALUES ('LOG120230514023831', 1, 'ADMIN', '2023-05-14 02:38:31', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations_approval` (`id_reservation`, `id_employee`, `name_employee`, `status`) VALUES (\'RV-23051400001\', \'4\', \'Bayu Indra Mgr\', \'PENDING\')');
INSERT INTO `logs` VALUES ('LOG120230514023921', 1, 'ADMIN', '2023-05-14 02:39:21', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations_approval` (`id_reservation`, `id_employee`, `name_employee`, `status`) VALUES (\'RV-23051400001\', \'5\', \'Bayu Act Mgr\', \'PENDING\')');
INSERT INTO `logs` VALUES ('LOG120230514031103', 1, 'ADMIN', '2023-05-14 03:11:03', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations_approval` (`id_reservation`, `id_employee`, `name_employee`, `status`) VALUES (\'RV-23051400001\', \'5\', \'Bayu Act Mgr\', \'PENDING\')');
INSERT INTO `logs` VALUES ('LOG120230514031119', 1, 'ADMIN', '2023-05-14 03:11:19', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations_approval` (`id_reservation`, `id_employee`, `name_employee`, `status`) VALUES (\'RV-23051400002\', \'4\', \'Bayu Indra Mgr\', \'PENDING\')');
INSERT INTO `logs` VALUES ('LOG120230514031208', 1, 'ADMIN', '2023-05-14 03:12:08', 'EDIT', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations_approval` (`id_reservation`, `id_employee`, `name_employee`, `status`) VALUES (\'RV-23051400003\', \'4\', \'Bayu Indra Mgr\', \'PENDING\')');
INSERT INTO `logs` VALUES ('LOG120230514031805', 1, 'ADMIN', '2023-05-14 03:18:05', 'TAMBAH', 'Reservasi', 'http://127.0.0.1/sekawan/Reservasi/simpan', 'INSERT INTO `reservations` (`id`, `reservation_dt`, `id_vehicle`, `id_driver`, `id_employee`, `id_department`, `destination`, `status`, `valid`, `created_by`, `created_dt`) VALUES (\'RV-23051400004\', \'2023-05-18 03:17:00\', \'2\', \'2\', \'2\', \'1\', \'Bali\', \'PENDING\', 1, \'ADMIN\', \'2023-05-14 03:18:05\')');
INSERT INTO `logs` VALUES ('LOG720230514062009', 7, 'Bayu Indra SPV', '2023-05-14 06:20:09', 'APPROVE', 'Approval Approve Data', 'http://127.0.0.1/sekawan/Reservasi/approve', 'UPDATE `reservations_approval` SET `approve_dt` = \'2023-05-14 06:20:09\', `status` = \'APPROVE\'\nWHERE `id` = \'21\'');
INSERT INTO `logs` VALUES ('LOG820230514062041', 8, 'Bayu Indra Mgr', '2023-05-14 06:20:41', 'APPROVE', 'Approval Approve Data', 'http://127.0.0.1/sekawan/Reservasi/approve', 'UPDATE `reservations_approval` SET `approve_dt` = \'2023-05-14 06:20:41\', `status` = \'APPROVE\'\nWHERE `id` = \'19\'');
INSERT INTO `logs` VALUES ('LOG820230514062049', 8, 'Bayu Indra Mgr', '2023-05-14 06:20:49', 'APPROVE', 'Approval Approve Data', 'http://127.0.0.1/sekawan/Reservasi/approve', 'UPDATE `reservations_approval` SET `approve_dt` = \'2023-05-14 06:20:49\', `status` = \'APPROVE\'\nWHERE `id` = \'22\'');
INSERT INTO `logs` VALUES ('LOG820230514062056', 8, 'Bayu Indra Mgr', '2023-05-14 06:20:56', 'APPROVE', 'Approval Approve Data', 'http://127.0.0.1/sekawan/Reservasi/approve', 'UPDATE `reservations_approval` SET `approve_dt` = \'2023-05-14 06:20:56\', `status` = \'APPROVE\'\nWHERE `id` = \'\'');

-- ----------------------------
-- Table structure for positions
-- ----------------------------
DROP TABLE IF EXISTS `positions`;
CREATE TABLE `positions`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of positions
-- ----------------------------
INSERT INTO `positions` VALUES (1, 'ADMIN');
INSERT INTO `positions` VALUES (2, 'STAFF');
INSERT INTO `positions` VALUES (3, 'SPV');
INSERT INTO `positions` VALUES (4, 'MANAGER');

-- ----------------------------
-- Table structure for reservations
-- ----------------------------
DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations`  (
  `id` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_vehicle` int NULL DEFAULT NULL,
  `id_driver` int NULL DEFAULT NULL,
  `id_employee` int NULL DEFAULT NULL,
  `id_department` int NULL DEFAULT NULL,
  `reservation_dt` datetime NULL DEFAULT NULL,
  `destination` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `km_out` int NULL DEFAULT NULL,
  `out_dt` datetime NULL DEFAULT NULL,
  `km_in` int NULL DEFAULT NULL,
  `in_dt` datetime NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'PENDING, APPROVE',
  `valid` tinyint NULL DEFAULT NULL COMMENT '1 : Valid, 0 : Not Valid',
  `created_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_dt` datetime NULL DEFAULT NULL,
  `updated_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `updated_dt` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reservations
-- ----------------------------
INSERT INTO `reservations` VALUES ('RV-23051400001', 1, 1, 2, 1, '2023-05-14 08:00:00', 'Malang', 2500, '2023-05-14 07:44:04', 3000, '2023-05-14 07:44:04', 'SELESAI', 1, 'ADMIN', '2023-05-14 01:03:22', 'ADMIN', '2023-05-14 03:11:03');
INSERT INTO `reservations` VALUES ('RV-23051400002', 1, 1, 2, 1, '2023-05-15 09:00:00', 'Surabaya', NULL, NULL, NULL, NULL, 'PENDING', 1, 'ADMIN', '2023-05-14 01:09:35', 'ADMIN', '2023-05-14 15:01:35');
INSERT INTO `reservations` VALUES ('RV-23051400003', 1, 1, 2, 1, '2023-05-16 10:00:00', 'Jogja', NULL, NULL, NULL, NULL, 'PENDING', 1, 'ADMIN', '2023-05-14 01:16:44', 'ADMIN', '2023-05-14 03:12:08');
INSERT INTO `reservations` VALUES ('RV-23051400004', 2, 2, 2, 1, '2023-05-18 03:17:00', 'Bali', NULL, NULL, NULL, NULL, 'PENDING', 1, 'ADMIN', '2023-05-14 03:18:05', NULL, NULL);
INSERT INTO `reservations` VALUES ('RV-23051400005', 1, 2, 2, 1, '2023-05-17 14:06:00', 'Malang', NULL, NULL, NULL, NULL, 'PENDING', 1, 'ADMIN', '2023-05-14 14:07:05', NULL, NULL);
INSERT INTO `reservations` VALUES ('RV-23051400006', 2, 2, 2, 1, '2023-05-20 14:07:00', 'Malang', NULL, NULL, NULL, NULL, 'PENDING', 1, 'ADMIN', '2023-05-14 14:07:51', NULL, NULL);
INSERT INTO `reservations` VALUES ('RV-23051400007', 2, 2, 3, 1, '2023-05-16 18:30:00', 'tambang', 3000, '2023-05-14 14:31:57', 3200, '2023-05-14 14:31:57', 'APPROVE', 1, 'ADMIN', '2023-05-14 14:21:50', NULL, NULL);
INSERT INTO `reservations` VALUES ('RV-23051400008', 3, 3, 3, 1, '2023-05-25 15:01:00', 'tambang', NULL, NULL, NULL, NULL, 'PENDING', 1, 'ADMIN', '2023-05-14 15:02:13', NULL, NULL);

-- ----------------------------
-- Table structure for reservations_approval
-- ----------------------------
DROP TABLE IF EXISTS `reservations_approval`;
CREATE TABLE `reservations_approval`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_reservation` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_employee` int NULL DEFAULT NULL,
  `name_employee` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'PENDING, APPROVE',
  `approve_dt` datetime NULL DEFAULT NULL,
  `open` tinyint NULL DEFAULT NULL COMMENT '1 = Bisa Approve, 0 = Tidak bisa Approve',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reservations_approval
-- ----------------------------
INSERT INTO `reservations_approval` VALUES (1, 'RV-23051400001', 3, 'Bayu Indra SPV', 'APPROVE', '2023-05-14 06:37:27', 0);
INSERT INTO `reservations_approval` VALUES (19, 'RV-23051400001', 4, 'Bayu Indra Mgr', 'APPROVE', '2023-05-14 06:40:11', 0);
INSERT INTO `reservations_approval` VALUES (20, 'RV-23051400001', 5, 'Bayu Act Mgr', 'APPROVE', '2023-05-14 06:40:29', 0);
INSERT INTO `reservations_approval` VALUES (23, 'RV-23051400003', 3, 'Bayu Indra SPV', 'PENDING', NULL, 1);
INSERT INTO `reservations_approval` VALUES (24, 'RV-23051400003', 4, 'Bayu Indra Mgr', 'PENDING', NULL, 0);
INSERT INTO `reservations_approval` VALUES (25, 'RV-23051400004', 3, 'Bayu Indra SPV', 'PENDING', NULL, 1);
INSERT INTO `reservations_approval` VALUES (26, 'RV-23051400004', 4, 'Bayu Indra Mgr', 'PENDING', NULL, 0);
INSERT INTO `reservations_approval` VALUES (27, 'RV-23051400005', 3, 'Bayu Indra SPV', 'PENDING', NULL, 1);
INSERT INTO `reservations_approval` VALUES (28, 'RV-23051400005', 4, 'Bayu Indra Mgr', 'PENDING', NULL, 0);
INSERT INTO `reservations_approval` VALUES (29, 'RV-23051400006', 3, 'Bayu Indra SPV', 'PENDING', NULL, 1);
INSERT INTO `reservations_approval` VALUES (30, 'RV-23051400006', 4, 'Bayu Indra Mgr', 'PENDING', NULL, 0);
INSERT INTO `reservations_approval` VALUES (31, 'RV-23051400007', 4, 'Bayu Indra Mgr', 'APPROVE', '2023-05-14 14:24:08', 0);
INSERT INTO `reservations_approval` VALUES (32, 'RV-23051400007', 5, 'Bayu Act Mgr', 'APPROVE', '2023-05-14 14:24:45', 0);
INSERT INTO `reservations_approval` VALUES (33, 'RV-23051400002', 3, 'Bayu Indra SPV', 'PENDING', NULL, 1);
INSERT INTO `reservations_approval` VALUES (34, 'RV-23051400002', 4, 'Bayu Indra Mgr', 'PENDING', NULL, 0);
INSERT INTO `reservations_approval` VALUES (35, 'RV-23051400008', 4, 'Bayu Indra Mgr', 'PENDING', NULL, 1);
INSERT INTO `reservations_approval` VALUES (36, 'RV-23051400008', 5, 'Bayu Act Mgr', 'PENDING', NULL, 0);

-- ----------------------------
-- Table structure for service
-- ----------------------------
DROP TABLE IF EXISTS `service`;
CREATE TABLE `service`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_vehicle` int NULL DEFAULT NULL,
  `service_dt` date NULL DEFAULT NULL,
  `valid` tinyint NULL DEFAULT NULL COMMENT '1 : Valid, 0 : Not Valid',
  `created_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_dt` datetime NULL DEFAULT NULL,
  `updated_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `updated_dt` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of service
-- ----------------------------
INSERT INTO `service` VALUES (1, 2, '2023-05-15', 1, 'ADMIN', '2023-05-14 09:11:36', 'ADMIN', '2023-05-14 09:16:29');
INSERT INTO `service` VALUES (2, 3, '2023-05-25', 1, 'ADMIN', '2023-05-14 13:56:47', 'ADMIN', '2023-05-14 13:56:58');
INSERT INTO `service` VALUES (3, 2, '2023-05-18', 1, 'ADMIN', '2023-05-14 14:43:52', NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_employee` int NULL DEFAULT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Nama user',
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Username user',
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Password user',
  `level` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'Positions',
  `valid` tinyint NOT NULL COMMENT '1: Valid, 0: Not Valid',
  `created_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_dt` datetime NULL DEFAULT NULL,
  `updated_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `updated_dt` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, NULL, 'ADMIN', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'ADMIN', 1, 'ADMIN', '2023-05-13 12:58:15', NULL, NULL);
INSERT INTO `users` VALUES (2, NULL, 'STAFF', 'staff', 'e10adc3949ba59abbe56e057f20f883e', 'STAFF', 0, 'ADMIN', '2023-05-13 12:58:18', NULL, NULL);
INSERT INTO `users` VALUES (3, NULL, 'MANAGER', 'manager', 'e10adc3949ba59abbe56e057f20f883e', 'MANAGER', 0, 'ADMIN', '2023-05-13 12:58:20', NULL, NULL);
INSERT INTO `users` VALUES (4, NULL, 'Bayu', 'bayu', '827ccb0eea8a706c4c34a16891f84e7b', 'ADMIN', 0, 'ADMIN', '2023-05-13 15:56:59', NULL, NULL);
INSERT INTO `users` VALUES (5, NULL, 'Tes', 'Tes', 'e10adc3949ba59abbe56e057f20f883e', 'ADMIN', 0, 'ADMIN', '2023-05-13 16:55:34', 'ADMIN', '2023-05-13 19:52:05');
INSERT INTO `users` VALUES (6, 2, 'Bayu Indra', 'bayu', 'e10adc3949ba59abbe56e057f20f883e', 'STAFF', 1, 'ADMIN', '2023-05-13 23:17:11', NULL, NULL);
INSERT INTO `users` VALUES (7, 3, 'Bayu Indra SPV', 'bayu_spv', 'e10adc3949ba59abbe56e057f20f883e', 'SPV', 1, 'ADMIN', '2023-05-14 00:45:59', NULL, NULL);
INSERT INTO `users` VALUES (8, 4, 'Bayu Indra Mgr', 'bayu_mgr', 'e10adc3949ba59abbe56e057f20f883e', 'MANAGER', 1, 'ADMIN', '2023-05-14 00:46:26', NULL, NULL);
INSERT INTO `users` VALUES (9, 5, 'Bayu Act Mgr', 'bayu_act_mgr', 'e10adc3949ba59abbe56e057f20f883e', 'MANAGER', 1, 'ADMIN', '2023-05-14 06:39:34', NULL, NULL);

-- ----------------------------
-- Table structure for vehicles
-- ----------------------------
DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE `vehicles`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `merk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `number_plate` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `km_per_liter` int NULL DEFAULT NULL,
  `bbm` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `valid` tinyint NULL DEFAULT NULL COMMENT '1 : Valid, 0 : Not Valid',
  `created_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_dt` datetime NULL DEFAULT NULL,
  `updated_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `updated_dt` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vehicles
-- ----------------------------
INSERT INTO `vehicles` VALUES (1, 'Toyota', 'Avanza', 'N 1234 AA', 13, 'Pertamax', 1, 'ADMIN', '2023-05-13 20:25:38', 'ADMIN', '2023-05-13 20:38:07');
INSERT INTO `vehicles` VALUES (2, 'Daihatsu', 'Grand Max', 'N 6758 B', 10, 'Pertalite', 1, 'ADMIN', '2023-05-13 23:20:21', NULL, NULL);
INSERT INTO `vehicles` VALUES (3, 'Mitsubishi', 'XPander Cross', 'N 2324 CC', 11, 'Pertalite', 1, 'ADMIN', '2023-05-14 13:53:48', 'ADMIN', '2023-05-14 13:54:03');

SET FOREIGN_KEY_CHECKS = 1;
