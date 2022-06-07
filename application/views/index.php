<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Belajar Framework Codeigniter | Membuat Template Sederhana 
codeigniter</title>
<link rel="stylesheet" type="text/css"
href="<?= base_url('asset/css/style.css');?>">
</head>
<body>
<div id="wrapper">
<header>
<hgroup>
<h1>www.zilla.com</h1>
<h3>membuat template sederhana codeigniter</h3>
</hgroup>
<nav>
<ul>
<li><a href="<?php echo base_url().'index.php/web'
?>">Home</a></li>
<li><a href="<?php echo
base_url().'index.php/web/about' ?>">about</a></li>
</ul>
</nav>
<div class="clear"></div>
</header>
<section>
<h1><?php echo $judul ?></h1>
<p>
Codeigniter adalah sebuah web aplication network yangn bersifat open source yang digunakan untuk membangun aplikasi php dinamis.
Codeigniter menjadi sebuah framework PHP dengan model MVC(Model,View,Controller) untuk membangun website dinamis dengan menggunakan
PHP yang dapat mempercepat pengembang untuk membuat sebuah aplikasi web.Selain ringan dan cepat,Codeigniter juga memiliki dokumentasi
yang super lengkap disertai dengan contoh implementasi kodenya.Dokumentasi yang lengkap inilah yang menjadi salah satu alasan kuat mengapa 
banyak orang memilih Codeigniter sebagai framework pilihannya.
karena kelebihan-kelebihan yang dimiliki oleh Codeigniter,pembuat PHP Rasmnus Lerdorf memuji Codeigniter di froscon(Agustus 2008)dengan 
mengatakan bahwa dia menyukai Codeigniter karena "it is faster,lighter and the least like a framework.".
</p>
<p>
Keunggulan Codeigniter 
1.Size yang kecil
keseluruhan framework Codeigniter hanya sebesar 2MB.Size sekecil ini tentu memudahkan kita untuk mempelajari Codeigniter,menjalankannya
juga mengupdate

2.Sangat sangat.
Sebagai pengguna,kita cenderung menyukai aplikasi yang sangat cepat,baik looding atau saat menggunakannya.
Codeigniter memiliki daya respon looding kurang dari 50 milisecond.

3.fleksibel 
Codeigniter memiliki komponen dan fitur-fitur yang berdiri sendiri tanpa terlalu banyak bergantung pada satu sama lain,
membuat Codeigniter sangat mudah untuk di uprade dan dibenarkan jika ada masalahnya.

4.Arsitektur yang bersifat MVC(Model,View,Controller)
ketika membuat dan mengerjakan aplikasi berbasis web,desain arsitektur MVC merupakan standar industri untuk sebuah framework.
MVC sangat berguna untuk memisahkan data,business logic,dan presentasi.

5.dapat dimodifikasi 
pada mulanya Codeigniter sudah terdapat library dan bantuan dari awal mula kita pakai,jika apa yang anda cari tidak ada,
anda dapat dengan mudah menambahkan library dan bantuan anda sendiri.

6.Mudah dipelajari dan dikuasai 
</p>
</section>
<footer>
<a href="http://www.zilla.com"><center><h3>created by:zilla pranandha putri </a> </center>
</a>
</footer>
</div>
</body>