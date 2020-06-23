-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2019 at 08:18 AM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unibraw`
--

-- --------------------------------------------------------

--
-- Table structure for table `tableprojek`
--

CREATE TABLE IF NOT EXISTS `tableprojek` (
  `ID` int(100) NOT NULL,
  `CLIENT` varchar(100) NOT NULL,
  `PROJEK` varchar(100) NOT NULL,
  `TANGIBLE` varchar(20) NOT NULL,
  `TANGIBLE1` text NOT NULL,
  `EMPHATY` varchar(20) NOT NULL,
  `EMPHATY1` text NOT NULL,
  `RESPONSIVENESS` varchar(20) NOT NULL,
  `RESPONSIVENESS1` text NOT NULL,
  `RELIABILITY` varchar(20) NOT NULL,
  `RELIABILITY1` text NOT NULL,
  `ASSURANCE` varchar(20) NOT NULL,
  `ASSURANCE1` text NOT NULL,
  `SARAN` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1030 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tableprojek`
--

INSERT INTO `tableprojek` (`ID`, `CLIENT`, `PROJEK`, `TANGIBLE`, `TANGIBLE1`, `EMPHATY`, `EMPHATY1`, `RESPONSIVENESS`, `RESPONSIVENESS1`, `RELIABILITY`, `RELIABILITY1`, `ASSURANCE`, `ASSURANCE1`, `SARAN`) VALUES
(1019, 'PKN STAN', 'Pengadaan Sewa Peralatan Ujian Tertulis PKN STAN TA 2019', '4', 'Alat yang disediakan sudah sesuai dengan kebutuhan', '3', 'Karyawan kurang inisiatif dalam menjag alat yang telah diberikan', '4', 'Respon cepat dan tepat dalam menangani trouble', '4', 'Dalam proses pemasangan sudah sangat baik semua dapat berjalan dengan semestinya', '5', 'Jaminan sudah sangat baik dan meyakinkan', 'Sudah cukup baik tingkatkan lagi kepedulian karyawan terhadap projek'),
(1020, 'IMIGRASI', 'Pemeliharaan Perangkat Keras (hardware) SIMKIM', '4', 'Perangkat sudah baik tapi masih sering bermasalah', '4', 'Inisiatif dari karyawan kurang memuaskan', '5', 'Respon dalam menanggapi keluhan sangat baik', '4', 'Proses pemeliharaan pernagkat sudah baik ', '4', 'Jaminan yang memuaskan karena perangkat yang bermasalah akan diganti dengan yang baru', 'Lebih ditingkatkan lagi inisiatif dari karyawan terhadap projek'),
(1021, 'KEMENTRIAN LUAR NEGERI', 'Pengadaan Jasa Sewa Layanan Internet Local Leased Line Dan Global IP VPN-I di Kementrian Luar Negeri', '4', 'Layanan yang disewakan tidak terjadi kendala yang berarti', '3', 'Inisiatif karyawan dalam projek ini masih kurang ', '5', 'Respon sangat baik dapat mengatasi semua masalah yang terjadi ', '4', 'Pengerjaan projek yang sesuai dengan timeline ', '4', 'Cukup baik dengan jaminan yang diberikan', 'Secara keseluruhan sudah puas terhadap kinerja karyawan telkomsigma'),
(1022, 'BPJS KESEHATAN', 'Pengadaan Jasa Pemeliharaan dan Renewal ATS Cloudera', '3', 'Jasa yang diberikan sudah cukup baik', '4', 'Karyawan memiliki kepedulian yang tinggi', '5', 'Respon terhadap masalah yang sedang terjadi sangat cepat dan tepat', '4', 'Selama proses pengerjaan sudah sesuai dengan timeline', '5', 'Jaminan yang diberikan sudah sangat baik ', 'Lebih ditingkatkan inisiatif karyawan'),
(1023, 'INASGOC', 'Pengadaan Sarana dan Prasarana IT Network Connectivity Service Asian Games 2018 untuk Kementerian Pe', '4', 'Puas, karena telkomsigma sudah banyak memberikan bantuan terkait event INASGOC', '4', 'Kebutuhan dari kami, telkomsigma sudah menyesuaikannya', '5', 'Setiap event inasgoc, ketika perangkat sedang mengalami maintenance Petugas Telkom Handal', '4', 'Semua sudah dipersiapkan ketika sebelum event berlangsung', '3', 'Saat kami melakukan project meeting, banyak perubahan ketika apa yang kami harapkan oleh telkomsigma', 'Semoga dapat bekerjasama lagi'),
(1024, 'PT. KAWAN LAMA', 'Pengadaan Telset IP Phone 2 (Dua) Unit untuk PT Sensor Indonesia (Kawan Lama Group) ', '5', 'Saya sangat puas terhadap kinerja Telset karena segala permintaan yang perusahaan kami butuhkan telah terpenuhi.', '4', 'Segala requirement yang diminta terselesaikan dengan baik.', '5', 'Timeline yang kami berikan mundur karena chat yang lama dibalas dan cukup merugikan', '3', 'Mundurnya timeline yang diakibatkan karena kurangnya respon dari karyawan.', '4', 'Overall saya puas dengan kinerja telkom sigma sendiri.', 'Mohon tingkatkan responsive saat berhubungan dengan client'),
(1025, 'PT. KERETA API INDONESIA', 'Pengadaan Sistem Video Wall untuk PT KCJ', '4', 'Migrasi data center tidak ada kendala', '4', 'Sudah tergambar jelas, dan pemenuhan kebutuhan kami sesuai dengan telkom buat', '5', 'sangat  puas, respon cepat dan tepat', '5', 'Dalam migrasi data ke bandung tidak ada kendala dalam jadwal', '3', 'Tetap terjaga silaturahmi', 'Hubungan erat dari PT KAI dengan telkom di next projek supaya terjaga'),
(1026, 'PT. BIOFARMA', 'Pengadaan Renewal SA Microsoft License Dynamics CRM PT. Biofarma', '5', 'Karena Telkomsigma sendiri sudah terpercaya dalam mengurus dynamics CRM', '3', 'Dalam pemenuhan kebutuhan License, semua sudah tersusun dengan rapih', '4', 'Keluhan sangat jarang, dan petugas telkom merespon dengan baik', '5', 'Ya sudah terjadwal dengan baik', '5', 'Terutama dalam Microsoft License, telkomsigma sudah memberikan kepercayaan kepada kami dengan baik', 'Semoga ketika pengadaan renewal kembali, kami masih menggunakan telkomsigma sebagai partner'),
(1027, 'BADAN KEPEGAWAIAN NEGARA', 'Pengadaan Sarana dan Prasarana Pelaksanaan Ujian Seleksi (CPNS 2018)', '4', 'Dalam pengadaan server dan laman website cpns sudah seusai yang diharapkan', '3', 'Flow dari telkom sudah tergambar jelas', '4', 'Karena langsung turun terjun ke lapangan di cililitan', '5', 'Walaupun pemenuhan kebutuhan pas, tapi timeline ngaret', '4', 'Cukup puas, di hari H orang telkom juga hadir untuk mengawasi', 'memperhatikan antara integrasi sistem hardware dan software yang digunakan agar dapat memberikan nil'),
(1029, 'PT. TELKOM INDONESIA', 'Pengadaan Perangkat Video Conference', '4', 'Produk yang dibuat sudah sesuai dengan apa yang diharapkan', '4', 'Inisiatif projek managernya yang sudah baik menunjukan kepedulian yang tinggi terhadap projek', '5', 'Respon sudah baik karena cepat dan tepat dalam menangani keluhan', '5', 'Dalam proses pengerjaan projek sudah sanggup mengerjakan sesuai timeline yang ditentukan', '5', 'Jaminan yang diberikan sudah cukup meyakinkan', 'Sudah baik tingkatkan lagi ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tableprojek`
--
ALTER TABLE `tableprojek`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tableprojek`
--
ALTER TABLE `tableprojek`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1030;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
