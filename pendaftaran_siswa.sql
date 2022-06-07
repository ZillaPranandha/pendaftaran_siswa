# Host: localhost  (Version 5.5.5-10.1.38-MariaDB)
# Date: 2022-06-07 12:08:09
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "calon_siswa"
#

DROP TABLE IF EXISTS `calon_siswa`;
CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama lengkap` varchar(50) NOT NULL,
  `nama panggilan` varchar(50) NOT NULL,
  `jenis kelamin` varchar(20) NOT NULL,
  `tempat tanggal lahir` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `cita-cita` varchar(35) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(25) NOT NULL,
  `anak ke` varchar(10) NOT NULL,
  `jumlah saudara` varchar(10) NOT NULL,
  `anak yatim/piatu/yatim piatu` varchar(10) NOT NULL,
  `bahasa sehari hari dirumah` varchar(25) NOT NULL,
  `sekolah asal` varchar(30) NOT NULL,
  `no telepon` varchar(30) NOT NULL,
  `prestasi yang pernah diraih` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "calon_siswa"
#

INSERT INTO `calon_siswa` VALUES (1,'zilla pranandha putri','zilla','perempuan','duri,20 oktober 2003','islam','dokter','berenang,sepeda','indonesia','1','1','-','indonesia','smas it mutiara','082389096564','juara 1');
