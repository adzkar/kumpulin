-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 01:41 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--
CREATE DATABASE IF NOT EXISTS `crud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crud`;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `post` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;--
-- Database: `dbkumpulin`
--
CREATE DATABASE IF NOT EXISTS `dbkumpulin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbkumpulin`;

-- --------------------------------------------------------

--
-- Table structure for table `dbadmin`
--

CREATE TABLE `dbadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbadmin`
--

INSERT INTO `dbadmin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `dbevent`
--

CREATE TABLE `dbevent` (
  `id_event` int(11) NOT NULL,
  `judul_event` varchar(100) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL,
  `dana` int(100) NOT NULL,
  `target` int(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `link` text NOT NULL,
  `slogan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbevent`
--

INSERT INTO `dbevent` (`id_event`, `judul_event`, `penyelenggara`, `dana`, `target`, `deskripsi`, `gambar`, `link`, `slogan`) VALUES
(12, 'Eksonus 2018', 'BEM Kema', 1600000, 2, '<h2>About</h2>\r\n<p>Pada tanggal 3 Desember AWSMFSTVL telah berhasil di selenggarakan di Secapa AD dengan di ikuti lebih dari 3000 penonton, AWSMFSTVL memanjakan para penonton dengan nuansa La Plancha di dalam venue dan juga panitia menyediakan food truck yang dapat dinikmati penonton.</p>\r\n<p><img src=\"../../asset/img/1.png\" alt=\"Gambar Post\" width=\"443\" height=\"250\" /></p>', 'legong-bali-5.png', 'https://www.youtube.com/embed/KrhktA57n0g', 'A Thematical Festival');

-- --------------------------------------------------------

--
-- Table structure for table `dbpembelian`
--

CREATE TABLE `dbpembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_souvenir` int(11) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `jumlah_souvenir` int(11) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `harga_murni` int(11) NOT NULL,
  `administrasi` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kodepos` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  `bank` varchar(100) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbpembelian`
--

INSERT INTO `dbpembelian` (`id_pembelian`, `id_user`, `id_souvenir`, `id_tiket`, `id_event`, `jumlah_souvenir`, `jumlah_tiket`, `status`, `harga_murni`, `administrasi`, `nama`, `email`, `notelp`, `alamat`, `kota`, `kodepos`, `komentar`, `bank`, `bukti_pembayaran`) VALUES
(1, 4, 1, 1, 12, 3, 2, 1, 480000, 24000, 'Sutejo', 'fulan@test.com', 'Jl. Asrama Putra, GD 13, Dayeuhkolot, Bandung', 'Jl. Asrama Putra, GD 13, Dayeuhkolot, Bandung', 'Bandung', '54321', '54321', 'mandiri', 'buktiPembayaran.PNG'),
(2, 4, 1, 2, 12, 2, 1, 1, 170000, 8500, 'Fulan bin Fulan', 'fulan@test.com', 'Jl. Asrama Putra, GD 13, Dayeuhkolot, Bandung', 'Jl. Asrama Putra, GD 13, Dayeuhkolot, Bandung', 'Bandung', '12345', '12345', 'mandiri', 'buktiPembayaran.PNG'),
(3, 4, 1, 2, 12, 2, 3, 0, 270000, 13500, 'Fulan bin Fulan', 'fulan@test.com', 'Jl. Asrama Putra, GD 13, Dayeuhkolot, Bandung', 'Jl. Asrama Putra, GD 13, Dayeuhkolot, Bandung', 'Bandung', '54321', '54321', 'mandiri', 'buktiPembayaran.PNG'),
(4, 4, 1, 2, 12, 2, 1, 1, 170000, 8500, 'paijo', 'fulan@test.com', 'Jl. Asrama Putra, GD 13, Dayeuhkolot, Bandung', 'Jl. Asrama Putra, GD 13, Dayeuhkolot, Bandung', 'Bandung', '12345', '12345', 'mandiri', 'buktiPembayaran.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `dbsouvenir`
--

CREATE TABLE `dbsouvenir` (
  `id_souvenir` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_souvenir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsouvenir`
--

INSERT INTO `dbsouvenir` (`id_souvenir`, `id_event`, `foto`, `harga`, `deskripsi`, `nama_souvenir`) VALUES
(1, 12, 'kaos.jpg', 60000, '<p>Baju Polos Keren</p>', 'Baju Keren');

