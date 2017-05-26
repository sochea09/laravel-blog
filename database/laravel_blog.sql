/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel_blog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-26 11:18:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) DEFAULT NULL,
  `cat_desc` varchar(255) DEFAULT NULL,
  `cat_status_cd` varchar(3) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'news', 'Technology news', 'ACT', null, null);
INSERT INTO `category` VALUES ('2', 'motip', 'Mobile Tip', 'ACT', null, null);
INSERT INTO `category` VALUES ('3', 'comtip', 'Computer Tip', 'ACT', null, null);

-- ----------------------------
-- Table structure for media
-- ----------------------------
DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `med_id` int(11) NOT NULL AUTO_INCREMENT,
  `med_name` varchar(255) DEFAULT NULL,
  `med_title` varchar(100) DEFAULT NULL,
  `med_desc` varchar(255) DEFAULT NULL,
  `med_link` tinytext,
  `med_status_cd` varchar(3) DEFAULT 'ACT',
  `met_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`med_id`),
  KEY `mediatype_id` (`met_id`),
  CONSTRAINT `m_mediatype_id` FOREIGN KEY (`met_id`) REFERENCES `media_type` (`met_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of media
-- ----------------------------
INSERT INTO `media` VALUES ('5', '59ebadff0b88ee1e0694cd1d7533f828.png', 'image 1', 'This is my first image', '/img/media/59ebadff0b88ee1e0694cd1d7533f828.png', 'DEL', null, '2015-09-13 15:45:32', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('6', 'b2df8410c5601bbf2962e4ee3624c447.png', 'image 3', 'My second image', '/img/media/b2df8410c5601bbf2962e4ee3624c447.png', 'DEL', null, '2015-09-13 15:46:04', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('7', '5bb0f8ce8fc05f4a911f40110e43f1e8.jpg', 'image 3', 'Third image', '/img/media/5bb0f8ce8fc05f4a911f40110e43f1e8.jpg', 'DEL', null, '2015-09-13 16:29:23', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('8', 'a194a92d7171bc71e178752774cc9616.png', '', '', '/img/media/a194a92d7171bc71e178752774cc9616.png', 'DEL', null, '2015-09-16 13:59:57', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('9', '6774254e0cb4c2c82ec3e40ca4315df8.png', '', '', '/img/media/6774254e0cb4c2c82ec3e40ca4315df8.png', 'DEL', null, '2015-09-16 14:47:54', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('10', '3baac2dc569f3162a852a061206745a5.png', '', '', '/img/media/3baac2dc569f3162a852a061206745a5.png', 'DEL', null, '2015-09-18 14:24:20', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('11', '548453a2db398dcdab2b152e16a15941.png', '', '', '/img/media/548453a2db398dcdab2b152e16a15941.png', 'DEL', null, '2015-09-18 14:31:39', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('12', '9b042db50d6f1272d4953bc0e616c5bc.png', '', '', '/img/media/9b042db50d6f1272d4953bc0e616c5bc.png', 'DEL', null, '2015-09-18 14:32:06', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('13', 'feab3511dfd90621c9f181be5ef6e7c8.png', '', '', '/img/media/feab3511dfd90621c9f181be5ef6e7c8.png', 'DEL', null, '2015-09-18 14:33:46', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('14', 'cb4c42d9f48123a6b767fcceee9361c0.png', '', '', '/img/media/cb4c42d9f48123a6b767fcceee9361c0.png', 'DEL', null, '2015-09-18 14:40:41', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('15', '0d44ece5127193e7b7828f32fd526874.png', '', '', '/img/media/0d44ece5127193e7b7828f32fd526874.png', 'DEL', null, '2015-09-18 14:41:28', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('16', 'adc0defb91b191ff6985050b4625bcc1.png', '', '', '/img/media/adc0defb91b191ff6985050b4625bcc1.png', 'DEL', null, '2015-09-18 14:42:15', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('17', 'c545ca074bb08f46fab2c0f2e5786c22.jpg', '', '', '/img/media/c545ca074bb08f46fab2c0f2e5786c22.jpg', 'DEL', null, '2015-09-18 14:42:41', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('18', 'a115e78949de684df206b90dc0450e64.png', '', '', '/img/media/a115e78949de684df206b90dc0450e64.png', 'DEL', null, '2015-09-18 14:43:15', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('19', '063d1d3237bfc4af608c9562cac18850.jpg', '', '', '/img/media/063d1d3237bfc4af608c9562cac18850.jpg', 'DEL', null, '2015-09-18 14:43:47', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('20', '13e5935c1bad60148e1e60b298b95eab.png', '', '', '/img/media/13e5935c1bad60148e1e60b298b95eab.png', 'DEL', null, '2015-09-18 14:44:20', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('21', '3523698e68d5fefc154bb6b672fef5f4.png', '', '', '/img/media/3523698e68d5fefc154bb6b672fef5f4.png', 'DEL', null, '2015-09-18 14:44:36', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('22', '5ffd19a6c14b5c92fb251f9d825a0b18.png', '', '', '/img/media/5ffd19a6c14b5c92fb251f9d825a0b18.png', 'DEL', null, '2015-09-18 14:50:59', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('23', 'd7279cdbfdb39e1f7c761b7eeddcbcf3.png', '', '', '/img/media/d7279cdbfdb39e1f7c761b7eeddcbcf3.png', 'DEL', null, '2015-09-18 14:53:57', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('24', '32689f1a3da662d5dbd2de783ea6f71c.png', '', '', '/img/media/32689f1a3da662d5dbd2de783ea6f71c.png', 'DEL', null, '2015-09-18 14:55:36', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('25', 'a4bd8c7994b43e1b4079a96533f451a8.png', '', '', '/img/media/a4bd8c7994b43e1b4079a96533f451a8.png', 'DEL', null, '2015-09-18 14:55:54', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('26', 'b567f26e41daf0e35cf8794f7f60804a.png', '', '', '/img/media/b567f26e41daf0e35cf8794f7f60804a.png', 'DEL', null, '2015-09-18 15:02:08', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('27', 'f85a63bfb3da6055b72d31a8485313c9.png', '', '', '/img/media/f85a63bfb3da6055b72d31a8485313c9.png', 'DEL', null, '2015-09-18 15:02:59', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('28', '08a69496b4cd20ec9f833341e519608e.png', '', '', '/img/media/08a69496b4cd20ec9f833341e519608e.png', 'DEL', null, '2015-09-18 15:04:00', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('29', '309502c288ea9b9b122ee33214dd96de.png', '', '', '/img/media/309502c288ea9b9b122ee33214dd96de.png', 'DEL', null, '2015-09-18 15:05:25', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('30', '6601846119bea2cdfd67ed9885c07d25.png', '', '', '/img/media/6601846119bea2cdfd67ed9885c07d25.png', 'DEL', null, '2015-09-18 15:06:39', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('31', 'fa238a371144c2fc914c6874b545fbd0.png', '', '', '/img/media/fa238a371144c2fc914c6874b545fbd0.png', 'DEL', null, '2015-09-18 15:06:51', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('32', '85cc01a6e89b068f0d837ddff83419cb.jpg', '', '', '/img/media/85cc01a6e89b068f0d837ddff83419cb.jpg', 'DEL', null, '2015-09-18 15:07:02', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('33', 'd92c44dbd1ea76ef6e0ba1efccab8f18.png', null, null, '/img/media/d92c44dbd1ea76ef6e0ba1efccab8f18.png', 'DEL', null, '2015-09-18 15:18:51', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('34', '0d4b89c0296c9d714336bdac2d3d6ff9.png', null, null, '/img/media/0d4b89c0296c9d714336bdac2d3d6ff9.png', 'DEL', null, '2015-09-18 15:20:09', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('35', 'fcb93a9b7c42c42506c1ea83e981ce6b.png', null, null, '/img/media/fcb93a9b7c42c42506c1ea83e981ce6b.png', 'DEL', null, '2015-09-18 15:25:11', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('36', 'fcb93a9b7c42c42506c1ea83e981ce6b.png', 'fdasfdsa', 'fdsaffffff', '/img/media/fcb93a9b7c42c42506c1ea83e981ce6b.png', 'DEL', null, '2015-09-18 15:32:27', '2017-04-08 08:47:29');
INSERT INTO `media` VALUES ('37', '4c0c8119106416f66ea121f023cbf70f.jpeg', '', '', 'http://laravel-blog.dev/img/media/4c0c8119106416f66ea121f023cbf70f.jpeg', 'DEL', null, '2017-04-09 05:26:23', '2017-04-09 05:27:41');
INSERT INTO `media` VALUES ('38', '815981f35b873986d8c8c45c829f5e5d.jpg', '', '', 'http://laravel-blog.dev/img/media/815981f35b873986d8c8c45c829f5e5d.jpg', 'DEL', null, '2017-04-09 05:28:10', '2017-04-09 05:28:54');
INSERT INTO `media` VALUES ('39', '6f4d93624d04f37ee3d84013de9d6426.jpeg', '', '', 'http://laravel-blog.dev/img/media/6f4d93624d04f37ee3d84013de9d6426.jpeg', 'DEL', null, '2017-04-09 05:38:15', '2017-04-09 05:54:17');
INSERT INTO `media` VALUES ('40', '3c4c1fb89f40718937360028f3a11a5b.jpg', '', '', 'http://laravel-blog.dev/img/media/3c4c1fb89f40718937360028f3a11a5b.jpg', 'DEL', null, '2017-04-09 05:40:22', '2017-04-09 05:54:17');
INSERT INTO `media` VALUES ('41', 'f4df4e6b2ce0e2350b80b580b14bcf4e.jpeg', '', '', 'http://laravel-blog.dev/img/media/f4df4e6b2ce0e2350b80b580b14bcf4e.jpeg', 'DEL', null, '2017-04-09 05:42:03', '2017-04-09 05:54:17');
INSERT INTO `media` VALUES ('42', 'a9c4d5e6928f1ab9f343836e2e2540e0.jpg', '', '', 'http://laravel-blog.dev/img/media/a9c4d5e6928f1ab9f343836e2e2540e0.jpg', 'DEL', null, '2017-04-09 05:46:57', '2017-04-09 05:54:17');
INSERT INTO `media` VALUES ('43', '6abac68bc1278019134ee19b01d965d7.jpeg', '', '', 'http://laravel-blog.dev/img/media/6abac68bc1278019134ee19b01d965d7.jpeg', 'DEL', null, '2017-04-09 05:50:05', '2017-04-09 05:54:17');
INSERT INTO `media` VALUES ('44', 'c6de4bbc2f9e59deb40ff703a1eb771f.jpeg', '', '', 'http://laravel-blog.dev/img/media/c6de4bbc2f9e59deb40ff703a1eb771f.jpeg', 'DEL', null, '2017-04-09 05:50:29', '2017-04-09 05:54:17');
INSERT INTO `media` VALUES ('45', 'a758148aa0122f7c76090845357982ee.jpg', '', '', 'http://laravel-blog.dev/img/media/a758148aa0122f7c76090845357982ee.jpg', 'DEL', null, '2017-04-09 05:52:41', '2017-04-09 05:54:17');
INSERT INTO `media` VALUES ('46', '0fb4f3646a3962f6f294ded650c8702c.jpeg', '', '', 'http://laravel-blog.dev/img/media/0fb4f3646a3962f6f294ded650c8702c.jpeg', 'DEL', null, '2017-04-09 05:53:58', '2017-04-09 05:54:17');
INSERT INTO `media` VALUES ('47', '59246160637b6b114d0144e5f0be0786.jpg', '', '', 'http://laravel-blog.dev/img/media/59246160637b6b114d0144e5f0be0786.jpg', 'DEL', null, '2017-04-09 05:57:28', '2017-04-09 05:59:59');
INSERT INTO `media` VALUES ('48', '792cf7ddbe3b4dba984245ed79e27da1.jpeg', '', '', 'http://laravel-blog.dev/img/media/792cf7ddbe3b4dba984245ed79e27da1.jpeg', 'DEL', null, '2017-04-09 05:58:07', '2017-04-09 05:59:59');
INSERT INTO `media` VALUES ('49', '38bfd09c5186b88f604623609b608183.jpeg', '', '', 'http://laravel-blog.dev/img/media/38bfd09c5186b88f604623609b608183.jpeg', 'DEL', null, '2017-04-09 05:59:11', '2017-04-09 05:59:59');
INSERT INTO `media` VALUES ('50', '41087bdd42839043d2df4a30b4016b42.jpeg', '', '', 'http://laravel-blog.dev/img/media/41087bdd42839043d2df4a30b4016b42.jpeg', 'DEL', null, '2017-04-09 05:59:29', '2017-04-09 05:59:59');
INSERT INTO `media` VALUES ('51', '6a8d4947401be7dd695d4be9994020ed.jpg', '', '', 'http://laravel-blog.dev/img/media/6a8d4947401be7dd695d4be9994020ed.jpg', 'ACT', null, '2017-04-09 06:13:44', '2017-04-09 06:13:44');

-- ----------------------------
-- Table structure for media_type
-- ----------------------------
DROP TABLE IF EXISTS `media_type`;
CREATE TABLE `media_type` (
  `met_id` int(11) NOT NULL AUTO_INCREMENT,
  `met_name` varchar(100) NOT NULL,
  `met_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`met_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of media_type
-- ----------------------------
INSERT INTO `media_type` VALUES ('1', 'post', 'Post Media');
INSERT INTO `media_type` VALUES ('2', 'promotion', 'Promotion Media');

-- ----------------------------
-- Table structure for page
-- ----------------------------
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `pag_id` int(11) NOT NULL AUTO_INCREMENT,
  `pag_name` varchar(255) NOT NULL,
  `pag_filename` varchar(255) DEFAULT NULL,
  `pag_label` varchar(255) DEFAULT NULL,
  `pag_path` varchar(255) DEFAULT NULL,
  `pag_order` int(11) DEFAULT '1',
  `pag_desc` text,
  `pag_status_cd` varchar(3) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_category` tinyint(1) DEFAULT NULL,
  `meta_title` text,
  `meta_description` text,
  `meta_keyword` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `pag_slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pag_id`),
  UNIQUE KEY `pag_name_UNIQUE` (`pag_name`),
  UNIQUE KEY `pag_filename_UNIQUE` (`pag_filename`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of page
-- ----------------------------
INSERT INTO `page` VALUES ('5', 'home', 'home.html', null, null, '1', 'Hellow home page.', 'ACT', null, null, null, null, null, '2015-09-12 09:16:01', '2015-09-14 14:42:29', null);
INSERT INTO `page` VALUES ('6', 'about', 'about.html', null, null, '2', 'Hello about page', 'ACT', null, null, null, null, null, '2015-09-12 09:20:18', '2015-09-14 14:28:26', null);

-- ----------------------------
-- Table structure for page_category
-- ----------------------------
DROP TABLE IF EXISTS `page_category`;
CREATE TABLE `page_category` (
  `pag_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`pag_id`,`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of page_category
-- ----------------------------

-- ----------------------------
-- Table structure for page_media
-- ----------------------------
DROP TABLE IF EXISTS `page_media`;
CREATE TABLE `page_media` (
  `pag_id` int(11) NOT NULL,
  `med_id` int(11) NOT NULL,
  PRIMARY KEY (`pag_id`,`med_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of page_media
-- ----------------------------

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `pos_id` int(11) NOT NULL AUTO_INCREMENT,
  `pos_name` varchar(255) DEFAULT NULL,
  `pos_filename` varchar(255) DEFAULT NULL,
  `pos_sum` text,
  `pos_desc` text,
  `pos_status_cd` varchar(3) DEFAULT NULL,
  `pag_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `pos_image` varchar(255) DEFAULT NULL,
  `pos_slug` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`pos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('1', 'Post', 'post testing', '<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"/img/media/6a8d4947401be7dd695d4be9994020ed.jpg\" style=\"height:120px; width:120px\" /></td>\r\n			<td>This is my first blog in this tutorial with any text to do សួស្តីអ្នកទាំងអស់គ្នុា</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '<p><img alt=\"\" src=\"/img/media/6a8d4947401be7dd695d4be9994020ed.jpg\" style=\"height:330px; width:330px\" /></p>\r\n', 'ACT', null, '1', '2015-09-14 13:16:43', '2017-04-09 06:22:57', '10d88f320f89e8bb3925f09efc417bc3.jpg', '', null, '2');
INSERT INTO `post` VALUES ('11', 'dsadsa', 'SADSAdsa', '<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"/img/media/5bb0f8ce8fc05f4a911f40110e43f1e8.jpg\" style=\"height:50px; width:50px\" /></td>\r\n			<td>This is my first blog in this tutorial with any text to do សួស្តីអ្នកទាំងអស់គ្នុា</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>FDSAFDSA&nbsp;<img alt=\"\" src=\"/img/media/b2df8410c5601bbf2962e4ee3624c447.png\" style=\"height:330px; width:330px\" /></p>\r\n', 'DEL', null, null, '2015-09-14 14:12:33', '2017-04-08 08:13:34', null, null, null, null);
INSERT INTO `post` VALUES ('12', 'New Post', 'new-post', '<p><img alt=\"\" src=\"/img/media/6a8d4947401be7dd695d4be9994020ed.jpg\" style=\"float:left; height:120px; width:120px\" /></p>\r\n\r\n<p>We Are Specialised Designing And Programming Team Passionate About Web Design And Creatin Digital Ideas We Will Transfer Your Idea To A Digital Dream And Make Your Wish come True</p>\r\n', '', 'ACT', null, '1', '2015-09-15 13:17:32', '2017-04-09 06:21:16', 'a5d70ca01d9149988c8a3461982fffe8.jpeg', '', null, '2');

-- ----------------------------
-- Table structure for post_category
-- ----------------------------
DROP TABLE IF EXISTS `post_category`;
CREATE TABLE `post_category` (
  `pos_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  UNIQUE KEY `pos_id_UNIQUE` (`pos_id`),
  UNIQUE KEY `cat_id_UNIQUE` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post_category
-- ----------------------------

-- ----------------------------
-- Table structure for post_media
-- ----------------------------
DROP TABLE IF EXISTS `post_media`;
CREATE TABLE `post_media` (
  `pos_id` int(11) NOT NULL,
  `med_id` int(11) NOT NULL,
  PRIMARY KEY (`pos_id`,`med_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post_media
-- ----------------------------

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_name` varchar(45) NOT NULL,
  `rol_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rol_id`),
  UNIQUE KEY `rol_name_UNIQUE` (`rol_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', 'admin', 'Administrator');
INSERT INTO `role` VALUES ('2', 'client', 'Client');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_name` varchar(100) NOT NULL,
  `usr_firstname` varchar(45) DEFAULT NULL,
  `usr_lastname` varchar(45) DEFAULT NULL,
  `usr_email` varchar(100) DEFAULT NULL,
  `usr_password` varchar(100) DEFAULT NULL,
  `usr_active_fg` tinyint(1) DEFAULT '0',
  `usr_pwd_change_fg` tinyint(1) DEFAULT NULL,
  `usr_access_token` varchar(45) DEFAULT NULL,
  `usr_reset_token` varchar(45) DEFAULT NULL,
  `usr_uuid` varchar(45) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `usr_last_login_dt` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`usr_id`),
  UNIQUE KEY `usr_name_UNIQUE` (`usr_name`),
  UNIQUE KEY `usr_email_UNIQUE` (`usr_email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('2', 'sochea', 'Ty', 'Sochea', 'me.sochea@gmail.com', '$2y$10$muD3qMlBgEnszkjufKDjy.xH9UBftadGnl5/h5VyaP.EgCVkyUGa6', '1', null, 'e8a551b6dce46a5a864c8eebce242be0', '6627c4cef3d1e6c5bce6e17b32217ec4', null, '1', '2017-05-20 02:16:28', '2017-04-08 08:12:10', '2017-05-20 02:16:28');
INSERT INTO `user` VALUES ('9', 'simon', null, null, 'simchanvannara1993@gmail.com', '$2y$10$Kzp0gWqqH0yWcz99KYERq.6lKO1PiZvoBcoQLxo58XFeF968faihm', '1', null, '6a80a9f011946c39d2be70065802827b', '526764f4fdd0907e295aa97624a78f96', null, '1', null, '2017-05-25 03:01:53', '2017-05-25 03:01:53');
