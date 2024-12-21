-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 12:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obat`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `id_rempah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `deskripsi`, `link`, `gambar`, `id_rempah`) VALUES
(1, 'Manfaat daun pandan untuk pencernaan', 'Daun pandan juga bermanfaat bagi kesehatan pencernaan. Senyawa bioaktif di dalamnya membantu meredakan perut kembung, gangguan pencernaan, serta sakit perut.', 'https://www.rri.co.id/lain-lain/1044213/khasiat-tersembunyi-daun-pandan-menurut-penelitian', 'https://cdn.rri.co.id/berita/Fak_Fak/o/1728880494790-bush-262735_960_720_DAUN_PANDAN_SUMBER_FOTO_PIXABAY/h60372xct0eaqpr.jpeg', 22),
(2, '10 Manfaat Jahe Bagi Kesehatan Tubuh', 'Jahe adalah salah satu rempah yang telah digunakan selama berabad-abad dalam berbagai tradisi pengobatan.', 'https://fahum.umsu.ac.id/blog/10-manfaat-jahe-bagi-kesehatan-tubuh/', 'https://fahum.umsu.ac.id/blog/wp-content/uploads/2024/10/10-manfaat-jahe-bagi-kesehatan-tubuh.jpg', 2),
(3, 'Manfaat Temulawak Untuk Kesehatan Tubuh', 'Temulawak (Curcuma Zanthorrhiza) Adalah Tanaman Herbal Asli Indonesia Yang Telah Lama Dimanfaatkan Sebagai Bahan Dasar Obat-Obatan Tradisional Dan Produk Kecantikan', 'https://fahum.umsu.ac.id/blog/manfaat-temulawak-untuk-kesehatan-tubuh/', 'https://fahum.umsu.ac.id/blog/wp-content/uploads/2024/06/manfaat-temulawak-untuk-kesehatan-tubuh.jpg', 14),
(4, '10 Manfaat Kunyit yang Luar Biasa, Menyehatkan Pencernaan hingga Bantu Diet\r\n', ' Kunyit, atau Curcuma longa, adalah rempah yang telah digunakan selama ribuan tahun dalam dunia kuliner dan pengobatan tradisional. Rempah berwarna kuning cerah ini terkenal dengan senyawa aktif bernama kurkumin, yang memiliki banyak manfaat kesehatan.', 'https://www.ntvnews.id/hiburan/0126814/10-manfaat-kunyit-yang-luar-biasa-menyehatkan-pencernaan-hingga-bantu-diet', 'https://assets.ntvnews.id/crop/0x0:0x0/690x388/photo/2024/04/19/2009780214.jpg', 1),
(5, '4 Manfaat Asam Jawa yang Tidak Seasam Rasanya\n', 'Sebagai salah satu rempah pilihan yang sering digunakan dalam bumbu masakan, asam jawa ternyata menawarkan segudang manfaat untuk kesehatan Anda. Penasaran apa saja manfaat asam jawa? \n\nMeski rasanya sedikit asam, tanaman asam jawa dipercaya memiliki banyak manfaat yang sayang jika dilewatkan. Berkat kandungan nutrisi di dalamnya, asam jawa banyak digunakan untuk mencegah dan mengatasi berbagai masalah kesehatan.\n\n', 'https://www.alodokter.com/manfaat-asam-jawa-tidak-seasam-rasanya', 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1638927243/attached_image/manfaat-asam-jawa-tidak-seasam-rasanya-0-alodokter.jpg', 20),
(6, '15 Manfaat Daun Mint dan Cara Mengolahnya yang Baik untuk Kesehatan\r\n', 'Daun mint sering digunakan sebagai penghias makanan, mulai dari kue, masakan, hingga salad. Namun, tak jarang tanaman ini juga ditambahkan ke dalam minuman, seperti teh, lemon, atau soda.\r\n\r\n', 'https://www.klikdokter.com/gaya-hidup/diet-nutrisi/manfaat-sehat-di-balik-daun-mint-yang-menghiasi-makanan-anda', 'https://img-cdn.medkomtek.com/TeaxzEZMccMt4dxN3JrIx-_N788=/730x411/smart/filters:quality(100):format(webp)/article/HgaDwve2pAXWhva-P-n8B/original/1687225516-daun%20mint.jpg?w=256&q=100', 21),
(7, '9 Manfaat Lada Hitam bagi Kesehatan\r\n', 'Manfaat lada hitam tidak hanya sekadar sebagai bumbu masakan, tetapi juga baik untuk kesehatan tubuh. Tidak hanya itu, rempah ini juga memiliki banyak manfaat berkat kandungan vitamin dan mineral di dalamnya.\r\n\r\n', 'https://www.alodokter.com/manfaat-lada-hitam-ternyata-bisa-melawan-kuman-dan-penyakit', 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1638865020/attached_image/manfaat-lada-hitam-ternyata-bisa-melawan-kuman-dan-penyakit-0-alodokter.jpg', 23),
(8, '9 Manfaat Ginseng untuk Kesehatan Tubuh\r\n', 'Manfaat ginseng untuk kesehatan tubuh telah dikenal sejak dahulu. Tanaman herba ini kerap digunakan sebagai pengobatan tradisional untuk menurunkan kadar gula darah, meningkatkan daya tahan tubuh, hingga mengatasi disfungsi ereksi.\r\n\r\n', 'https://www.alodokter.com/fakta-di-balik-khasiat-ginseng', 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1615260273/attached_image/fakta-di-balik-khasiat-ginseng-0-alodokter.jpg', 24),
(9, 'Jadi Bumbu Andalan, Apa Saja Manfaat Lengkuas untuk Kesehatan?\r\n', 'Lengkuas atau sering juga disebut laos adalah tanaman rempah yang berkerabat dekat dengan jahe dan kunyit.\r\n\r\n', 'https://amp.kompas.com/tren/read/2024/11/21/160000965/jadi-bumbu-andalan-apa-saja-manfaat-lengkuas-untuk-kesehatan-', 'https://asset.kompas.com/crops/R148O2-XRhju9ENyKt6qzZsGquA=/0x0:1000x667/750x500/data/photo/2023/10/29/653def034d066.jpg', 3),
(10, 'Daun Semanggi, Manfaatnya Untuk Kesehatan Tubuh\r\n', 'Daun Semanggi adalah salah satu jenis tumbuhan air yang termasuk ke dalam keluarga paku-pakuan. Tumbuhan ini memiliki bentuk daun yang khas, yaitu menyerupai payung dengan empat kelopak anak daun yang berhadapan.\r\n\r\n\r\n', 'https://umsu.ac.id/health/daun-semanggi-manfaatnya-untuk-kesehatan-tubuh/', 'https://umsu.ac.id/health/wp-content/uploads/2024/02/Daun-semanggi-manfaatnya-untuk-kesehatan-tubuh-1140x570.jpg', 25),
(11, 'Manfaat Kayu Manis dalam Turunkan Gula Darah, Bantu Penderita Diabetes\r\n', 'Kayu manis telah dikenal luas sebagai salah satu rempah dengan berbagai manfaat kesehatan, terutama dalam membantu mengontrol kadar gula darah, yang sangat penting bagi penderita diabetes.\r\n', 'https://www.kompas.com/food/read/2024/10/11/083100375/manfaat-kayu-manis-dalam-turunkan-gula-darah-bantu-penderita-diabetes', 'https://asset.kompas.com/crops/nvGKeeCQupJxz-U_dD3-ZdXNAJg=/47x32:612x408/1200x800/data/photo/2023/11/08/654b51c383317.jpeg', 4),
(12, 'Manfaat Air Rebusan Ketumbar untuk Mengatasi Diabetes hingga Kolesterol\r\n', 'Ketumbar adalah salah satu rempah yang sering digunakan dalam dunia kuliner dan kesehatan. Baik biji maupun daunnya, ketumbar memiliki aroma khas yang tidak hanya menambah cita rasa unik pada masakan, tetapi juga menawarkan berbagai manfaat kesehatan yang signifikan.\r\n\r\n', 'https://www.fimela.com/health/read/5830476/manfaat-air-rebusan-ketumbar-untuk-mengatasi-diabetes-hingga-kolesterol', 'https://cdn1-production-images-kly.akamaized.net/cjMdFP1uFSD_FPPmRhDIfbl7CYo=/680x383/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/5032918/original/006628900_1733195637-Dejte_si___eck___seno__Sn_______cholesterol__zrychl___pohyb_st__ev_a_zklidn___i_ka__el.jpg', 5),
(13, 'Manfaat Rempah Buah Pala dari Kaya Antioksidan, Turunkan Gula Darah, hingga Buat Kesehatan jantung\n', 'Salah satu hal yang menarik para penjelajah dunia untuk berlayar ke Indonesia adalah rempah-rempah. Pala menjadi salah satu rempah favorit para penjajah dari mulai portugis hingga Belanda. Hal ini karena aroma buah pala dan rasanya yang unik membuat rempah ini mahal dipasaran. Pala digunakan sebagai bahan kosmetik dan dijual sebagai mentega pala, juga diambil minyaknya untuk essential oil.', 'https://www.tempo.co/gaya-hidup/manfaat-rempah-buah-pala-dari-kaya-antioksidan-turunkan-gula-darah-hingga-buat-kesehatan-jantung-386287', 'https://statik.tempo.co/data/2016/09/21/id_541137/541137_650.jpg', 6),
(14, '10 Manfaat Kapulaga Bagi Tubuh yang Jarang Diketahui, Bantu Turunkan Berat Badan\n', ' Kapulaga merupakan rempah aromatik yang sering digunakan dalam masakan dan minuman. Kapulaga ternyata memiliki berbagai manfaat kesehatan yang luar biasa. Dikenal sebagai \"ratu rempah-rempah,\" kapulaga tidak hanya menambah cita rasa pada hidangan tetapi juga kaya akan antioksidan dan nutrisi penting. Kapulaga ini telah digunakan dalam pengobatan tradisional selama berabad-abad.', 'https://www.liputan6.com/hot/read/5602395/10-manfaat-kapulaga-bagi-tubuh-yang-jarang-diketahui-bantu-turunkan-berat-badan', 'https://cdn0-production-images-kly.akamaized.net/jGqgKQUSlPxnMjNJVn_NJ8gQA9c=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4399793/original/023178500_1681804337-the-matter-of-food--9LBiiW3xm4-unsplash.jpg', 7),
(15, 'Ketahui 6 Manfaat Kayu Secang: Antioksidan hingga Antibakteri\n', 'Secang (Caesalpinia Sappan L) adalah salah satu tumbuhan herbal dengan segudang manfaat yang dapat ditemukan di Indonesia. Secang merupakan tumbuhan semak atau perdu yang kayunya dapat mulai dipanen sejak umur 1 hingga 2 tahun.', 'https://tirto.id/ketahui-6-manfaat-kayu-secang-antioksidan-hingga-antibakteri-gvSg', 'https://mmc.tirto.id/image/otf/970x0/2022/09/06/istock-1287526291_ratio-16x9.jpg', 8),
(16, '10 Manfaat Lada untuk Kesehatan\n', 'Lada merupakan salah satu bumbu dapur yang sering jadi andalan. Tidak hanya digunakan untuk penyedap rasa, ada banyak manfaat lada bagi kesehatan yang menarik untuk diketahui.', 'https://kumparan.com/berita-hari-ini/10-manfaat-lada-untuk-kesehatan-1zyvBKQRysC', 'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01gv34gtn691tg8hdaxb26ys0k.jpg', 9),
(17, 'Manfaat Bunga Lawang untuk Kesehatan Tubuh Anda\n', 'Bunga lawang (star anise) adalah salah satu rempah yang biasa digunakan untuk membuat semur, kari, dan sup. Meski ukurannya kecil, rempah ini ternyata punya banyak kandungan nutrisi yang bermanfaat untuk kesehatan. \n\n', 'https://www.klikdokter.com/gaya-hidup/diet-nutrisi/manfaat-bunga-lawang-untuk-kesehatan-tubuh-anda', 'https://img-cdn.medkomtek.com/3ZDf1F23fp9fe5ZrcM20IxH7t84=/730x411/smart/filters:quality(100):format(webp)/article/O4M9bbAfvNetNfGs6Dw_i/original/065484000_1614850050-manfaat-bunga-lawang-untuk-kesehatan-tubuh-anda.jpg?w=256&q=100', 10),
(18, '12 Manfaat Kencur bagi Kesehatan\n', 'encur telah digunakan dalam pengobatan tradisional selama berabad-abad, terutama dalam pengobatan herbal untuk mengatasi berbagai masalah kesehatan. Lantas, apa saja manfaat tanaman yang memiliki aroma dan rasa yang cukup unik dan khas tersebut?', 'https://www.msn.com/id-id/gayahidup/berita/12-manfaat-kencur-bagi-kesehatan/ar-AA1vDJNF', 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA1vDAqb.img?w=650&h=372&m=6', 11),
(19, 'Dahsyat, 6 Manfaat Minyak Kemiri Bagi Kesehatan Rambut dan Cara Menggunakannya\n', ' Khasiat minyak kemiri untuk rambut sangat beragam, salah satunya yaitu meningkatkan kekuatan rambut dari akar hingga ujungnya.', 'https://www.jawapos.com/lifestyle/014811182/dahsyat-6-manfaat-minyak-kemiri-bagi-kesehatan-rambut-dan-cara-menggunakannya', 'https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/01/2024/06/24/FotoJet-22-1310728473.jpg', 12),
(20, 'Sering Dianggap Sepele, Ini Manfaat Daun Salam bagi Kesehatan\n', ' Daun salam adalah salah satu bahan dapur yang kerap digunakan sebagai penyedap alami dalam masakan khas Indonesia. Meski sering dianggap sepele, daun ini menyimpan berbagai manfaat luar biasa bagi kesehatan. Selain aromanya yang khas, daun salam juga kaya akan senyawa aktif yang baik untuk tubuh.', 'https://www.beritasatu.com/network/gemapos/400710/sering-dianggap-sepele-ini-manfaat-daun-salam-bagi-kesehatan', 'https://cms.gemapos.co.id/image-post/cG9zdHMvRGF1biBTYWxhbSAxIDIwMjQtMTItMTkuanBn/450/280', 13),
(21, 'Potensi Manfaat Tanaman Serai untuk Menurunkan Kolesterol Jahat', 'Serai (Cymbopogon citratus) adalah tanaman seperti rumput tinggi dan bertangkai kurus yang tumbuh subur di lingkungan tropis atau semitropis.', 'https://www.kompas.com/tren/read/2024/05/08/203000065/potensi-manfaat-tanaman-serai-untuk-menurunkan-kolesterol-jahat', 'https://asset.kompas.com/crops/q1HweiybhFVICZVO7YHV0mgYSPQ=/0x0:608x405/750x500/data/photo/2024/05/07/6639ddf0d69ba.jpeg', 15),
(22, 'Andaliman: Rempah Ajaib dari Tanah Batak dengan Beragam Manfaat Kesehatan\n', 'Andaliman, sering disebut sebagai merica atau lada Batak, ternyata tidak hanya memberikan cita rasa unik pada masakan, tetapi juga memiliki sejumlah manfaat kesehatan yang luar biasa.', 'https://marwahkepri.com/2023/12/11/andaliman-rempah-ajaib-dari-tanah-batak-dengan-beragam-manfaat-kesehatan/', 'https://i0.wp.com/marwahkepri.com/wp-content/uploads/2023/12/anda.png?w=470&ssl=1', 16),
(23, 'Jarang Ada yang Tahu, Ternyata Tanaman Rempah Kemukus Sangat Bermanfaat Bagi Kesehatan Tubuh Lho\n', ' Kemukus adalah salah satu rempah yang masuk dalam keluarga sirih-sirihan yang bisa digunakan untuk bumbu dapur.', 'https://www.jawapos.com/kesehatan/014860146/jarang-ada-yang-tahu-ternyata-tanaman-rempah-kemukus-sangat-bermanfaat-bagi-kesehatan-tubuh-lho', 'https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/01/2024/07/13/Screenshot-2024-07-13-211906-3974767999.png', 17),
(24, 'Dijuluki \'Emas Hijau\', Ini 10 Manfaat Vanili Bagi Kesehatan\n', 'Vanili, rempah yang kaya akan aroma manis yang menggoda, telah menjadi bagian tak terpisahkan dari masakan dan manufaktur produk-produk parfum dan kosmetik.\n', 'https://www.tempo.co/gaya-hidup/dijuluki-emas-hijau-ini-10-manfaat-vanili-bagi-kesehatan--163269', 'https://statik.tempo.co/data/2022/03/29/id_1098806/1098806_720.jpg', 18),
(25, 'Manfaat Cengkeh Bagi Kesehatan\n', 'Manfaat cengkeh tidak hanya sebagai bahan campuran dalam pembuatan rokok. Rempah ini juga sering digunakan dalam pembuatan makanan dan minuman, bahkan kerap dimanfaatkan sebagai obat tradisional untuk mengatasi berbagai penyakit. \n\n', 'https://www.tanyapepsodent.com/tips-kesehatan-gigi/produk-perawatan-gigi/khasiat-cengkeh-yang-tidak-banyak-diketahui.html', 'https://assets.unileversolutions.com/v1/78301567.jpg?', 19);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Daun'),
(2, 'Akar dan Rimpang'),
(3, 'Biji'),
(4, 'Batang'),
(5, 'Kulit dan kayu'),
(6, 'bunga'),
(7, 'buah');

-- --------------------------------------------------------

--
-- Table structure for table `khasiat`
--

CREATE TABLE `khasiat` (
  `id_khasiat` int(11) NOT NULL,
  `nama_khasiat` text NOT NULL,
  `id_rempah` int(11) NOT NULL,
  `nama_keluhan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khasiat`
--

INSERT INTO `khasiat` (`id_khasiat`, `nama_khasiat`, `id_rempah`, `nama_keluhan`) VALUES
(1, 'Anti-inflamasi, membantu pencernaan, meningkatkan imun', 1, 'inflamasi, pencernaan, imun'),
(2, 'Menghangatkan tubuh, mengatasi mual, meningkatkan imun\r\n', 2, 'kedinginan, mual, imun'),
(3, 'Mengatasi gangguan lambung, masuk angin, meningkatkan nafsu makan\r\n', 3, 'gangguan lambung, masuk angin, nafsu makan'),
(4, 'Menurunkan gula darah, antioksidan\r\n', 4, 'gula darah, kurang antioksidan'),
(5, 'Melancarkan pencernaan, meningkatkan kesehatan jantung\r\n', 5, 'pencernaan, jantung'),
(6, 'Meningkatkan metabolisme, memberikan efek relaksasi\r\n', 6, 'metabolisme turun, stres'),
(7, 'Mengobati batuk dan pilek\r\n', 7, 'batuk, pilek'),
(8, 'Antioksidan, mengatasi diare\r\n', 8, 'kurang antioksidan, diare'),
(9, 'Menghangatkan tubuh, membantu pencernaan\r\n', 9, 'kedinginan, pencernaan'),
(10, 'Antioksidan, meningkatkan kekebalan tubuh\r\n', 10, 'kurang antioksidan, imunitas'),
(11, 'Mengobati batuk, meningkatkan stamina\r\n', 11, 'batuk, kurang stamina'),
(12, 'Menjaga kesehatan rambut, mengatasi masalah kulit\r\n', 12, 'masalah rambut, masalah kulit'),
(13, 'Mengontrol gula darah, membantu pencernaan\r\n', 13, 'gula darah, pencernaan'),
(14, 'Meningkatkan fungsi hati, melancarkan pencernaan\r\n', 14, 'masalah hati, pencernaan'),
(15, 'Menurunkan tekanan darah, menenangkan\r\n', 15, 'tekanan darah, stress'),
(16, 'Meningkatkan rasa masakan, antibakteri\r\n', 16, 'cita rasa, bakteri'),
(17, 'Mengatasi mual, meningkatkan fungsi pencernaan\r\n', 17, 'mual, pencernaan'),
(18, 'Antibakteri, antioksidan, antidepresan\r\n', 18, 'bakteri, kurang antioksidan, depresi'),
(19, 'Antiseptik, meredakan sakit gigi\r\n', 19, 'antiseptik, sakit gigi'),
(20, 'Melancarkan pencernaan, mengurangi rasa nyeri\r\n', 20, 'pencernaan, rasa nyeri'),
(21, 'Menenangkan pencernaan, mengatasi mual\r\n', 21, 'pencernaan, mual'),
(22, 'Meredakan stres, meningkatkan nafsu makan\r\n', 22, 'stress, nafsu makan'),
(23, 'Menghangatkan tubuh, melawan flu\r\n', 23, 'kedinginan, flu'),
(24, 'Meningkatkan energi, melawan kelelahan\r\n', 24, 'kelelahan, kurang stamina'),
(25, 'Menjaga kesehatan kulit, mengurangi stres\r\n', 25, 'masalah kulit, stress');

-- --------------------------------------------------------

--
-- Table structure for table `olahan`
--

CREATE TABLE `olahan` (
  `id_olahan` int(11) NOT NULL,
  `nama_olahan` varchar(100) NOT NULL,
  `resep` text NOT NULL,
  `id_rempah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `olahan`
--

INSERT INTO `olahan` (`id_olahan`, `nama_olahan`, `resep`, `id_rempah`) VALUES
(1, 'Minuman Herbal', 'Kunyit dapat diolah menjadi minuman herbal dengan cara merebus kunyit dengan air panas, lalu disaring. Untuk menambah rasa, Anda bisa menambahkan bahan alami lain seperti madu, lemon, jeruk nipis, jahe, atau minyak kelapa.', 1),
(2, 'Wedang jahe', 'Cuci jahe yang akan digunakan. \r\nIris atau parut jahe. \r\nRebus air hingga mendidih. \r\nMasukkan jahe ke dalam air mendidih dan diamkan selama 5-10 menit. \r\nSaring air jahe. \r\nTambahkan madu, perasan jeruk nipis, atau susu.', 2),
(3, 'Wedang Lengkuas', 'Siapkan 2-3 potongan lengkuas segar yang berukuran sekitar 2 inci. \r\nCuci bersih dan iris tipis-tipis. \r\nRebus lengkuas di dalam 2-3 gelas air di panci, tunggu selama 15-20 menit. \r\nSaring air rebusan lengkuas dan nikmati selagi hangat. \r\nTambahkan madu atau lemon untuk rasa lebih nikmat.', 3),
(4, 'Teh kayu Manis', 'Teh Kayu Manis adalah minuman hangat yang mudah dibuat dengan rasa manis alami dan aroma khas rempah. Untuk membuatnya, rebus batang kayu manis dalam air mendidih selama 5–10 menit hingga aroma kayu manis keluar. Tambahkan kantong teh pilihan Anda jika diinginkan, lalu rebus kembali selama 2–3 menit. Saring teh, tambahkan madu sebagai pemanis, dan sajikan selagi hangat. Cocok untuk dinikmati di pagi atau sore hari, minuman ini memberikan sensasi menenangkan sekaligus menghangatkan tubuh.', 4),
(5, 'Air Rebusan Ketumbar', '\"Air Rebusan Ketumbar adalah minuman herbal tradisional yang bermanfaat untuk mendukung kesehatan, seperti meningkatkan pencernaan dan membantu detoksifikasi tubuh. Untuk membuatnya, siapkan satu sendok makan biji ketumbar, lalu cuci bersih. Rebus biji ketumbar dalam 500 ml air selama 10–15 menit hingga air berubah warna dan mengeluarkan aroma khas ketumbar. Angkat, saring airnya, dan biarkan hangat. Anda dapat menambahkan sedikit madu atau perasan lemon untuk rasa. Minuman ini ideal diminum di pagi hari saat perut kosong untuk manfaat maksimal.\"', 5),
(6, 'Minuman Hangat Pala Madu', '\"Minuman Hangat Pala Madu adalah minuman herbal yang kaya manfaat untuk kesehatan, terutama untuk meredakan stres dan meningkatkan kualitas tidur. Cara membuatnya sangat mudah: Parut biji pala secukupnya, lalu rebus dengan segelas air selama 5–7 menit hingga aromanya terasa. Setelah mendidih, saring air rebusan pala ke dalam cangkir. Tambahkan madu sebagai pemanis alami dan aduk rata. Minuman ini sebaiknya disajikan hangat, ideal untuk diminum sebelum tidur untuk memberikan efek menenangkan tubuh dan pikiran.\"', 6),
(7, 'Air Rebusan Kapulaga', '\"Air Rebusan Kapulaga adalah minuman herbal sederhana yang kaya manfaat untuk kesehatan, terutama untuk pencernaan, meningkatkan imunitas, dan meredakan stres. Untuk membuatnya, siapkan 4–5 butir kapulaga, lalu memarkan ringan agar aroma dan rasa keluar maksimal. Rebus kapulaga dalam 2 gelas air selama 10–15 menit hingga air beraroma harum. Setelah itu, saring rebusan air, tambahkan madu atau perasan lemon jika diinginkan, dan sajikan hangat. Minuman ini cocok dinikmati pagi atau malam hari untuk menjaga kesehatan tubuh.\"', 7),
(8, 'Minuman Kesehatan Kayu Secang', 'Minuman Kesehatan Kayu Secang adalah minuman tradisional kaya manfaat yang terkenal dengan warna merah alaminya dan kandungan antioksidan yang tinggi. Untuk membuatnya, rebus beberapa potongan kayu secang dalam 500 ml air selama 10–15 menit hingga air berubah warna menjadi merah kecokelatan. Untuk rasa yang lebih nikmat, tambahkan jahe, daun pandan, atau kayu manis sesuai selera. Angkat, saring, dan sajikan selagi hangat. Minuman ini dipercaya dapat meningkatkan daya tahan tubuh, melancarkan peredaran darah, dan memberikan efek menenangkan.\"\r\n\r\n\r\n\r\n\r\n\r\n', 8),
(9, 'Minuman Herbal Lada Hangat', '\"Minuman Herbal Lada Hangat adalah ramuan tradisional yang bermanfaat untuk meningkatkan daya tahan tubuh dan meredakan flu. Untuk membuatnya, rebus dua cangkir air hingga mendidih, lalu tambahkan satu sendok teh lada hitam yang telah ditumbuk kasar. Masukkan satu ruas jahe yang telah digeprek dan satu batang serai untuk memperkaya rasa. Rebus selama 10 menit hingga aroma rempah keluar. Saring ramuan, tambahkan madu atau perasan lemon untuk pemanis alami, dan sajikan hangat. Minuman ini membantu menghangatkan tubuh, melancarkan pernapasan, serta memberikan rasa nyaman.\"', 9),
(10, 'Teh Rempah Bunga Lawang', 'Teh Rempah Bunga Lawang adalah minuman herbal yang menyehatkan dengan manfaat menyegarkan dan memperbaiki pencernaan. Untuk membuatnya, cukup siapkan bunga lawang, kayu manis, jahe, dan madu. Rebus bunga lawang bersama kayu manis dan jahe dalam air mendidih selama beberapa menit. Setelah itu, saring dan tambahkan madu untuk memberi rasa manis alami. Nikmati teh ini hangat untuk menghangatkan tubuh dan meningkatkan sistem kekebalan tubuh. Teh ini juga cocok untuk meredakan perut kembung dan melancarkan peredaran darah.', 10),
(11, 'Sari Kencur Sehat', 'Sari Kencur Sehat adalah minuman herbal yang terbuat dari kencur, rempah tradisional yang kaya manfaat. Untuk membuatnya, kencur segar diparut halus dan diperas untuk diambil sarinya. Campurkan sari kencur dengan sedikit air hangat dan tambahkan madu atau gula merah sebagai pemanis alami. Minuman ini dikenal baik untuk melancarkan pencernaan, meredakan perut kembung, dan meningkatkan stamina. Nikmati sari kencur ini secara rutin untuk kesehatan tubuh yang optimal.', 11),
(12, 'Kemiri Sehat Serut', 'Pertama, panggang kemiri yang sudah dikupas dalam wajan tanpa minyak hingga berwarna kecokelatan dan harum, tetapi jangan sampai gosong. Setelah itu, haluskan kemiri dengan menggunakan blender atau ulekan hingga berbentuk pasta. Pasta kemiri ini bisa dicampurkan dengan sedikit minyak zaitun atau minyak kelapa agar teksturnya lebih lembut.\r\n\r\nSebagai tambahan, campurkan bahan-bahan lain seperti kunyit atau jahe yang juga kaya akan manfaat kesehatan. Setelah bahan-bahan tercampur rata, kamu bisa menggunakan pasta kemiri ini untuk dijadikan saus salad, pelengkap untuk hidangan ayam atau ikan panggang, atau bahkan dicampurkan ke dalam smoothie untuk meningkatkan rasa dan kandungan gizinya. Olahan ini sangat baik untuk mendukung kesehatan kulit, memperkuat sistem kekebalan tubuh, serta meningkatkan kualitas rambut dan kesehatan jantung berkat kandungan asam lemak esensial dari kemiri.', 12),
(13, 'Sup Sehat Daun Salam\r\n\r\n', 'Sup sehat daun salam adalah pilihan sempurna untuk meningkatkan kesehatan tubuh. Daun salam dikenal memiliki banyak manfaat, seperti anti-inflamasi, membantu pencernaan, dan meningkatkan kekebalan tubuh. Untuk membuat sup ini, pertama-tama siapkan bahan-bahan segar seperti ayam tanpa kulit, wortel, kentang, daun salam segar, bawang putih, bawang merah, jahe, dan sedikit garam.\r\n\r\nMulailah dengan merebus ayam dalam air hingga mendidih. Setelah itu, masukkan bawang putih dan bawang merah yang sudah diiris halus, serta jahe yang sudah memarkan. Tambahkan juga wortel dan kentang yang telah dipotong dadu. Masukkan daun salam segar dan biarkan semua bahan meresap dalam rebusan selama beberapa waktu. Sesekali angkat busa yang muncul agar kaldu tetap jernih. Setelah bahan-bahan empuk, tambahkan sedikit garam atau bumbu alami lainnya sesuai selera.\r\n\r\nSup sehat daun salam ini tidak hanya menyegarkan, tetapi juga memberi banyak manfaat kesehatan, baik untuk tubuh yang lelah maupun untuk menjaga daya tahan tubuh Anda. Nikmati sup ini di waktu makan siang atau malam sebagai pilihan yang menyehatkan.', 13),
(14, 'Temulawak Infused Herbal Drink\r\n\r\n', 'Temulawak, yang dikenal dengan manfaat kesehatan luar biasa, dapat diolah menjadi minuman herbal yang menyegarkan. Minuman ini dapat membantu meningkatkan sistem pencernaan, mengurangi peradangan, dan meningkatkan daya tahan tubuh.\r\n\r\nCara mengolahnya cukup sederhana. Pertama, siapkan temulawak segar, lalu kupas kulitnya dan cuci bersih. Setelah itu, potong temulawak menjadi irisan tipis atau parut agar lebih mudah mengeluarkan sari. Rebus irisan temulawak dengan air dalam panci, tambahkan sedikit jahe untuk memberikan rasa hangat yang lebih. Anda bisa menambahkan daun pandan untuk aroma yang segar. Biarkan campuran tersebut mendidih selama beberapa menit hingga aroma harum mulai tercium. Setelah itu, saring airnya untuk memisahkan ampas temulawak dan bahan lainnya. Minuman herbal temulawak siap dinikmati. Untuk meningkatkan rasa, Anda bisa menambahkannya dengan madu atau gula kelapa sesuai selera. Nikmati minuman ini secara rutin untuk merasakan manfaat kesehatan dari temulawak.', 14),
(15, 'Serai Segar Detox', 'Pertama, siapkan batang serai segar, lalu cuci bersih. Ambil beberapa batang serai dan geprek atau potong menjadi beberapa bagian kecil untuk melepaskan aromanya. Didihkan air dalam panci, lalu tambahkan serai yang sudah disiapkan. Biarkan air mendidih selama sekitar 5-10 menit hingga aroma serai keluar dan air berubah menjadi sedikit kekuningan. Setelah itu, angkat dan saring air rebusan serai ke dalam gelas. Anda bisa menambahkannya dengan sedikit madu atau perasan lemon untuk rasa yang lebih segar dan manis alami. Nikmati minuman detox serai ini hangat atau dingin, sesuai selera.', 15),
(16, 'Teh Kemukus Sehat', 'Teh Kemukus Sehat adalah minuman herbal yang menggunakan kemukus sebagai bahan utama. Kemukus dikenal memiliki khasiat untuk meningkatkan stamina, memperlancar peredaran darah, serta mengatasi gangguan pencernaan. Untuk membuat teh ini, pertama-tama siapkan kemukus kering. Ambil sekitar 1 sendok teh kemukus yang telah dikeringkan, lalu haluskan menggunakan ulekan atau blender. Setelah itu, rebus air sebanyak 2 gelas hingga mendidih. Tambahkan bubuk kemukus ke dalam air mendidih dan biarkan selama sekitar 5-10 menit agar khasiatnya tercampur sempurna. Saring teh tersebut dan tuangkan ke dalam gelas. Anda bisa menambahkannya dengan madu atau sedikit jeruk nipis untuk memberikan rasa segar. Minuman ini sangat cocok untuk meningkatkan vitalitas dan kesehatan tubuh secara alami.', 17),
(18, 'Teh Vanili Kesehatan', 'Teh vanili adalah olahan minuman sehat yang menggabungkan aroma khas vanili dengan manfaat teh. Vanili memiliki sifat antioksidan yang dapat membantu meredakan stres, meningkatkan kesehatan pencernaan, dan memperbaiki kualitas tidur. Teh ini juga memberikan sensasi relaksasi dan kenyamanan bagi tubuh.\r\n\r\nCara mengolah: Siapkan sejumput vanili bubuk atau sebatang vanili yang telah dipotong. Rebus air dalam panci hingga mendidih, kemudian masukkan teh pilihan (seperti teh hijau atau teh hitam) ke dalam air mendidih. Setelah itu, tambahkan vanili ke dalam teh dan biarkan beberapa menit agar rasa vanili meresap sempurna. Jika diinginkan, Anda bisa menambahkan madu atau lemon sebagai pemanis alami. Setelah rasanya meresap, saring teh dan nikmati kehangatan serta manfaatnya untuk tubuh.', 18),
(19, 'Teh Rempah Cengkeh', 'Teh rempah cengkeh adalah minuman hangat yang menyegarkan dan bermanfaat untuk kesehatan. Cengkeh mengandung senyawa eugenol yang memiliki sifat antioksidan, antiradang, dan antibakteri, yang sangat baik untuk mendukung sistem kekebalan tubuh, membantu meredakan nyeri, serta menjaga kesehatan saluran pencernaan.\r\n\r\nCara mengolahnya cukup mudah. Siapkan beberapa butir cengkeh kering, sekitar 3-5 butir. Rebus air dalam panci hingga mendidih, lalu masukkan cengkeh ke dalam air mendidih. Anda bisa menambahkan bahan lain seperti daun teh hitam atau madu sesuai selera. Setelah beberapa menit, angkat dan saring airnya. Teh rempah cengkeh siap disajikan hangat. Anda juga bisa menambahkannya dengan irisan jahe atau kayu manis untuk meningkatkan rasa dan manfaatnya.\r\n\r\nTeh ini tidak hanya memberi rasa hangat, tetapi juga memberikan manfaat yang baik untuk tubuh, terutama saat cuaca dingin atau ketika Anda membutuhkan dorongan sistem imun.', 19),
(20, ' Sari Sehat Asam Jawa', 'Sari Sehat Asam Jawa adalah minuman alami yang kaya manfaat untuk kesehatan. Untuk membuatnya, pertama-tama ambil beberapa potong asam jawa segar dan rendam dalam air hangat selama sekitar 10-15 menit agar larutan asam jawa keluar. Setelah itu, saring larutan asam jawa untuk menghilangkan biji dan seratnya.\r\n\r\nSelanjutnya, tambahkan madu murni sesuai selera untuk memberikan rasa manis alami yang menyehatkan. Jika suka, kamu bisa menambahkan sedikit jahe segar yang sudah diparut untuk memberikan sensasi hangat dan meningkatkan manfaat kesehatan, seperti meningkatkan daya tahan tubuh dan memperlancar pencernaan.\r\n\r\nMinuman ini dapat dinikmati hangat atau dingin, sesuai selera. Sari Sehat Asam Jawa bermanfaat untuk melancarkan pencernaan, mengatasi gangguan perut, serta membantu menjaga kesehatan kulit berkat kandungan vitamin C dari asam jawa.', 20),
(21, 'Teh Daun Mint Segar', 'Untuk membuat teh daun mint segar, siapkan beberapa helai daun mint yang masih segar. Cuci bersih daun mint untuk menghilangkan kotoran. Setelah itu, siapkan air mendidih dalam cangkir atau teko kecil. Ambil daun mint yang telah dicuci dan remas sedikit dengan tangan agar aromanya keluar. Masukkan daun mint ke dalam air mendidih dan biarkan meresap selama beberapa menit, sekitar 5 hingga 7 menit, untuk mendapatkan rasa mint yang segar. Anda bisa menambahkan madu atau perasan lemon sesuai selera untuk memberikan rasa manis atau asam pada teh ini. Teh daun mint ini dapat dinikmati hangat atau dingin, memberikan sensasi segar dan membantu meredakan masalah pencernaan serta memberikan efek relaksasi.', 21),
(22, 'Infus Sehat Daun Pandan\"\r\n\r\n', 'Infus sehat daun pandan adalah minuman yang menyegarkan dan bermanfaat bagi kesehatan. Daun pandan memiliki banyak manfaat, seperti membantu menenangkan sistem pencernaan dan memberikan aroma yang menenangkan. Untuk membuatnya, siapkan beberapa helai daun pandan segar yang sudah dibersihkan. Gunting atau sobek daun pandan menjadi potongan-potongan kecil untuk memudahkan ekstraksi aroma dan kandungan dalam daun.\r\n\r\nRebus air dalam panci hingga mendidih, kemudian tambahkan potongan daun pandan ke dalam air yang sudah mendidih tersebut. Biarkan air mendidih bersama daun pandan selama beberapa menit hingga air berubah warna menjadi hijau kekuningan dan tercium aroma wangi daun pandan yang khas. Setelah itu, angkat dan saring air infus daun pandan ke dalam gelas atau wadah lain.\r\n\r\nAnda bisa menikmatinya dalam keadaan hangat atau dingin, sesuai selera. Jika ingin memberi rasa manis, Anda bisa menambahkan sedikit madu atau gula kelapa, namun ini opsional. Infus sehat daun pandan ini sangat baik untuk meningkatkan pencernaan, menenangkan pikiran, dan memberikan rasa segar alami pada tubuh.', 22),
(23, 'Minuman Rempah Lada Sehat', 'Deskripsi cara mengolah: Biji lada yang kaya akan kandungan piperin ini memiliki banyak manfaat kesehatan, seperti meningkatkan sirkulasi darah dan memperbaiki pencernaan. Untuk membuat minuman rempah lada sehat, pertama-tama haluskan biji lada menggunakan lesung atau blender hingga menjadi serbuk halus. Kemudian, rebus air dalam panci hingga mendidih. Setelah itu, tambahkan serbuk lada secukupnya ke dalam air mendidih. Anda juga bisa menambahkan bahan lain seperti madu untuk menambah rasa manis alami dan jahe untuk menambah kehangatan serta manfaat kesehatan. Diamkan selama beberapa menit agar rempah-rempah meresap sempurna. Sajikan dalam keadaan hangat untuk menikmati manfaat rempah lada yang menyegarkan tubuh.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 23),
(24, 'Teh Gingseng Sehat\"', 'Teh Gingseng Sehat adalah minuman herbal yang menggabungkan manfaat gingseng dengan rasa yang menyegarkan. Gingseng dikenal sebagai rempah yang dapat meningkatkan energi, memperkuat sistem imun, dan mengurangi stres. Untuk membuatnya, pertama-tama potong beberapa irisan tipis akar gingseng segar. Setelah itu, rebus irisan gingseng dengan air dalam panci hingga mendidih. Anda bisa menambahkan sedikit madu atau perasan lemon untuk memberi rasa manis alami dan meningkatkan manfaat kesehatan. Setelah air menjadi lebih kental dan beraroma harum, saring dan tuang teh gingseng ke dalam cangkir. Nikmati minuman hangat ini saat pagi hari untuk memberikan semangat sepanjang hari.', 24),
(25, 'Salad Kemangi Sehat', 'Salad Kemangi Sehat adalah hidangan yang menyegarkan dan penuh manfaat, menggabungkan daun kemangi yang kaya akan antioksidan dan aroma yang khas dengan sayuran segar lainnya. Daun kemangi dipercaya memiliki sifat anti-inflamasi dan antibakteri, serta dapat membantu meningkatkan sistem pencernaan.\r\n\r\nUntuk membuat salad ini, siapkan daun kemangi segar, cuci bersih, dan keringkan dengan lembut. Pilih sayuran hijau segar seperti selada, timun, dan tomat cherry sebagai bahan utama. Iris tipis timun dan tomat untuk menambah kesegaran.\r\n\r\nSebagai tambahan, buat saus dressing dari campuran minyak zaitun, perasan jeruk nipis, sedikit madu, dan sedikit garam untuk memberikan rasa segar yang alami. Setelah semua bahan siap, campurkan daun kemangi, sayuran segar, dan dressing dalam mangkuk besar.\r\n\r\nSalad ini bisa disajikan sebagai hidangan pendamping atau makan ringan yang menyehatkan, memberikan sensasi segar dan manfaat untuk tubuh.', 25);

-- --------------------------------------------------------

--
-- Table structure for table `rempah`
--

CREATE TABLE `rempah` (
  `id_rempah` int(11) NOT NULL,
  `nama_rempah` varchar(100) NOT NULL,
  `nama_ilmiah` varchar(100) NOT NULL,
  `id_jenis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rempah`
--

INSERT INTO `rempah` (`id_rempah`, `nama_rempah`, `nama_ilmiah`, `id_jenis`) VALUES
(1, 'Kunyit', 'Curcuma longa', 2),
(2, 'Jahe\r\n', 'Zingiber officinale\r\n', 2),
(3, 'Lengkuas\r\n', 'Alpinia galanga\r\n', 2),
(4, 'Kayu Manis\r\n', 'Cinnamomum verum\r\n', 5),
(5, 'Ketumbar\r\n', 'Coriandrum sativum\r\n', 3),
(6, 'Pala\r\n', 'Myristica fragrans\r\n', 3),
(7, 'Kapulaga\r\n', 'Amomum compactum\r\n', 3),
(8, 'Kayu Secang\r\n', 'Caesalpinia sappan\r\n', 5),
(9, 'Lada\r\n', 'Piper nigrum\r\n', 7),
(10, 'Bunga Lawang\r\n', 'Illicium verum\r\n', 6),
(11, 'Kencur\r\n', 'Kaempferia galanga\r\n', 2),
(12, 'Kemiri\r\n', 'Aleurites moluccanus\r\n', 3),
(13, 'Daun Salam\r\n', 'Syzygium polyanthum\r\n', 1),
(14, 'Temulawak\r\n', 'Curcuma xanthorrhiza\r\n', 2),
(15, 'Serai\r\n', 'Cymbopogon citratus\r\n', 4),
(16, 'Andaliman\r\n', 'Zanthoxylum acanthopodium\r\n', 7),
(17, 'Kemukus\r\n', 'Piper cubeba\r\n', 7),
(18, 'Vanili\r\n', 'Vanilla planifolia\r\n', 7),
(19, 'Cengkeh\r\n', 'Syzygium aromaticum\r\n', 6),
(20, 'Asam Jawa\r\n', 'Tamarindus indica\r\n', 7),
(21, 'Daun Mint\r\n', 'Mentha\r\n', 1),
(22, 'Daun Pandan\r\n', 'Pandanus amaryllifolius\r\n', 1),
(23, 'Biji Lada\r\n', 'Piper albi lin\r\n', 3),
(24, 'Ginseng\r\n', 'Panax ginseng\r\n', 2),
(25, 'Daun Kemangi\r\n', 'Ocimum basilicum\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(3, 'fathan', '202cb962ac59075b964b07152d234b70', 1),
(5, 'abid', '202cb962ac59075b964b07152d234b70', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `artikel_ibfk_1` (`id_rempah`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `khasiat`
--
ALTER TABLE `khasiat`
  ADD PRIMARY KEY (`id_khasiat`),
  ADD KEY `khasiat_rempah` (`id_rempah`);

--
-- Indexes for table `olahan`
--
ALTER TABLE `olahan`
  ADD PRIMARY KEY (`id_olahan`),
  ADD KEY `olahan_rempah` (`id_rempah`);

--
-- Indexes for table `rempah`
--
ALTER TABLE `rempah`
  ADD PRIMARY KEY (`id_rempah`),
  ADD KEY `jenis_rempah` (`id_jenis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `khasiat`
--
ALTER TABLE `khasiat`
  MODIFY `id_khasiat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `olahan`
--
ALTER TABLE `olahan`
  MODIFY `id_olahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rempah`
--
ALTER TABLE `rempah`
  MODIFY `id_rempah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_rempah`) REFERENCES `rempah` (`id_rempah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khasiat`
--
ALTER TABLE `khasiat`
  ADD CONSTRAINT `khasiat_rempah` FOREIGN KEY (`id_rempah`) REFERENCES `rempah` (`id_rempah`);

--
-- Constraints for table `olahan`
--
ALTER TABLE `olahan`
  ADD CONSTRAINT `olahan_rempah` FOREIGN KEY (`id_rempah`) REFERENCES `rempah` (`id_rempah`);

--
-- Constraints for table `rempah`
--
ALTER TABLE `rempah`
  ADD CONSTRAINT `rempah_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
