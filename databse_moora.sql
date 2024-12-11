-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for moora
CREATE DATABASE IF NOT EXISTS `moora` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `moora`;

-- Dumping structure for table moora.alternatif
CREATE TABLE IF NOT EXISTS `alternatif` (
  `id_alternatif` varchar(2) NOT NULL,
  `nama_alternatif` varchar(20) NOT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table moora.alternatif: ~6 rows (approximately)
INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`) VALUES
	('A1', 'Hafiz'),
	('A2', 'Lewi'),
	('A3', 'Cahaya'),
	('A4', 'Mesak'),
	('A5', 'Bobby'),
	('A6', 'Vivi');

-- Dumping structure for table moora.kriteria
CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` varchar(2) NOT NULL,
  `nama_kriteria` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bobot` int NOT NULL DEFAULT '0',
  `jenis_kriteria` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table moora.kriteria: ~5 rows (approximately)
INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `jenis_kriteria`) VALUES
	('C1', 'Disiplin', 20, 'Benefit'),
	('C2', 'Kerja Sama Tim', 25, 'Benefit'),
	('C3', 'Keterampilan', 25, 'Benefit'),
	('C4', 'Kualitas Kerja', 20, 'Benefit'),
	('C5', 'Ketidakhadiran', 10, 'Cost');

-- Dumping structure for table moora.perhitungan
CREATE TABLE IF NOT EXISTS `perhitungan` (
  `id_perhitungan` int NOT NULL,
  `id_alternatif` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_kriteria` varchar(2) DEFAULT NULL,
  `value` int DEFAULT NULL,
  PRIMARY KEY (`id_perhitungan`),
  KEY `id_alternatif` (`id_alternatif`) USING BTREE,
  KEY `id_kriteria` (`id_kriteria`),
  CONSTRAINT `FK_perhitungan_alternatif` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`),
  CONSTRAINT `FK_perhitungan_kriteria` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table moora.perhitungan: ~30 rows (approximately)
INSERT INTO `perhitungan` (`id_perhitungan`, `id_alternatif`, `id_kriteria`, `value`) VALUES
	(1, 'A1', 'C1', 80),
	(2, 'A1', 'C2', 70),
	(3, 'A1', 'C3', 90),
	(4, 'A1', 'C4', 70),
	(5, 'A1', 'C5', 80),
	(6, 'A2', 'C1', 80),
	(7, 'A2', 'C2', 70),
	(8, 'A2', 'C3', 80),
	(9, 'A2', 'C4', 70),
	(10, 'A2', 'C5', 80),
	(11, 'A3', 'C1', 70),
	(12, 'A3', 'C2', 70),
	(13, 'A3', 'C3', 90),
	(14, 'A3', 'C4', 75),
	(15, 'A3', 'C5', 90),
	(16, 'A4', 'C1', 60),
	(17, 'A4', 'C2', 60),
	(18, 'A4', 'C3', 60),
	(19, 'A4', 'C4', 70),
	(20, 'A4', 'C5', 60),
	(21, 'A5', 'C1', 60),
	(22, 'A5', 'C2', 60),
	(23, 'A5', 'C3', 60),
	(24, 'A5', 'C4', 75),
	(25, 'A5', 'C5', 60),
	(26, 'A6', 'C1', 90),
	(27, 'A6', 'C2', 80),
	(28, 'A6', 'C3', 90),
	(29, 'A6', 'C4', 70),
	(30, 'A6', 'C5', 90);

-- Dumping structure for view moora.view_normalisasi
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_normalisasi` (
	`id_alternatif` VARCHAR(2) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`norm_C1` DOUBLE NULL,
	`norm_C2` DOUBLE NULL,
	`norm_C3` DOUBLE NULL,
	`norm_C4` DOUBLE NULL,
	`norm_C5` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view moora.view_normalisasi_terbobot
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_normalisasi_terbobot` (
	`id_alternatif` VARCHAR(2) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`bobot_C1` DOUBLE NULL,
	`bobot_C2` DOUBLE NULL,
	`bobot_C3` DOUBLE NULL,
	`bobot_C4` DOUBLE NULL,
	`bobot_C5` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view moora.view_optimasi
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_optimasi` (
	`id_alternatif` VARCHAR(2) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nilai_max` DOUBLE NULL,
	`nilai_min` DOUBLE NULL,
	`nilai_optimasi` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view moora.view_ranking
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_ranking` (
	`id_alternatif` VARCHAR(2) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nama_alternatif` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nilai_optimasi` DOUBLE NULL,
	`ranking` BIGINT(20) UNSIGNED NOT NULL
) ENGINE=MyISAM;

-- Dumping structure for view moora.view_normalisasi
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_normalisasi`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_normalisasi` AS select `p`.`id_alternatif` AS `id_alternatif`,round((`p_c1`.`value` / sqrt(sum((`p_c1`.`value` * `p_c1`.`value`)) OVER () )),9) AS `norm_C1`,round((`p_c2`.`value` / sqrt(sum((`p_c2`.`value` * `p_c2`.`value`)) OVER () )),9) AS `norm_C2`,round((`p_c3`.`value` / sqrt(sum((`p_c3`.`value` * `p_c3`.`value`)) OVER () )),9) AS `norm_C3`,round((`p_c4`.`value` / sqrt(sum((`p_c4`.`value` * `p_c4`.`value`)) OVER () )),9) AS `norm_C4`,round((`p_c5`.`value` / sqrt(sum((`p_c5`.`value` * `p_c5`.`value`)) OVER () )),9) AS `norm_C5` from ((((((select distinct `perhitungan`.`id_alternatif` AS `id_alternatif` from `perhitungan`) `p` left join `perhitungan` `p_c1` on(((`p`.`id_alternatif` = `p_c1`.`id_alternatif`) and (`p_c1`.`id_kriteria` = 'C1')))) left join `perhitungan` `p_c2` on(((`p`.`id_alternatif` = `p_c2`.`id_alternatif`) and (`p_c2`.`id_kriteria` = 'C2')))) left join `perhitungan` `p_c3` on(((`p`.`id_alternatif` = `p_c3`.`id_alternatif`) and (`p_c3`.`id_kriteria` = 'C3')))) left join `perhitungan` `p_c4` on(((`p`.`id_alternatif` = `p_c4`.`id_alternatif`) and (`p_c4`.`id_kriteria` = 'C4')))) left join `perhitungan` `p_c5` on(((`p`.`id_alternatif` = `p_c5`.`id_alternatif`) and (`p_c5`.`id_kriteria` = 'C5'))));

-- Dumping structure for view moora.view_normalisasi_terbobot
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_normalisasi_terbobot`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_normalisasi_terbobot` AS select `n`.`id_alternatif` AS `id_alternatif`,round((`n`.`norm_C1` * `k1`.`bobot`),9) AS `bobot_C1`,round((`n`.`norm_C2` * `k2`.`bobot`),9) AS `bobot_C2`,round((`n`.`norm_C3` * `k3`.`bobot`),9) AS `bobot_C3`,round((`n`.`norm_C4` * `k4`.`bobot`),9) AS `bobot_C4`,round((`n`.`norm_C5` * `k5`.`bobot`),9) AS `bobot_C5` from (((((`view_normalisasi` `n` join `kriteria` `k1` on((`k1`.`id_kriteria` = 'C1'))) join `kriteria` `k2` on((`k2`.`id_kriteria` = 'C2'))) join `kriteria` `k3` on((`k3`.`id_kriteria` = 'C3'))) join `kriteria` `k4` on((`k4`.`id_kriteria` = 'C4'))) join `kriteria` `k5` on((`k5`.`id_kriteria` = 'C5')));

-- Dumping structure for view moora.view_optimasi
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_optimasi`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_optimasi` AS select `nt`.`id_alternatif` AS `id_alternatif`,round((((`nt`.`bobot_C1` + `nt`.`bobot_C2`) + `nt`.`bobot_C3`) + `nt`.`bobot_C4`),9) AS `nilai_max`,round(`nt`.`bobot_C5`,9) AS `nilai_min`,round(((((`nt`.`bobot_C1` + `nt`.`bobot_C2`) + `nt`.`bobot_C3`) + `nt`.`bobot_C4`) - `nt`.`bobot_C5`),9) AS `nilai_optimasi` from `view_normalisasi_terbobot` `nt`;

-- Dumping structure for view moora.view_ranking
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_ranking`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_ranking` AS select `vo`.`id_alternatif` AS `id_alternatif`,`alt`.`nama_alternatif` AS `nama_alternatif`,`vo`.`nilai_optimasi` AS `nilai_optimasi`,rank() OVER (ORDER BY `vo`.`nilai_optimasi` desc )  AS `ranking` from (`view_optimasi` `vo` join `alternatif` `alt` on((`vo`.`id_alternatif` = `alt`.`id_alternatif`)));

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
