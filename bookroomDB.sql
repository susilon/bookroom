# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     bookroom
# Server version:               5.7.27-log
# Server OS:                    Win64
# HeidiSQL version:             5.0.0.3272
# Date/time:                    2021-11-08 01:23:49
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
# Dumping database structure for bookroom
CREATE DATABASE IF NOT EXISTS `bookroom` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bookroom`;


# Dumping structure for table bookroom.dtbookroom
CREATE TABLE IF NOT EXISTS `dtbookroom` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_bookroom` bigint(20) NOT NULL,
  `subjects` varchar(150) DEFAULT NULL,
  `id_room` tinyint(10) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `remark` varchar(225) DEFAULT NULL,
  `book_by` varchar(100) DEFAULT NULL,
  `book_dt` date DEFAULT NULL,
  `use_time_start` time DEFAULT NULL,
  `use_time_end` time DEFAULT NULL,
  `use_date` date DEFAULT NULL,
  `approve_by` varchar(100) DEFAULT NULL,
  `approve_dt` date DEFAULT NULL,
  `update_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `compcode` varchar(191) DEFAULT NULL,
  `comp_code` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_bookroom` (`id_bookroom`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=latin1;

# Dumping data for table bookroom.dtbookroom: 12 rows
/*!40000 ALTER TABLE `dtbookroom` DISABLE KEYS */;
INSERT INTO `dtbookroom` (`id`, `id_bookroom`, `subjects`, `id_room`, `status`, `remark`, `book_by`, `book_dt`, `use_time_start`, `use_time_end`, `use_date`, `approve_by`, `approve_dt`, `update_dt`, `compcode`, `comp_code`) VALUES (160, 27363719591755984, 'testtt 11', 3, '', '', 'ANTONIUS.NOVRIS', '2021-11-04', '11:00:00', '11:30:00', '2021-11-24', '', '0000-00-00', '2021-11-04 13:09:10', NULL, NULL), (161, 27363719591755985, 'test coba booking room', 3, '', '', 'ANTONIUS.NOVRIS', '2021-11-04', '16:00:00', '16:30:00', '2021-11-04', '', '0000-00-00', '2021-11-04 13:34:46', NULL, NULL), (164, 99466324400406647, 'ffffff', 3, NULL, '', 'ANTONIUS.NOVRIS', '2021-11-07', '09:00:00', '09:30:00', '2021-11-08', NULL, NULL, '2021-11-07 22:04:35', NULL, NULL), (165, 111, 'sfsdfsdfsdf', 1, NULL, 'ikut', 'ano', '2021-11-07', '09:00:00', '09:30:30', '2021-11-07', NULL, NULL, '2021-11-07 22:15:57', NULL, NULL), (166, 99466324400406648, 'cccccc', 3, NULL, '', 'ANTONIUS.NOVRIS', '2021-11-07', '09:00:00', '10:00:00', '2021-11-08', NULL, NULL, '2021-11-07 22:20:10', NULL, NULL), (167, 99466324400406649, 'test', 3, NULL, '', 'ANTONIUS.NOVRIS', '2021-11-07', '09:00:00', '09:30:00', '2021-11-08', NULL, NULL, '2021-11-07 22:28:45', NULL, NULL), (168, 99466324400406650, 'test', 3, NULL, '', 'ANTONIUS.NOVRIS', '2021-11-07', '09:00:00', '09:30:00', '2021-11-08', NULL, NULL, '2021-11-07 22:29:36', NULL, NULL), (169, 99466324400406651, 'test', 3, NULL, '', 'ANTONIUS.NOVRIS', '2021-11-07', '09:00:00', '09:30:00', '2021-11-08', NULL, NULL, '2021-11-07 22:32:46', NULL, NULL), (170, 99466324400406652, 'test', 3, NULL, '', 'ANTONIUS.NOVRIS', '2021-11-07', '09:00:00', '09:30:00', '2021-11-08', NULL, NULL, '2021-11-07 22:33:12', NULL, NULL), (171, 99466324400406653, 'test', 3, NULL, '', 'ANTONIUS.NOVRIS', '2021-11-07', '09:00:00', '09:30:00', '2021-11-08', NULL, NULL, '2021-11-07 22:33:48', NULL, NULL), (172, 99466324400406654, 'test', 3, NULL, '', 'ANTONIUS.NOVRIS', '2021-11-07', '09:00:00', '09:30:00', '2021-11-08', NULL, NULL, '2021-11-07 22:34:33', NULL, NULL), (175, 99466324400406657, 'tes 2 3', 3, NULL, 'tes 2', 'ANTONIUS.NOVRIS', '2021-11-07', '11:30:00', '12:00:00', '2021-11-08', NULL, NULL, '2021-11-07 22:43:25', NULL, NULL);
/*!40000 ALTER TABLE `dtbookroom` ENABLE KEYS */;


# Dumping structure for table bookroom.dtbookroomdetail
CREATE TABLE IF NOT EXISTS `dtbookroomdetail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_bookroom` bigint(20) NOT NULL,
  `id_room` tinyint(10) NOT NULL,
  `time_book` time NOT NULL,
  `subjects` varchar(225) DEFAULT NULL,
  `use_date` date DEFAULT NULL,
  `book_by` varchar(100) DEFAULT NULL,
  `book_dt` date DEFAULT NULL,
  `update_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=491 DEFAULT CHARSET=latin1;

# Dumping data for table bookroom.dtbookroomdetail: 6 rows
/*!40000 ALTER TABLE `dtbookroomdetail` DISABLE KEYS */;
INSERT INTO `dtbookroomdetail` (`id`, `id_bookroom`, `id_room`, `time_book`, `subjects`, `use_date`, `book_by`, `book_dt`, `update_dt`) VALUES (468, 27363719591755984, 3, '11:00:00', 'testtt 11', '2021-11-24', 'ANTONIUS.NOVRIS', '2021-11-04', '2021-11-04 13:09:10'), (469, 27363719591755984, 3, '11:30:00', 'testtt 11', '2021-11-24', 'ANTONIUS.NOVRIS', '2021-11-04', '2021-11-04 13:09:10'), (470, 27363719591755985, 3, '16:00:00', 'test coba booking room', '2021-11-04', 'ANTONIUS.NOVRIS', '2021-11-04', '2021-11-04 13:34:46'), (471, 27363719591755985, 3, '16:30:00', 'test coba booking room', '2021-11-04', 'ANTONIUS.NOVRIS', '2021-11-04', '2021-11-04 13:34:47'), (484, 99466324400406657, 3, '11:30:00', 'tes 2 3', '2021-11-08', 'ANTONIUS.NOVRIS', '2021-11-07', '2021-11-07 22:43:25'), (485, 99466324400406657, 3, '12:00:00', 'tes 2 3', '2021-11-08', 'ANTONIUS.NOVRIS', '2021-11-07', '2021-11-07 22:43:25');
/*!40000 ALTER TABLE `dtbookroomdetail` ENABLE KEYS */;


# Dumping structure for table bookroom.dtbookroomlog
CREATE TABLE IF NOT EXISTS `dtbookroomlog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `log` text,
  `even` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `logdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

# Dumping data for table bookroom.dtbookroomlog: 6 rows
/*!40000 ALTER TABLE `dtbookroomlog` DISABLE KEYS */;
INSERT INTO `dtbookroomlog` (`id`, `log`, `even`, `user_name`, `logdate`) VALUES (14, 'id bookroom : 99466324400406655|subject :|use date : 2021-11-08|book date : 2021-11-07|09:00:00-09:30:00|book by : ANTONIUS.NOVRIS|update date : 2021-11-07 22:36:15|Remark :', 'delete', 'ANTONIUS.NOVRIS', '2021-11-07 22:37:11'), (15, 'id bookroom : 99466324400406656|subject :tes 2|use date : 2021-11-08|book date : 2021-11-07|11:30:00-12:30:00|book by : ANTONIUS.NOVRIS|update date : 2021-11-07 22:37:27|Remark :tes 2', 'book', 'ANTONIUS.NOVRIS', '2021-11-07 22:37:27'), (16, 'id bookroom : 99466324400406657|subject :|use date : 2021-11-08|book date : 2021-11-07|11:30:00-12:00:00|book by : ANTONIUS.NOVRIS|update date : 2021-11-07 22:43:25|Remark :tes 2 | id Book room before : 99466324400406656', 'edit', 'ANTONIUS.NOVRIS', '2021-11-07 22:43:25'), (17, 'id bookroom : 99466324400406658|subject :ini tes 1|use date : 2021-11-08|book date : 2021-11-08|10:00:00-10:30:00|book by : tes|update date : 2021-11-08 00:58:40|Remark :ini tes 111', 'book', 'tes', '2021-11-08 00:58:40'), (18, 'id bookroom : 99466324400406659|subject :|use date : 2021-11-08|book date : 2021-11-08|10:00:00-11:00:00|book by : tes|update date : 2021-11-08 00:59:28|Remark :ini tes 111 | id Book room before : 99466324400406658', 'edit', 'tes', '2021-11-08 00:59:28'), (19, 'id bookroom : 99466324400406659|subject :|use date : 2021-11-08|book date : 2021-11-08|10:00:00-11:00:00|book by : tes|update date : 2021-11-08 00:59:28|Remark :ini tes 111', 'delete', 'tes', '2021-11-08 00:59:38');
/*!40000 ALTER TABLE `dtbookroomlog` ENABLE KEYS */;


# Dumping structure for table bookroom.dtgroupmodul
CREATE TABLE IF NOT EXISTS `dtgroupmodul` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(50) DEFAULT NULL,
  `create_dt` date DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `updt_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updt_by` varchar(50) DEFAULT NULL,
  `modul_name` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

# Dumping data for table bookroom.dtgroupmodul: 3 rows
/*!40000 ALTER TABLE `dtgroupmodul` DISABLE KEYS */;
INSERT INTO `dtgroupmodul` (`id`, `group_name`, `create_dt`, `create_by`, `updt_dt`, `updt_by`, `modul_name`) VALUES (1, 'ADMINISTRATOR', NULL, NULL, '2019-11-13 16:23:50', NULL, NULL), (8, 'Sulo Online Course', NULL, NULL, '2021-11-04 12:47:12', NULL, NULL), (9, 'user', NULL, NULL, '2021-11-07 19:48:31', NULL, NULL);
/*!40000 ALTER TABLE `dtgroupmodul` ENABLE KEYS */;


# Dumping structure for table bookroom.dtmappmodul
CREATE TABLE IF NOT EXISTS `dtmappmodul` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `group_id` varchar(5) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `modul_id` varchar(5) NOT NULL,
  `modul_name` varchar(50) NOT NULL,
  `create_dt` date DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `updt_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updt_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=latin1 COMMENT='Mapping Group Modul dengan modul';

# Dumping data for table bookroom.dtmappmodul: 11 rows
/*!40000 ALTER TABLE `dtmappmodul` DISABLE KEYS */;
INSERT INTO `dtmappmodul` (`id`, `group_id`, `group_name`, `modul_id`, `modul_name`, `create_dt`, `create_by`, `updt_dt`, `updt_by`) VALUES (1, '1', 'ADMINISTRATOR', '1', '', '0000-00-00', '', '2020-05-09 01:46:12', ''), (2, '1', 'ADMINISTRATOR', '2', '', '0000-00-00', '', '2020-05-09 01:46:25', ''), (3, '1', 'ADMINISTRATOR', '3', '', '0000-00-00', '', '2020-05-09 01:46:36', ''), (4, '1', 'ADMINISTRATOR', '4', '', '0000-00-00', '', '2020-05-09 01:46:47', ''), (5, '1', 'ADMINISTRATOR', '5', '', '0000-00-00', '', '2020-05-09 01:46:58', ''), (158, '1', 'ADMINISTRATOR', '44', 'Book Room', '0000-00-00', '', '2021-11-04 12:55:30', ''), (159, '1', 'ADMINISTRATOR', '45', 'Log Book Room', '0000-00-00', '', '2021-11-04 12:55:37', ''), (160, '9', 'user', '44', 'Book Room', NULL, NULL, '2021-11-07 22:53:40', 'antonius.novris'), (162, '9', 'user', '45', 'Log Book Room', NULL, NULL, '2021-11-07 22:54:11', NULL), (163, '8', 'Sulo Online Course', '44', 'Book Room', NULL, NULL, '2021-11-07 22:54:25', NULL), (164, '8', 'Sulo Online Course', '45', 'Log Book Room', NULL, NULL, '2021-11-07 22:54:30', NULL);
/*!40000 ALTER TABLE `dtmappmodul` ENABLE KEYS */;


# Dumping structure for table bookroom.dtnumberlog
CREATE TABLE IF NOT EXISTS `dtnumberlog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_msmi` varchar(10) DEFAULT NULL,
  `id_msnumber` varchar(10) DEFAULT NULL,
  `seq_numb` varchar(3) DEFAULT NULL,
  `years` int(10) DEFAULT NULL,
  `msnumb_desc` varchar(50) DEFAULT NULL,
  `activity_id` varchar(3) DEFAULT NULL,
  `activity` varchar(100) DEFAULT NULL,
  `create_by` varchar(30) DEFAULT NULL,
  `create_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='data Number Log';

# Dumping data for table bookroom.dtnumberlog: 0 rows
/*!40000 ALTER TABLE `dtnumberlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `dtnumberlog` ENABLE KEYS */;


# Dumping structure for table bookroom.dtuser
CREATE TABLE IF NOT EXISTS `dtuser` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `NTUserName` varchar(50) DEFAULT NULL,
  `group_cd` varchar(4) DEFAULT NULL,
  `div_cd` varchar(4) DEFAULT NULL,
  `dept_cd` varchar(4) DEFAULT NULL,
  `is_dept_assigner` varchar(3) DEFAULT NULL,
  `is_pic_assigner` varchar(3) DEFAULT NULL,
  `is_first_assigner` varchar(3) DEFAULT NULL,
  `NickName` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `create_dt` date DEFAULT NULL,
  `updt_dt` date DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `updt_by` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8;

# Dumping data for table bookroom.dtuser: 18 rows
/*!40000 ALTER TABLE `dtuser` DISABLE KEYS */;
INSERT INTO `dtuser` (`id`, `employee_id`, `emp_name`, `NTUserName`, `group_cd`, `div_cd`, `dept_cd`, `is_dept_assigner`, `is_pic_assigner`, `is_first_assigner`, `NickName`, `password`, `create_dt`, `updt_dt`, `create_by`, `updt_by`) VALUES (12, '1000001', 'SUSILO NURCAHYO', 'SUSILON', 'IT', 'DEV', 'APP', NULL, NULL, NULL, 'sulo', '$2y$10$fMIYzSJCqpXKDH1yDVhLUOE2E19TPeCT9gP58Cbo7Rut1rEnnhIBK', NULL, NULL, NULL, NULL), (33, '1000002', 'RIDWAN YUNISMAN', 'ridwan.yunisman', 'IT', 'DEV', 'MIS', NULL, NULL, NULL, 'Ridwan', '$2y$10$fMIYzSJCqpXKDH1yDVhLUOE2E19TPeCT9gP58Cbo7Rut1rEnnhIBK', NULL, NULL, NULL, NULL), (53, '1000003', 'BUHAIRI .', 'buhairi', 'IT', 'OT', 'OT', NULL, NULL, NULL, 'BUH', '$2y$10$fMIYzSJCqpXKDH1yDVhLUOE2E19TPeCT9gP58Cbo7Rut1rEnnhIBK', NULL, NULL, NULL, NULL), (130, '1000004', 'Antonius Novris', 'antoninov', 'IT', 'SPL', 'SRA', NULL, NULL, NULL, 'ANO', '$2y$10$fMIYzSJCqpXKDH1yDVhLUOE2E19TPeCT9gP58Cbo7Rut1rEnnhIBK', NULL, NULL, NULL, NULL), (131, '123', 'bbb', 'bbb', 'EKS', 'EKS', 'EKS', NULL, NULL, NULL, 'bbb', '$2y$10$jBHKvyRo5wJ44GIcmksU3uLMaQspLP32qAXHzPM9JtYO/itpyGyU2', '2021-11-08', '2021-11-08', 'antoninov', 'antoninov');
/*!40000 ALTER TABLE `dtuser` ENABLE KEYS */;


# Dumping structure for table bookroom.msdept
CREATE TABLE IF NOT EXISTS `msdept` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'alter table msdept auto_increment = 6',
  `dept_cd` varchar(5) NOT NULL,
  `descr` varchar(50) DEFAULT NULL,
  `div_cd` varchar(5) DEFAULT NULL,
  `create_dt` date DEFAULT NULL,
  `update_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_by` varchar(100) DEFAULT NULL,
  `update_by` varchar(100) DEFAULT NULL,
  `is_active` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dept_cd` (`dept_cd`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

# Dumping data for table bookroom.msdept: 12 rows
/*!40000 ALTER TABLE `msdept` DISABLE KEYS */;
INSERT INTO `msdept` (`id`, `dept_cd`, `descr`, `div_cd`, `create_dt`, `update_dt`, `create_by`, `update_by`, `is_active`) VALUES (1, 'APP', 'Application Programer', 'DEV', '2018-12-27', '2019-07-29 14:10:45', NULL, NULL, 'Y'), (2, 'DBA', 'Database Admin', 'DEV', '2018-12-27', '2019-07-29 14:10:49', NULL, NULL, 'Y'), (3, 'MIS', 'MIS', 'DEV', '2018-12-27', '2019-07-29 14:10:55', NULL, NULL, 'Y'), (4, 'QC', 'Quality Control', 'DEV', '2018-11-22', '2019-07-29 14:11:00', NULL, NULL, 'Y'), (5, 'PP', 'Project Planning', 'SPL', '2018-12-27', '2019-11-22 14:56:29', NULL, NULL, 'Y'), (6, 'SRA', 'System Requirement Analys', 'SPL', '2018-11-22', '2019-11-22 14:56:37', NULL, NULL, 'Y'), (7, 'DC', 'Data Center', 'SVC', '2018-11-22', '2019-07-29 14:11:10', NULL, NULL, 'Y'), (8, 'NS', 'Network Security', 'SVC', '2018-12-27', '2019-07-29 14:11:14', NULL, NULL, 'Y'), (9, 'SDE', 'Service Desk', 'SVC', '2018-11-22', '2019-07-29 14:11:18', NULL, NULL, 'Y'), (10, 'SS', 'Sistem Support', 'SVC', '2018-12-27', '2019-07-29 14:11:22', NULL, NULL, 'Y'), (11, 'FPS', 'Audah', 'DEV', NULL, '2020-05-01 15:48:14', NULL, NULL, NULL), (12, 'FPR', 'Audah', 'DEV', NULL, '2020-05-01 15:48:21', NULL, NULL, NULL);
/*!40000 ALTER TABLE `msdept` ENABLE KEYS */;


# Dumping structure for table bookroom.msdiv
CREATE TABLE IF NOT EXISTS `msdiv` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'alter table msdiv auto_increment = 6',
  `div_cd` varchar(5) DEFAULT NULL,
  `Desc` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Master Division';

# Dumping data for table bookroom.msdiv: 3 rows
/*!40000 ALTER TABLE `msdiv` DISABLE KEYS */;
INSERT INTO `msdiv` (`id`, `div_cd`, `Desc`) VALUES (1, 'SVC', 'Services'), (2, 'DEV', 'Development'), (3, 'SPL', 'System Planning');
/*!40000 ALTER TABLE `msdiv` ENABLE KEYS */;


# Dumping structure for table bookroom.msemployee
CREATE TABLE IF NOT EXISTS `msemployee` (
  `id` varchar(20) NOT NULL,
  `employee_id` varchar(50) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `NTUserName` varchar(50) DEFAULT NULL,
  `group_cd` varchar(4) DEFAULT NULL,
  `div_cd` varchar(4) DEFAULT NULL,
  `dept_cd` varchar(4) DEFAULT NULL,
  `is_dept_assigner` varchar(3) DEFAULT 'no',
  `is_first_assigner` varchar(3) DEFAULT 'no',
  `NickName` varchar(50) DEFAULT NULL,
  `create_dt` date DEFAULT NULL,
  `updt_dt` date DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `updt_by` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table bookroom.msemployee: 0 rows
/*!40000 ALTER TABLE `msemployee` DISABLE KEYS */;
/*!40000 ALTER TABLE `msemployee` ENABLE KEYS */;


# Dumping structure for table bookroom.msmainmodul
CREATE TABLE IF NOT EXISTS `msmainmodul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_modul_name` varchar(50) NOT NULL,
  `seq_no` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COMMENT='Master Main Modul';

# Dumping data for table bookroom.msmainmodul: 2 rows
/*!40000 ALTER TABLE `msmainmodul` DISABLE KEYS */;
INSERT INTO `msmainmodul` (`id`, `main_modul_name`, `seq_no`) VALUES (3, 'User Management', 9), (14, 'Book Room', 1);
/*!40000 ALTER TABLE `msmainmodul` ENABLE KEYS */;


# Dumping structure for table bookroom.msmodul
CREATE TABLE IF NOT EXISTS `msmodul` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `main_modul_id` int(11) NOT NULL,
  `add_to_menu` varchar(3) NOT NULL,
  `modul_name` varchar(50) NOT NULL,
  `modul_location` varchar(150) NOT NULL,
  `create_dt` date NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `updt_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updt_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

# Dumping data for table bookroom.msmodul: 7 rows
/*!40000 ALTER TABLE `msmodul` DISABLE KEYS */;
INSERT INTO `msmodul` (`id`, `main_modul_id`, `add_to_menu`, `modul_name`, `modul_location`, `create_dt`, `create_by`, `updt_dt`, `updt_by`) VALUES (1, 3, '', 'User Modul', 'usermanagement/usermodul', '0000-00-00', '', '2020-05-09 12:43:14', ''), (2, 3, '', 'Modul', 'usermanagement/listmodul', '0000-00-00', '', '2020-05-09 01:31:57', ''), (3, 3, '', 'Group Modul', 'usermanagement/listgroupmodul', '0000-00-00', '', '2020-05-09 01:32:00', ''), (4, 3, '', 'Mapping Modul', 'usermanagement/listdtmappmodul', '0000-00-00', '', '2020-05-09 01:32:02', ''), (5, 3, '', 'Main Modul', 'usermanagement/list_main_modul', '0000-00-00', '', '2020-05-09 01:32:04', ''), (44, 14, '', 'Book Room', 'bookroom/listbookroom', '0000-00-00', '', '2021-11-04 12:45:48', ''), (45, 14, '', 'Log Book Room', 'bookroom/bookroomlog', '0000-00-00', '', '2021-11-04 12:46:02', '');
/*!40000 ALTER TABLE `msmodul` ENABLE KEYS */;


# Dumping structure for table bookroom.mspara
CREATE TABLE IF NOT EXISTS `mspara` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `para_code` varchar(5) NOT NULL,
  `para_desc` varchar(30) NOT NULL,
  `para_value` varchar(100) NOT NULL,
  `para_sum` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

# Dumping data for table bookroom.mspara: 0 rows
/*!40000 ALTER TABLE `mspara` DISABLE KEYS */;
INSERT INTO `mspara` (`id`, `para_code`, `para_desc`, `para_value`, `para_sum`) VALUES (1, 'IDPRJ', 'special_code in msnumber', 'IDPRJ', 'Kode yang digunakan untuk master number yang terdapat pada tabel msnumber');
/*!40000 ALTER TABLE `mspara` ENABLE KEYS */;


# Dumping structure for table bookroom.msroom
CREATE TABLE IF NOT EXISTS `msroom` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(100) NOT NULL,
  `create_by` varchar(100) NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `create_dt` date NOT NULL,
  `update_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

# Dumping data for table bookroom.msroom: 3 rows
/*!40000 ALTER TABLE `msroom` DISABLE KEYS */;
INSERT INTO `msroom` (`id`, `room_name`, `create_by`, `update_by`, `create_dt`, `update_dt`) VALUES (3, 'Zoom - Room 1', 'ANTONIUS.NOVRIS', 'ANTONIUS.NOVRIS', '2021-11-04', '2021-11-04 13:01:04'), (4, 'Zoom - Room 2', 'ANTONIUS.NOVRIS', 'ANTONIUS.NOVRIS', '2021-11-04', '2021-11-04 13:01:56'), (5, 'Kintamini', 'ANTONIUS.NOVRIS', 'ANTONIUS.NOVRIS', '0000-00-00', '2021-11-04 13:02:40');
/*!40000 ALTER TABLE `msroom` ENABLE KEYS */;


# Dumping structure for table bookroom.mstime
CREATE TABLE IF NOT EXISTS `mstime` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `time_book` time NOT NULL,
  `is_active` char(1) NOT NULL,
  `create_dt` date NOT NULL,
  `create_by` varchar(100) NOT NULL,
  `update_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

# Dumping data for table bookroom.mstime: 49 rows
/*!40000 ALTER TABLE `mstime` DISABLE KEYS */;
INSERT INTO `mstime` (`id`, `time_book`, `is_active`, `create_dt`, `create_by`, `update_dt`, `update_by`) VALUES (1, '00:00:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:05', ''), (2, '00:30:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:11', ''), (3, '01:00:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:12', ''), (4, '01:30:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:14', ''), (5, '02:00:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:15', ''), (6, '02:30:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:17', ''), (7, '03:00:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:18', ''), (8, '03:30:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:19', ''), (9, '04:00:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:20', ''), (10, '04:30:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:21', ''), (11, '05:00:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:22', ''), (12, '05:30:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:23', ''), (13, '06:00:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:24', ''), (14, '06:30:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:25', ''), (15, '07:00:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:27', ''), (16, '07:30:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:28', ''), (17, '08:00:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:29', ''), (18, '08:30:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:30', ''), (19, '09:00:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:32', ''), (20, '09:30:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:33', ''), (21, '10:00:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:34', ''), (22, '10:30:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:35', ''), (23, '11:00:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:36', ''), (24, '11:30:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:37', ''), (25, '12:00:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:38', ''), (26, '12:30:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:38', ''), (27, '13:00:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:39', ''), (28, '13:30:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:40', ''), (29, '14:00:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:41', ''), (30, '14:30:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:42', ''), (31, '15:00:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:43', ''), (32, '15:30:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:43', ''), (33, '16:00:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:44', ''), (34, '16:30:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:45', ''), (35, '17:00:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:46', ''), (36, '17:30:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:47', ''), (37, '18:00:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:47', ''), (38, '18:30:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:48', ''), (39, '19:00:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:49', ''), (40, '19:30:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:50', ''), (41, '20:00:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:51', ''), (42, '20:30:00', 'Y', '2021-10-20', 'ano', '2021-10-22 06:12:51', ''), (43, '21:00:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:52', ''), (44, '21:30:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:53', ''), (45, '22:00:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:54', ''), (46, '22:30:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:55', ''), (47, '23:00:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:55', ''), (48, '23:30:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:12:56', ''), (49, '00:00:00', 'N', '2021-10-20', 'ano', '2021-10-22 06:13:00', '');
/*!40000 ALTER TABLE `mstime` ENABLE KEYS */;


# Dumping structure for table bookroom.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(32) NOT NULL,
  `access` int(10) unsigned DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table bookroom.sessions: 1 rows
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `access`, `data`) VALUES ('fnu466si3dvmm0iupu5j93bo97', 1636309316, 'data_user_login|a:9:{s:8:"emp_name";s:9:"BUHAIRI .";s:10:"NTUserName";s:7:"buhairi";s:2:"id";s:2:"53";s:8:"group_cd";s:2:"IT";s:6:"div_cd";s:2:"OT";s:7:"dept_cd";s:2:"OT";s:10:"group_name";s:18:"Sulo Online Course";s:8:"group_id";s:1:"8";s:8:"password";s:60:"$2y$10$fMIYzSJCqpXKDH1yDVhLUOE2E19TPeCT9gP58Cbo7Rut1rEnnhIBK";}');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;


# Dumping structure for table bookroom.usermodul
CREATE TABLE IF NOT EXISTS `usermodul` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ntusername` varchar(50) DEFAULT NULL,
  `group_id` varchar(10) DEFAULT NULL,
  `group_name` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `create_dt` date DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `updt_dt` date DEFAULT NULL,
  `updt_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

# Dumping data for table bookroom.usermodul: 18 rows
/*!40000 ALTER TABLE `usermodul` DISABLE KEYS */;
INSERT INTO `usermodul` (`id`, `ntusername`, `group_id`, `group_name`, `role`, `create_dt`, `create_by`, `updt_dt`, `updt_by`) VALUES (1, 'antoninov', '1', 'ADMINISTRATOR', NULL, '2021-07-11', 'ANTONIUS.NOVRIS', '2021-07-11', 'ANTONIUS.NOVRIS'), (53, 'bbb', '9', 'user', NULL, '2021-11-08', 'antoninov', '2021-11-08', 'antoninov'), (55, 'buhairi', '8', 'Sulo Online Course', NULL, '2021-08-11', 'antoninov', '2021-08-11', 'antoninov');
/*!40000 ALTER TABLE `usermodul` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
