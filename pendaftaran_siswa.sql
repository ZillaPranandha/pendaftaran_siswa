# Host: localhost  (Version 5.5.5-10.4.21-MariaDB)
# Date: 2022-06-08 16:59:34
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "calon_siswa"
#

DROP TABLE IF EXISTS `calon_siswa`;
CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL DEFAULT '',
  `nama_panggilan` varchar(50) NOT NULL DEFAULT '',
  `jenis_kelamin` varchar(20) NOT NULL DEFAULT '',
  `tempatlahir` varchar(255) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `agama` varchar(10) NOT NULL,
  `cita-cita` varchar(35) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(25) NOT NULL,
  `anak` varchar(10) NOT NULL,
  `jumlah_saudara` varchar(10) NOT NULL,
  `bahasa` varchar(25) NOT NULL,
  `sekolah_asal` varchar(30) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `prestasi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "calon_siswa"
#

INSERT INTO `calon_siswa` VALUES (1,'zilla pranandha putri','zilla','perempuan','duri','2003-04-26','islam','dokter','berenang,sepeda','indonesia','1','1','indonesia','smas it mutiara','082389096564','juara 1');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `konfir_password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (2,'Raga Setia ','Wibawa','Ragasetia80@gmail.com','$2y$10$K4PM0RKCpdarHYQXvee1VOxvHI4mjWi7YTKH.D4GB46B/b9yJ5Jtu','$2y$10$lpNR8LVB6mRpyrGVRa5G6uD4a8f3NiNwVkDjD.0VQCt1SUbni2K5.'),(6,'Ferry','Richardo','ferryricardho@gmail.com','$2y$10$HIqIy/Szgh2tMktadd4Jges.vEKjDBDTZeCoZRfrPlwfJ4GZGZaZW','$2y$10$EtivuR4nWl82kQSPXyqXHObZOvCpueUQuFepTlh1fugI..MtvEuRK'),(10,'Zilla','Pranandha','zillapranandha@gmail.com','$2y$10$xvdwPjmn/u/OjxgPQPagP.LE3/lwxtx6036szetGvKvM/9mPhO1GC','$2y$10$zcU4N6W66tS8NsHNuiXeSenFmFvWTq5zt4z91mdGZS9U1qff8Kmjq');
