-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2021 pada 11.33
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_kategori_berita` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `id_penulis` int(11) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `insert_by` varchar(150) DEFAULT NULL,
  `insert_at` date DEFAULT NULL,
  `update_by` varchar(150) DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_kategori_berita`, `judul`, `id_penulis`, `isi`, `cover`, `insert_by`, `insert_at`, `update_by`, `update_at`) VALUES
(24, 23, 'Ketua Komisi II DPR RI Minta Penyelenggara dan Paslon Pilkada Perhatikan Protokol Kesehatan', 17, '<p>Ketua Komisi II DPR RI Ahmad Doli Kurnia Tandjung meminta kepada pihak penyelenggara dan pasangan calon (paslon) agar memerhatikan protokol kesehatan saat mengikuti tahapan Pemilihan Kepala Daerah (Pilkada) 2020.</p>\r\n\r\n<p>&ldquo;Mencermati hari pertama pendaftaran pasangan calon Pilkada 4 September kemarin yang faktanya terjadi kerumunan massa dan lemahnya penerapan protokol kesehatan Covid-19,&rdquo; ujarnya dalam keterangan tertulis yang diterima Kompas.com, Sabtu (5/9/2020).</p>\r\n\r\n<p>Dia menerangkan, pada hari pertama terlihat sedikit sekali pihak yang menggunakan masker.</p>\r\n\r\n<p>&ldquo;Maka saya meminta kepada aparat penyelenggara (KPU dan Bawaslu) untuk lebih aktif lagi memberikan informasi dan lebih tegas dalam menegakkan penerapan protokol kesehatan Covid-19,&rdquo; ujarnya.</p>\r\n\r\n<p>Ahmad juga mengimbau, penegakan protokol kesehatan Covid-19 turut dilakukan pula oleh pasangan calon, terlebih kepala daerah yang berstatus petahana.</p>\r\n\r\n<p>Menurutnya, hal ini untuk menertibkan rombongan pendukung agar menjaga jarak dan memakai masker serta mengikuti peraturan yang telah ditetapkan dalam menghadiri tahapan pendaftaran pasangan calon.</p>\r\n\r\n<p>Ahmad Doli pun meminta kepada seluruh masyarakat atau pendukung pasangan calon agar mematuhi protokol kesehatan yang berlaku.</p>\r\n\r\n<p>&ldquo;Saya mengimbau masyarakat untuk tidak datang berbondong-bondong melebihi jumlah sebagaimana yang telah diatur oleh penyelenggara,&rdquo; terang politikus Partai Golkar tersebut</p>\r\n\r\n<p>Sebab, imbuhnya, Covid-19 diyakini akan semakin menyebar pesat bila masyarakat tidak mengindahkan protokol kesehatan.</p>\r\n\r\n<p>&ldquo;Kalau pun ingin hadir, tolong dengan memakai masker dan tetap menjaga jarak,&rdquo; tuturnya</p>\r\n', 'berita1.jpeg', 'Dena', '2021-05-27', NULL, NULL),
(25, 23, 'Manfaat Punya Kebun Sayur Organik, seperti Prilly Latuconsina', 14, '<p>Aktris Prilly Latuconsina ternyata punya kebun sayur organik di samping rumahnya. Di kebun tersebut, ia menanam beberapa jenis sayuran, seperti kangung dan bayam. &quot;Jadi, kalau di rumah aku kalau nyayur sayurnya, apa namanya, nyabut sendiri,&quot; kata Prilly dalam videonya di Instagram. Saat itu, Prilly sedang mengajak teman-temannya memetik hasil sayur di kebunnya. &quot;Ini non pestisida, ini organik. Mereka aku suruh bawa pulang kangkung.&quot;</p>\r\n\r\n<p>Seperti yang diungkapkan Prilly, salah satu manfaat memiliki kebun sayur organik adalah dapat memastikan sayur yang kita konsumsi bebas pestisida. Namun, manfaat berkebun sayur organik sebetulnya sangat banyak, termasuk manfaat dari aktivitas berkebun itu sendiri. Sebetulnya, ketahui dulu apa sih yang dimaksud &quot;organik&quot;? Kata organik sebetulnya mengacu pada cara tanam dan pengolahan produk pertanian yang bertujuan memenuhi tujuan seperti:&nbsp;<br />\r\n1. Meningkatkan kualitas tanah dan air.&nbsp;<br />\r\n2. Mengurangi polusi.<br />\r\n3. Menyediakan habitat ternak yang aman dan sehat.<br />\r\n4. Mempromosikan siklus sumber daya mandiri di sebuah pertanian.</p>\r\n\r\n<p>Istilah &quot;organik&quot; tidak sama dengan &quot;alami&quot;. Secara umum, istilah alami pada label makanan berarti makanan tidak menggunakan pewarna, perasa atau pengawet buatan, tetapi tidak mengacu pada metode atau bahan yang digunakan untuk menghasilkan bahan makanan tersebut</p>\r\n', 'berita2.jpg', 'Zahran', '2021-05-27', NULL, NULL),
(26, 24, 'Studi: Pria dengan Testosteron Rendah Berisiko Covid 19 Berat', 16, '<p>Dalam penelitian yang dipublikasikan di&nbsp;<a href=\"https://jamanetwork.com/journals/jamanetworkopen/fullarticle/2780135?resultClick=24\" target=\"_blank\"><em>JAMA Network Open ini</em></a>, para peneliti mencari tahu hubungan antara testosteron dengan tingkat keparahan Covid-19.</p>\r\n\r\n<p>Para peneliti mengumpulkan sampel darah dari 90 pria dan 62 perempuan pasien Covid-19 di RS Barnes Jewish, St. Louis, Missouri, Amerika Serikat. Peneliti mengambil sampel darah pada hari ke-3, ke-7, ke-14, dan ke-28 untuk mengukur kadar testosteron pasien.</p>\r\n\r\n<p>Hasilnya, para perempuan tak ditemukan adanya hubungan antara tingkat keparahan Covid-19 dengan kadar hormon apa pun yang diukur. Sementara pada pria, kadar testosteron ditemukan berpengaruh.</p>\r\n\r\n<p>Pria dengan gejala klinis Covid-19 berat memiliki kadar testosteron rata-rata sebesar 52 ng/dL. Jumlah ini di bawah rata-rata angka standar kadar testosteron pria. Sedangkan pria dengan gejala sedang dan ringan memiliki rata-rata 151 ng/dL kadar testosteron.</p>\r\n\r\n<p>Dalam pengujiannya, para peneliti juga memasukkan faktor risiko lain yang dapat memperparah Covid-19 seperti usia, indeks BMI, penyakit penyerta, kebiasaan merokok, dan ras.</p>\r\n\r\n<p>Faktanya, kadar testosteron yang lebih rendah pada pria dikaitkan dengan tingkat peradangan yang lebih tinggi.</p>\r\n\r\n<p>&quot;Orang-orang dengan Covid-19 yang awalnya ringan, tapi memiliki kadar testosteron rendah, kemungkinan besar membutuhkan perawatan intensif atau intubasi selama dua atau tiga hari ke depan,&quot; ujar penulis utama studi sekaligus ahli endokrinologi St Louis University, Sandeep Dhindsa, mengutip&nbsp;<a href=\"https://www.livescience.com/low-testosterone-men-linked-increased-risk-severe-covid.html\" target=\"_blank\"><em>Live Science</em></a>.</p>\r\n\r\n<p>Dokter yang bertugas di RS sendiri belum pernah mengukur kadar testosteron pasien. Namun, peneliti menduga bahwa kadar testosteron pasien telah menurun saat mereka tiba di RS untuk mendapatkan perawatan Covid-19.</p>\r\n\r\n<p>Ada pula kemungkinan bahwa pria dengan Covid-19 parah memiliki kadar testosteron yang lebih rendah dari rata-rata, bahkan sebelum mereka sakit. Kadar testosteron yang rendah diduga mengakibatkan penurunan massa dan kekuatan otot, yang dengan demikian menurunkan kapasitas paru-paru dan risiko lebih tinggi mengalami gejala Covid-19 yang berat.</p>\r\n', 'berita3.jpeg', 'Garay', '2021-05-28', NULL, NULL),
(27, 24, 'Studi Anjurkan Jalan Kaki Ringan demi Umur Panjang', 18, '<p>Olahraga tak perlu terlalu menguras tenaga.Studi terbaru menemukan, sering berjalan kaki setiap hari, baik sekaligus atau dalam waktu singkat, dapat memperpanjang angka harapan hidup.</p>\r\n\r\n<p>Dalam studi ini, peneliti memantau aktivitas fisik peserta dengan bantuan perangkat penghitung langkah. Peneliti mengamati semua jenis gerakan, termasuk menaiki tangga atau aktivitas umum rumah tangga lainnya.</p>\r\n\r\n<p>Pemantauan dilakukan pada tahun 2011-2015 terhadap 16.732 wanita yang rata-rata berusia di atas 60 tahun. Peneliti menghitung langkah harian dan pola berjalan selama 4-7 hari peserta menggunakan perangkat penghitung langkah.</p>\r\n\r\n<p>Dalam tindak lanjutnya, peneliti melacak tingkat kematian dengan berbagai penyebab selama enam tahun hingga 31 Desember 2019. Hasilnya, peneliti menemukan sebanyak 804 kasus kematian selama periode studi sepanjang 2011-2019.</p>\r\n\r\n<p>Peserta studi yang memiliki lebih banyak langkah atau sekitar 4.500 langkah per hari memiliki angka harapan hidup yang lebih panjang.</p>\r\n\r\n<p>Sementara itu, setiap&nbsp;penambahan 1.000 langkah per hari dikaitkan dengan penurunan 28 persen risiko kematian. Penurunan 32 persen risiko kematian didapat oleh peserta yang mengambil&nbsp;penambahan 2.000 langkah per hari.</p>\r\n\r\n<p>&quot;Hasil kami menunjukkan bahwa mengambil 2.000 langkah atau lebih selama penelitian dikaitkan dengan manfaat angka harapan hidup yang lebih panjang,&quot; ujar penulis utama studi, Christopher C Moore, menukil laman AHA.</p>\r\n', 'berita4.jpeg', 'Rafly', '2021-05-28', NULL, NULL),
(28, 25, 'Bermain, Sepele tapi Penting Buat Anak', 16, '<p>Tiap 28 Mei, dunia merayakan &#39;World Play Day&#39; atau Hari Bermain Sedunia. Ini jadi perayaan hak anak-anak untuk bermain.</p>\r\n\r\n<p>Sebagaimana dikutip dari laman&nbsp;<em><a href=\"https://www.toylibraries.org.au/wpd\" target=\"_blank\">Toy Libraries</a></em>, The International Toy Library Association (ITLA) secara resmi menyetujui perayaan Hari Bermain Sedunia pada konferensi ITLA ke-8 di Tokyo pada 1999.</p>\r\n\r\n<p>Setahun kemudian, diinisiasi perayaan Hari Bermain Sedunia di Prancis dan Korea.Tahun ini, Hari Bermain Sedunia mengambil tema &#39;Bermain itu sehat&#39;. Bermain mampu meningkatkan kesehatan baik secara fisik, mental dan sosial. Manfaat kesehatan ini tak hanya dirasakan anak, tetapi juga orang dewasa dan lansia.</p>\r\n\r\n<p>Sekilas aktivitas bermain terlihat sepele. Anak kejar-kejaran, memukul botol bekas seolah alat musik, hingga melompat di antara sandal di teras rumah, semua tampak remeh bahkan kerap dianggap berisik dan mengganggu.</p>\r\n\r\n<p>Padahal menurut&nbsp;psikolog anak dan remaja,&nbsp; Vera Itabiliana Hadiwidjojo bermain itu sangat penting buat anak.</p>\r\n\r\n<p>&quot;Bermain itu kebutuhan dasar anak. Seperti makan, kalau itu enggak ada misal enggak makan, itu mengganggu fungsi normal tubuh,&quot; ujar Vera saat gelaran virtual Paddle Pop #MainYuk, Jumat (28/5).</p>\r\n\r\n<p>Sebenarnya aktivitas seperti apa sih yang bisa disebut bermain?</p>\r\n\r\n<p>Orang tua kerap terbatas bahwa bermain selalu melibatkan gim, tumpukan kartu permainan, atau permainan lain yang memerlukan alat. Vera menjelaskan sejatinya bermain merupakan aktivitas yang didominasi emosi positif, menyenangkan.</p>\r\n\r\n<p>Bermain pun memiliki unsur kebebasan termasuk bebas menciptakan aturan atau berdasarkan kesepakatan bersama.</p>\r\n\r\n<p>Dia menambahkan, perasaan senang akan membuat anak mudah memahami sesuatu, mudah belajar sebab sistem otak dirangsang sehingga lebih atentif. Tidak hanya itu, bermain pun bisa mengembangkan kemampuan sosial (<em>social skill</em>).</p>\r\n\r\n<p>Sementara itu di masa pandemi, Vera mengakui ada kekhawatiran orang tua bahwa anak akan candu terhadap gawai. Kini segala sesuatu melibatkan gawai.</p>\r\n\r\n<p>Orang tua pun mengandalkan gawai untuk beragam aktivitas sehingga anak mau tidak mau melihat dan menirukan orang tua. Justru orang tua sebaiknya mengeksplorasi muatan-muatan positif dan bisa diberikan ke anak semisal memilihkan tontonan edukatif.</p>\r\n\r\n<p>Artinya, orang tua harus kreatif dong?</p>\r\n\r\n<p>Di sini, orang tua perlu melihat bahwa bermain itu tidak semata-mata hanya untuk anak. Bermain pun memiliki manfaat buat orang tua. Bermain mampu jadi sarana orang tua melepaskan stres.</p>\r\n\r\n<p>Aktivitas seperti ini memungkinkan interaksi, kedekatan fisik, perasaan senang anak yang kemudian membuat orang tua turut senang.</p>\r\n\r\n<p>&quot;Buat anak, bermain itu melepas ketegangan, bisa berekspresi dalam ruang yang aman. Saat kita terlibat, kita bisa melepas stres bareng,&quot; imbuhnya.</p>\r\n', 'berita5.jpeg', 'Shalsa', '2021-05-29', NULL, NULL),
(29, 25, 'Tempe Bakal Didaftarkan Jadi Warisan Kuliner Budaya UNESCO', 15, '<p>Menteri Pariwisata&nbsp;dan Ekonomi Kreatif Sandiaga Uno mengungkapkan akan mendaftarkan kuliner tradisional Indonesia,&nbsp;tempe&nbsp;sebagai warisan kuliner budaya di UNESCO.</p>\r\n\r\n<p>&quot;Ini menarik setelah kami mendorong dangdut sebagai&nbsp;<em>intangible cultural heritage</em>, tempe ini menjadi item selanjutnya. Persiapan sudah dilakukan untuk kami masukkan tahun depan,&quot; ungkap Sandi dalam konferensi pers Kemenparekraf, Senin (24/5).</p>\r\n\r\n<p>&quot;Sebelumnya sudah ada upaya untuk mendaftarkan tempe. Tempe telah ditetapkan jadi warisan budaya nasional Indonesia kami mendukung tempe dari ukuran&nbsp;<em>sachet</em>&nbsp;sampai sebesar bata.&quot;</p>\r\n\r\n<p>empe&nbsp;<em>sachet</em>&nbsp;yang dimaksud Sandi adalah tempe berukuran kecil. Sebelumnya, Sandi sempat menemukan tempe sachet ini Pasar Wonodri, Semarang. Tempe berukuran kecil ini disebut menjadi inovasi baru untuk mengakali mahalnya harga kedelai saat itu.</p>\r\n\r\n<p>Sandi mengungkapkan juga bahwa pendaftaran tempe ke UNESCO ini akan dilakukan di penghujung semester 1 tahun 2021.</p>\r\n\r\n<p>&quot;Belajar dari rendang, yang sudah menjadi panganan nomor satu di banyak media internasional, semoga tempe juga menjadi ikon kuliner kita.&quot;</p>\r\n\r\n<p>Sandi berharap penetapan tempe sebagai warisan budaya dunia ini akan melibatkan banyak orang, dari pengrajin lokal sampai pengusaha besar.</p>\r\n\r\n<p>&quot;Harapan kami, ingat tempe ingat Indonesia.&quot;</p>\r\n\r\n<p>&quot;Dengan ditetapkan tempe jadi warisan budaya dunia harapan kita akan meningkatkan pengembangan produk-produk olahan tempe sebagai produk kuliner kebanggaan bangsa dan akan membawa tempe untuk roadshow dan promosi kuliner ke internasional.&quot;</p>\r\n', 'berita6.jpeg', 'Zahran', '2021-05-29', NULL, NULL),
(30, 26, 'Cara Sembunyikan Like di Instagram dan Facebook', 17, '<p>Facebook dan Instagram resmi menghadirkan fitur untuk menyembunyikan &#39;Like&#39; pada setiap unggahan penggunanya.</p>\r\n\r\n<p>Perusahaan mengatakan fitur tersebut akan memungkinkan pengguna fokus pada foto dan video yang dibagikan, bukan pada berapa banyak kiriman yang disukai.</p>\r\n\r\n<p>Perusahan telah menguji kemampuan pengguna untuk menyembunyikan like sejak 2019. Karena bersifat opsional, tidak jelas berapa banyak pengguna yang benar-benar akan menggunakan opsi itu.setiap pengguna dapat memilih apakah orang-orang dapat melihat jumlah suka di kirimannya sendiri dan juga melihat berapa banyak orang yang menyukai kiriman pengguna lain.&nbsp;</p>\r\n\r\n<p>Perubahan ini dilakukan Instagram dan Facebook setelah mendapat tekanan dari para ahli bahwa jumlah like telah mengganggu kesehatan mental dan ketenangan anak muda. Hal ini diungkap berdasarkan studi dari Royal Society untuk Kesehatan Publik di Inggris.</p>\r\n\r\n<p>Para ahli menyebut menyingkirkan tombol suka atau hitungan suka bisa mengurangi kecemasan dan tekanan sosial bagi sebagian pengguna Instagram dan Facebook.</p>\r\n\r\n<p>&quot;Kami mendengar dengan menghilangkan jumlah suka akan menguntungkan sejumlah pengguna dan mengganggu untuk pengguna lain...sehingga kami memberikan pilihan kepada pengguna,&quot; jelas juru bicara Instagram seperti dikutip&nbsp;<em><a href=\"https://www.theverge.com/2021/5/26/22454428/facebook-instagram-hide-like-counts-feature-now-available\">The Verge</a></em>.&nbsp;</p>\r\n\r\n<p>Jika pengguna memilih untuk tidak membagikan jumlah suka publik pada postingan mereka, orang lain hanya dapat melihat daftar orang yang menyukai postingan tersebut, bukan jumlah sukanya.</p>\r\n\r\n<p>Namun, pengguna rang yang memposting foto masih dapat melihat jumlah suka, meskipun tidak ditampilkan secara publik.</p>\r\n\r\n<p>Kemudian, pengguna juga dapat memilih untuk tidak melihat berapa banyak orang yang menyukai posting orang lain saat mereka menggulir feed mereka. Fitur itu dapat diaktifkan dengan mengunjungi bagian &#39;posting baru&#39; di pengaturan.</p>\r\n\r\n<p>Meski Facebook&nbsp;dan Instagram&nbsp;menyebut fitur ini sudah meluncur global, namun&nbsp;saat dicoba fitur ini belum tersedia untuk pengguna Indonesia.</p>\r\n\r\n<h3><strong>Cara untuk menyembunyikan fitur Likes di Instagram&nbsp;</strong></h3>\r\n\r\n<p>- Menyembunyikan jumlah suka pada semua posting:<br />\r\nBuka Pengaturan&gt; Pengaturan Lanjutan&gt; Sembunyikan Suka dan Lihat Jumlah<br />\r\n- Menyembunyikan jumlah suka hanya pada postingan yang baru diunggah:Ketuk jumlah suka dan pilih Sembunyikan Jumlah Suka<br />\r\n- Menyembunyikan suka pada posting orang lain<br />\r\nBuka Pengaturan&gt; Posting&gt; Sembunyikan Suka dan Jumlah Tampilan</p>\r\n\r\n<h3><strong>Untuk sembunyikan suka di Facebook</strong></h3>\r\n\r\n<p>- Klik Pengaturan (Setting)<br />\r\n- Cari fitur Hitungan Reaksi (Reaction Counter)<br />\r\n- Pengguna bisa memilih untuk mengaktifkan atau menghilangkan jumlah hitungan suka dari postingan orang lain dan diri sendiri.</p>\r\n', 'berita7.jpeg', 'Dena', '2021-05-30', NULL, NULL),
(31, 26, 'Beda Whatsapp Disappearing Mode dan Disappearing Messages', 14, '<p>WhatsApp&nbsp;</p>\r\n\r\n<p>dilaporkan akan meluncurkan fitur baru yang disebut Disappearing Mode. Fitur itu memungkinkan pengguna untuk dapat menghapus pesan secara otomatis.</p>\r\n\r\n<p>Belum terdapat info jelas terkait cara kerja fitur terbaru WhatsApp ini, tapi WaBetaInfo memastikan fitur Disappearing Mode akan segera tersedia pada pembaruan WhatsApp berikutnya.</p>\r\n\r\n<p>Selain itu, Fitur Disappearing Mode adalah pengembangan dari fitur Disappearing Messages yang dapat menghapus pesan dalam percakapan pribadi atau grup setelah tujuh hari.</p>\r\n\r\n<p>Sementara fitur Disappearing Mode akan membuat pesan terhapus secara otomatis baik personal maupun grup dalam 24 jam.</p>\r\n\r\n<p>Saat fitur Disappearing Mode diaktifkan maka fitur Disappearing Messages akan berlaku untuk pesan baru. Sehingga pengguna tak perlu lagi mengaktifkan fitur disappearing message secara manual atau satu per satu di setiap pesan pribadi atau grup WhatsApp.</p>\r\n\r\n<p>Sedangkan fitur Disappearing Messages yang diluncurkan pada November 2020 ditujukan agar pengguna bisa lebih menikmati privasi dengan menyetel waktu tertentu agar pesan dapat terhapus.</p>\r\n\r\n<p>Fitur itu membuat pesan akan terhapus dalam 7 hari meski pengguna tidak membuka WhatsApp dalam 7 hari.</p>\r\n\r\n<p>Kemudian, pesan tidak akan muncul di percakapan tersebut jika meneruskan pesan kepada pengguna yang tidak menonaktifkan fitur itu. Selain itu, pesan yang dicadangkan akan terhapus jika pesan dicadangkan sebelum pesan menghilang.</p>\r\n', 'berita8.jpeg', 'Garay', '2021-05-30', NULL, NULL),
(32, 27, 'California, Lagu Baru Rich Brian Cs Soal Mimpi Anak Indonesia', 13, '<p>Rapper Rich Brian, NIKI, dan Warren Hue resmi merilis lagu terbaru bertajuk California secara digital. Lagu tersebut mengisahkan tentang mimpi anak-anak Indonesia yang menjadi kenyataan.</p>\r\n\r\n<p>Anak-anak Indonesia yang dimaksud adalah mereka bertiga yang memutuskan menekuni karier bermusik di Amerika Serikat. Warren menjadi musisi Indonesia terbaru yang bergabung dengan label rekaman 88 Rising.</p>\r\n\r\n<p>&quot;Apakah itu akting, menjadi ilmuwan, atau arsitek, atau keduanya, semua bisa dicapai. Dalam hal ini NIKI, Warren, dan saya mencapai hal yang sama, yaitu berkarier di California, dengan suka dan duka,&quot; kata Brian dalam siaran pers yang dikutip NME.</p>\r\n\r\n<p>Dalam video musik California terlihat sejumlah kegiatan keluarga Asia di California. Mulai dari makan, membersihkan rumah, bermain, jalan-jalan di sebuah taman, sampai berolahraga bersama.</p>\r\n\r\n<p>Terlihat pula Brian, NIKI, dan Warren yang sedang memainkan congklak di sebuah taman. Congklak merupakan permainan tradisional Indonesia dan sejumlah negara-negara Asia Tenggara.</p>\r\n\r\n<p>Selain dari visual, kehidupan orang Asia di California juga dijelaskan secara tidak langsung lewat bagian lirik yang ditulis Warren. Ia mendeskripsikan California dari perspektifnya sebagai orang Asia.</p>\r\n\r\n<p>&quot;Proses pembuatan lagu ini menarik karena menunjukkan perspektif tiga orang Indonesia berbicara tentang Amerika dan ini proyek yang menyenangkan,&quot; kata Warren.</p>\r\n\r\n<p>California akan masuk dalam album kompilasi bertajuk 88 Rising Head In The Clouds 3. Album kompilasi pertama bertajuk Head In The Clouds dirilis pada 2018 dan album kedua bertajuk Head In The Clouds 2 dirilis pada 2019.</p>\r\n', 'berita9.jpeg', 'Rafly', '2021-05-31', NULL, NULL),
(33, 27, 'ARMY BTS Jadi Fanbase Terbaik di iHeartRadio Music Awards', 16, '<p>Fan BTS&nbsp;atau ARMY kembali memenangkan kategori Best Fan Army dalam iHeartRadio Music Awards 2021. Kemenangan itu selalu diraih dalam empat tahun berturut-turut. Best Fan Army termasuk kategori yang ditentukan berdasarkan voting masyarakat.</p>\r\n\r\n<p>Dalam kategori tersebut, ARMY BTS mengalahkan BLINK (BLACKPINK), Beliebers (Justin Bieber), Swifties (Taylor Swift), termasuk Agnation (Agnez Mo).</p>\r\n\r\n<p>Selain Best Fan Army, BTS juga memenangkan kategori Best Music Video berkat Dynamite. Lagu tersebut merupakan single berbahasa Inggris pertama boyband asal Korea Selatan tersebut.</p>\r\n\r\n<p>Sejumlah rekor juga dicatat lewat Dynamite, seperti menjadi musisi Korea pertama yang menguasai tangga lagu Hot 100 Billboard dan langsung bertahan di sana dua pekan berturut-turut hingga masuk nominasi Grammy Awards 2021.</p>\r\n\r\n<p>Dalam iHeartRadio Music Awards 2021, BTS juga memenangkan kategori Best Music Video Choreography berkat lagu Dynamite. Sehingga, mereka memenangkan tiga dari empat nominasi.</p>\r\n\r\n<p>&quot;Tidak bisa dipercaya kami membawa pulang piala Best Music Video dan Best Fan Army. Kami tidak bisa mendapatkan itu tanpa kalian (fan),&quot; kata RM dalam video singkat yang diunggah iHeart Radio.</p>\r\n\r\n<p>&quot;Kami juga mau mengucapkan selamat kepada teman kami, Son Sun-deuk, karena memenangkan kategori Favorite Music Video Choreography untuk Dynamite.&quot;</p>\r\n\r\n<p>Beberapa hari sebelumnya, BTS membawa pulang empat piala Billboard Music Awards 2021. Dalam acara itu, mereka memenangkan piala Top Selling Song, Top/Duo Group, Top Song Sales Artist, serta Top Social Artist.</p>\r\n\r\n<p>Tak hanya menyabet sederet penghargaan bergengsi, BTS juga tampil membawakan lagu terbarunya Butter di ajang Billboard Music Awards 2021.</p>\r\n\r\n<p>Pada Jumat (28/5), BTS juga merilis versi terbaru dari single Butter. Versi baru tersebut dipastikan lebih hot dari versi original single berbahasa Inggris kedua mereka.</p>\r\n\r\n<p>Single Butter telah mencetak beberapa rekor seperti 20,9 juta streams di Spotify pada hari pertama perilisan. Video musik Butter juga mendapatkan 108,2 juta views di YouTube hanya dalam 24 jam. Angka itu menyalip capaian Dynamite yakni 101,1 juta views ketika baru dirilis.</p>\r\n', 'berita10.jpeg', 'Shalsa', '2021-05-31', NULL, NULL),
(34, 24, 'Teh Asal Indonesia Diklaim Lebih Sehat dari Teh Impor', 18, '<p>Mungkin sudah banyak yang tahu bahwa<strong>&nbsp;</strong>minum<strong>&nbsp;</strong>teh berdampak baik bagi kesehatan. Tapi, tahukah Anda bahwa teh dari perkebunan Indonesia jauh lebih menyehatkan dari teh&nbsp;impor?</p>\r\n\r\n<p>Sebuah studi yang dilakukan Lembaga Ilmu Pengetahuan Indonesia (LIPI) pada 2018 lalu mencoba membandingkan kandungan teh asal Indonesia dengan teh impor yang banyak beredar.</p>\r\n\r\n<p>Salah satu peneliti sekaligus ahli riset perkebunan Nusantara, Rohayati Suprihatini mengatakan, hasilnya teh Indonesia terbukti memiliki kandungan antioksidan yang lebih tinggi dibanding teh impor.</p>\r\n\r\n<p>&quot;Teh Indonesia lebih menyehatkan. Mungkin banyak orang enggak tahu&nbsp;<em>benefit</em>&nbsp;teh. Padahal, teh Indonesia kandungan antioksidannya tinggi yang paling tinggi,&quot; kata Rohayati, beberapa waktu lalu.</p>\r\n\r\n<p>Teh berasal dari tanaman&nbsp;<em>Camellia sinensis</em>. Tanaman ini biasanya mengandung 5-8 persen antioksidan. Namun, kandungan rata-rata teh Indonesia berkisar di angka 13 persen. Teh premium Indonesia,&nbsp;<em>white tea</em>, bahkan punya kadar antioksidan hingga 16 persen.</p>\r\n\r\n<p>&quot;Teh di Indonesia ini punya kandungan antioksidan tinggi, paling rendah 13 persen, ada yang sampai 16,8 persen. Jadi, jauh lebih unggul dibanding jenis teh lain,&quot; katanya.</p>\r\n\r\n<p>Rohayati juga menyebut, kandungan katekin pada teh asal perkebunan Indonesia ditemukan lebih tinggi. Sebagai informasi, katekin adalah kelompok senyawa antioksidan yang biasa ditemukan pada tanaman. Katekin pada teh didapat dari daun teh. Senyawa ini tidak memiliki warna, namun sangat berpengaruh pada warna rebusan teh serta aroma yang dihasilkan.</p>\r\n\r\n<p>Karena kandungan antioksidan yang tinggi, teh Indonesia bakal lebih efektif menangkal radikal bebas yang masuk tubuh. Teh dari perkebunan teh Indonesia juga lebih ampuh melawan kanker.</p>\r\n\r\n<p>&quot;The International Society of Antioxidant in Nutrition and Health bahkan mengaku bahwa teh Indonesia punya&nbsp;<em>health benefit</em>&nbsp;lebih, karena tadi, antioksidan yang tinggi,&quot; tuturnya.</p>\r\n\r\n<p>Rohayati juga menegaskan bahwa meskipun teh kemasan terkadang menggunakan campuran daun dan batang teh, namun kandungan antioksidannya tetap tinggi. Bahkan di atas 8 persen.</p>\r\n\r\n<p>&quot;Biasanya semakin hitam teh, itu semakin bagus. Coba kalau buka teh celup, lihat apakah ada yang cokelat-cokleatnya? Itu berarti dia pakai batang teh sebagai campuran. Tapi, enggak apa-apa, meski pakai batang, tetap kandungan antioksidannya lebih tinggi dari teh impor,&quot; ucapnya.</p>\r\n\r\n<h3><strong>Lebih Kaya Flavonoid</strong></h3>\r\n\r\n<p>Kepala Pusat Studi Biofarmaka Tropika dari LPPM IPB, Irmanida Batubara mengatakan, teh dari perkebunan teh di Indonesia kaya akan kandungan flavonoid.</p>\r\n\r\n<p>Flavonoid termasuk dalam senyawa polifenol. Pada tubuh, polifenol bekerja sebagai agen antioksidan dan penangkal racun. Konsumsi flavonoid berkala pada tubuh bisa mencegah kerusakan sel akibat paparan radikal bebas, serta menjaga metabolisme tubuh.</p>\r\n\r\n<p>Flavonoid sendiri memiliki banyak jenis, beberapa di antaranya katekin, theaflavins, thearubigins, dan procyanidins. Seluruh jenis flavonoid ini baik untuk kesehatan tubuh.</p>\r\n\r\n<p>&quot;Setiap teh punya kandungan flavonoid berbeda-beda, tapi teh Indonesia punya kandungan itu semua,&quot; katanya</p>\r\n', 'berita11.jpeg', 'Zahran', '2021-05-31', NULL, NULL),
(35, 24, 'Perangkat Sinar UV C Ampuh Bunuh Virus Corona, Benarkah?', 15, '<p>&nbsp;</p>\r\n\r\n<p>Banyak cara untuk mencegah paparan virus<strong> </strong>corona penyebab Covid-19.Salah satunya adalah dengan perangkat disinfektan yang dilengkapi dengan sinar UV C.</p>\r\n\r\n<p>Perangkat ini ditemukan di beberapa tempat. Misalnya saja di pusat perbelanjaan. Perangkat ini biasanya digunakan untuk mensterilkan busana yang dijual saat akan dicoba pembeli.</p>\r\n\r\n<p>Sinar UV C diklaim mampu membunuh virus dan bakteri, termasuk virus corona. Benarkah demikian?</p>\r\n\r\n<p>Pendiri komunitas Partner Sehatku, dokter Mutiara Lirendra mengonfirmasi perangkat sterilisasi dengan sinar UV C nyatanya efektif membunuh bakteri dan virus.</p>\r\n\r\n<p>&quot;Pada dasarnya perangkat dengan sinar UV C sering dipakai di rumah sakit untuk mensterilisasi alat-alat medis,&quot; kata Mutiara, dalam konferensi pers pada Selasa (25/5), melansir&nbsp;<em>Antara</em>.</p>\r\n\r\n<p>Mutiara menjelaskan, sinar UV C merupakan sinar ultraviolet dengan gelombang paling pendek, namun memiliki tingkat energi tertinggi. Radiasi UV C sepenuhnya disaring oleh lapisan ozon sehingga tidak bisa tembus ke bumi.</p>\r\n\r\n<p>Sinar UV C tidak bisa didapatkan secara alami dari sinar matahari, melainkan harus direkayasa menggunakan alat tertentu.</p>\r\n\r\n<p>&quot;Menurut jurnal terbaru, sinar UV C bisa digunakan untuk membunuh bakteri dan virus. Sinar ini dinilai sangat baik dalam menghancurkan bahan genetik partikel virus,&quot; katanya.</p>\r\n\r\n<p>Gelombang yang terkandung dalam sinar tersebut disebut bisa menonaktifkan mikroorganisme dengan cara menghancurkan asam nukleat dan mengganggu DNA mereka, sehingga bakteri dan virus tidak bisa melakukan fungsi vitalnya.</p>\r\n\r\n<p>Kendati demikian, penggunaan sinar UV C juga harus dilakukan berhati-hati karena bisa berbahaya jika mengenai kulit atau mata.</p>\r\n\r\n<p>Namun, meski perangkat tersebut ramai digunakan, hingga saat ini Organisasi Kesehatan Dunia (WHO) mengatakan bahwa belum ada sinar UV, termasuk UV C, yang bisa membunuh SARS-CoV-2.</p>\r\n\r\n<p>Sementara itu, Food and Drug Administration (FDA) mengakui kemampuan sinar UV C untuk mendisinfeksi jenis virus corona. Namun, belum ada bukti ilmiah yang memperlihatkan manfaat UV C untuk membunuh SARS-CoV-2 secara spesifik.</p>\r\n\r\n<p>Sebagai langkah terbaik, terapkan protokol kesehatan sebaik mungkin untuk mencegah penularan Covid-19. Tak lupa mengenakan masker, mencuci tangan, menjaga jarak, menjauhi kerumunan, dan membatasi mobilisasi serta interaksi sejauh ini menjadi cara paling ampuh untuk menghalau masuknya virus corona penyebab Covid-19 ke dalam tubuh.</p>\r\n', 'berita12.jpeg', 'Dena', '2021-05-31', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori_berita` int(11) NOT NULL,
  `kategori_berita` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori_berita`, `kategori_berita`) VALUES
