-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2023 pada 10.52
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_person`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
(5, 'Buddha'),
(4, 'Hindu'),
(1, 'Islam'),
(6, 'Konghucu'),
(3, 'Kristen Katolik'),
(2, 'Kristen Protestan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(12) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `kampus` varchar(45) NOT NULL,
  `sosmed` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `quotes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `id_agama`, `nama`, `gender`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `hp`, `Email`, `kampus`, `sosmed`, `foto`, `quotes`) VALUES
(20, 1, 'Irgi Rama Sulistio', 'L', 'Bogor', '2002-03-06', 'Kp.Babakan RT:02/03 No:16 Kec.Cileungsi Kab.Bogor', '089612431791', 'irgirama01@gmail.com', 'Politeknik Negeri Media Kreatif', 'irgiramz', 'Irgi Rama Sulistio - Irgi Rama.jpg', 'Semangat dan teruslah berusaha'),
(21, 1, 'Ahmad Fadhliansyah', 'L', 'Dki Jakarta', '2003-06-13', 'Jl Lapangan Roos III', '082114254952', 'fadhliansyah9f@gmail.com', 'Stt NF', 'fadhliansyaah', 'IMG_20231006_160929_553 - Multi Vides.jpg', 'Janganlah menjadi orang yang tidak menghargai orang lain'),
(22, 4, 'Nata Nara Narendra Putra Suanda', 'L', 'Sumbawa Besar', '2003-07-30', 'Jl. Gunung Agung Gang. 1C Perumahan Pesona Agung Graha Adi No. B2', '089675998114', 'natanaranarendra@gmail.com', 'Universitas Udayana', 'natanaraps', 'Nata.jpg', 'Tetap semangat walaupun hidup sangat berat'),
(23, 1, 'Muhammad Jaisy Adli', 'L', 'Bekasi', '2004-01-13', 'Jln. H. Taqwa no 108 rt/rw 006/009', '089512391211', 'muhjaisyadli@gmail.com', 'STT NF', 'jaisyadli', 'IMG_20231009_160329 - jaisy adli.jpg', ' Penilaian (Jawaban) 100% Muhammad Jaisy Adli 1 dari 1 C5 Muhammad Jaisy Adli  N5  2 3 ular kebo kita hidup harus semangat tlus lo phei phei      	 2 3 ular kebo kita hidup harus semangat tlus lo phei phei Aktifkan dukungan pembaca layar   Untuk mengaktifkan dukungan pembaca layar, tekan Ctrl+Alt+Z. Untuk mempelajari pintasan keyboard, tekan Ctrl+garis miring.Beruang Grizzly Anonim telah meninggalkan dokumen.'),
(24, 1, 'Adi', 'L', 'Pamekasan', '2000-10-29', 'Sumber Waru Waru Jawa Timur', '081937264222', 'adilrindu29@gmail.com', 'Institut Sains danTeknologi Annuqayah', '@adialfatih45', 'IMG_20220725_124510_124 - Adi.webp', 'Jangan pernah takut untuk mencoba'),
(25, 1, 'Qonita Azizah', 'P', 'Panyalaian', '2002-03-08', 'Jalan Allogio barat 3, Medang, kec pegedangan, banten', '085761434808', 'qonita.azizah@student.pradita.ac.id', 'Pradita University', 'qonitaazh_', 'IMG_20211127_205540_536 - Qonita Azizah.webp', 'Jadi diri sendiri'),
(26, 1, 'Milda Khusnul Khotimah', 'P', 'Lumajang', '2003-02-26', 'Lumajang, Jawa Timur', '087863533945', 'mildakhusnul999@gmai.com', 'Politeknik Negeri Malang', '_mldkhsnl', 'milda - 11_Milda Khusnul Khotimah.jpg', 'Life is to be grateful'),
(27, 1, 'Izzudin Muktar', 'L', 'Depok', '2003-06-27', 'Dsn bebegan, jati kabupaten Blora Jawa Tengah', '083122661966', 'izudinmuktar5@gmail.com', 'STT Terpadu Nurul Fikri', 'mukktaaaaar', 'SAVE_20211107_120956 - Izudin Muktar.jpg', 'Guru terbaik adalah pengalaman orang lain.'),
(28, 1, 'MOCH FIKRI RAMADHAN', 'L', 'Depok', '2001-10-11', 'JL. Situ Indah No.3 Rt.06/10 Kel.Tugu Kec.Cimanggis Depok', '089684711291', 'libr.libr1711@gmail.com', 'Sekolah Tinggi Teknologi Terpadu Nurul Fikri', '@fikrii1711', 'I - M Fikri Ramadhan.jpg', 'Everything you do, do it 100%'),
(29, 1, 'Sri Lestari', 'P', 'Pati', '2002-09-28', 'Ds.Sukolilo RT 06/RW 07', '08157945227', 'lestatari41@gmail.com', 'Universitas Muria Kudus', 'taarrrrri', 'Sri Lestari_mahasiswa - lesta tari.jpg', 'Tuhan memiliki rencananya sendiri. Percayai itu dan nikmati saat ini.'),
(30, 1, 'Septia Dwi Kurniasih', 'P', 'Jakarta', '1995-09-18', 'Kp. Pulo Makasar Jakarta Timur', '087889018920', 'septiadk2@gmail.com', 'Unsurya', 'cepiaaaws', 'A 3 - Septia Dwi Kurniasih.jpeg', 'Sebaik apapun diri kita, kita tidak akan pernah terlihat sempurna oleh manusia lain.'),
(31, 1, 'Putra Habib Al Aziz', 'L', 'Rantau Karya', '2003-12-23', 'OKI, Sumatera Selatan', '085377519996', 'putrahabibalaziz@gmail.com', 'Politeknik Manufaktur Negeri Bangka Belitung', 'ajizz11_', 'IMG_20231005_151746 - Putra Habib Al Aziz.jpg', 'Bernafaslah selagi masih hidup'),
(32, 1, 'Siti Amdah', 'P', 'Tangerang', '2001-04-14', 'Tigaraksa, Tangerang-Banten', '08979281365', 'siti.amdah14@gmail.com', 'STT Terpadu Nurul Fikri', 'amdah14', 'IMG-20220119-WA0048 - siti amdah.jpg', 'مَنْ جَدَّ وَجَدَ'),
(33, 1, 'Renawati', 'P', 'Tangerang', '2001-05-22', 'Kp.Daraham', '085282884467', 'rena09910@gmail.com', 'STT Terpadu Nurul Fikri', 'ren_aniqobie', 'Renawati - Renawati_SI08.jpeg', 'If you\'re finish changing, you\'re finished'),
(34, 1, 'Hanif Hidayatulloh', 'L', 'Brebes', '2003-11-28', 'Purwokerto Utara', '087862678478', 'hanifhidayatulloh2811@gmail.com', 'Universitas Amikom Purwokerto', 'hanief_nief', 'hanif - Hanif.jpg', '\"Jangan kau penjarakan ucapanmu, jika kau menghamba kepada ketakutan kau hanya akan memperpanjang barisan perbudakan\" - Widji Thukul '),
(35, 1, 'Ariza Akmal Syahida', 'L', 'Bantul', '2003-04-13', 'Bantul, Daerah Istimewa Yogyakarta', '083849257999', 'arizaakmal04@gmail.com', 'Universitas Amikom Yogyakarta', 'arizaakmal13', 'Ariza Akmal Syahida - Ariza Akmal Syahida.jpg', 'Jadilah lebih baik dari hari kemarin'),
(36, 1, 'Muarif Rizqy', 'L', 'Brebes', '2001-11-21', 'Kec. Paguyangan jl. Bumiayu - Purwokerto', '085326762608', 'murizqyarf17@gmail.com', 'Universitas Peradaban', 'Arif_rzym', 'Muarif_Rizqy - Muarif Rizqy.jpg', 'Ayo makan biar nggak mati'),
(37, 1, 'Muhammad Alifi Ferdiansyah', 'L', 'Tulungagung', '2000-07-24', 'Desa Tenggong, Kecamatan Rejotangan, Kabupaten Tulungagung', '088217206039', 'alifi240700@gmail.com', 'Universitas Bhinneka PGRI', 'alifi_24', 'Muhammad Alifi Ferdiansyah.png', 'Just Do It Man!'),
(38, 1, 'Fajar Septianto', 'L', 'Jakarta Selatan', '2002-09-06', 'Cinere, Depok', '085889432197', 'fajar23.septianto@gmail.com', 'STT Nurul Fikri', 'slashandback', '20221208_205113_mfnr - Fajar Septianto.jpg', 'We can buy the time. Setiap proses yang bisa di kurangi waktunya sama dengan membeli waktu'),
(39, 1, 'Kurniawan', 'L', 'Sumedang', '2001-08-19', 'Sumedang', '081411096708', 'ikurniawannf@gmail.com', 'SEKOLAH TINGGI TEKNOLOGI TERPADU NURUL FIKRI', 'i_kr19', 'Kurniawan - Kurniawan 19.jpg', 'Jangan malu untuk menjadi diri sendiri'),
(40, 1, 'Muhammad Bahrul Ulum', 'L', 'Pontianak', '2002-09-15', 'Jalan Bujama Desa Pal IX Kecamatan Sungai Kakap Kabupaten Kubu Raya', '087716374672', 'rangga.agg2018@gmail.com', 'Universitas Tanjungpura', '@ulum_kane', 'Muhammad Bahrul Ulum.jpg', 'Dunia memang tidak memihakmu, tapi bukan berarti kau harus kalah darinya'),
(41, 1, 'Zian Naisila Anjarwati', 'P', 'Sumedang', '2001-02-24', 'Jl. Caringin Cikungkurak Bandung', '089652639063', 'ziannaisilaa@gmail.com', 'STMIK - IM Bandung', 'ziannaisilaa', 'me - Minvey _.png', 'Spion dulu diri sendiri, baru klakson orang lain'),
(42, 1, 'Hadi Prasetiyo', 'L', 'Samarinda', '2002-06-16', 'Samarinda, Kalimantan Timur', '085711228592', 'hadiiyok01@gmail.com', 'Universitas Mulawarman', '@hadiiprasetiyo', '7179249304069033243 - Hadi Prasetiyo.jpg', 'Sesulit apapun tugasmu pasti akan selesai dimenit terakhir'),
(43, 1, 'Euis Safania', 'P', 'Cirebon', '2001-10-25', 'Kabupaten Cirebon Provinsi Jawa Barat', '083156525468', 'euissafania8703@students.unnes.ac.id', 'Universitas Negeri Semarang', '@safania.euis', 'Euis_mahasiswa - Euis Safania.jpg', '\"Sukses bukanlah kunci kebahagiaan, tapi kebahagian adalah kunci sukses\"'),
(44, 1, 'Ulayya Salmaa Khoirunnisaa', 'P', 'Kudus', '2003-05-28', 'Bulungcangkring RT 03/ RW 01, Kec. Jekulo, Kab. Kudus', '081215627905', 'ulayyasalmaa28@gmail.com', 'Universitas Muria Kudus', 'salmaaul._', 'Ulayya Salmaa_mahasiswa - ulayya salmaa.jpg', 'Hidup itu seperti di drama Korea, penuh dengan plot twist, tapi pasti ada episode happy endingnya.'),
(45, 1, 'Ahmad Riziq', 'L', 'Jakarta', '2002-07-18', 'Kp.Roke Des. Negkasari Kec.Jasinga Kab. Bogor Provinsi.jawa barat', '085939446587', 'ahmadriziq010@gmail.com', 'Sekolah Tinggi Teknologi terpadu Nurul fikri', '@arizieq', 'IMG_20220511_202549_906 - Ahmad Riziq.jpg', 'Satu Satunya perjalanan yg Mustahil, adalah perjalanan yg tidak pernah kamu mulai'),
(46, 2, 'Carmennita Soleman', 'P', 'Samarinda', '2004-01-24', 'Jl. Budaya Pampang, Samarinda, Kalimantan Timur', '085350232057', 'nitacarmen06@gmail.com', 'Universitas Mulawarman', '@carmeennita', 'Carmennita.webp', 'Be Grateful'),
(47, 1, 'Dimas Andhika Firmansyah', 'L', 'Pemalang', '2003-07-20', 'Pemalang, Jawa Tengah', '089630147925', 'dmsandhika87@gmail.com', 'Universitas Negeri Semarang', 'dmsandhika_', NULL, 'Jika kamu merasa tidak ada orang baik, jadilah orang baik tersebut'),
(48, 1, 'Ahmad Zuaidi', 'L', 'Sumenep', '2001-11-02', 'Lembung Barat Lenteng Sumenep Jatim', '085963093822', 'ahmadzuaidi892@gmail.com', 'IST Annuqayah', 'ahmd.zdi__', 'IMG-20231025-WA0009 - Hefdziie muhammad.jpg', 'Fatum brutum amor fati. Sebab kata orang Tuhan tidak pernah bermain dadu'),
(49, 1, 'SHABRINA PRIMADEWI', 'P', 'Kudus', '2003-01-09', 'Desa Sadang, Rt 03 Rw 02, Kecamatan Jekulo, Kabupaten Kudus, Jawa Tengah', '085848686194', 'shabrinaprima@gmail.com', 'Universitas Muria Kudus', 'shabrinampol', 'Shafa Salsabila Febriani.jpg', 'Kamu seringkali berkata gak sanggup, bahkan beberapa kali ingin menyerah, tapi lihat kamu masih bertahan sampai saat ini. Teruslah mengeluh sampai semua pada akhirnya terselesaikan juga'),
(50, 1, 'Ridwan Khomarudin Muharram', 'L', 'Tanggerang', '2003-03-10', 'Citayam kp. Kelapa gg. Nusaindah rt04/rw16', '081281238348', 'ridwanmts812@gmail.com', 'STT Terpadu Nurul Fikri', '@arraaamm__', NULL, 'Klo bisa dilakukan skrng knpa harus bsk.'),
(51, 1, 'Anisa', 'P', 'Depok', '2003-10-09', 'Kp. Sindangkarsa Rt01/07, sukamaju baru, Tapos depok', '083895461608', 'anisaaabcd@gmail.com', 'Stt terpadu nurul Fikri', 'SyNissa', 'InShot_20231025_222649668 - ANISA STT-NF.jpg', 'Stop wishing, start doing! :)'),
(52, 1, 'Shafa Salsabila Febriani', 'P', 'Depok', '2002-02-20', 'Jl Bhakti Abri Rt 02 Rw 10', '089570651030', 'shafafebriani4@gmail.com', 'UBSI Depok', '@shafaslls', 'Shafa Salsabila Febriani.jpg', 'jadilah diri sendiri'),
(53, 1, 'Febi Febiyanti', 'P', 'Garut', '2003-02-27', 'Jl. KH Hasan Arif, Kp. Pagersari RT.01 RW.06 Kec. Banyuresmi Kab. Garut', '085860257486', 'febi20289ti@student.nurulfikri.ac.id', 'Sekolah Tinggi Teknologi Terpadu Nurul Fikri', '_ffyyyyyyy', 'Foto Dede Feby - Febi Febiyanti.jpg', '\"Terkadang, perubahan adalah kunci untuk pertumbuhan.\"'),
(54, 1, 'Nasyath Faykar', 'L', 'Pekalongan', '2002-11-30', 'Jalan KH Ahmad Dahlan Tirto Gg. 7 No. 31', '088806923500', 'nasyathfaykar@gmail.com', 'STMIK WIDYA PRATAMA PEKALONGAN', 'faykarr_', 'nasyath_faykar - 0194 Nasyath Faykar.jpg', 'Learn to be best rather than yesterday'),
(55, 1, 'Maulidhiansyah Bayu Setiawan', 'L', 'Jakarta', '2003-05-10', 'Jl. Jantung Harapan RT 08/07 Kel.pabuaran Kec.cibinong', '089507631813', 'maulidhiansyahbayu@gmail.com', 'STT Terpadu Nurul Fikri', '@inibayou', 'Maulidhiansyah Bayu.jpg', 'Hiduplah seperti larry'),
(56, 2, 'Rangga Ekklesia Gabriel Anugrahnu ', 'L', 'Palangka Raya', '2002-06-08', 'Jl.Perkebunan komp perikanan', '083143508517', 'ranggaekkle20020806@gmail.com', 'UNIVERSITAS PALANGKARAYA', 'rangga_e.g.a', 'rangga.jpg', 'Ngoding Tanpa Error impossible!'),
(57, 1, 'Muhammad Alif Firdaus Arizona', 'L', 'Surabaya', '2002-03-14', 'Perum TNI AL Candi', '082132306322', '20410100080@dinamika.ac.id', 'Universitas Dinamika', '@afarizona_', 'Muhammad Alif Firdaus Arizona.jpeg', 'Aut viam inveniam aut faciam'),
(60, 1, 'Nasrul', 'L', 'null', '1980-10-10', 'null', '085780844411', 'nasrul99@gmail.com', 'Sekolah Tinggi Teknologi Terpadu Nurul Fikri', 'null', '', 'null'),
(61, 1, 'Fathan Mubin', 'L', 'null', '1997-09-21', 'null', '085882103423', 'fathan@nurulfikri.ac.id', 'Sekolah Tinggi Teknologi Terpadu Nurul Fikri', '', '', ''),
(62, 2, 'BAGUS FEBRIYANTO', 'L', 'null', '0000-00-00', '', '08978270522', 'bagusfebriyanto19@gmail.com', 'Universitas Muria Kudus', '', '', ''),
(63, 1, 'Riyanto', 'L', 'null', '0000-00-00', '', '088225448521', 'alfyansyahriyan31@gmail.com', 'Universitas Sains Alqur an', '', '', ''),
(65, 1, 'Muhammad Anwar Fauzan', 'L', '', '0000-00-00', '', '085939410330', 'anwar.fauzan98@gmail.com', 'Universitas Banten Jaya', '', '', ''),
(66, 1, 'BAGUS MUHAMMAD MUMTAZA', 'L', '', '0000-00-00', '', '085875282178', 'bagusbendan07@gmail.com', 'STMIK Widya Pratama', '', '', ''),
(67, 1, 'Erick Darmawan Boeniarto', 'L', '', '0000-00-00', '', '085282568210', 'erickdarmawanboeniarto130803@gmail.com', 'Universitas Banten Jaya', '', '', ''),
(69, 2, 'LORA LORENSA MANAFE', 'L', '', '0000-00-00', '', '081353024713', 'lhomanafe@gmail.com', 'Politeknik Negeri Kupang', '', '', ''),
(70, 1, 'WINANDA AFRILIA HARISYA', 'P', '', '0000-00-00', '', '', 'winandaafrilia0304@gmail.com', 'Universitas Andalas', '', '082258875076', ''),
(71, 2, 'MUKHAMMAD RIFKHI RIFANGGA', 'L', '', '0000-00-00', '', '08812670156', 'rifkhirifangga@gmail.com', 'Universitas Muria Kudus', '', '', ''),
(72, 1, 'Safitri', 'P', '', '0000-00-00', '', '0816655958', 'safitri@students.amikom.ac.id', 'Universitas Amikom Yogyakarta', '', '', ''),
(73, 2, 'JHOFY RICARDO P. SITINDAON', 'L', '', '0000-00-00', '', '082218994202', 'jhofyricardo@icloud.com', 'Politeknik Negeri Sriwijaya', '', '', ''),
(75, 1, 'Riski Eggy Saputro', 'L', '', '0000-00-00', '', '081911049214', 'eggy.riski27@gmail.com', 'Universitas Banten Jaya', '', '', ''),
(76, 1, 'Mahez Arya Panangsang', 'L', '', '0000-00-00', '', '081298020766', 'mahezarya23@gmail.com', 'Universitas Banten Jaya', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('admin','mahasiswa') NOT NULL,
  `foto` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `fullname`, `email`, `username`, `password`, `role`, `foto`) VALUES
(11, 'Rangga Ekklesia Gabriel Anugrahnu', 'ranggaekkle20020806@gmail.com', 'rangga', '16d44ff7ef308125c2d4800d0f3ff2eec42fbd4d', 'admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`),
  ADD UNIQUE KEY `No_HP_UNIQUE` (`hp`),
  ADD KEY `fk_Personal_Agama_idx` (`id_agama`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kampus` (`kampus`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_index` (`email`),
  ADD KEY `username_index` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_Personal_Agama` FOREIGN KEY (`id_agama`) REFERENCES `agama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
