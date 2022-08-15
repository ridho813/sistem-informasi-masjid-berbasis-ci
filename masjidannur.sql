-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 26 Jul 2022 pada 03.29
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjidannur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `seo_title` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_post` date NOT NULL,
  `updateby` varchar(50) NOT NULL,
  `terbit` int(11) NOT NULL,
  `foto_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `seo_title`, `deskripsi`, `id_kategori`, `tgl_post`, `updateby`, `terbit`, `foto_berita`) VALUES
(16, 'Rental Mobil jogja', 'Rental-Mobil-Jogja', 'Jasa rental mobil di Yogyakarta yang terbaik dan terpercaya. Avilo Tour & Travel Yogyakarta menyediakan berbagai jenis mobil untuk di sewa harian, mingguan maupun bulanan dengan durasi 4,6,12 jam serta fullday. Sewa mobil kami meliputi sewa mobil Avanza, Innova, Isuzu ELF Short & Long, Hiace, Fortuner, Alphard serta bus Pariwisata. Kami siap untuk melayani anda dalam berbagai tipe perjalanan di dalam maupun luar kota Yogyakarta.\r\n\r\nJasa sewa mobil Jogja kami tentunya sudah berpengalaman dan terkenal memberikan pelayanan yang terbaik & profesional kepada pelanggan kami. Kami memberikan jaminan bahwa harga sewa mobil Jogja kami adalah yang termurah tetapi tetap mengutamakan kualitas dan profesionalisme pelayanan. Layanan kami menjangkau beberapa daerah di Yogyakarta seperti rental mobil di Bantul, Sleman, Gunungkidul/Wonosari, Kulon Progo, Piyungan, Godean, Gamping, Wates dan lain sebagainya.\r\n\r\nBaca Juga: Rental Mobil Jakarta\r\n\r\nSebagai perusahaan rental mobil terbesar di Yogyakarta, kami akan selalu menjaga agar client rental kami tetap puas dan selalu memperbaiki setiap kesalahan dalam pelayanan kami. Maka dari itu sekarang kami benar-benar tahu bagaimana cara melayani para pelanggan/customer kami dengan baik. Perusahaan rental mobil Jogja kami sudah berdiri sejak tahun 2015 – sekarang ini.\r\n\r\nBanyak pengalaman yang sudah kami dapatkan dari melayani pelanggan-pelanggan kami, baik itu wisatawan ataupun yang melakukan perjalanan pribadi maupun perjalanan bisnis di kota Yogyakarta. Kami juga sering melayani pelanggan dari luar negeri baik itu wisatawan asing maupun pebisnis. Kami juga sudah bekerjasama dengan berbagai Instansi Pemerintahan, BUMN, Yayasan, Perusahaan dan Lainnya dalam bidang transportasi.\r\n\r\nKami ingin selalu memberikan pelayanan yang berkualitas kepada setiap pelanggan kami. Jadi anda tak perlu ragu tentang bagaimana kami akan melayani anda dalam urusan transportasi anda di Yogyakarta.', 2, '2022-01-30', '6', 1, 'bca.jpg'),
(21, 'Dunia Hacker', 'yogyakara', 'adsdadaasaf', 4, '2022-07-18', '6', 1, '19a7a09697d626d7d4c664a1436f896b.jpg'),
(23, 'Cara Join Table di CodeIgniter dengan Mudah', 'Data-SEO', '      1. Peserta itikaf reguler sebanyak 50 orang\r\n2. Peserta itikaf temporer/susulan sekitar 15 hingga 20 orang\r\n\r\nKeseruan itikaf Masjid Al-Ihsan Telkom, begitu banyak. Masjid menyediakan berbagai sarana dan fasilitas secara GRATIS, peserta hanya berinfaq Rp. 100.000,- sekali saja pada saat pendaftaran. Diantaranya: Menu berbuka & sahur (prasmanan/VIP), kurma, teh hangat, snack malam. Kemudian juga tersedia banyak kegiatan: Kajian subuh, kajian siang, Qiyamullail, Tarawih, Tilawah Al-Quran, dll. Kemudian fasilitas akses&tempat: Rungan ber-AC/Kipas, parkir yang luas, kamar mandi, perpustakaan, dan dekat dari tempat per-belanjaan, dan onlineshop.\r\n\r\nIitkaf dimasjid al-ihsan banyak perbedaan dengan itikaf di tempat lain, karena masjid al-ihsan masjid perkantoran (perusahaan) sehingga banyak bertemu dengan orang baru, bisa saling mengenal. Dan bisa merasakan suasana masjid di wilayah para karyawan BUMN  ', 9, '2022-07-21', '6', 0, 'kentang-goreng.jpg'),
(24, 'Tarawih Ramadhan 1443 H. Bersama Masjid Al-Ihsan Telkom', 'Tarawih Ramadhan 1443 H. Bersama Masjid Al-Ihsan T', 'Alhamdulillah sejak awal april 2022 tepatnya tanggal 3. Masjid Al-Ihsan Telkom telah ramai dikunjungi para jamaah dari luar plasa telkom jakbar. Para jamaah berduyun-duyun turut melaksanakan ibadah di Masjid Al-Ihsan Telkom\r\n\r\nPada bulan ramadhan 1443 H/ 2022 M. Masjid Al-Ihsan diramaikan oleh jamaah dari kalangan karyawan PT. Telkom Indonesia WITEL Jak-bar dan warga sekitar. Pelaksanaan shalat tarawih berjalan sangat lancar. Adapun jumlah rakaatnya: 8 raka’at shalat sunnah tarawih (2+2+2+2) diakhiri dengan shalat sunnah witir (3 rakaat) sehingga berjumlah = 11 raka’at.', 9, '2022-07-21', '', 0, 'Candi-Prambanan.jpg'),
(28, 'Dunia Hacker', 'Dunia Hacker', 'seo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titleseo_titlev', 2, '2022-07-25', '', 0, '1642390020.jpg'),
(29, 'Cara Join Table di CodeIgniter dengan Mudah', 'cara-join-table-di-codeigniter-dengan-mudah', 'Cara Membuat Slug dengan Javascript - Slug merupakan rangkaian teks yang terletak dibagian url setelah nama domain, penggunaan slug sangat bermanfaat untuk mesin pencari agar mudah dikenali kontennya, ini berguna juga untuk meningkatkan SEO. Kalian bisa melihat contoh penggunaan slug seperti pada website dumetschool https://www.dumetschool.com/blog/cara-simpel-membuat-multi-level-bootstrap-4. Dikesempatan kali ini saya akan bagikan tutorial sederhana bagaimana Cara Membuat Slug dengan Javascript, ini akan sangat berguna buat kalian yang ingin membuat slug url, seperti apa cara membuatnya. Simak langkah - langkah membuat slug berikut ini.\r\n\r\nBuatlah elemen inputan untuk teks yang akan di generate menjadi slug, kalian bisa ketikan seperti sintak berikut ini.', 8, '2022-07-25', '', 0, 'juce.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Trending'),
(8, 'Wisata'),
(9, 'Jamaah'),
(10, 'Infaq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `seo_title` varchar(80) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `tempat_lhr` varchar(70) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `aktifitas` text NOT NULL,
  `fb` text NOT NULL,
  `ig` text NOT NULL,
  `motto` text NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `pendidikan` varchar(40) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama`, `seo_title`, `alamat`, `tempat_lhr`, `tgl_lhr`, `aktifitas`, `fb`, `ig`, `motto`, `jabatan`, `pendidikan`, `foto`) VALUES
(3, 'MUH RIDHO WACHID SOLIKIN', '', 'PULOSARI,JAMBON,PONOROGO', 'Ponorogo', '2022-07-23', 'Mahasiswa, Freelance, Rebahan', 'https://web.facebook.com/profile.php?id=100079296632432', 'https://web.facebook.com/profile.php?id=100079296632432', 'Agama tanpa ilmu pengetahuan adalah buta. Dan ilmu pengetahuan tanpa agama adalah lumpuh', 'Divisi IT', 'SDN 1 Menang Ponorogo, SMPN 1 Kauaman Po', '20201008_014359.jpg'),
(4, 'MUH RIDHO WACHID SOLIKIN', '', 'PULOSARI,JAMBON,PONOROGO', 'Ponorogo', '2022-07-23', 'Mahasiswa, Freelance, Rebahan', 'https://web.facebook.com/profile.php?id=100079296632432', 'https://web.facebook.com/profile.php?id=100079296632432', 'Agama tanpa ilmu pengetahuan adalah buta. Dan ilmu pengetahuan tanpa agama adalah lumpuh', 'admin', 'SDN 1 Menang Ponorogo, SMPN 1 Kauaman Po', '19a7a09697d626d7d4c664a1436f896b.jpg'),
(5, 'MUH RIDHO WACHID SOLIKIN', 'muh-ridho-wachid-solikin', 'PULOSARI,JAMBON,PONOROGO', 'Ponorogo', '2022-07-25', 'Mahasiswa, Freelance, Rebahan', 'https://web.facebook.com/profile.php?id=100079296632432', 'https://web.facebook.com/profile.php?id=100079296632432', 'Pendidikan Merupakan Tiket untuk masa depan. Hari esok merupakan untuk orang yang mempersiapkan hari ini', 'Divisi IT', 'SDN 1 Menang Ponorogo, SMPN 1 Kauaman Po', '20201008_014347-1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_kegiatan`
--

CREATE TABLE `tb_jenis_kegiatan` (
  `id_jenis` int(11) NOT NULL,
  `jenis_kegiatan` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jenis_kegiatan`
--

INSERT INTO `tb_jenis_kegiatan` (`id_jenis`, `jenis_kegiatan`) VALUES
(3, 'Kajian Subuh'),
(8, 'Galeri'),
(10, 'Kegiatan utama'),
(13, 'Kegiatan Bulanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kas_masjid`
--

CREATE TABLE `tb_kas_masjid` (
  `id_transaksi` int(11) NOT NULL,
  `pemasukan` char(15) NOT NULL,
  `pengeluaran` char(15) NOT NULL,
  `date` date NOT NULL,
  `keterangan` text NOT NULL,
  `id_kategori` int(30) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kas_masjid`
--

INSERT INTO `tb_kas_masjid` (`id_transaksi`, `pemasukan`, `pengeluaran`, `date`, `keterangan`, `id_kategori`, `foto`) VALUES
(3, '10000', '1000', '2022-07-25', 'sssasasasasasa', 4, '19a7a09697d626d7d4c664a1436f896b.jpg'),
(5, '400000', '45000', '2022-07-22', 'infaqqqqq', 9, '20201008_014347-1.jpg'),
(7, '5000000', '0', '2022-07-26', 'saddaffaffafafasf', 1, 'juce.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_kas`
--

CREATE TABLE `tb_kategori_kas` (
  `id_kategori` int(11) NOT NULL,
  `kategori` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori_kas`
--

INSERT INTO `tb_kategori_kas` (`id_kategori`, `kategori`) VALUES
(1, 'Dana Umum'),
(4, 'Santunan Yatim'),
(8, 'Kebersihan'),
(9, 'Infaq Jum\'at'),
(10, 'Sumbangan Sukarela');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `seo_title` varchar(70) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time DEFAULT NULL,
  `judul_kegiatan` varchar(255) NOT NULL,
  `narasumber` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `id_jenis`, `seo_title`, `tanggal`, `jam_mulai`, `jam_selesai`, `judul_kegiatan`, `narasumber`, `keterangan`, `foto`) VALUES
(11, 3, 'Menjadikan-Iman-Sebagai-Kunci', '2022-07-22', '05:48:00', '06:02:00', 'Menjadikan Iman Sebagai Kunci', 'Dr.Prof Hj. Mahfud,. S.T M.Cs', 'Ada 2 Kategori Peserta Itikaf:\r\n1. Peserta itikaf reguler sebanyak 50 orang\r\n2. Peserta itikaf temporer/susulan sekitar 15 hingga 20 orang\r\n\r\nKeseruan itikaf Masjid Al-Ihsan Telkom, begitu banyak. Masjid menyediakan berbagai sarana dan fasilitas secara GR', 'kepala.jpg'),
(19, 8, 'ramadhan-1443-h-bersama-orang-masjid', '2022-07-26', '06:52:00', '00:00:00', 'Ramadhan 1443 H Bersama Orang Masjid', 'Takmir Masjid', 'Cara Membuat URL SEO di Codeigniter  .Pada tutorial kali ini, saya akan sharing tentang cara membuat URL SEO Friendly dengan Codeigniter.\r\n\r\nSudah tidak asing lagi kan dengan istilah SEO?. ya, SEO atau Search Engine Optimization adalah sebuah teknik untuk melakukan optimasi terhadap sebuah Website di mesin pencarian seperti Google, Bing, Yahoo dll..\r\n\r\nTujuan utama dari diterapkannya SEO sendiri adalah untuk meningkatkan posisi sebuah website agar berada di posisi teratas atau halaman pertama dalam sebuah pencarian berdasarkan kata kunci tertentu. Semakin tinggi posisi website tersebut maka semakin tinggi juga trafik pengunjungnya.\r\n\r\nDari sekian banyak faktor SEO yang wajib kamu lakukan, URL adalah salah satunya.\r\n\r\nURL adalah sebuah alamat unik dalam sebuah website, oleh karena itu optimasi pada URL sangat diperlukan agar dapat meningkatkan kualitas SEO pada website kita.\r\n\r\nCiri-ciri URL yang baik adalah URL menjelaskan tentang isi dari konten yang ditulis dan tidak terlalu panjang, kita cukup menuliskan kata kunci dari konten yang kita buat dengan mengandung tiga sampai lima suku kata saja.\r\n\r\nJika URL website kita bagus, maka mesin pencari tidak akan segan-segan memberikan kesempatan kepada website kita untuk berada di posisi teratas.\r\n\r\nBerikut adalah Contoh URL yang bagus dan jelek :', 'inova.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vidio`
--

CREATE TABLE `vidio` (
  `id_vidio` int(11) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `post_titel` varchar(80) NOT NULL,
  `link` text NOT NULL,
  `tgl_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vidio`
--

INSERT INTO `vidio` (`id_vidio`, `judul`, `post_titel`, `link`, `tgl_post`) VALUES
(1, 'Kajian Ahad Kliwon oleh Ustadz Kiki F Wijaya - Part - 2', 'data-vidio-untuk-kamu', 'c2oLfFcpp9s', '2022-07-22'),
(2, 'Kajian Ahad Kliwon oleh Ustadz Kiki F Wijaya - Part- 1', 'Kajian Ahad Kliwon oleh Ustadz Kiki F Wijaya - Part - 1', 'GMLzDU0m_WA', '2022-07-22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tb_jenis_kegiatan`
--
ALTER TABLE `tb_jenis_kegiatan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `tb_kas_masjid`
--
ALTER TABLE `tb_kas_masjid`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tb_kategori_kas`
--
ALTER TABLE `tb_kategori_kas`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `vidio`
--
ALTER TABLE `vidio`
  ADD PRIMARY KEY (`id_vidio`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_kegiatan`
--
ALTER TABLE `tb_jenis_kegiatan`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_kas_masjid`
--
ALTER TABLE `tb_kas_masjid`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_kas`
--
ALTER TABLE `tb_kategori_kas`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `vidio`
--
ALTER TABLE `vidio`
  MODIFY `id_vidio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
