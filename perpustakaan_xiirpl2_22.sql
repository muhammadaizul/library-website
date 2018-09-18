-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 27, 2014 at 09:35 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `perpustakaan_xiirpl2_22`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `buku`
-- 

CREATE TABLE `buku` (
  `buku_kode` char(10) NOT NULL,
  `kategori_kode` char(10) NOT NULL,
  `penerbit_kode` char(10) NOT NULL,
  `buku_judul` varchar(50) NOT NULL,
  `buku_jumhal` int(11) NOT NULL,
  `buku_deskripsi` varchar(250) NOT NULL,
  `buku_pengarang` varchar(30) NOT NULL,
  `buku_tahun_terbit` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  PRIMARY KEY  (`buku_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `buku`
-- 

INSERT INTO `buku` VALUES ('B001', 'K001', 'P001', 'Maulid Nabi SAW', 190, 'menceritakan perjuangan bangginda rasul', 'KH.Abdulah Faqih', 2011, 'B001.jpg');
INSERT INTO `buku` VALUES ('B003', 'K002', 'P002', 'Sejarah Nasional Indonesia', 121, 'tetang era penjajahan', 'Prof.Soemardjo ', 2010, 'B002.jpg');
INSERT INTO `buku` VALUES ('B005', 'K004', 'P003', 'Kapitalisme', 191, 'aqidah bangsa barat dalam pencarian', 'Ismaiel Fajri Al athas', 2010, 'B003.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `detail_pinjam`
-- 

CREATE TABLE `detail_pinjam` (
  `peminjaman_kode` char(25) NOT NULL,
  `buku_kode` char(10) NOT NULL,
  `detail_tgl_kembali` date NOT NULL,
  `detail_denda` double NOT NULL,
  `detail_status_kembali` tinyint(1) NOT NULL,
  PRIMARY KEY  (`peminjaman_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `detail_pinjam`
-- 

INSERT INTO `detail_pinjam` VALUES ('M000000001', 'B000000001', '2013-11-11', 12000, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `kartu_pendaftaran`
-- 

CREATE TABLE `kartu_pendaftaran` (
  `kartu_barkode` char(10) NOT NULL,
  `petugas_kode` char(10) NOT NULL,
  `peminjam_kode` char(10) NOT NULL,
  `kartu_tgl_pembuatan` date NOT NULL,
  `kartu_tgl_akhir` date NOT NULL,
  `kartu_status_aktif` tinyint(1) NOT NULL,
  PRIMARY KEY  (`kartu_barkode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `kartu_pendaftaran`
-- 

INSERT INTO `kartu_pendaftaran` VALUES ('K000000001', 'U000000001', 'P000000001', '2013-11-03', '2013-11-11', 0);
INSERT INTO `kartu_pendaftaran` VALUES ('B000000002', 'U000000003', 'P000000002', '2013-11-10', '2013-11-11', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `kategori`
-- 

CREATE TABLE `kategori` (
  `kategori_kode` char(10) NOT NULL,
  `kategori_nama` varchar(20) NOT NULL,
  PRIMARY KEY  (`kategori_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `kategori`
-- 

INSERT INTO `kategori` VALUES ('K001', 'Novel');
INSERT INTO `kategori` VALUES ('K002', 'cerpen');

-- --------------------------------------------------------

-- 
-- Table structure for table `peminjam`
-- 

CREATE TABLE `peminjam` (
  `peminjam_kode` char(10) NOT NULL,
  `peminjam_nama` varchar(30) NOT NULL,
  `peminjam_alamat` varchar(50) NOT NULL,
  `peminjam_telp` varchar(15) NOT NULL,
  `peminjam_foto` varchar(30) NOT NULL,
  PRIMARY KEY  (`peminjam_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `peminjam`
-- 

INSERT INTO `peminjam` VALUES ('A001', 'Muhammad a', 'Yogyakarta', '085747056242', 'algoritma.jpg');
INSERT INTO `peminjam` VALUES ('A002', 'Rafi Yan', 'Jl.Karang Gandul', '0281-623-8764', 'Graphic Novel 15 cover.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `peminjaman`
-- 

CREATE TABLE `peminjaman` (
  `peminjaman_kode` char(25) NOT NULL,
  `petugas_kode` char(10) NOT NULL,
  `peminjam_kode` char(10) NOT NULL,
  `peminjaman_tgl` date NOT NULL,
  `peminjaman_tgl_hrs_kembali` date NOT NULL,
  `buku_kode` char(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  KEY `peminjaman_kode` (`peminjaman_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `peminjaman`
-- 

INSERT INTO `peminjaman` VALUES ('p27-02-2014', 'U001', 'A002', '2014-02-27', '2014-03-06', 'B001', '1');
INSERT INTO `peminjaman` VALUES ('p27-02-2014', 'U001', 'A002', '2014-02-27', '2014-03-06', 'B003', '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `penerbit`
-- 

CREATE TABLE `penerbit` (
  `penerbit_kode` char(10) NOT NULL,
  `penerbit_nama` varchar(20) NOT NULL,
  `penerbit_alamat` varchar(50) NOT NULL,
  `penerbit_telp` varchar(15) NOT NULL,
  PRIMARY KEY  (`penerbit_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `penerbit`
-- 

INSERT INTO `penerbit` VALUES ('P005', 'Erlangga', 'Semarang', '021 345 223');
INSERT INTO `penerbit` VALUES ('P002', 'Gramedia', 'Yogyakarta', '021-5678');

-- --------------------------------------------------------

-- 
-- Table structure for table `petugas`
-- 

CREATE TABLE `petugas` (
  `petugas_kode` char(10) NOT NULL,
  `petugas_nama` varchar(25) NOT NULL,
  PRIMARY KEY  (`petugas_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `petugas`
-- 

INSERT INTO `petugas` VALUES ('U001', 'Muhammad aizul');
INSERT INTO `petugas` VALUES ('U002', 'Shylvia Eka');

-- --------------------------------------------------------

-- 
-- Table structure for table `tuser`
-- 

CREATE TABLE `tuser` (
  `peminjam_kode` varchar(10) NOT NULL,
  `kunci` varchar(20) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `uname` varchar(10) NOT NULL,
  PRIMARY KEY  (`peminjam_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tuser`
-- 

INSERT INTO `tuser` VALUES ('', 'ijul', 'admin', 'pikar');
INSERT INTO `tuser` VALUES ('A001', 'ucil', 'user', 'silvi');
