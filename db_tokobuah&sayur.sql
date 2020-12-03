/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.16-MariaDB : Database - tokomiftah
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tokomiftah` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `tokomiftah`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_11_23_064220_create_barangs_table',1),(5,'2020_11_24_015248_create_homes_table',1),(6,'2020_11_24_081753_create_logins_table',2),(7,'2020_11_26_011413_create_pagehomes_table',3),(8,'2020_11_26_021633_create_logos_table',3),(9,'2020_11_26_053311_create_layouts_table',3),(10,'2020_11_26_060833_create_sliders_table',3),(11,'2020_11_26_064534_create_sliderhomes_table',3),(12,'2020_11_26_123823_create_homeimgs_table',3);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_admin` */

insert  into `tb_admin`(`id`,`name`,`email`,`password`,`created_at`,`updated_at`) values (8,'admin1','admin1@gmail.com','$2y$10$8hn1HvjxSIBQnKuT/Itu5.Rv69inXf.UnwyE472JkvMjvR2USp/YO','2020-11-25 12:13:07','2020-11-25 12:13:07'),(10,'miftah','miftah@gmail.com','$2y$10$Y3W9Avzge5B/VsbaIzNiFurvyF5YXlIsRXqAoPFtP8W5iWk5iPjQK','2020-11-25 12:51:47','2020-11-25 12:51:47'),(11,'admin2','admin2@gmail.com','$2y$10$K3.tdYvA81LO5sjyoSVC/ejKZUSBgOsWX.9CSTUSeLeje0m7eLDhS','2020-12-03 03:10:28','2020-12-03 03:10:28'),(12,'admin7','admin7@gmail.com','$2y$10$FFbTBG1c.BKpwe0U956qE.JoHV/aBm34AJVxfhuB8TLDLIaJBINiO','2020-12-03 03:13:32','2020-12-03 03:56:04');

/*Table structure for table `tb_barang` */

DROP TABLE IF EXISTS `tb_barang`;

CREATE TABLE `tb_barang` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(20) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `jumlah_barang` int(255) DEFAULT NULL,
  `harga_barang` int(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `no` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_barang` */

insert  into `tb_barang`(`id`,`kode_barang`,`nama_barang`,`jumlah_barang`,`harga_barang`,`gambar`,`updated_at`,`created_at`) values (17,'B01','Pepaya',1,15000,'img-pro-04.jpg','2020-11-24 01:20:16','2020-11-23 14:57:39'),(19,'B02','Wortel',10,5000,'img-pro-01.jpg','2020-11-24 01:21:24','2020-11-23 15:29:50'),(20,'B03','Tomat',20,40000,'img-pro-02.jpg','2020-11-24 01:22:31','2020-11-24 01:22:31'),(21,'B04','Anggur Hijau',20,15000,'img-pro-03.jpg','2020-11-26 05:10:28','2020-11-24 01:23:33');

/*Table structure for table `tb_homeimg` */

DROP TABLE IF EXISTS `tb_homeimg`;

CREATE TABLE `tb_homeimg` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_homeimg` */

insert  into `tb_homeimg`(`id`,`nama`,`gambar`,`updated_at`,`created_at`) values (4,'gambar1','categories_img_01.jpg','2020-11-26 13:46:11',NULL),(5,'gambar2','categories_img_02.jpg',NULL,NULL),(6,'gambar3','categories_img_03.jpg',NULL,NULL);

/*Table structure for table `tb_homepromo` */

DROP TABLE IF EXISTS `tb_homepromo`;

CREATE TABLE `tb_homepromo` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `harga` int(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_homepromo` */

insert  into `tb_homepromo`(`id`,`nama`,`kategori`,`harga`,`gambar`,`updated_at`,`created_at`) values (1,'wortel','col-lg-3 col-md-6 special-grid best-seller',5000,'img-pro-01.jpg','2020-11-27 03:33:10','2020-11-27 02:48:07'),(2,'Pepaya','col-lg-3 col-md-6 special-grid best-seller',10000,'img-pro-04.jpg','2020-11-27 03:33:54','2020-11-27 02:49:24'),(3,'Tomat','col-lg-3 col-md-6 special-grid top-featured',5000,'img-pro-02.jpg','2020-11-27 03:33:38','2020-11-27 02:54:31'),(5,'Anggur Hijau','col-lg-3 col-md-6 special-grid top-featured',15000,'img-pro-03.jpg','2020-11-27 03:34:07','2020-11-27 02:55:55');

/*Table structure for table `tb_logoweb` */

DROP TABLE IF EXISTS `tb_logoweb`;

CREATE TABLE `tb_logoweb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_logoweb` */

insert  into `tb_logoweb`(`id`,`nama`,`gambar`,`updated_at`,`created_at`) values (1,'FreshShop-logo','logo.png','2020-11-27 03:50:25',NULL);

/*Table structure for table `tb_pageabout` */

DROP TABLE IF EXISTS `tb_pageabout`;

CREATE TABLE `tb_pageabout` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `h1` varchar(255) DEFAULT NULL,
  `isi1` varchar(255) DEFAULT NULL,
  `h2` varchar(255) DEFAULT NULL,
  `isi2` varchar(255) DEFAULT NULL,
  `h3` varchar(255) DEFAULT NULL,
  `isi3` varchar(255) DEFAULT NULL,
  `h4` varchar(255) DEFAULT NULL,
  `isi4` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_pageabout` */

insert  into `tb_pageabout`(`id`,`h1`,`isi1`,`h2`,`isi2`,`h3`,`isi3`,`h4`,`isi4`,`gambar`,`updated_at`,`created_at`) values (1,'Selamat datang di Toko Buah dan Sayuran ?','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupta','Kami Terpecaya','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Kami Professional','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Kami Merespon Cepat','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','about-img.jpg','2020-12-02 13:25:08',NULL);

/*Table structure for table `tb_slider` */

DROP TABLE IF EXISTS `tb_slider`;

CREATE TABLE `tb_slider` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `text_h1` varchar(255) DEFAULT NULL,
  `text_h2` varchar(255) DEFAULT NULL,
  `button` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_slider` */

insert  into `tb_slider`(`id`,`text_h1`,`text_h2`,`button`,`gambar`,`updated_at`,`created_at`) values (2,'Selamat Datang di Toko Buah & Sayuran','Dipilih menggunakan teknologi terbaik Sudah di ujicoba dengan tingkat higienisan yang baik','MULAI BELANJA','banner-02.jpg','2020-11-26 09:34:22','2020-11-26 09:34:22'),(3,'Selamat Datang di Toko Buah & Sayuran','Dipilih menggunakan teknologi terbaik Sudah di ujicoba dengan tingkat higienisan yang baik','MULAI BELANJA','banner-01.jpg','2020-11-26 11:28:15','2020-11-26 11:28:15'),(4,'Selamat Datang di Toko Buah & Sayuran','Dipilih menggunakan teknologi terbaik Sudah di ujicoba dengan tingkat higienisan yang baik','MULAI BELANJA','banner-03.jpg','2020-11-26 11:28:33','2020-11-26 11:28:33'),(5,'coba','coba','cba yuk','all-bg-title.jpg','2020-11-26 12:06:23','2020-11-26 12:06:23');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
