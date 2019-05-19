-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE `t_admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `level` int(5) NOT NULL COMMENT '1 = admin, 0 = user',
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `telepon` text NOT NULL,
  `alamat` text NOT NULL,
  `status` int(5) NOT NULL COMMENT '1 = ONLINE, 0 = OFFLINE',
  `lat` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `lng` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `t_admin` (`id`, `level`, `name`, `password`, `email`, `photo`, `telepon`, `alamat`, `status`, `lat`, `lng`, `url`) VALUES
(6,	0,	'Admin',	'c14bcebc5b4cd0c7fce90c3806188619',	'admin@gmail.com',	'',	'123123123123',	'jl.kh.abdul hamid',	1,	'-7.7730737',	'113.173935',	''),
(7,	0,	'fadil',	'3fc0a7acf087f549ac2b266baf94b8b1',	'fadil@gmail.com',	'',	'123123123',	'jasjdasd',	0,	NULL,	NULL,	'');

-- 2019-05-11 07:02:55
