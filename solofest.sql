-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2019 at 09:46 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solofest`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_blog`
--

CREATE TABLE `db_blog` (
  `id_blog` int(50) NOT NULL,
  `id_kategori` varchar(50) DEFAULT NULL,
  `judul_blog` varchar(255) DEFAULT NULL,
  `gambar_blog` varchar(255) DEFAULT NULL,
  `isi_blog` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_blog`
--

INSERT INTO `db_blog` (`id_blog`, `id_kategori`, `judul_blog`, `gambar_blog`, `isi_blog`) VALUES
(5, 'event', 'anto jajang', 'assets/img/utama1.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Pada suatau hatiasfsjdl sfsdjfs jsfjsdlf jl jsfljdl sjfsdjfklsdjf fksjdfdjsfl sdfjsdj sjdfjsdflsdj djfdsfjsdlj sdjfsdlfjsdlfjsd sdlfjsdlfjdsfjsd sdfjsdlfjsdlfj fjdslfjalmf sla kjsdfsd;fj ksdlfsdkfjds; lssdmf ljslfjdlfjsdlf jfjashfkoqh sfksdfhkdsfh ksahfskjfhsdkf skjfhkfjhsdkaf hsdkfhakfh kfhsdjfh sjdfh jshdjkh jskdf hkjsadhfksd hsdkfh kjhf hsdkfh kdshfdsk hjhdfkdsaf hka nskdfsbda shfksdfhskh&nbsp; sdkfh khfskdfh khfkdshfakh ksdh ksjshfks sjfhskdfh ksdfhskdh ksdfhsdkhf sdkjfhdks hskdfhskdh ksdhfkjdh khsfksdh ksdfhsdkh jkdsfhksdfh kdjfhdj hkjdhfdksfhdskfh jfdshdfkafkjdh sdhkqh ksfksdhfkjsdhf kdfhsdkfhskdj dksfhkah kdshfksdfhdskj jdfhdjkfak hdjakhfkafh kjsdajfh ksdhfakshdfkds nsdfjah jksdfhskafh kdfhkaka hjkdhfakh kdhfakh ksdshajh jskdhakfhas hkfahfak hsdkhf ksdhakfhsdk hkjdhfak ka hkah kal hkafhskasfh kah akhdfkshqoh skfhdskhsf kahfksa hkahf k</p>\r\n</body>\r\n</html>'),
(6, 'ekonomi', 'jajang pintar', 'assets/img/solo.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>fsfjdslfj sdjflsdfjsdlf jsdlfjsl;fj sdfj ljsd;lfjsd;f jlsdfjsdlfjdsfjslf nsdfhsl sdfjkfhsdkl hksdhfsdjhf sdhfsd hskdfhsdkfh kdfhdskjfh kjsdfhdskfhsdkl hkfdshf ksdhflkdsaf hkdshfksdhfkj lhfsdlhfkla hlskh safhsdla hsldfhsdalfhal qloh jksa hdfdsk hskjfh khskfh jks hskd hakhkshfsdkfh kshsh fhskjfh oqlhfkjsdhfjahjfa ajhkfkahk kjafh alh jkfhkah klah akhfskd hksh ksh hskfhskahf ahfk hsakhfah khalkflha lafh alfhlah flafhskfhsdkjfh jhfksafhsdfhsdkja hskfh khsdfkshfsdkfh kjhfdsk hsdhf jkshdfksd hks&nbsp;</p>\r\n</body>\r\n</html>'),
(7, 'music', 'Anto kewer', 'assets/img/colorrun1.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Aklafj jf sdkjfsldfj kdsljfsdl jkfsdjlfj lsjsfsldajflsk;djf sdlfj lsfjlajlkfjs sjdflsajf ljflsd jlsfjsljfsdlfna;ljf lfdj lsjfdsjfq ahsjfa jsdljfsdlfjslka[qp kfsdjfsjflajfka jsdjflfj ljsdlfj ljflsdj lksdjf jfsdjaflk jsdljfkla jksdaj fsjfklaj fjalj jlan lqoa lsdjffsfham msialwi; sf jfdlklfj jfdksjfkla jkslj jsdla jjklfklsklfj klsdjkf ljj jklsfkslkalk jslfjalfjslf sllql ljfklsfjsdkl mms l jsdjflsfal jjslfkla jskldfjfsdjfhsdfjkjk sjfkldsfjdlk jlksdfjsdfj jsdlf lsd jdfdfdf.</p>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- Table structure for table `db_gambar`
--

CREATE TABLE `db_gambar` (
  `id_gambar` int(50) NOT NULL,
  `nama_gambar` varchar(50) DEFAULT NULL,
  `kategori_gambar` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `keterangan_gambar` varchar(255) DEFAULT NULL,
  `waktu_gambar` varchar(255) DEFAULT NULL,
  `tempat_gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_gambar`
--

INSERT INTO `db_gambar` (`id_gambar`, `nama_gambar`, `kategori_gambar`, `gambar`, `keterangan_gambar`, `waktu_gambar`, `tempat_gambar`) VALUES
(1, 'Color Run', 'event', 'images/colorrun.png', 'Event terbesar dari rangkaian acara Solofest, larilah sebebas-bebasnya, beri warna pada kota ini', 'Sabtu 5 April 2018 dari 08.00 a.m', 'Balai Kota Surakarta'),
(3, 'Marathon', 'event', 'images/marathon.jpg', 'Kelilingi kota solo dengan marathon bersama sepanjang 20 km. Start dari balaikota Surakrta dan Finish di Pasar Gede ', 'Minggu 12 April 2018 dari 08.00 a.m', 'Balai Kota Surakarta'),
(5, 'Lomba Design Maskot dan Logo Surakarta', 'event', 'images/maskot.png', 'Galilah kreativitas kalian dalam menggambarkan kta surakarta dalam bentuk logo dan maskot', 'Minggu 6 April 2018 dari 09.00 a.m', 'Dilo Solo'),
(6, 'Hasil Design 2017', 'event_lalu', 'images/design.png', 'Karya seniman fian asal Sragen', NULL, NULL),
(7, 'Color Run', 'event_lalu', 'images/colorrun.jpg', 'Color Run di Jln. Slamet Riyadi', NULL, NULL),
(8, 'Marathon', 'event_lalu', 'images/marathon1.jpg', 'Marathon dari Balaikota sampai Pasar Gede tahun 2017', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `db_kategori`
--

CREATE TABLE `db_kategori` (
  `id_kategori` varchar(50) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_kategori`
--

INSERT INTO `db_kategori` (`id_kategori`, `nama_kategori`) VALUES
('budaya', 'budaya'),
('ekonomi', 'ekonomi'),
('event', 'event'),
('lain-lain', 'lain-lain'),
('makanan', 'makanan'),
('music', 'music'),
('seni', 'seni'),
('sosial', 'sosial'),
('teknologi', 'teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `db_ticket`
--

CREATE TABLE `db_ticket` (
  `id_event` int(50) NOT NULL,
  `nama_event` varchar(50) NOT NULL,
  `sisa_tiket` int(255) NOT NULL,
  `tiket_tersedia` int(255) DEFAULT NULL,
  `jumlah_pendaftar` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_ticket`
--

INSERT INTO `db_ticket` (`id_event`, `nama_event`, `sisa_tiket`, `tiket_tersedia`, `jumlah_pendaftar`) VALUES
(1, 'Marathon', 250, NULL, 6),
(4, 'Color Run', 2000, NULL, 6),
(5, 'Lomba Design Maskot dan Logo ', 200, NULL, 5),
(7, 'test', 50, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jk_user` varchar(50) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id_user`, `nama_user`, `password`, `jk_user`, `alamat_user`, `status`) VALUES
('anto', 'anto', '123', 'laki-laki', 'anto@anto.com', 'user'),
('fian', 'fian', '123', 'perempuan', 'fian@fian.com', 'user'),
('jajang', 'jajang pintar', '123', 'laki-laki', 'jajang@jajang.com', 'user'),
('kewer', 'kewer', '1', 'laki-laki', 'kewer@kewer.com', 'user'),
('secondhalf', 'secondhalf', 'coba', 'laki-laki', 'secondhalf@gmail.com', 'admin'),
('tayo', 'tayo', '123', 'perempuan', 'aaaa@gmail.com', 'user'),
('wehehe', 'wehehe', '1', 'laki-laki', 'tayo@gmail.com', 'user'),
('wkwk', 'wkwk', '1', 'perempuan', 'a@gmail.com', 'user'),
('yorn', 'yorn', '123', 'laki-laki', 'yorn@yorn', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `db_user_has_ticket`
--

CREATE TABLE `db_user_has_ticket` (
  `id_user` varchar(50) NOT NULL,
  `id_event` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user_has_ticket`
--

INSERT INTO `db_user_has_ticket` (`id_user`, `id_event`) VALUES
('jajang', 1),
('jajang', 5),
('anto', 1),
('anto', 4),
('anto', 5),
('fian', 4),
('wkwk', 1),
('wkwk', 5),
('wehehe', 1),
('wehehe', 4),
('kewer', 1),
('kewer', 4),
('kewer', 5),
('tayo', 4),
('yorn', 1),
('yorn', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_blog`
--
ALTER TABLE `db_blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `db_gambar`
--
ALTER TABLE `db_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `db_kategori`
--
ALTER TABLE `db_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `db_ticket`
--
ALTER TABLE `db_ticket`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id_user`);
ALTER TABLE `db_user` ADD FULLTEXT KEY `nama_user` (`nama_user`);

--
-- Indexes for table `db_user_has_ticket`
--
ALTER TABLE `db_user_has_ticket`
  ADD KEY `ticket_id_event` (`id_event`),
  ADD KEY `user_id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_blog`
--
ALTER TABLE `db_blog`
  MODIFY `id_blog` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `db_gambar`
--
ALTER TABLE `db_gambar`
  MODIFY `id_gambar` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `db_ticket`
--
ALTER TABLE `db_ticket`
  MODIFY `id_event` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `db_user_has_ticket`
--
ALTER TABLE `db_user_has_ticket`
  MODIFY `id_event` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_blog`
--
ALTER TABLE `db_blog`
  ADD CONSTRAINT `db_blog_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `db_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `db_user_has_ticket`
--
ALTER TABLE `db_user_has_ticket`
  ADD CONSTRAINT `db_user_has_ticket_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `db_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `db_user_has_ticket_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `db_ticket` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