-- --------------------------------------------------------

--
-- Table structure for table `dbtiket`
--

CREATE TABLE `dbtiket` (
  `id_tiket` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `nama_tiket` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbtiket`
--

INSERT INTO `dbtiket` (`id_tiket`, `id_event`, `nama_tiket`, `harga`) VALUES
(1, 12, 'Tiket VVIP', 150000),
(2, 12, 'Tiket Spesial', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `dbuser`
--

CREATE TABLE `dbuser` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbuser`
--

INSERT INTO `dbuser` (`id_user`, `email`, `password`, `nama`) VALUES
(2, 'adzkarfauzie02@gmail.com', '24063c9a2fa52080ed409825bd9e8a63', 'Adzkar Fauzie '),
(3, 'a@a.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Paijo'),
(4, 'fulan@test.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Fulan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbadmin`
--
ALTER TABLE `dbadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbevent`
--
ALTER TABLE `dbevent`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `dbpembelian`
--
ALTER TABLE `dbpembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `dbsouvenir`
--
ALTER TABLE `dbsouvenir`
  ADD PRIMARY KEY (`id_souvenir`);

--
-- Indexes for table `dbtiket`
--
ALTER TABLE `dbtiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `dbuser`
--
ALTER TABLE `dbuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbadmin`
--
ALTER TABLE `dbadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dbevent`
--
ALTER TABLE `dbevent`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dbsouvenir`
--
ALTER TABLE `dbsouvenir`
  MODIFY `id_souvenir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dbtiket`
--
ALTER TABLE `dbtiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dbuser`
--
ALTER TABLE `dbuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;--
-- Database: `dbproclub`
--
CREATE DATABASE IF NOT EXISTS `dbproclub` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbproclub`;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstName`, `lastName`, `email`, `createdAt`, `updatedAt`) VALUES
(1, 'Proclub', 'Juara', 'ContohDoang@embuh.com', '2017-11-25 13:39:20', '2017-11-25 13:39:20'),
(2, 'Proclub', 'Juara', 'ContohDoang@embuh.com', '2017-11-25 13:40:44', '2017-11-25 13:40:44'),
(3, NULL, NULL, NULL, '2017-11-25 13:51:11', '2017-11-25 13:51:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;--
-- Database: `myblog`
--
CREATE DATABASE IF NOT EXISTS `myblog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `myblog`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Gaje');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` text NOT NULL,
  `komentar` text NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama`, `komentar`, `id_post`) VALUES
(1, 'paijo', 'pertamaks !!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id_post` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `isi` text NOT NULL,
  `id_penulis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id_post`, `judul`, `gambar`, `isi`, `id_penulis`) VALUES
(1, 'Embuh', 'alone_in_the_universe-wallpaper-1366x768.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.', 1),
(2, 'Gempa Bla Bla', 'kokora.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.', 1),
(3, 'GTW', 'sad-wallpaper-for-boys.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'db_myblog', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"admin\",\"komentar\",\"posting\"],\"table_structure[]\":[\"admin\",\"komentar\",\"posting\"],\"table_data[]\":[\"admin\",\"komentar\",\"posting\"],\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"json_structure_or_data\":\"data\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"excel_columns\":null,\"htmlword_columns\":null,\"json_pretty_print\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_use_transaction\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"dbkumpulin\",\"table\":\"dbevent\"},{\"db\":\"dbkumpulin\",\"table\":\"dbpembelian\"},{\"db\":\"dbkumpulin\",\"table\":\"dbdetail\"},{\"db\":\"dbkumpulin\",\"table\":\"dbtiket\"},{\"db\":\"dbkumpulin\",\"table\":\"dbsouvenir\"},{\"db\":\"dbkumpulin\",\"table\":\"dbuser\"},{\"db\":\"dbkumpulin\",\"table\":\"dbSouvenir\"},{\"db\":\"dbkumpulin\",\"table\":\"dbEvent\"},{\"db\":\"dbkumpulin\",\"table\":\"dbAdmin\"},{\"db\":\"dbproclub\",\"table\":\"contacts\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2017-06-09 22:58:13', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
