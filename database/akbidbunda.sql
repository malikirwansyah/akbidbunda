-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Okt 2016 pada 07.42
-- Versi Server: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akbid_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE IF NOT EXISTS `tbl_artikel` (
  `id` int(15) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  `foto` text NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judul`, `ket`, `foto`, `created`) VALUES
(2, '7 Manfaat Susu Kedelai Untuk Kesehatan Tubuh', '<p>Minuman kental berwarna putih dan berprotein tinggi dikenal dengan nama susu. Ada dua jenis susu yang biasanya dikonsumsi oleh manusia, yaitu susu protein hewani dan susu protein nabati. Susu protein hewani biasanya berasal dari susu sapi dan susu kambing. Sementara untuk susu protein nabati berasal dari sari kacang, seperti susu almond dan susu kedelai. Meskipun berbeda, namun kedua jenis susu ini mempunyai nutrisi dan manfaat yang tidak berbeda jauh.</p>\r\n\r\n<p>Jenis susu protein nabati yang banyak dikonsumsi adalah susu kedelai. Pasalnya, susu kedelai mudah didapatkan dan harganya juga lebih murah dibandingkan dengan susu almond. Walaupun murah, bukan berarti di dalamnya tidak ada kandungan nutrisi yang bermanfaat untuk kesehatan tubuh. Di dalam susu kedelai terdapat kandungan nutrisi berupa protein, vitamin A, vitamin B1, vitamin B2, vitamin B12, vitamin D, vitamin E, asam folat, asam amino, mineral, phytoestrogen, antioksidan, lemak nabati, riboflavin dan masih banyak lagi lainnya.</p>\r\n\r\n<p>Dengan adanya semua kandungan nutrisi tersebut, membuat susu kedelai mempunyai banyak manfaat untuk kesehatan tubuh. Agar tidak penasaran, ketahuilah sejumlah manfaat susu kedelai berikut ini. Sesuai apa yang dikutip dari gen22.net, inilah manfaat susu kedelai untuk kesehatan tubuh.</p>\r\n\r\n<h2>7 Manfaat Susu Kedelai</h2>\r\n\r\n<ol>\r\n	<li>Baik untuk Kesehatan Jantung<br />\r\n	Susu kedelai hanya mempunyai kandungan minyak jenuh dalam jumlah sedikit sehingga tidak akan meningkatkan kadar kolesterol jahat di dalam darah dan baik dikonsumsi untuk menjaga kesehatan jantung serta tidak akan menyebabkan obesitas.</li>\r\n	<li>Mencegah Diabetes Mellitus<br />\r\n	Penyakit diabetes terjadi akibat tubuh kekurangan hormon insulin sehingga terjadi kelainan metabolisme lemak, air, elektrolit, karbohidrat dan protein. Kandungan asam amino yaitu, ariginin dan glisin yang terdapat di dalam susu kedelai mampu menjaga keseimbangan hormon insulin di dalam tubuh.</li>\r\n	<li>Mencegah Penyakit Kanker<br />\r\n	Di dalam susu kedelai terdapat kandungan phytoestrogen yang melimpah. Phytoestrogen merupakan hormon tanaman yang mempunyai kemampuan untuk menghambat produksi hormon testosterone pada tubuh pria. Kadar hormon testosterone yang berkurang dapat mencegah pertumbuhan kanker prostat.</li>\r\n	<li>Baik untuk Organ Hati<br />\r\n	Di dalam susu kedelai terdapat kandungan nutrisi yang aman dan baik untuk organ hati, karena hati tidak perlu bekerja keras untuk menetralkan susu kedelai. Hal ini disebabkan karena di dalam susu kedelai tidak ada kandungan zat yang merugikan organ hati.</li>\r\n	<li>Menjaga Kesehatan Tulang<br />\r\n	Susu kedelai juga mempunyai kandungan kalsium dan vitamin D yang diperlukan untuk menutrisi tulang, menjaga kepadatan tulang, menjaga struktur tulang dan menguatkan tulang. Dengan demikian, susu kedelai dapat menjaga kesehatan tulang dan dapat mencegah terjadinya osteoporosis.</li>\r\n	<li>Menurunkan Berat Badan<br />\r\n	Susu kedelai mempunyai kadar gula dalam jumlah sedikit, yaitu sekitar 7 gram saja karena di dalamnya terdapat kandungan asam lemak tak jenuh yang dapat menghambat proses penyerapan lemak di dalam usus sehingga dapat memberikan efek kenyang yang lebih lama. [1]</li>\r\n	<li>Menjaga Kesehatan Kulit<br />\r\n	Di dalam susu kedelai terdapat kandungan antioksidan dan vitamin E. Kedua kandungan tersebut berperan untuk menjaga kesehatan kulit. Kandungan antioksidan di dalamnya berperan untuk memerangi efek radikal bebas yang dapat menyebabkan penyakit kanker kulit. Sementara kandungan vitamin E di dalamnya berfungsi untuk melembabkan kulit, menghaluskan kulit, mengencangkan kulit dan mencerahkan kulit, sehingga akan terlihat awet muda.</li>\r\n</ol>\r\n\r\n<p>Mengkonsumsi susu kedelai dapat dijadikan sebagai alternatif bagi seseorang yang alergi susu protein hewani. Selain itu, susu kedelai juga dapat dijadikan minuman sehat untuk para vegetarian dan dapat dijadikan sebagai minuman diet sehat. Supaya tidak bosan untuk mengkonsumsinya, ada banyak pilihan varian rasa susu kedelai, seperti rasa coklat, strawberry hingga jahe.</p>\r\n\r\n<p>Semua manfaat dari susu kedelai tersebut bisa didapatkan jika tetap dikonsumsi dalam porsi yang bijaksana dan tidak berlebihan. Kemudian, pastikan bahwa telah mengkonsumsi susu kedelai asli yang tidak tercampur dengan bahan-bahan kimia. Namun, susu kedelai tidak disarankan untuk diberikan kepada balita berusia di bawah satu tahun. Untuk balita di bawah satu tahun, sebaiknya cukup diberikan dengan ASI saja.</p>\r\n', 'susu-kedelai.jpg', '2016-06-07'),
(3, '8 Manfaat Buah Mangga', '<p>Salah satu buah musiman yang dinanti kehadirannya adalah buah mangga. Mangga merupakan buah yang memiliki rasa dan aroma yang khas, ketika matang buah ini terasa manis dan nikmat. Di Indonesia sendiri ada beberapa jenis mangga, diantaranya mangga gadung, mangga manalagi, mangga arum manis, mangga telur dan lain sebagainya. Namun, jenis mangga yang banyak disukai oleh masyarakat adalah mangga manalagi, gadung dan arum manis. Ketiga jenis mangga tersebut mempunyai rasa manis dengan daging buah yang tebal.</p>\r\n\r\n<p>Tak hanya enak untuk dikonsumsi saja, buah mangga juga mempunyai banyak manfaat untuk kesehatan tubuh. Manfaat.co.id mengungkapkan bahwa di dalam buah mangga terdapat kandungan nutrisi berupa karbohidrat sebanyak 25 gr, gula sebanyak 23 gr, serat sebanyak 3 gr, kalori sebanyak 100 gr, protein sebanyak 1 gr, kandungan lemak sebanyak 0,5 gr, memiliki vitamin C sebanyak 100% dari kebutuhan hari, memiliki kandungan vitamin B6 sebanyak 10%, memiliki kandungan vitamin A sebanyak 20%, serta mempunyai kandungan vitamin K dan potassium sebanyak 8%. Selain itu, di dalam buah mangga juga terdapat sumber mineral berupa kalsium, zat besi, mangan serta terdapat kandungan nutrisi lainnya seperti betakaroten, zeaxathin dan antioksidan.</p>\r\n\r\n<p>Oleh karena itu, jangan heran jika buah ini disebut-sebut mempunyai segudang manfaat untuk kesehatan tubuh. Untuk mengetahui informasi selengkapnya, simak informasi tentang manfaat buah mangga berikut ini. Adapun diantaranya adalah sebagai berikut :</p>\r\n\r\n<h2>8 Manfaat Buah Mangga</h2>\r\n\r\n<ol>\r\n	<li>Menjaga Kesehatan Mata<br />\r\n	Di atas telah disebutkan bahwa buah mangga memiliki kandungan vitamin A yang cukup banyak. Kandungan vitamin A tersebut berguna untuk menjaga kesehatan mata, meningkatkan penglihatan dan dapat mencegah terjadinya gangguan mata, seperti katarak.</li>\r\n	<li>Memperkuat Sistem Kekebalan Tubuh<br />\r\n	Mangga mempunyai kandungan vitamin C yang melimpah. Jika terserap oleh tubuh kandungan vitamin C tersebut berperan untuk memperkuat sistem kekebalan tubuh dengan cara membantu meningkatkan produksi sel darah putih untuk memerangi penyakit yang masuk di dalam tubuh.</li>\r\n	<li>Menguatkan Tulang<br />\r\n	Di dalam buah mangga juga ditemukan kandungan sejumlah mineral, seperti kalsium yang mempunyai fungsi untuk menguatkan tulang, menjaga kepadatan tulang dan dapat memperbaiki struktur tulang. Dengan demikian, tulang akan menjadi kuat dan terhindar dari resiko terkena osteoporosis.</li>\r\n	<li>Mencegah Anemia<br />\r\n	Tak hanya kalsium, di dalam buah mangga juga terdapat kandungan zat besi yang dibutuhkan oleh tubuh untuk membantu pembentukan sel-sel darah merah agar tubuh terhindar dari masalah anemia atau kurang darah.</li>\r\n	<li>Melancarkan Sistem Pencernaan<br />\r\n	Mangga merupakan salah satu jenis buah yang mempunyai serat pangan yang cukup banyak. Kandungan serat pangan tersebut berguna untuk melancarkan sistem pencernaan sehingga organ-organ pencernaan menjadi tetap sehat dan terhindar dari resiko terkena masalah gangguan pencernaan.</li>\r\n	<li>Baik untuk Diet<br />\r\n	Buah mangga mempunyai kandungan kalori dan gula dalam jumlah yang cukup, tidak berlebihan dan tidak kurang. Selain itu, di dalamnya hanya terdapat kandungan lemak sebanyak 0,5 gram saja sehingga dapat dikonsumsi untuk menurunkan berat diet dan dapat digunakan untuk menyukseskan program diet.</li>\r\n	<li>Menangkal Radikal Bebas<br />\r\n	Buah mangga memiliki kandungan antioksidan yang cukup tinggi. Zat antioksidan tersebut berperan untuk menangkal radikal bebas, sehingga tubuh terhindar dari ancaman penyakit yang berbahaya seperti kanker kulit dan penyakit berbahaya lainnya.</li>\r\n	<li>Menjaga Kesehatan Kulit<br />\r\n	Kandungan antioksidan, vitamin C dan potassium yang dimiliki oleh buah mangga merupakan nutrisi yang dibutuhkan oleh kulit. Apabila semua asupan yang dibutuhkan kulit terpenuhi, kulit akan menjadi lebih sehat, halus, kencang dan dapat membuat pemiliknya terlihat lebih awet muda.</li>\r\n</ol>\r\n\r\n<p>Jika bosan mengkonsumsi buah mangga secara langsung, konsumsilah buah ini dengan mengolahnya menjadi aneka hidangan yang nikmat seperti jus mangga segar, puding mangga, salad mangga, smoothie dan lain-lain. Penting untuk diketahui, meskipun baik untuk kesehatan tubuh buah mangga tetap harus dikonsumsi dalam jumlah yang wajar. Mengkonsumsi buah mangga secara berlebihan dapat menganggu sistem pencernaan karena dapat menyebabkan sakit perut hingga diare.</p>\r\n', 'Buah_Mangga_1450571045.jpg', '2016-06-07'),
(4, '8 Manfaat Jus Semangka', '<p>Setelah melakukan aktivitas seharian untuk menghilangkan dahaga dan menambah stamina setiap orang pasti ingin mengkonsumsi makanan atau minuman yang menyegarkan. Buah semangka biasanya banyak dipilih sebagai pelepas dahaga setelah beraktivitas. Pasalnya, buah ini mempunyai kandungan kadar air yang cukup banyak sehingga dapat memenuhi asupan cairan yang dibutuhkan oleh tubuh.</p>\r\n\r\n<p>Selain dapat dikonsumsi secara langsung, buah semangka juga dapat diolah menjadi aneka minuman yang menyegarkan, seperti jus semangka. Di balik rasa jus semangka yang manis dan menyegarkan, ternyata terdapat kandungan nutrisi yang bermanfaat bagi kesehatan tubuh. Kandungan nutrisi yang terdapat di dalam jus semangka terdiri atas, serat, protein, kalium, vitamin A, vitamin B, vitamin C dan masih banyak kandungan nutrisi lainnya.</p>\r\n\r\n<p>Semua kandungan nutrisi tersebut dapat mencukupi kebutuhan nutrisi yang diperlukan oleh tubuh dan berfungsi untuk menjaga kesehatan tubuh. Nah, untuk lebih jelasnya simak informasi berikut ini tentang manfaat jus semangka. Inilah manfaat jus semangka bagi kesehatan tubuh, beberapa diantaranya dikutip dari andasehat.com.</p>\r\n\r\n<h2>8 Manfaat Jus Semangka</h2>\r\n\r\n<ol>\r\n	<li>Menjaga Kesehatan Jantung<br />\r\n	Menjalankan pola hidup yang kurang sehat biasanya akan membuat seseorang mengalami resiko terkena penyakit jantung. Agar terhindar dari masalah tersebut, tubuh harus mendapatkan asupan nutrisi yang cukup untuk meningkatkan kinerja organ-organ tubuh termasuk jantung. Salah satu minuman yang dianjurkan untuk dikonsumsi agar jantung tetap sehat adalah jus semangka. Pasalnya, di dalam jus ini terdapat kandungan nutrisi dan senyawa yang dapat meningkatkan kinerja jantung menjadi optimal.</li>\r\n	<li>Menyehatkan Tulang<br />\r\n	Jus semangka mempunyai kandungan mineral berupa kalium dan kalsium. Kedua kandungan nutrisi tersebut berfungsi untuk mempertahankan kepadatan tulang, menguatkan tulang dan mencegah terjadinya osteoporosis, sehingga tulang menjadi sehat.</li>\r\n	<li>Sumber Antioksidan Alami<br />\r\n	Di dalam jus semangka terdapat kandungan antioksidan yang baik untuk menangkal radikal bebas. Antioksidan tersebut juga mempunyai kemampuan untuk menjaga kesehatan kulit dan dapat membuat kulit terlihat awet muda.</li>\r\n	<li>Mencegah Dehidrasi<br />\r\n	Seperti apa yang sudah diketahui sebelumnya, jus semangka merupakan minuman yang menyegarkan karena di dalamnya terdapat kadar air tinggi dan terdapat kandungan mineral hingga 90%. Dengan demikian, jus semangka dapat dikonsumsi untuk menghilangkan dahaga dan dapat mencegah dehidrasi. [1]</li>\r\n	<li>Penambah Energi<br />\r\n	Di dalam jus semangka terdapat kandungan karbohidrat yang terdiri atas serat pangan. Dengan adanya kandungan tersebut membuat jus semangka banyak dikonsumsi sebagai minuman penambah energi atau penambah stamina.</li>\r\n	<li>Menyehatkan Organ Pencernaan<br />\r\n	Kandungan serat di dalamnya juga mempunyai kemampuan untuk menyehatkan organ pencernaan, sehingga sistem pencernaan menjadi lancar dan terhindar dari berbagai masalah, seperti sembelit, susah buang air besar hingga wasir.</li>\r\n	<li>Mencegah Sariawan<br />\r\n	Sariawan merupakan gangguan penyakit ringan yang disebabkan karena tubuh kekurangan vitamin C. Di dalam jus semangka terdapat kandungan vitamin C yang cukup tinggi, jika mengkonsumsinya secara teratur maka dapat mencegah terjadinya sariawan.</li>\r\n	<li>Meningkatkan Sistem Kekebalan Tubuh<br />\r\n	Zat antioksidan yang terdapat jus semangka terdiri atas perpaduan antara vitamin C dan flavonoid. Kandungan zat antioksidan yang terdapat di dalamnya berperan untuk meningkatkan sistem kekebalan tubuh, sehingga tubuh dapat terhindar dari gangguan penyakit yang disebabkan oleh infeksi bakteri, kuman maupun virus.</li>\r\n</ol>\r\n\r\n<p>Semua manfaat tersebut bisa didapatkan apabila mengkonsumsi jus mangga secara teratur dalam jumlah yang tidak berlebihan. Selain memberikan banyak manfaat untuk kesehatan tubuh, jus semangka juga dapat dikonsumsi sebagai minuman diet sehat karena di dalamnya terdapat kadar gula dan kalori dalam porsi rendah. Cara pembuatannya pun juga cukup mudah untuk dilakukan, yaitu dengan memotong daging buah semangka berukuran kecil, masukkan ke dalam blander dan tuangkan ke dalam gelas. Untuk mendapatkan sensasi rasa ketika dikonsumsi, bisa ditambahkan dengan susu atau campuran buah lainnya.</p>\r\n\r\n<p>Agar mendapatkan manfaatnya secara maksimal dianjurkan untuk tidak menambahkan jus semangka dengan gula. Pasalnya, di dalam jus semangka sudah terdapat kandungan gula alami yang dapat memberikan rasa manis saat dikonsumsi. Memberikan gula tambahan pada jus semangka justru dapat meningkatkan kadar gula di dalam darah.</p>\r\n', 'Jus_Semangka_1450571654.jpg', '2016-06-07'),
(5, '10 Manfaat Tauge Untuk Kesehetan Tubuh', '<p>Sebagian besar orang pasti sudah mengenal dan mengetahui tauge. Tauge yang juga disebut dengan toge merupakan tunas atau kecambah dari kacang hijau. Jika dikonsumsi secara langsung sebagai lalapan, tauge mempunyai rasa yang manis dengan tekstur yang renyah. Selain banyak dikonsumsi sebagai lalapan, tauge juga dapat dikonsumsi menjadi aneka masakan yang nikmat, seperti pelengkap sayuran nasi pecel, pelengkap sayuran urap, salad, tumis tauge, campuran lontong balap, tahu isi, martabak sayur dan lain sebagainya.</p>\r\n\r\n<p>Selain enak dikonsumsi dalam keadaan mentah dan dapat dikonsumsi sebagai hasil olahan makanan, tauge juga mempunyai banyak manfaat untuk kesehatan tubuh. Di dalam 100 gram tauge terdapat kandungan serat, vitamin A, vitamin B komplek, vitamin C, vitamin E, vitamin K, protein, mineral, enzim, antioksidan dan kandungan nutrisi lainnya.</p>\r\n\r\n<p>Setelah mengetahui kandungan nutrisi yang terdapat di dalam tauge, rasanya kurang lengkap jika belum mengetahui apa saja manfaatnya. Oleh karena itu juga akan diberikan informasi mengenai beberapa manfaat tauge untuk kesehatan. Inilah beberapa manfaat tauge yang dianalisir dari situs buahan-sehat.blogspot.co.id, adapun diantaranya adalah sebagai berikut :</p>\r\n\r\n<h2>10 Manfaat Tauge</h2>\r\n\r\n<ol>\r\n	<li>Mencegah Kanker Usus Besar<br />\r\n	Di dalam tauge terdapat kandungan serat dan kadar air yang melimpah. Kedua kandungan nutrisi tersebut berperan untuk membersihkan kotoran di dalam usus besar dengan cara mendorong keluar kotoran. Hal ini berguna untuk mencegah terjadinya penumpukan racun yang dapat memicu pertumbuhan sel kanker di dalam usus besar.</li>\r\n	<li>Menjaga Kesehatan Jantung<br />\r\n	Penyakit jantung bisa disebabkan oleh kandungan kolesterol jahat di dalam darah sehingga menyumbat pembuluh jantung. Kandungan saponin di dalam tauge berperan untuk memerangi kolesterol jahat di dalam darah sehingga dapat menjaga kesehatan jantung.</li>\r\n	<li>Menjaga Kesehatan Tulang<br />\r\n	Di dalam tauge terdapat kandungan esterogen alami yang terdiri atas sintesis estrogen tanpa efek samping. Selain itu, kandungan estrogen tersebut juga dapat meningkat kepadatan tulang, menjaga kesehatan tulang dan menguatkan tulang.</li>\r\n	<li>Meningkatkan Kesuburan Pria<br />\r\n	Ada beberapa kandungan vitamin yang ditemukan di dalam tauge, salah satunya adalah vitamin E. Vitamin E yang terdapat di dalam tauge mempunyai kemampuan untuk membantu meningkatkan kesuburuan pria.</li>\r\n	<li>Meningkatkan Sistem Imunitas<br />\r\n	Kandungan vitamin C dan antioksidan yang terdapat di dalam tauge berperan untuk meningkatkan sistem imunitas di dalam tubuh sehingga tubuh terbebas dari resiko gangguan penyakit. [1]</li>\r\n	<li>Meningkatkan Energi<br />\r\n	Pada saat proses pembentukannya, tauge telah menguraikan rantai olisakarida sebanyak 90% menjadi karbohidrat sederhana. Akibatnya, senyawa tersebut mudah terserap oleh tubuh tanpa menghasilkan gas dan dapat meningkatkan energi yang diperlukan oleh tubuh.</li>\r\n	<li>Menangkal Radikal Bebas<br />\r\n	Kandungan zat antioksidan yang banyak di dalam tauge berperan untuk menangkal radikal bebas sehingga tubuh terhindar dari penyakit yang berbahaya seperti kanker kulit, kanker payudara, kanker prostat dan lain sebagainya.</li>\r\n	<li>Membantu Pembentukan Otot<br />\r\n	Kandungan sejumlah protein yang terdapat di tauge mempunyai kemampuan untuk menambah massa otot dan membantu pembentukan otot. Oleh karena itu, tauge merupakan salah satu jenis sayuran yang biasanya dikonsumsi oleh orang yang ingin membentuk otot.</li>\r\n	<li>Mencegah Penyakit Anemia (Kurang Darah)<br />\r\n	Penyakit anemia atau kurang darah terjadi akibat tubuh hanya memproduksi sel-sel darah merah dalam jumlah yang sedikit. Untuk mengatasinya, dapat dilakukan dengan mengkonsumsi tauge karena di dalamnya terdapat kandungan zat besi yang mempunyai kemampuan untuk memproduksi sel-sel darah merah.</li>\r\n	<li>Mengatasi Stress dan Kelelahan<br />\r\n	Mengkonsumsi tauge berguna untuk mengatasi stress dan kelelahan. Hal ini disebabkan karena tauge mampu membantu dalam menghilangkan atau melawan indikasi tekanan mental dan fisik, sehingga dapat membuat tubuh dan pikiran menjadi rileks.</li>\r\n</ol>\r\n\r\n<p>Untuk mendapat semua manfaat tauge secara maksimal, dianjurkan untuk mengolah tauge yang segar dengan cara yang baik dan benar. Dan pastikan telah memilih tauge yang masih segar dan berkualitas baik, jangan memilih tauge yang berlendir dan tidak bertekstur. Tauge berkualitas baik adalah kecambah kacang hijau yang berisi, tidak kendur, tidak berlendir, bersih dan renyah ketika disentuh.</p>\r\n', 'Tauge_1450570086.jpg', '2016-06-07'),
(6, '11 Manfaat Jus Mangga', '<p>Siapa sih yang tidak kenal dengan buah mangga? Buah yang dianggap sebagai salah satu buah yang nikmat dan enak di ini banyak ditemukan di negara Indonesia, karena pohon mangga merupakan tanaman yang dapat tumbuh subur pada daerah beriklim tropis. Karena merupakan jenis buah musiman yang hanya ada dan berbuah pada saat tertentu saja, mangga menjadi buah yang dirindukan kehadirannya oleh para penggemarnya. Selain dapat dikonsumsi secara langsung, buah mangga juga dapat diolah menjadi sejumlah hidangan yang nikmat seperti jus mangga, puding mangga, salad buah, smoothie, campuran rujak buah dan hasil olahan lainnya. Dengan demikian, penggemar buah mangga tidak akan merasa bosan ketika mengkonsumsinya.</p>\r\n\r\n<p>Namun, hasil olahan mangga yang biasa dikonsumsi yaitu jus mangga segar. Pasalnya, mengkonsumsi jus mangga merupakan cara yang praktis dan cepat bagi orang yang tidak mempunyai banyak waktu untuk mengkonsumsinya secara langsung. Dengan mengkonsumsi buah mangga dalam olahan jus, tubuh akan lebih cepat menyerap kandungan nutrisi di dalamnya. Dikarenakan, tubuh tak perlu bekerja keras untuk menyerap nutrisi dalam bentuk cairan.</p>\r\n\r\n<p>Sama seperti buah jeruk, mangga juga terkenal akan kandungan vitamin C yang dimilikinya. Tak hanya vitamin C, mangga juga mempunyai kandungan nutrisi lainnya seperti vitamin A, vitamin B kompleks, vitamin E, kalium, zat besi, serat, karbohidrat, antioksidan, asam folat dan masih banyak kandungan nutrisi lainnya. Sebelumnya, telah dijelaskan bahwa semua nutrisi yang terdapat di dalam buah mangga akan mudah terserap oleh tubuh jika dikonsumsi dalam bentuk cairan, yaitu dalam olahan jus mangga segar.</p>\r\n\r\n<p>Sebagai informasi pelengkap, pada artikel ini juga akan diulas informasi mengenai manfaat jus mangga. Sesuai dengan apa yang dikutip dari situs manfaatbuahalami.com, adapun manfaat jus mangga yang perlu diketahui adalah sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li><strong>Mengatasi Penyakit Kanker</strong><br />\r\n	Sama seperti buah-buahan lainnya, mangga juga merupakan buah yang mempunyai kandungan antioksidan tinggi. Tak hanya kandungan antioksidan, semua senyawa yang terdapat di dalamnya juga ramah dengan usus organ-organ tubuh serta dapat mengatasi penyakit kanker, seperti kanker darah, kanker payudara, kanker prostat dan kanker usus besar.</li>\r\n	<li><strong>Menjaga Performa Kardio Tubuh</strong><br />\r\n	Mengkonsumsi jus mangga secara rutin berkhasiat untuk menjaga performa kardio tubuh, sehingga tubuh menjadi lebih sehat dan dapat membantu proses penyerapan nutrisi dengan lebih baik.</li>\r\n	<li><strong>Menstabilkan Kadar Gula pada Tubuh</strong><br />\r\n	Kandungan serat pangan dan gula alami yang terdapat di dalam jus mangga sangat aman untuk dikonsumsi penderita penyakit diabetes.</li>\r\n	<li><strong>Mencegah dan Mengatasi Anemia</strong><br />\r\n	Di dalam jus mangga terdapat kandungan zat besi yang cukup banyak. Dengan mengkonsumsi jus mangga secara rutin dapat mencegah dan mengatasi penyakit anemia karena kandungan zat besi di dalamnya berfungsi untuk memproduksi sel-sel darah merah.</li>\r\n	<li><strong>Melancarkan Sistem Pencernaan</strong><br />\r\n	Kandungan serat pangan yang terdapat di dalamnya mempunyai kemampuan untuk melancarkan sistem pencernaan serta dapat menyehatkan organ-organ pencernaan, sehingga tubuh terbebas dari masalah gangguan pencernaan seperti sembelit, wasir dan susah buang air besar.</li>\r\n	<li><strong>Menjaga Kesehatan Mata</strong><br />\r\n	Jus mangga memiliki kandungan vitamin A yang terbukti baik untuk menjaga kesehatan mata, sehingga mata akan menjadi segar, penglihatan menjadi tajam dan terhindar dari gangguan penyakit mata.</li>\r\n	<li><strong>Menjaga Kesehatan Kulit</strong><br />\r\n	Kandungan vitamin C dan vitamin E yang terdapat di dalam jus mangga mempunyai kemampuan untuk menjaga kesehatan kulit untuk kulit yang lebih sehat, halus, lembab, cerah dan kencang. [1]</li>\r\n	<li><strong>Menurunkan Kadar Kolesterol Jahat</strong></li>\r\n	<li>Semua kandungan nutrisi dan senyawa yang ada di dalam jus mangga berfungsi untuk menurunkan kadar kolesterol jahat di dalam darah sehingga terhindar dari resiko terkena hipertensi, penyakit jantung dan stroke.</li>\r\n	<li><strong>Menambah Energi</strong><br />\r\n	Apabila merasa lemas dan lelah saat beraktivitas sebaiknya konsumsilah jus mangga karena di dalamnya terdapat kandungan karbohidrat kompleks yang berguna untuk menambah energi yang diperlukan oleh tubuh saat beraktivitas.</li>\r\n	<li><strong>Menyehatkan Otak dan Tubuh</strong><br />\r\n	Manfaat jus mangga lainnya adalah dapat membuat tubuh menjadi lebih sehat serta kandungan asam folat di dalamnya mempunyai kemampuan untuk menyehatkan otak dan dapat meningkatkan kinerja otak.</li>\r\n</ol>\r\n\r\n<p>Untuk mendapatkan semua manfaat dari jus mangga ini, sangat dianjurkan untuk mengkonsumsinya tanpa gula tambahan. Kandungan gula alami yang terdapat di dalamnya sudah dapat membuat jus ini terasa manis.</p>\r\n', 'Mangga_1450482305.jpg', '2016-08-27'),
(7, 'Obat Gusi Bengkak dan Penyebabnya', '<p>Mengalami gusi bengkak memang sedikit mengganggu bagi setiap orang. Penyakit gusi bengkak umum dapat dialami oleh semua orang. Biasanya gusi bengkak akan mengalami perdarahan pada gusi yang bengkak.&nbsp;Penyebab gusi bengkak&nbsp;adalah bakteri yang terdapat pada plak kemudian menginfeksi jaringan gigi sehingga dapat menyebabkan infeksi pada gigi yang membuat gusi bengkak, kemerahan, sakit dan mudah berdarah. Selain itu gusi bengkak juga dapat disebabkan oleh gingivitis, kehamilan, malnutrisi, karena infeksi.Obat Gusi bngkak&nbsp;harus dilakukan dengan cara-cara yang benar. Berikut adalah langkah-langkah nya:</p>\r\n\r\n<ol>\r\n	<li>Sikat gigi dan flossing dengan lembut agar tidak mengiritasi gusi.</li>\r\n	<li>Berkumurlah menggunakan air yang dicampur garam untuk membersihkan gigi, gusi serta tenggorokan dari bakteri.</li>\r\n	<li>Konsumsi air putih minimal 8 gelas perhari, dengan banyak mengkonsumsi air akan membantu memperbanyak produksi air liur untuk menbunuh bakteri penyebab gusi bengkak.</li>\r\n	<li>Hindari penggunaan obat kumur yang keras, alkohol dan merokok untuk mencegah terjadinya iritasi.</li>\r\n	<li>Kompres wajah menggunakan air hangat untuk mengurangi rasa sakit pada gusi yang bengkak.</li>\r\n	<li>Kumur menggunakan air daun sirih, caranya rendam daun sirih menggunakan air hangat kemudian gunakan untuk berkumur.</li>\r\n	<li>Kumur dengan air lemon, caranya pakai 1 buah lemon, peras dan ambil airnya kemudian campur dengan air hangat. Gunakan 2 hingga 3 kali sehari.</li>\r\n	<li>Minyak cengkeh, caranya sengan mengoleskan minyak cengkeh pada bagian gusi yang bengkak. Lakukan 2 hingga 3 kali sehari.</li>\r\n	<li>Konsumsi vitamin C untuk mencegah gusi bengkak.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', 'Ilustrasi-Obat-Gusi-Bengkak-Sakit-Gigi.jpg', '2016-08-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE IF NOT EXISTS `tbl_dosen` (
  `nidn` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(150) NOT NULL,
  `pend` varchar(100) NOT NULL,
  `gelar` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`nidn`, `nama`, `jk`, `pend`, `gelar`, `foto`) VALUES
('1706241578', 'Andi', 'Laki-Laki', 'S2 Kebidanan', 'M.keb', 'profile.png'),
('1728251085', 'Mawar', 'Perempuan', 'S2 Kebidanan', 'M.keb', 'female-296989_640.png'),
('1754027951', 'Ando', 'Laki-Laki', 'S2 Kebidanan', 'M.keb', 'administrator.png'),
('1763402865', 'Mawar', 'Perempuan', 'S2 Kebidanan', 'M.keb', 'user-297566_640.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_grade`
--

CREATE TABLE IF NOT EXISTS `tbl_grade` (
  `id` int(12) NOT NULL,
  `nilai` varchar(12) NOT NULL,
  `grade` varchar(12) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_grade`
--

INSERT INTO `tbl_grade` (`id`, `nilai`, `grade`) VALUES
(1, 'A', '4'),
(2, 'B', '3'),
(3, 'C', '2'),
(4, 'D', '1'),
(5, 'E', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id_login` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `username`, `password`, `nama_lengkap`, `status`) VALUES
(1, 'admin', 'admin123', 'Malik Irwansyah', 'admin'),
(9, 'pegawai', 'pegawai123', 'pegawai ', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_mahasiswa` (
  `nim` varchar(30) NOT NULL,
  `pass` varchar(55) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `angkatan` varchar(100) NOT NULL,
  `jurusan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `pass`, `nama`, `jk`, `angkatan`, `jurusan`) VALUES
('001', 'password 001', 'Rita', 'Perempuan', '2013', 'Kebidanan'),
('002', 'password 002', 'Pian', 'Laki-laki', '2013', 'Kebidanan'),
('003', 'password 003', 'Dadang', 'Laki-laki', '2013', 'Kebidanan'),
('004', 'password 004', 'Ridho', 'Laki-laki', '2012', 'Kebidanan'),
('005', 'password 005', 'Dian', 'Perempuan', '2015', 'Kebidanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mk`
--

CREATE TABLE IF NOT EXISTS `tbl_mk` (
  `kd_mk` varchar(30) NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `jum_sks` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mk`
--

INSERT INTO `tbl_mk` (`kd_mk`, `nama_mk`, `jum_sks`, `semester`, `jurusan`) VALUES
('mk004', 'pendidikan pancasila', '4', '2014 Ganjil', 'Kebidanan'),
('mk002', 'pendidikan agama', '3', '2013 Ganjil', 'Kebidanan'),
('mk003', 'bahasa ingris', '4', '2013 Genap', 'Kebidanan '),
('mk001', 'biokimia', '2', '2014 Genap', 'Kebidanan'),
('mk005', 'fisika ksehatan', '2', '2015 Ganjil', 'Kebidanan'),
('mk006', 'keterampilan dasar praktek klinik', '2', '2015 Genap', 'Kebidanan'),
('mk007', 'konsep kebidanan', '3', '2016 Ganjil', 'Kebidanan'),
('mk008', 'mikrobiologi', '4', '2016 Genap', 'Kebidanan'),
('mk009', 'ilmu kesehatan anak', '4', '2012 Genap', 'Kebidanan'),
('mk010', 'psikologi', '3', '2012 Ganjil', 'Kebidanan'),
('mk011', 'farmakologi', '2', '2011 Genap', 'Kebidanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
  `id` int(15) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `kd_mk` varchar(100) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id`, `nim`, `kd_mk`, `nilai`, `semester`) VALUES
(138, '006', 'mk003', '77', '2014 Genap'),
(132, '001', 'mk002', '80', '2012 Ganjil'),
(133, '001', 'mk001', '50', '2012 Genap'),
(134, '001', 'mk003', '77', '2013 Ganjil'),
(135, '001', 'mk004', '65', '2013 Genap'),
(136, '001', 'mk005', '61', '2014 Ganjil'),
(137, '001', 'mk006', '68', '2014 Genap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pmb`
--

CREATE TABLE IF NOT EXISTS `tbl_pmb` (
  `id_pmb` int(20) NOT NULL,
  `ket` varchar(55) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pmb`
--

INSERT INTO `tbl_pmb` (`id_pmb`, `ket`, `tgl_awal`, `tgl_akhir`, `status`) VALUES
(4, 'pembukaan jalur 1 2016', '2016-05-26', '2016-05-28', 'Buka'),
(5, 'pembukaan jalur 2 2016', '2016-06-08', '2016-06-23', 'Buka'),
(6, 'pembukaan jalur 2 2015', '2015-04-13', '2015-08-19', 'Tutup'),
(8, 'pembukaan jalur 1 2015', '2015-01-12', '2015-04-01', 'Buka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_mk`
--
ALTER TABLE `tbl_mk`
  ADD PRIMARY KEY (`kd_mk`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pmb`
--
ALTER TABLE `tbl_pmb`
  ADD PRIMARY KEY (`id_pmb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT for table `tbl_pmb`
--
ALTER TABLE `tbl_pmb`
  MODIFY `id_pmb` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
