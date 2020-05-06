-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 08:09 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `harkan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE IF NOT EXISTS `dokumen` (
`id_dokumen` int(11) NOT NULL,
  `id_proyek` varchar(100) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_penyimpanan` int(11) NOT NULL,
  `no_dokumen` varchar(100) NOT NULL,
  `tgl_dokumen` date NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `keterangan` text NOT NULL,
  `file` varchar(300) NOT NULL,
  `status_dokumen` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `id_proyek`, `id_jenis`, `id_penyimpanan`, `no_dokumen`, `tgl_dokumen`, `tanggal`, `keterangan`, `file`, `status_dokumen`) VALUES
(7, 'R19AMRXA', 24, 1, 'SPER/04.a/33000/I/2019', '0000-00-00', '2019-10-17 15:46:50', '', '1571302010_KM__AMARISA-Amend_Kontrak_pdf.pdf', 1),
(8, 'R19AMRXA', 5, 1, '01/33000/I/2019 tgl 4 Jan 2019', '0000-00-00', '2019-10-17 15:54:00', '-', '1571302440_KM__AMARISA-BA_Nego_Awal_pdf.pdf', 1),
(10, 'R19AMRXA', 23, 1, '07/33000/II/2019 tgl 01 Feb 2019', '0000-00-00', '2019-10-18 09:59:04', '', '1571367544_KM__AMARISA-BA_Nego_Final_pdf.pdf', 1),
(11, 'R19AMRXA', 20, 1, '06/32400/I/2019 tgl 16 Jan 2019', '0000-00-00', '2019-10-18 10:00:49', '', '1571367649_KM__AMARISA-Docking_Report_pdf.pdf', 1),
(12, 'R19AMRXA', 22, 0, 'B/74/33000/I/2019 tgl 21 Jan 2019', '0000-00-00', '2019-10-18 10:01:30', '', '1571367690_KM__AMARISA-Draft_Bill_pdf.pdf', 1),
(13, 'R19AMRXA', 10, 0, 'IPP/03/33000/I/2019 tgl 03 Jan 2019', '0000-00-00', '2019-10-18 10:03:27', '', '1571367807_KM__AMARISA-IPP_Awal_pdf.pdf', 1),
(14, 'R19AMRXA', 6, 0, 'SPER/11/33000/I/2019 tgl 04 Jan 2019', '0000-00-00', '2019-10-18 10:04:49', '', '1571367889_KM__AMARISA-Kontrak_Awal_pdf.pdf', 1),
(15, 'R19AMRXA', 21, 0, '05/32400/I/2019 tgl 16 Jan 2019', '0000-00-00', '2019-10-18 10:06:09', '', '1571367969_KM__AMARISA-S_Note_pdf.pdf', 1),
(16, 'R19AMRXA', 4, 0, 'B/      /33000/I/2019 tgl 03 Jan 2019', '0000-00-00', '2019-10-18 10:08:30', '', '1571368110_KM__AMARISA-SPH_pdf.pdf', 1),
(17, 'R19AMRXA', 15, 0, '01 dan 02/AMR/I/2019 tgl 07 Jan 2019 dan 09 Jan 2019', '0000-00-00', '2019-10-24 13:24:07', '', '1571898247_KM__AMARISA-Tambah_Kurang_pdf.pdf', 1),
(19, 'R19DF7XA', 20, 0, 'BA/27/38500/I/2019', '2019-01-31', '2019-11-05 08:00:56', '', '1572915656_KM__DHARMA_FERRY_VII-Docking_Report_(ada_yg_blm_terscan_A3)_pdf.pdf', 1),
(20, 'R19DF7XA', 22, 0, 'Email', '2019-04-09', '2019-11-05 08:02:38', '', '1572915758_KM__DHARMA_FERRY_VII-Draft_Bill_pdf.pdf', 1),
(21, 'R19DF7XA', 2, 0, '395/33100/XI/2018', '2018-11-14', '2019-11-05 08:03:50', '', '1572915830_KM__DHARMA_FERRY_VII-H1_pdf.pdf', 1),
(22, 'R19DF7XA', 6, 0, 'SPER/02/33000/I/2019', '2019-01-18', '2019-11-05 08:04:45', '', '1572915885_KM__DHARMA_FERRY_VII-Kontrak_Awal_pdf.pdf', 1),
(23, 'R19DF7XA', 29, 0, 'BA/28/32500/I/2019', '2019-01-31', '2019-11-05 08:14:45', '', '1572916485_KM__DHARMA_FERRY_VII-Laporan_Kemajuan_pdf.pdf', 1),
(24, 'R19DF7XA', 21, 0, '26/BA/38500/I/2019', '2019-01-31', '2019-11-05 08:16:54', '', '1572916614_KM__DHARMA_FERRY_VII-S_Note_pdf.pdf', 1),
(25, 'R19LGDXA', 6, 0, 'SPERJ.98/TN.101/ASDP.SBA-2019', '2019-10-04', '2019-11-05 13:49:43', '', '1572936583_KMP__LEGUNDI-Kontrak_Awal_pdf.pdf', 1),
(26, 'R19MTLXA', 20, 0, 'SPER/13/33000/IV/2019', '2019-04-25', '2019-11-21 08:59:29', '', '1574301569_KLM_MUTIARA_LAUT_-_KONTRAK_AWAL_pdf.pdf', 1),
(27, 'R19LSMXA', 20, 0, 'SPER/32/33000/IX/2019', '2019-09-23', '2019-11-21 09:04:47', '', '1574301887_KM_LUMOSO_SELAMAT-KONTRAL_AWAL_pdf.pdf', 1),
(28, 'R19BLOXA', 20, 0, 'SPER/36/33000/IV/2019', '2019-11-04', '2019-11-21 09:31:55', '', '1574303515_KM_BLOSSOM_PESCADORES-KONTRAK_AWAL20191112_pdf.pdf', 1),
(29, 'R19DT9XA', 24, 0, 'SPER/11.a/33000/VIII/2019', '2019-08-08', '2019-11-21 09:42:15', '', '1574304135_KM__DHARMA_KARTIKA_IX-Adendum_Kontrak_pdf.pdf', 1),
(30, 'R19DT9XA', 5, 0, 'BA/27/33000/IV/2019', '2019-04-09', '2019-11-21 09:45:21', '', '1574304321_KM__DHARMA_KARTIKA_IX-BA_Nego_(Awal)_pdf.pdf', 1),
(31, 'R19DT9XA', 20, 0, 'SPER/11/33000/IV/2019', '2019-04-09', '2019-11-21 09:47:08', '', '1574304428_KM__DHARMA_KARTIKA_IX-Kontrak_Awal_pdf.pdf', 1),
(32, 'R19DK3XA', 5, 0, 'SPER/21.a/33000/X/2019', '2019-10-15', '2019-11-21 09:50:42', '', '1574304642_KM_DHARMA_KENCANA_III20191112_pdf.pdf', 1),
(33, 'R19DK7XA', 20, 0, 'SPER/35/33000/XI/2019', '2019-11-07', '2019-11-21 09:59:41', '', '1574305181_KM_DHARMA_KENCANA_VII-KONTRAL_AWAL20191112_pdf.pdf', 1),
(34, 'R19MRPXA', 24, 0, 'SPER/06.a/33000/III/2019', '2019-03-19', '2019-11-21 10:04:21', '', '1574305461_KM__MENTARI_PERSADA-Amandemen_Kontrak_pdf.pdf', 1),
(35, 'R19MRPXA', 5, 0, 'BA/11/33000/II/2019', '2019-02-28', '2019-11-21 10:06:10', '', '1574305570_KM__MENTARI_PERSADA-BA_Negosiasi_(Awal)_pdf.pdf', 1),
(36, 'R19MRPXA', 23, 0, 'BA/16/33000/III/2019', '2019-03-19', '2019-11-21 10:10:02', '', '1574305802_KM__MENTARI_PERSADA-BA_Negosiasi_(Final)_pdf.pdf', 1),
(37, 'R19MRPXA', 20, 0, 'BA/42/32500/III/2019', '2019-03-12', '2019-11-21 10:12:34', '', '1574305954_KM__MENTARI_PERSADA-Docking_Report_pdf.pdf', 1),
(38, 'R19MRPXA', 22, 0, 'B/169.a/33000/III/2019', '2019-03-15', '2019-11-21 10:14:49', '', '1574306089_KM__MENTARI_PERSADA-Draft_Bill_pdf.pdf', 1),
(39, 'R19MRPXA', 10, 0, 'IPP/46/33000/III/2018', '2019-03-22', '2019-11-21 10:18:36', '', '1574306316_KM__MENTARI_PERSADA-IPP_Awal_pdf.pdf', 1),
(40, 'R19MRPXA', 20, 0, 'SPER/06/33000/III/2019', '2019-03-01', '2019-11-21 10:20:40', '', '1574306440_KM__MENTARI_PERSADA-Kontrak_Awal_pdf.pdf', 1),
(41, 'R19MRPXA', 21, 0, 'BA/40/32500/III/2019', '2019-03-12', '2019-11-21 10:22:12', '', '1574306532_KM__MENTARI_PERSADA-S_Note_pdf.pdf', 1),
(42, 'R19MRPXA', 4, 0, 'B/129/33000/II/2019', '2019-02-22', '2019-11-21 10:23:44', '', '1574306624_KM__MENTARI_PERSADA-SPH_pdf.pdf', 1),
(43, 'R19MPRXA', 10, 0, 'B/67/33000/V/2019', '2019-05-06', '2019-11-21 10:28:40', '', '1574306920_KM__MENTARI_PRATAMA-IPP_Awal_pdf.pdf', 1),
(44, 'R19MPRXA', 11, 0, 'B/68/33000/V/2019', '2019-05-06', '2019-11-21 10:33:53', '', '1574307233_KM__MENTARI_PRATAMA-IPP_Rev_1_pdf.pdf', 1),
(45, 'R19MKAXA', 24, 0, 'SPER/03.a/33000/I/2019', '2019-04-02', '2019-11-21 10:37:52', '', '1574307472_KM__MUSTIKA_KENCANA-Amandemen_Kontrak_pdf.pdf', 1),
(46, 'R19MKAXA', 23, 0, 'BA/21/33000/IV/2019', '2019-04-02', '2019-11-21 10:39:29', '', '1574307569_KM__MUSTIKA_KENCANA-BA__Negosiasi_(Final)_pdf.pdf', 1),
(47, 'R19MKAXA', 23, 0, 'BA/21/33000/IV/2019', '2019-04-02', '2019-11-21 10:45:44', '', '1574307944_KM__MUSTIKA_KENCANA-BA__Negosiasi_(Final)_pdf.pdf', 1),
(48, 'R19MKAXA', 26, 0, 'B/64/33100/II/2019', '2019-02-25', '2019-11-21 10:47:33', '', '1574308053_KM__MUSTIKA_KENCANA-Clearance_Out_pdf.pdf', 1),
(49, 'R19MKAXA', 20, 0, '009/32400/II/2019', '2019-03-15', '2019-11-21 10:49:29', '', '1574308169_KM__MUSTIKA_KENCANA-Docking_Report_pdf.pdf', 1),
(50, 'R19MKAXA', 15, 0, '01/MKA/I/2019', '2019-01-21', '2019-11-21 10:58:03', '', '1574308683_KM__MUSTIKA_KENCANA-H9_Tambah_Kurang_pdf.pdf', 1),
(51, 'R19MKAXA', 30, 0, '34/33100/I/2018', '2018-12-27', '2019-11-21 11:02:14', '', '1574308934_KM__MUSTIKA_KENCANA-H5_Hasil_Rapat_pdf.pdf', 1),
(52, 'R19MKAXA', 20, 0, 'SPER/03/33000/I/2019', '2019-01-18', '2019-11-21 11:04:30', '', '1574309070_KM__MUSTIKA_KENCANA-Kontrak_Awal_pdf.pdf', 1),
(53, 'R19MKAXA', 31, 0, 'B/30/33000/I/2019', '2019-02-14', '2019-11-21 11:09:28', '', '1574309368_KM__MUSTIKA_KENCANA-Re_schedule_Dock_Space_pdf.pdf', 1),
(54, 'R19MKAXA', 21, 0, '008/32400/II/2019', '2019-02-15', '2019-11-21 11:10:52', '', '1574309452_KM__MUSTIKA_KENCANA-S_Note_pdf.pdf', 1),
(55, 'R19FR1XA', 20, 0, 'SPER/30/33000/IX/2019', '2019-09-11', '2019-11-21 11:14:57', '', '1574309697_KM__MUTIARA_FERINDO_I_-_Kontrak_Awal_pdf.pdf', 1),
(56, 'R19FR2XA', 26, 0, 'B/423/33100/XI/2019', '2019-11-04', '2019-11-21 11:26:02', '', '1574310362_KM__MUTIARA_FERINDO_II_-_Clearance_Out_pdf.pdf', 1),
(57, 'R19FR2XA', 20, 0, 'SPER/33/33000/X/2019', '2019-10-17', '2019-11-21 12:39:53', '', '1574314793_KM__MUTIARA_FERINDO_II_-_Kontrak_Awal_pdf.pdf', 1),
(58, 'R19FR2XA', 4, 0, 'B/   /33000/x/2019', '2019-10-13', '2019-11-21 12:46:37', '', '1574315197_KM__MUTIARA_FERINDO_II_-_SPH_pdf.pdf', 1),
(59, 'R19FR5XA', 20, 0, 'SPER/31/33000/IX/2019', '2019-09-11', '2019-11-21 12:50:04', '', '1574315404_KM__MUTIARA_FERINDO_V_-_Kontrak_Awal_pdf.pdf', 1),
(60, 'R19TDMXA', 20, 0, 'SPER/29/33000/VIII/2019', '2019-08-21', '2019-11-21 12:54:12', '', '1574315652_KM__TANTO_DAMAI_-_Kontrak_Awal_pdf.pdf', 1),
(61, 'R19THDXA', 20, 0, 'SPER/34/33000/X/2019', '2019-10-10', '2019-11-21 13:10:58', '', '1574316658_TANTO_HANDAL_KONTRAK_AWAL_pdf.pdf', 1),
(62, 'R19LGDXA', 14, 0, '02/OS-LEGUNDI/XI/ASDP-2019', '2019-10-30', '2019-11-21 13:25:23', '', '1574317523_KMP_LEGUNDI_-_BA_KAPAL_NAIK_DOCK_pdf.pdf', 1),
(63, 'R19BJMXA', 20, 0, 'KTR/32/02-40/III/2019/DISMATAL', '2019-03-04', '2019-11-21 13:53:59', '', '1574319239_KRI_BANJARMASIN-Kontrak_Awal_pdf.pdf', 1),
(64, 'R19BJMXA', 24, 0, 'KTR/32/02-40/III/2019/DISMATAL', '2019-09-16', '2019-11-21 13:55:06', '', '1574319306_KRI_BJM_-_Addendum_Kontrak_pdf.pdf', 1),
(65, 'R19BCSDA', 20, 0, 'KTR/087/03.21/III/2019', '2019-03-08', '2019-11-21 14:07:09', '', '1574320029_KRI_BIMA_SUCI-Kontrak_Awal_pdf.pdf', 1),
(66, 'R19BSCDA', 32, 0, 'B/291/30000/x/2019', '2019-10-08', '2019-11-21 14:13:17', '', '1574320397_KRI_KRS_-_Dok_Tagihan_pdf.pdf', 1),
(67, 'R19BSCDA', 20, 0, 'KTR/39/02-40/III/2019/DISMATAL', '2019-03-15', '2019-11-21 14:15:55', '', '1574320555_KRI_KERIS-Kontrak_Awal_pdf.pdf', 1),
(68, 'R19JYNXA', 24, 0, 'SPER/28.a/33000/IX/2019', '2019-09-10', '2019-11-21 14:27:38', '', '1574321258_KT__JAYANEGARA_401_-_AddendumKontrak_pdf.pdf', 1),
(69, 'R19JYNXA', 20, 0, 'SPER/28/33000/VIII/2019', '2019-08-20', '2019-11-21 15:07:28', '', '1574323648_KT__JAYANEGARA_401_-_Kontrak_Awal_pdf.pdf', 1),
(70, 'R19TDMXA', 24, 0, 'SPER/29.a/33000/XI/2019', '2019-11-04', '2019-11-28 10:20:22', '', '1574911222_Add_Kontrak_Tanto_Damai_2019_001_pdf.pdf', 1),
(71, 'R19NBRXA', 24, 0, 'SPER/23.a/33000/X/2019', '2019-10-05', '2019-11-28 10:27:45', '', '1574911665_niki_barokah_2019_001_pdf.pdf', 1),
(72, 'R19JYNXB', 6, 0, 'SPER/42/33000/XII/2019', '2019-12-23', '2019-12-30 15:40:34', '', '1577695234_KM_JAYANEGARA_401_KE_2_-_KONTRAK_AWAL_pdf.pdf', 1),
(73, 'R19JYNXB', 5, 0, 'BA/65/33000/XII/2019', '2019-12-23', '2019-12-30 15:52:47', '', '1577695967_KT_JAYANEGARA_401_KE_2_-_BA_NEGOSIASI_AWAL20191230_15484824_pdf.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE IF NOT EXISTS `jenis` (
`id_jenis` int(11) NOT NULL,
  `jenis` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`) VALUES
(1, 'INQUIRY'),
(2, 'FORMAT H - 1'),
(3, 'FORMAT H - 2'),
(4, 'SURAT PENAWARAN HARGA'),
(5, 'BA NEGOSIASI AWAL'),
(6, 'SUPER (KONTRAK AWAL)'),
(7, 'TERBIT NO. KONTROL'),
(8, 'STRUKTUR ORGANISASI PROYEK'),
(9, 'JADWAL PELAKSANAAN PEKERJAAN (REV 00)'),
(10, 'IPP AWAL'),
(11, 'IPP REVISI'),
(12, 'MOM (ARRIVAL MEETING)'),
(13, 'BA SERTER SIAP DOCKING'),
(14, 'BA KAPAL NAIK DOCK'),
(15, 'TAMBAH KURANG PEKERJAAN'),
(16, 'BA TURUN DOCK'),
(17, 'BA SEA TRIAL'),
(18, 'BA SERTER SELESAI D/R'),
(19, 'BA PENYELESAIAN  PEKERJAAN'),
(20, 'DOCKING REPORT'),
(21, 'SATISFACTION NOTE (S''NOTE)'),
(22, 'DRAFT BILL'),
(23, 'BA NEGOSIASI FINAL'),
(24, 'AMANDEMEN (KONTRAK FINAL)'),
(25, 'QUESIONER CUSTOMER'),
(26, 'CLEARANCE OUT'),
(27, 'PENGAJUAN UANG MUKA'),
(28, 'PERTANGGUNGJAWABAN UANG MUKA (PJK)'),
(29, 'LAPORAN KEMAJUAN'),
(30, 'H-5 RISALAH RAPAT'),
(31, 'DOCK SPACE'),
(32, 'DOCK TAGIHAN');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
`id_log` int(11) NOT NULL,
  `id_dokumen` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `id_dokumen`, `nip`, `nama`, `tanggal`, `ket`) VALUES
(15, 4, '018086022', 'Sandy Priyo Pambudi', '2019-09-20 07:57:30', 'Preview'),
(16, 4, '018086022', 'Sandy Priyo Pambudi', '2019-09-20 07:57:35', 'Download'),
(17, 2, '018086022', 'Sandy Priyo Pambudi', '2019-09-20 07:57:37', 'Download'),
(18, 2, '018086022', 'Sandy Priyo Pambudi', '2019-09-20 07:57:41', 'Preview'),
(19, 4, '018086020', 'Melinda Andriyanti', '2019-09-20 09:16:07', 'Preview'),
(20, 6, '018086022', 'Diana Ajeng Pratiwi', '2019-09-23 16:26:14', 'Preview'),
(21, 7, '018086022', 'Diana Ajeng Pratiwi', '2019-10-17 15:50:16', 'Preview'),
(22, 16, '103903083', 'Ribut Nugraha Nurullah', '2019-10-23 16:10:09', 'Preview'),
(23, 16, '103903083', 'Ribut Nugraha Nurullah', '2019-10-23 16:10:21', 'Download'),
(24, 8, '103903083', 'Ribut Nugraha Nurullah', '2019-10-23 16:18:37', 'Download'),
(25, 8, '103903083', 'Ribut Nugraha Nurullah', '2019-10-23 16:18:51', 'Preview'),
(26, 8, '103903083', 'Ribut Nugraha Nurullah', '2019-10-23 16:18:56', 'Download'),
(27, 8, '103903083', 'Ribut Nugraha Nurullah', '2019-10-23 16:19:27', 'Preview'),
(28, 8, '103903083', 'Ribut Nugraha Nurullah', '2019-10-23 16:19:30', 'Download'),
(29, 14, '103903083', 'Ribut Nugraha Nurullah', '2019-10-23 16:19:50', 'Preview'),
(30, 14, '103903083', 'Ribut Nugraha Nurullah', '2019-10-23 16:19:55', 'Preview'),
(31, 16, '103903083', 'Ribut Nugraha Nurullah', '2019-10-23 16:20:05', 'Preview'),
(32, 16, '103903083', 'Ribut Nugraha Nurullah', '2019-10-23 16:20:08', 'Download'),
(33, 16, '018086022', 'Diana Ajeng Pratiwi', '2019-10-24 08:44:17', 'Preview'),
(34, 16, '018086022', 'Diana Ajeng Pratiwi', '2019-10-24 08:44:28', 'Download'),
(35, 16, '018086022', 'Diana Ajeng Pratiwi', '2019-10-24 08:44:46', 'Preview'),
(36, 8, '018086022', 'Diana Ajeng Pratiwi', '2019-10-24 08:44:59', 'Preview'),
(37, 21, '018086022', 'Diana Ajeng Pratiwi', '2019-11-06 12:07:16', 'Preview');

-- --------------------------------------------------------

--
-- Table structure for table `penyimpanan`
--

CREATE TABLE IF NOT EXISTS `penyimpanan` (
`id_penyimpanan` int(11) NOT NULL,
  `penyimpanan` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyimpanan`
--

INSERT INTO `penyimpanan` (`id_penyimpanan`, `penyimpanan`) VALUES
(1, 'Rak Pak Ribut'),
(2, 'Rak 2'),
(3, 'Rak 3');

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE IF NOT EXISTS `proyek` (
  `id_proyek` varchar(50) NOT NULL,
  `nama_proyek` varchar(200) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `pemasar` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`id_proyek`, `nama_proyek`, `owner`, `pemasar`, `keterangan`, `tahun`) VALUES
('R19AMRXA', 'KM AMARISA', 'PT. BERLIAN LAUTAN SEJAHTERA', '103903083', '', '2019'),
('R19BJMXA', 'KRI BJM', 'TNI AL', '103872439', '', '2019'),
('R19BLOXA', 'KM BLOSSOM PESCADORES', 'PT BANDAR BAHARI PERMAI', '103903083', '', '2019'),
('R19BSCDA', 'KRI BIMA SUCI', 'TNI-AL Disharkap Koarmada II', '103872439', '', '2019'),
('R19DF7XA', 'KM DHARMA FERRY VII', 'PT. DHARMA LAUTAN UTAMA', '103872439', '', '2019'),
('R19DK3XA', 'KM DHARMA KENCANA III', 'PT DHARMA LAUTAN UTAMA', '103872439', '', '2019'),
('R19DK7XA', 'KM DHARMA KENCANA VII', 'PT DHARMA LAUTAN UTAMA', '018086020', '', '2019'),
('R19DT9XA', 'KM DHARMA KARTIKA IX', 'PT DHARMA LAUTAN UTAMA', '103872439', '', '2019'),
('R19FR1XA', 'KMP. MUTIARA FERINDO I', 'PT MUTIARA FERINDO INTERNUSA', '103872439', '', '2019'),
('R19FR2XA', 'KMP MUTIARA FERINDO II', 'PT MUTIARA FERINDO INTERNUSA', '103872439', '', '2019'),
('R19FR5XA', 'KMP MUTIARA FERINDO V', 'PT MUTIARA FERINDO INTERNUSA', '103872439', '', '2019'),
('R19JYNXA', 'KT JAYANEGARA 401', 'PT BERKAH INDUSTRI MESIN ANGKAT', '018086020', '', '2019'),
('R19JYNXB', 'KM JAYANEGARA 401 KE 2', 'PT MARMIN', '018086020', '', '2019'),
('R19KRSKA', 'KRI KERIS', 'TNI AL', '103872439', '', '2019'),
('R19LGDXA', 'KMP LEGUNDI', 'PT. ASDP INDONESIA FERRY (PERSERO) CABANG SURABAYA', '018086011', '', '2019'),
('R19LSMXA', 'KM LUMOSO SELAMAT', 'PT TANTO INTIM', '103903083', '', '2019'),
('R19MBRXA', 'MV MERATUS BORNEO', 'PT MERATUS LINE', '103903083', '', '2019'),
('R19MKAXA', 'KM MUSTIKA KENCANA', 'PT DHARMA LAUTAN UTAMA', '103872439', '', '2019'),
('R19MLEXA', 'KM MULTI EKSPRESS', 'PT MERATUS LINE', '018086020', '', '2019'),
('R19MPRXA', 'KM MENTARI PRATAMA', 'PT MENTARI SEJATI PERKASA', '018086020', '', '2019'),
('R19MRPXA', 'KM MENTARI PERSADA', 'PT MENTARI SARANA PERSADA', '018086020', '', '2019'),
('R19MTLXA', 'KM MUTIARA LAUT', 'PT EXOTIC YATCH CHARTER BALI', '018086020', '', '2019'),
('R19NBRXA', 'KM NIKI BAROKAH', 'PT. BERLIAN LAUTAN SEJAHTERA', '103903083', '', '2019'),
('R19SNAKA', 'KRI SNA', 'TNI AL', '103872439', '', '2019'),
('R19TDMXA', 'KM TANTO DAMAI', 'PT TANTO INTIM', '103903083', '', '2019'),
('R19THDXA', 'KM TANTO HANDAL', 'PT TANTO INTIM', '103903083', '', '2019'),
('R19TSPXA', 'KM TANTO SEPAKAT', 'PT TANTO INTIM', '103903083', '', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nip`, `nama`, `username`, `password`) VALUES
(1, '018086022', 'Diana Ajeng Pratiwi', 'ajeng', '4e354995734ea56b39b86be4ef339463'),
(2, '018086020', 'Tutut Inda Saputri', 'inda', '4e354995734ea56b39b86be4ef339463'),
(3, '018086011', 'Ariesta Ayu Dian Anggraeni', 'ariesta', '4e354995734ea56b39b86be4ef339463'),
(4, '103862253', 'Herman Peter', 'herman', '4e354995734ea56b39b86be4ef339463'),
(5, '103943739', 'Ainun Jariyah Suryantiningsih', 'ainun', '4e354995734ea56b39b86be4ef339463'),
(6, '103903083', 'Ribut Nugraha Nurullah', 'ribut', '4e354995734ea56b39b86be4ef339463'),
(7, '103872439', 'Gandung Dwi Purwoko', 'gandung', '4e354995734ea56b39b86be4ef339463'),
(8, '103943665', 'Abdul Honi', 'honi', '4e354995734ea56b39b86be4ef339463');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
 ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
 ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`id_log`), ADD KEY `id_file` (`id_dokumen`);

--
-- Indexes for table `penyimpanan`
--
ALTER TABLE `penyimpanan`
 ADD PRIMARY KEY (`id_penyimpanan`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
 ADD PRIMARY KEY (`id_proyek`), ADD UNIQUE KEY `nama_proyek` (`nama_proyek`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `penyimpanan`
--
ALTER TABLE `penyimpanan`
MODIFY `id_penyimpanan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
