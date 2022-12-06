#
# Алексинстройконструкция Database Dump
# MODX Version:1.4.7
# 
# Host: 
# Generation Time: 06-08-2021 10:17:25
# Server version: 5.5.5-10.1.48-MariaDB-0+deb9u2
# PHP Version: 7.0.33
# Database: `aleksin-ask`
# Description: 
#

# --------------------------------------------------------

#
# Table structure for table `active_user_locks`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_user_locks`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_user_locks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `elementType` int(1) NOT NULL DEFAULT '0',
  `elementId` int(10) NOT NULL DEFAULT '0',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ix_element_id` (`elementType`,`elementId`,`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=2809 DEFAULT CHARSET=utf8 COMMENT='Contains data about locked elements.';

#
# Dumping data for table `active_user_locks`
#


# --------------------------------------------------------

#
# Table structure for table `active_user_sessions`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_user_sessions`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_user_sessions` (
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data about valid user sessions.';

#
# Dumping data for table `active_user_sessions`
#

INSERT INTO `active_user_sessions` VALUES ('b6fjv6lmcnjm6fggg5b0bk30d2','2','1628234245','89.113.165.35');


# --------------------------------------------------------

#
# Table structure for table `active_users`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_users`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_users` (
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  `action` varchar(10) NOT NULL DEFAULT '',
  `id` int(10) DEFAULT NULL,
  PRIMARY KEY (`sid`,`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data about last user action.';

#
# Dumping data for table `active_users`
#

INSERT INTO `active_users` VALUES ('b6fjv6lmcnjm6fggg5b0bk30d2','2','dial','1628234245','93',NULL);

INSERT INTO `active_users` VALUES ('s9gt5kvi4vrm59r3oioo1m2er6','1','admin','1627632309','67','165');

INSERT INTO `active_users` VALUES ('9phpmg6pp03tqsl6eqsr2j3h03','2','dial','1628069460','67','114');


# --------------------------------------------------------

#
# Table structure for table `categories`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `categories`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL DEFAULT '',
  `rank` int(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='Categories to be used snippets,tv,chunks, etc';

#
# Dumping data for table `categories`
#

INSERT INTO `categories` VALUES ('1','Demo Content','0');

INSERT INTO `categories` VALUES ('2','Js','0');

INSERT INTO `categories` VALUES ('3','Login','0');

INSERT INTO `categories` VALUES ('4','Manager and Admin','0');

INSERT INTO `categories` VALUES ('5','Search','0');

INSERT INTO `categories` VALUES ('6','Content','0');

INSERT INTO `categories` VALUES ('7','Navigation','0');

INSERT INTO `categories` VALUES ('8','Forms','0');

INSERT INTO `categories` VALUES ('9','form-vopros','0');

INSERT INTO `categories` VALUES ('10','Форма заявки \"Продукция\"','0');

INSERT INTO `categories` VALUES ('11','Заказать прайс-лист','0');

INSERT INTO `categories` VALUES ('12','Warning','0');

INSERT INTO `categories` VALUES ('13','Prod','0');

INSERT INTO `categories` VALUES ('14','Из Шаблонов','0');

INSERT INTO `categories` VALUES ('15','Обратная связь в подразделах','0');

INSERT INTO `categories` VALUES ('16','SEO','0');

INSERT INTO `categories` VALUES ('17','Templates','0');

INSERT INTO `categories` VALUES ('18','add','0');

INSERT INTO `categories` VALUES ('19','Поиск','0');

INSERT INTO `categories` VALUES ('20','footer','0');

INSERT INTO `categories` VALUES ('21','ampx','0');


# --------------------------------------------------------

#
# Table structure for table `document_groups`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `document_groups`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `document_groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `document_group` int(10) NOT NULL DEFAULT '0',
  `document` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ix_dg_id` (`document_group`,`document`),
  KEY `document` (`document`),
  KEY `document_group` (`document_group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data used for access permissions.';

#
# Dumping data for table `document_groups`
#


# --------------------------------------------------------

#
# Table structure for table `documentgroup_names`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `documentgroup_names`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `documentgroup_names` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(245) NOT NULL DEFAULT '',
  `private_memgroup` tinyint(4) DEFAULT '0' COMMENT 'determine whether the document group is private to manager users',
  `private_webgroup` tinyint(4) DEFAULT '0' COMMENT 'determines whether the document is private to web users',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data used for access permissions.';

#
# Dumping data for table `documentgroup_names`
#
#
# Алексинстройконструкция Database Dump
# MODX Version:1.4.7
# 
# Host: 
# Generation Time: 06-08-2021 10:19:09
# Server version: 5.5.5-10.1.48-MariaDB-0+deb9u2
# PHP Version: 7.0.33
# Database: `aleksin-ask`
# Description: 
#

# --------------------------------------------------------

#
# Table structure for table `active_user_locks`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_user_locks`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_user_locks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `elementType` int(1) NOT NULL DEFAULT '0',
  `elementId` int(10) NOT NULL DEFAULT '0',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ix_element_id` (`elementType`,`elementId`,`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=2809 DEFAULT CHARSET=utf8 COMMENT='Contains data about locked elements.';

#
# Dumping data for table `active_user_locks`
#


# --------------------------------------------------------

#
# Table structure for table `active_user_sessions`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_user_sessions`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_user_sessions` (
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data about valid user sessions.';

#
# Dumping data for table `active_user_sessions`
#

INSERT INTO `active_user_sessions` VALUES ('b6fjv6lmcnjm6fggg5b0bk30d2','2','1628234349','89.113.165.35');


# --------------------------------------------------------

#
# Table structure for table `active_users`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_users`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_users` (
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  `action` varchar(10) NOT NULL DEFAULT '',
  `id` int(10) DEFAULT NULL,
  PRIMARY KEY (`sid`,`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data about last user action.';

#
# Dumping data for table `active_users`
#

INSERT INTO `active_users` VALUES ('b6fjv6lmcnjm6fggg5b0bk30d2','2','dial','1628234349','93',NULL);

INSERT INTO `active_users` VALUES ('s9gt5kvi4vrm59r3oioo1m2er6','1','admin','1627632309','67','165');

INSERT INTO `active_users` VALUES ('9phpmg6pp03tqsl6eqsr2j3h03','2','dial','1628069460','67','114');


# --------------------------------------------------------

#
# Table structure for table `categories`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `categories`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL DEFAULT '',
  `rank` int(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='Categories to be used snippets,tv,chunks, etc';

#
# Dumping data for table `categories`
#

INSERT INTO `categories` VALUES ('1','Demo Content','0');

INSERT INTO `categories` VALUES ('2','Js','0');

INSERT INTO `categories` VALUES ('3','Login','0');

INSERT INTO `categories` VALUES ('4','Manager and Admin','0');

INSERT INTO `categories` VALUES ('5','Search','0');

INSERT INTO `categories` VALUES ('6','Content','0');

INSERT INTO `categories` VALUES ('7','Navigation','0');

INSERT INTO `categories` VALUES ('8','Forms','0');

INSERT INTO `categories` VALUES ('9','form-vopros','0');

INSERT INTO `categories` VALUES ('10','Форма заявки \"Продукция\"','0');

INSERT INTO `categories` VALUES ('11','Заказать прайс-лист','0');

INSERT INTO `categories` VALUES ('12','Warning','0');

INSERT INTO `categories` VALUES ('13','Prod','0');

INSERT INTO `categories` VALUES ('14','Из Шаблонов','0');

INSERT INTO `categories` VALUES ('15','Обратная связь в подразделах','0');

INSERT INTO `categories` VALUES ('16','SEO','0');

INSERT INTO `categories` VALUES ('17','Templates','0');

INSERT INTO `categories` VALUES ('18','add','0');

INSERT INTO `categories` VALUES ('19','Поиск','0');

INSERT INTO `categories` VALUES ('20','footer','0');

INSERT INTO `categories` VALUES ('21','ampx','0');


# --------------------------------------------------------

#
# Table structure for table `document_groups`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `document_groups`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `document_groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `document_group` int(10) NOT NULL DEFAULT '0',
  `document` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ix_dg_id` (`document_group`,`document`),
  KEY `document` (`document`),
  KEY `document_group` (`document_group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data used for access permissions.';

#
# Dumping data for table `document_groups`
#


# --------------------------------------------------------

#
# Table structure for table `documentgroup_names`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `documentgroup_names`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `documentgroup_names` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(245) NOT NULL DEFAULT '',
  `private_memgroup` tinyint(4) DEFAULT '0' COMMENT 'determine whether the document group is private to manager users',
  `private_webgroup` tinyint(4) DEFAULT '0' COMMENT 'determines whether the document is private to web users',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data used for access permissions.';

#
# Dumping data for table `documentgroup_names`
#
#
# Алексинстройконструкция Database Dump
# MODX Version:1.4.7
# 
# Host: 
# Generation Time: 06-08-2021 10:21:51
# Server version: 5.5.5-10.1.48-MariaDB-0+deb9u2
# PHP Version: 7.0.33
# Database: `aleksin-ask`
# Description: backup060821
#

# --------------------------------------------------------

#
# Table structure for table `active_user_locks`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_user_locks`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_user_locks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `elementType` int(1) NOT NULL DEFAULT '0',
  `elementId` int(10) NOT NULL DEFAULT '0',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ix_element_id` (`elementType`,`elementId`,`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=2809 DEFAULT CHARSET=utf8 COMMENT='Contains data about locked elements.';

#
# Dumping data for table `active_user_locks`
#


# --------------------------------------------------------

#
# Table structure for table `active_user_sessions`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_user_sessions`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_user_sessions` (
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data about valid user sessions.';

#
# Dumping data for table `active_user_sessions`
#

INSERT INTO `active_user_sessions` VALUES ('b6fjv6lmcnjm6fggg5b0bk30d2','2','1628234511','89.113.165.35');


# --------------------------------------------------------

#
# Table structure for table `active_users`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_users`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_users` (
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  `action` varchar(10) NOT NULL DEFAULT '',
  `id` int(10) DEFAULT NULL,
  PRIMARY KEY (`sid`,`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data about last user action.';

#
# Dumping data for table `active_users`
#

INSERT INTO `active_users` VALUES ('b6fjv6lmcnjm6fggg5b0bk30d2','2','dial','1628234511','93',NULL);

INSERT INTO `active_users` VALUES ('s9gt5kvi4vrm59r3oioo1m2er6','1','admin','1627632309','67','165');

INSERT INTO `active_users` VALUES ('9phpmg6pp03tqsl6eqsr2j3h03','2','dial','1628069460','67','114');


# --------------------------------------------------------

#
# Table structure for table `categories`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `categories`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL DEFAULT '',
  `rank` int(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='Categories to be used snippets,tv,chunks, etc';

#
# Dumping data for table `categories`
#

INSERT INTO `categories` VALUES ('1','Demo Content','0');

INSERT INTO `categories` VALUES ('2','Js','0');

INSERT INTO `categories` VALUES ('3','Login','0');

INSERT INTO `categories` VALUES ('4','Manager and Admin','0');

INSERT INTO `categories` VALUES ('5','Search','0');

INSERT INTO `categories` VALUES ('6','Content','0');

INSERT INTO `categories` VALUES ('7','Navigation','0');

INSERT INTO `categories` VALUES ('8','Forms','0');

INSERT INTO `categories` VALUES ('9','form-vopros','0');

INSERT INTO `categories` VALUES ('10','Форма заявки \"Продукция\"','0');

INSERT INTO `categories` VALUES ('11','Заказать прайс-лист','0');

INSERT INTO `categories` VALUES ('12','Warning','0');

INSERT INTO `categories` VALUES ('13','Prod','0');

INSERT INTO `categories` VALUES ('14','Из Шаблонов','0');

INSERT INTO `categories` VALUES ('15','Обратная связь в подразделах','0');

INSERT INTO `categories` VALUES ('16','SEO','0');

INSERT INTO `categories` VALUES ('17','Templates','0');

INSERT INTO `categories` VALUES ('18','add','0');

INSERT INTO `categories` VALUES ('19','Поиск','0');

INSERT INTO `categories` VALUES ('20','footer','0');

INSERT INTO `categories` VALUES ('21','ampx','0');


# --------------------------------------------------------

#
# Table structure for table `document_groups`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `document_groups`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `document_groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `document_group` int(10) NOT NULL DEFAULT '0',
  `document` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ix_dg_id` (`document_group`,`document`),
  KEY `document` (`document`),
  KEY `document_group` (`document_group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data used for access permissions.';

#
# Dumping data for table `document_groups`
#


# --------------------------------------------------------

#
# Table structure for table `documentgroup_names`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `documentgroup_names`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `documentgroup_names` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(245) NOT NULL DEFAULT '',
  `private_memgroup` tinyint(4) DEFAULT '0' COMMENT 'determine whether the document group is private to manager users',
  `private_webgroup` tinyint(4) DEFAULT '0' COMMENT 'determines whether the document is private to web users',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data used for access permissions.';

#
# Dumping data for table `documentgroup_names`
#
#
# Алексинстройконструкция Database Dump
# MODX Version:1.4.7
# 
# Host: 
# Generation Time: 06-08-2021 15:39:01
# Server version: 5.5.5-10.1.48-MariaDB-0+deb9u2
# PHP Version: 7.0.33
# Database: `aleksin-ask`
# Description: backup060821
#

# --------------------------------------------------------

#
# Table structure for table `active_user_locks`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_user_locks`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_user_locks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `elementType` int(1) NOT NULL DEFAULT '0',
  `elementId` int(10) NOT NULL DEFAULT '0',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ix_element_id` (`elementType`,`elementId`,`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=2809 DEFAULT CHARSET=utf8 COMMENT='Contains data about locked elements.';

#
# Dumping data for table `active_user_locks`
#


# --------------------------------------------------------

#
# Table structure for table `active_user_sessions`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_user_sessions`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_user_sessions` (
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data about valid user sessions.';

#
# Dumping data for table `active_user_sessions`
#

INSERT INTO `active_user_sessions` VALUES ('b6fjv6lmcnjm6fggg5b0bk30d2','2','1628253541','89.113.165.35');


# --------------------------------------------------------

#
# Table structure for table `active_users`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_users`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_users` (
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  `action` varchar(10) NOT NULL DEFAULT '',
  `id` int(10) DEFAULT NULL,
  PRIMARY KEY (`sid`,`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data about last user action.';

#
# Dumping data for table `active_users`
#

INSERT INTO `active_users` VALUES ('b6fjv6lmcnjm6fggg5b0bk30d2','2','dial','1628253541','93',NULL);

INSERT INTO `active_users` VALUES ('s9gt5kvi4vrm59r3oioo1m2er6','1','admin','1627632309','67','165');

INSERT INTO `active_users` VALUES ('9phpmg6pp03tqsl6eqsr2j3h03','2','dial','1628069460','67','114');


# --------------------------------------------------------

#
# Table structure for table `categories`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `categories`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL DEFAULT '',
  `rank` int(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='Categories to be used snippets,tv,chunks, etc';

#
# Dumping data for table `categories`
#

INSERT INTO `categories` VALUES ('1','Demo Content','0');

INSERT INTO `categories` VALUES ('2','Js','0');

INSERT INTO `categories` VALUES ('3','Login','0');

INSERT INTO `categories` VALUES ('4','Manager and Admin','0');

INSERT INTO `categories` VALUES ('5','Search','0');

INSERT INTO `categories` VALUES ('6','Content','0');

INSERT INTO `categories` VALUES ('7','Navigation','0');

INSERT INTO `categories` VALUES ('8','Forms','0');

INSERT INTO `categories` VALUES ('9','form-vopros','0');

INSERT INTO `categories` VALUES ('10','Форма заявки \"Продукция\"','0');

INSERT INTO `categories` VALUES ('11','Заказать прайс-лист','0');

INSERT INTO `categories` VALUES ('12','Warning','0');

INSERT INTO `categories` VALUES ('13','Prod','0');

INSERT INTO `categories` VALUES ('14','Из Шаблонов','0');

INSERT INTO `categories` VALUES ('15','Обратная связь в подразделах','0');

INSERT INTO `categories` VALUES ('16','SEO','0');

INSERT INTO `categories` VALUES ('17','Templates','0');

INSERT INTO `categories` VALUES ('18','add','0');

INSERT INTO `categories` VALUES ('19','Поиск','0');

INSERT INTO `categories` VALUES ('20','footer','0');

INSERT INTO `categories` VALUES ('21','ampx','0');


# --------------------------------------------------------

#
# Table structure for table `document_groups`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `document_groups`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `document_groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `document_group` int(10) NOT NULL DEFAULT '0',
  `document` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ix_dg_id` (`document_group`,`document`),
  KEY `document` (`document`),
  KEY `document_group` (`document_group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data used for access permissions.';

#
# Dumping data for table `document_groups`
#


# --------------------------------------------------------

#
# Table structure for table `documentgroup_names`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `documentgroup_names`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `documentgroup_names` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(245) NOT NULL DEFAULT '',
  `private_memgroup` tinyint(4) DEFAULT '0' COMMENT 'determine whether the document group is private to manager users',
  `private_webgroup` tinyint(4) DEFAULT '0' COMMENT 'determines whether the document is private to web users',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data used for access permissions.';

#
# Dumping data for table `documentgroup_names`
#
#
# Алексинстройконструкция Database Dump
# MODX Version:1.4.7
# 
# Host: 
# Generation Time: 12-08-2021 16:51:24
# Server version: 5.5.5-10.1.48-MariaDB-0+deb9u2
# PHP Version: 7.0.33
# Database: `aleksin-ask`
# Description: 120821copy
#

# --------------------------------------------------------

#
# Table structure for table `active_user_locks`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_user_locks`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_user_locks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `elementType` int(1) NOT NULL DEFAULT '0',
  `elementId` int(10) NOT NULL DEFAULT '0',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ix_element_id` (`elementType`,`elementId`,`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=2857 DEFAULT CHARSET=utf8 COMMENT='Contains data about locked elements.';

#
# Dumping data for table `active_user_locks`
#

INSERT INTO `active_user_locks` VALUES ('2831','b6fjv6lmcnjm6fggg5b0bk30d2','1','7','1','1628773845');

INSERT INTO `active_user_locks` VALUES ('2853','b6fjv6lmcnjm6fggg5b0bk30d2','1','1','5','1628775965');

INSERT INTO `active_user_locks` VALUES ('2833','b6fjv6lmcnjm6fggg5b0bk30d2','1','3','16','1628773992');

INSERT INTO `active_user_locks` VALUES ('2837','b6fjv6lmcnjm6fggg5b0bk30d2','1','3','19','1628774452');

INSERT INTO `active_user_locks` VALUES ('2839','b6fjv6lmcnjm6fggg5b0bk30d2','1','3','25','1628774796');

INSERT INTO `active_user_locks` VALUES ('2840','b6fjv6lmcnjm6fggg5b0bk30d2','1','7','158','1628774900');

INSERT INTO `active_user_locks` VALUES ('2841','b6fjv6lmcnjm6fggg5b0bk30d2','1','3','56','1628775044');

INSERT INTO `active_user_locks` VALUES ('2843','b6fjv6lmcnjm6fggg5b0bk30d2','1','3','55','1628775072');

INSERT INTO `active_user_locks` VALUES ('2845','b6fjv6lmcnjm6fggg5b0bk30d2','1','7','176','1628775454');

INSERT INTO `active_user_locks` VALUES ('2852','b6fjv6lmcnjm6fggg5b0bk30d2','1','3','45','1628775837');

INSERT INTO `active_user_locks` VALUES ('2854','b6fjv6lmcnjm6fggg5b0bk30d2','1','3','53','1628776143');

INSERT INTO `active_user_locks` VALUES ('2856','b6fjv6lmcnjm6fggg5b0bk30d2','1','3','52','1628776164');


# --------------------------------------------------------

#
# Table structure for table `active_user_sessions`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_user_sessions`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_user_sessions` (
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  `ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data about valid user sessions.';

#
# Dumping data for table `active_user_sessions`
#

INSERT INTO `active_user_sessions` VALUES ('mo21e75el7gp74g8hicekd3f06','2','1628776235','5.164.24.160');

INSERT INTO `active_user_sessions` VALUES ('b6fjv6lmcnjm6fggg5b0bk30d2','1','1628776284','89.113.165.86');


# --------------------------------------------------------

#
# Table structure for table `active_users`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `active_users`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `active_users` (
  `sid` varchar(32) NOT NULL DEFAULT '',
  `internalKey` int(9) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '',
  `lasthit` int(20) NOT NULL DEFAULT '0',
  `action` varchar(10) NOT NULL DEFAULT '',
  `id` int(10) DEFAULT NULL,
  PRIMARY KEY (`sid`,`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data about last user action.';

#
# Dumping data for table `active_users`
#

INSERT INTO `active_users` VALUES ('kisfpmst96b06d8o9l34doh4a1','2','dial','1628774333','8',NULL);

INSERT INTO `active_users` VALUES ('mo21e75el7gp74g8hicekd3f06','2','dial','1628776233','2',NULL);

INSERT INTO `active_users` VALUES ('b6fjv6lmcnjm6fggg5b0bk30d2','1','admin','1628776284','93',NULL);


# --------------------------------------------------------

#
# Table structure for table `categories`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `categories`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL DEFAULT '',
  `rank` int(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='Categories to be used snippets,tv,chunks, etc';

#
# Dumping data for table `categories`
#

INSERT INTO `categories` VALUES ('1','Demo Content','0');

INSERT INTO `categories` VALUES ('2','Js','0');

INSERT INTO `categories` VALUES ('3','Login','0');

INSERT INTO `categories` VALUES ('4','Manager and Admin','0');

INSERT INTO `categories` VALUES ('5','Search','0');

INSERT INTO `categories` VALUES ('6','Content','0');

INSERT INTO `categories` VALUES ('7','Navigation','0');

INSERT INTO `categories` VALUES ('8','Forms','0');

INSERT INTO `categories` VALUES ('9','form-vopros','0');

INSERT INTO `categories` VALUES ('10','Форма заявки \"Продукция\"','0');

INSERT INTO `categories` VALUES ('11','Заказать прайс-лист','0');

INSERT INTO `categories` VALUES ('12','Warning','0');

INSERT INTO `categories` VALUES ('13','Prod','0');

INSERT INTO `categories` VALUES ('14','Из Шаблонов','0');

INSERT INTO `categories` VALUES ('15','Обратная связь в подразделах','0');

INSERT INTO `categories` VALUES ('16','SEO','0');

INSERT INTO `categories` VALUES ('17','Templates','0');

INSERT INTO `categories` VALUES ('18','add','0');

INSERT INTO `categories` VALUES ('19','Поиск','0');

INSERT INTO `categories` VALUES ('20','footer','0');

INSERT INTO `categories` VALUES ('21','ampx','0');


# --------------------------------------------------------

#
# Table structure for table `document_groups`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `document_groups`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `document_groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `document_group` int(10) NOT NULL DEFAULT '0',
  `document` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ix_dg_id` (`document_group`,`document`),
  KEY `document` (`document`),
  KEY `document_group` (`document_group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data used for access permissions.';

#
# Dumping data for table `document_groups`
#


# --------------------------------------------------------

#
# Table structure for table `documentgroup_names`
#

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `documentgroup_names`;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE `documentgroup_names` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(245) NOT NULL DEFAULT '',
  `private_memgroup` tinyint(4) DEFAULT '0' COMMENT 'determine whether the document group is private to manager users',
  `private_webgroup` tinyint(4) DEFAULT '0' COMMENT 'determines whether the document is private to web users',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Contains data used for access permissions.';

#
# Dumping data for table `documentgroup_names`
#
