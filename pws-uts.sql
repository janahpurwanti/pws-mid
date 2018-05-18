# Host: localhost  (Version 5.5.5-10.1.10-MariaDB)
# Date: 2018-05-18 16:43:37
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "books"
#

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `kode` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pengarang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `penerbit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "books"
#

INSERT INTO `books` VALUES (1,'algoritma','pak sukani','ubl','',1,'2018-05-18 16:17:33','2018-05-18 16:17:33');

#
# Structure for table "categories"
#

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `keterangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "categories"
#

INSERT INTO `categories` VALUES (2,'anak-anak','','2018-05-18 16:07:43','2018-05-18 16:07:43');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2018_05_18_062401_categories',1),(2,'2018_05_18_063559_books',2);