(23, 'News'),
(24, 'Health'),
(25, 'Lifestyle'),
(26, 'Sci-Tech'),
(27, 'Music');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `penulis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `penulis`) VALUES
(13, 'Galuh Putri'),
(14, 'Dian Nugraheni'),
(15, 'Krisna Muljawan'),
(16, 'M. Shaff Rizal'),
(17, 'Ibnu Kurniawan'),
(18, 'Hafizh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(11) NOT NULL,
  `tag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tag`
--

INSERT INTO `tag` (`id_tag`, `tag`) VALUES
(23, 'Lebaran 2021'),
(24, 'Covid-19'),
(25, 'Ibu dan Anak'),
(26, 'Sayur Organik'),
(27, 'Musik'),
(28, 'Selebritas'),
(29, 'DPR'),
(30, 'Ekonomi'),
(31, 'Kesehatan'),
(32, 'Olahraga'),
(33, 'Kuliner'),
(34, 'Media Sosial'),
(35, 'Teknologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag_artikel`
--

CREATE TABLE `tag_artikel` (
  `id_tag_artikel` int(11) NOT NULL,
  `id_artikel` int(11) DEFAULT NULL,
  `id_tag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tag_artikel`
--

INSERT INTO `tag_artikel` (`id_tag_artikel`, `id_artikel`, `id_tag`) VALUES
(133, 24, 24),
(134, 24, 29),
(135, 25, 26),
(136, 25, 28),
(137, 26, 24),
(138, 27, 31),
(139, 27, 32),
(140, 28, 25),
(141, 29, 33),
(142, 30, 34),
(143, 30, 35),
(144, 31, 34),
(145, 31, 35),
(146, 32, 27),
(147, 32, 28),
(148, 33, 27),
(149, 33, 28),
(150, 34, 31),
(151, 35, 24),
(152, 35, 31),
(153, 35, 35);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `level` varchar(30) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Muhammad Zahran Dziqriansyah', 'zahrannd@student.ub.ac.id', 'zahran', 'e9fe6002d7da04cd829de5dc757a0c91', 'Superadmin', 'zahran.jpg'),
(21, 'Moh. Ubaidillah Rafly Munir', 'm.ubaidillah133@student.ub.ac.id', 'rafly', '0cfeca41e1bf14cfae765b2edd2786b0', 'Admin', 'ubed.jpg'),
(22, 'Garay Surya Ramadhan', 'garaysuryar@student.ub.ac.id', 'garay', 'acb54dbea4db12d5a2172f5f9bd13d40', 'Superadmin', 'garay.jpg'),
(23, 'Shalsabilla Aurelia Sulfa Siswanto', 'shalsabillaaurelia@student.ub.ac.id', 'shalsa', 'e8c34a3b0e4d0eba8b6ed8e3ecd9e50c', 'Admin', 'shalsa.jpg'),
(24, 'Dena Niranjana Achmal', 'denaniranjana@student.ub.ac.id', 'dena', '89f864f2f05d015c3c87e670bfa1a0de', 'Superadmin', 'dena.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`) USING BTREE,
  ADD KEY `kategori_buku` (`id_kategori_berita`),
  ADD KEY `penerbit_buku` (`id_penulis`);

--
-- Indeks untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori_berita`);

--
-- Indeks untuk tabel `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indeks untuk tabel `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indeks untuk tabel `tag_artikel`
--
ALTER TABLE `tag_artikel`
  ADD PRIMARY KEY (`id_tag_artikel`),
  ADD KEY `tag_tag` (`id_tag`),
  ADD KEY `buku_buku` (`id_artikel`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tag_artikel`
--
ALTER TABLE `tag_artikel`
  MODIFY `id_tag_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori_berita`) REFERENCES `kategori_berita` (`id_kategori_berita`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_ibfk_2` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id_penulis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tag_artikel`
--
ALTER TABLE `tag_artikel`
  ADD CONSTRAINT `tag_artikel_ibfk_1` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tag_artikel_ibfk_2` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
