-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 03:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinerja_dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'adminasli');

-- --------------------------------------------------------

--
-- Table structure for table `aduan`
--

CREATE TABLE `aduan` (
  `id_aduan` int(5) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aduan`
--

INSERT INTO `aduan` (`id_aduan`, `nama`, `email`, `pesan`) VALUES
(1, 'muchamad umar abdul azis', 'muchamadumarabdulazis@gmail.com', '                                                    aplikasinya bagus');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `view` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `keterangan`, `view`, `gambar`, `created_date`, `update_date`) VALUES
(1, 'Pertunjukan Musik', '', 0, 'event6.jpg', '2021-01-14 23:38:05', '2021-01-14 23:38:05'),
(2, 'Pameran Otomotif', '', 0, 'event1.jpg', '2021-01-14 23:38:05', '2021-01-14 23:38:05'),
(3, 'Bazar Kamera Analog', '', 0, 'event2.jpg', '2021-01-14 23:38:05', '2021-01-14 23:38:05'),
(4, 'Festival Kuliner', '', 4, 'event3.jpg', '2021-01-14 23:38:05', '2021-01-14 23:38:05'),
(5, 'Pasar Local Brand', '', 10, 'event4.jpg', '2021-01-14 23:38:05', '2021-01-14 23:38:05'),
(6, 'Festival Anak', '', 1, 'event5.jpg', '2021-01-14 23:38:05', '2021-01-14 23:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(5) NOT NULL,
  `nidn` varchar(128) NOT NULL,
  `informasi` varchar(300) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `nidn`, `informasi`, `tanggal`) VALUES
(10, '0987654321', 'diberitahukan kepada seluruh Mahasiswa', '2021-01-04 07:02:54'),
(12, '1234567890', 'selamat hari senin semua', '2021-01-04 07:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_about`
--

CREATE TABLE `informasi_about` (
  `id_inbout` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi_about`
--

INSERT INTO `informasi_about` (`id_inbout`, `judul`, `keterangan`, `gambar`, `created_date`, `updated_date`) VALUES
(1, 'Kinerja Dosen Kemahasiswaan Universitas Nasional PASIM', 'Kinerja Dosen Unas Pasim di bangun oleh Kemahasiswaan yang bertujuan untuk mempermudah penilaian kriteria dosen menurut mahasiswa. Dengan adanya Sistem Informasi Kinerja Dosen ini penilaian kriterai penilaian dosen dapat dilakukan dengan cara digital', 'unp1.png', '2021-01-15 13:29:24', '2021-01-15 13:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_home`
--

CREATE TABLE `informasi_home` (
  `id_inhome` int(11) NOT NULL,
  `judul_1` varchar(128) NOT NULL,
  `keterangan_1` varchar(128) NOT NULL,
  `judul_2` varchar(128) NOT NULL,
  `keterangan_2` varchar(128) NOT NULL,
  `judul_3` varchar(128) NOT NULL,
  `keterangan_3` varchar(128) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi_home`
--

INSERT INTO `informasi_home` (`id_inhome`, `judul_1`, `keterangan_1`, `judul_2`, `keterangan_2`, `judul_3`, `keterangan_3`, `created_date`, `updated_date`) VALUES
(1, 'Penilaian', 'Dengan adanya kinerja dosen, penilaian terhadap dosen akan lebih Fleksibel', 'Berbagi Informasi', 'Dapat berbagi informasi dengan mudah dan langsung terhubung ke whatsapp tiap dosen', 'Dikelola Kemahasiswaan', 'Langsung dikelola oleh pihak kemahasiswaan Universitas Nasional PASIM', '2021-01-15 07:47:32', '2021-01-15 07:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `kemahasiswaan`
--

CREATE TABLE `kemahasiswaan` (
  `id_kemahasiwaan` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `no_wa` int(12) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kemahasiswaan`
--

INSERT INTO `kemahasiswaan` (`id_kemahasiwaan`, `nama`, `foto`, `no_wa`, `created_date`, `updated_date`) VALUES
(1, 'Rakhmat Sudrajat, S.Si,. MM', 'member-01.jpg', 0, '2021-01-15 09:18:14', '2021-01-15 09:18:22'),
(2, 'Endri Hendrayana, S.E,. MM', 'member-02.jpg', 0, '2021-01-15 09:18:31', '2021-01-15 09:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_informasi` int(5) NOT NULL,
  `komentar` varchar(300) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_informasi`, `komentar`, `tanggal`, `id_user`) VALUES
(3, 10, 'diberitahukan apa pak?', '2021-01-04 07:54:30', 25);

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_mk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `mata_kuliah` varchar(128) NOT NULL,
  `semester` varchar(128) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_mk`, `id_user`, `id_jurusan`, `mata_kuliah`, `semester`, `id_tahun_ajaran`) VALUES
(1, 26, 2, 'Sistem Informasi Manajemen Lanjutan', '6', 1),
(2, 27, 2, 'Akuntansi Lanjutan', '6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_dua`
--

CREATE TABLE `penilaian_dua` (
  `id_penilaian` int(11) NOT NULL,
  `kuesioner1` varchar(5) NOT NULL,
  `kuesioner2` varchar(5) NOT NULL,
  `kuesioner3` varchar(5) NOT NULL,
  `kuesioner4` varchar(5) NOT NULL,
  `kuesioner5` varchar(5) NOT NULL,
  `kuesioner6` varchar(5) NOT NULL,
  `kuesioner7` varchar(5) NOT NULL,
  `kuesioner8` varchar(5) NOT NULL,
  `kuesioner9` varchar(5) NOT NULL,
  `kuesioner10` varchar(5) NOT NULL,
  `kuesioner11` varchar(5) NOT NULL,
  `kuesioner12` varchar(5) NOT NULL,
  `kuesioner13` varchar(5) NOT NULL,
  `kuesioner14` varchar(5) NOT NULL,
  `kuesioner15` varchar(5) NOT NULL,
  `kuesioner16` varchar(5) NOT NULL,
  `kuesioner17` varchar(5) NOT NULL,
  `kuesioner18` varchar(5) NOT NULL,
  `kuesioner19` varchar(5) NOT NULL,
  `kuesioner20` varchar(5) NOT NULL,
  `kuesioner21` varchar(5) NOT NULL,
  `kuesioner22` varchar(5) NOT NULL,
  `kuesioner23` varchar(5) NOT NULL,
  `kuesioner24` varchar(5) NOT NULL,
  `kuesioner25` varchar(5) NOT NULL,
  `nim` char(12) NOT NULL,
  `id_riwayat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_satu`
--

CREATE TABLE `penilaian_satu` (
  `id_penilaian` int(11) NOT NULL,
  `kuesioner1` varchar(5) NOT NULL,
  `kuesioner2` varchar(5) NOT NULL,
  `kuesioner3` varchar(5) NOT NULL,
  `kuesioner4` varchar(5) NOT NULL,
  `kuesioner5` varchar(5) NOT NULL,
  `kuesioner6` varchar(5) NOT NULL,
  `kuesioner7` varchar(5) NOT NULL,
  `nim` char(12) NOT NULL,
  `id_riwayat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian_satu`
--

INSERT INTO `penilaian_satu` (`id_penilaian`, `kuesioner1`, `kuesioner2`, `kuesioner3`, `kuesioner4`, `kuesioner5`, `kuesioner6`, `kuesioner7`, `nim`, `id_riwayat`) VALUES
(2, '5', '5', '5', '5', '5', '5', '5', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_tiga`
--

CREATE TABLE `penilaian_tiga` (
  `id_penilaian` int(11) NOT NULL,
  `kuesioner1` varchar(5) NOT NULL,
  `kuesioner2` varchar(5) NOT NULL,
  `saran` varchar(128) NOT NULL,
  `id_riwayat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rektorat`
--

CREATE TABLE `rektorat` (
  `id_rektorat` int(5) NOT NULL,
  `nama_rektorat` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `dosen` varchar(100) NOT NULL,
  `kuotes` varchar(300) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rektorat`
--

INSERT INTO `rektorat` (`id_rektorat`, `nama_rektorat`, `jabatan`, `dosen`, `kuotes`, `foto`) VALUES
(4, 'Muchamad Umar Abdul Azis, S.Kom, M.Kom, M.T', 'REKTOR - Universitas Nasional Pasim', 'Teknik Informatika', 'No status needed to find the identity', 'authi.jpg'),
(6, 'Hendrawan Wibisono, S.Psi', 'Wakil Rektor 1 - Universitas Nasional Pasim', 'Psikologi', 'kuy', 'comavatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `tahun_semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajaran`, `tahun_semester`) VALUES
(1, '2019/2020', 'Genap');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat`
--

CREATE TABLE `tb_riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_mk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `mata_kuliah` varchar(128) NOT NULL,
  `semester` varchar(128) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nidn` char(12) NOT NULL,
  `nim` char(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `kuotes` varchar(300) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `hak_akses` varchar(50) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nidn`, `nim`, `nama`, `email`, `password`, `id_fakultas`, `id_jurusan`, `semester`, `kuotes`, `foto`, `hak_akses`, `aktif`) VALUES
(25, '', '0203171091', 'muhamad umar abdul aziz', 'muchamadumarabdulazis@gmail.com', 'Aziscakep123', 1, 2, 6, '', 'LRM_EXPORT_126357393185686_20190807_2127356031.jpeg', 'mahasiswa', 1),
(26, '1234567890', '', 'diki riyandi M.Kom, Mc', 'dickyriyandi@gmail.com', 'dikiasli', 0, 0, 0, 'Hiduplah seperti ulat, meskipun hidupnya dikucilkan dan dijauhi tetapi akhirnya bisa berubah menjadi indah', 'authi.jpg', 'dosen', 1),
(27, '0987654321', '', 'Muhammad Abdul Nasir, S.E, S,Ak', '', 'abdulaja', 0, 0, 0, '', '', 'dosen', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_fakultas`
--

CREATE TABLE `user_fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_fakultas`
--

INSERT INTO `user_fakultas` (`id_fakultas`, `nama`, `url`) VALUES
(1, 'Fakulltas Ilmu Komputer', 'Penilaian/pilihFakultas'),
(2, 'Fakultas Ekonomi', 'Penilaian/pilihFakultas'),
(3, 'Fakultas Teknik', 'Penilaian/pilihFakultas'),
(4, 'Fakultas Sastra', 'Penilaian/pilihFakultas'),
(5, 'Fakultas Psikologi', 'Penilaian/pilihFakultas');

-- --------------------------------------------------------

--
-- Table structure for table `user_jurusan`
--

CREATE TABLE `user_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_jurusan`
--

INSERT INTO `user_jurusan` (`id_jurusan`, `id_fakultas`, `jurusan`, `url`) VALUES
(1, 1, 'Manajemen Informatika', 'Penilaian/semester'),
(2, 1, 'Teknik Informatika', 'Penilaian/semester'),
(3, 2, 'Manajemen', 'Penilaian/semester'),
(4, 2, 'Akuntansi', 'Penilaian/semester'),
(5, 2, 'Manajemen Perpajakan', 'Penilaian/semester'),
(6, 5, 'Psikologi', 'Penilaian/semester'),
(7, 4, 'Sastra Inggris', 'Penilaian/semester'),
(8, 4, 'Sastra Jepang', 'Penilaian/semester'),
(9, 3, 'Teknik Industri', 'Penilaian/semester');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`id_aduan`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `informasi_about`
--
ALTER TABLE `informasi_about`
  ADD PRIMARY KEY (`id_inbout`);

--
-- Indexes for table `informasi_home`
--
ALTER TABLE `informasi_home`
  ADD PRIMARY KEY (`id_inhome`);

--
-- Indexes for table `kemahasiswaan`
--
ALTER TABLE `kemahasiswaan`
  ADD PRIMARY KEY (`id_kemahasiwaan`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_informasi` (`id_informasi`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_mk`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `penilaian_dua`
--
ALTER TABLE `penilaian_dua`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_riwayat` (`id_riwayat`);

--
-- Indexes for table `penilaian_satu`
--
ALTER TABLE `penilaian_satu`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_riwayat` (`id_riwayat`),
  ADD KEY `id_riwayat_2` (`id_riwayat`);

--
-- Indexes for table `penilaian_tiga`
--
ALTER TABLE `penilaian_tiga`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_riwayat` (`id_riwayat`);

--
-- Indexes for table `rektorat`
--
ALTER TABLE `rektorat`
  ADD PRIMARY KEY (`id_rektorat`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indexes for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_fakultas`
--
ALTER TABLE `user_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `user_jurusan`
--
ALTER TABLE `user_jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD KEY `id_fakultas` (`id_fakultas`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aduan`
--
ALTER TABLE `aduan`
  MODIFY `id_aduan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `informasi_about`
--
ALTER TABLE `informasi_about`
  MODIFY `id_inbout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informasi_home`
--
ALTER TABLE `informasi_home`
  MODIFY `id_inhome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kemahasiswaan`
--
ALTER TABLE `kemahasiswaan`
  MODIFY `id_kemahasiwaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penilaian_dua`
--
ALTER TABLE `penilaian_dua`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaian_satu`
--
ALTER TABLE `penilaian_satu`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penilaian_tiga`
--
ALTER TABLE `penilaian_tiga`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rektorat`
--
ALTER TABLE `rektorat`
  MODIFY `id_rektorat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_fakultas`
--
ALTER TABLE `user_fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_jurusan`
--
ALTER TABLE `user_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `mata_kuliah_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `mata_kuliah_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `user_jurusan` (`id_jurusan`),
  ADD CONSTRAINT `mata_kuliah_ibfk_3` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`);

--
-- Constraints for table `penilaian_dua`
--
ALTER TABLE `penilaian_dua`
  ADD CONSTRAINT `penilaian_dua_ibfk_2` FOREIGN KEY (`id_riwayat`) REFERENCES `tb_riwayat` (`id_riwayat`);

--
-- Constraints for table `penilaian_tiga`
--
ALTER TABLE `penilaian_tiga`
  ADD CONSTRAINT `penilaian_tiga_ibfk_2` FOREIGN KEY (`id_riwayat`) REFERENCES `tb_riwayat` (`id_riwayat`);

--
-- Constraints for table `user_jurusan`
--
ALTER TABLE `user_jurusan`
  ADD CONSTRAINT `user_jurusan_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `user_fakultas` (`id_fakultas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
