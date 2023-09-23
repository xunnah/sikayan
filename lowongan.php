<!DOCTYPE html>
<html>
<head>
    <title>SiKayan</title>
	<meta name="viewport" content="width=device-width, initial-scale=0.9">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/banner.png" alt="Logo sikayan">
        </div>
        <nav>
            <ul>
			<div class="jadi1">
			<div class="nanti_hilang">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="lowongan.php">Lowongan</a></li>
                <li><a href="pelatihan.html">Pelatihan</a></li>
                <li><a href="program.html">Program</a></li>
                <li><a href="informasi.html">Informasi</a></li>
                <li><a href="contact.html">Hubungi Kami</a></li>
				</div>
<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'sikayan');

if (isset($_SESSION['username'])) {
    echo "<a href='dashboard.php'>" . $_SESSION['username'] . "</a>";
} else {
    echo "<a href='login.php'>Masuk/Daftar </a>";
}
?>
				</div>
            </ul>
        </nav>
    </header>

<nav class="nav">
  <a href="index.html" class="nav__link">
    <i class="material-icons nav__icon">home</i>
    <span class="nav__text">Beranda</span>
  </a>
  <a href="lowongan.html" class="nav__link nav__link--active">
    <i class="material-icons nav__icon">group_add</i>
    <span class="nav__text">Lowongan</span>
  </a>
  <a href="pelatihan.html" class="nav__link">
    <i class="material-icons nav__icon">diversity_3</i>
    <span class="nav__text">Pelatihan</span>
  </a>
  <a href="program.html" class="nav__link">
    <i class="material-icons nav__icon">public</i>
    <span class="nav__text">Program</span>
  </a>
  <a href="informasi.html" class="nav__link">
    <i class="material-icons nav__icon">event</i>
    <span class="nav__text">Informasi</span>
  </a>
</nav> <!-- buat filter-->

<center>
  <div id="myBtnContainer" class="jadiin1">
    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
    <button class="btn" onclick="filterSelection('umum')"> Pekerjaan Umum</button>
    <button class="btn" onclick="filterSelection('sm')"> Sales & Marketing</button>
    <button class="btn" onclick="filterSelection('it')"> IT & Software</button>
    <button class="btn" onclick="filterSelection('mc')"> Media & Creative </button>
  </div>
  
        <div class="geser2">
          <a href="lowongan/1.html" class="inilink"><div class="gatau2 it"><img src="images/logobaru2.png" class="gambar"></img><font class="teks">PT. Hannux Project <p>Membuka Lowongan Pekerjaan</p><b><p>(IT & Software)</p></b></font></div></a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2 umum"><img src="images/pertamina.png" class="gambar"></img><font class="teks">Pertamina Indonesia<p>Membuka Lowongan Pekerjaan</p><b><p>(Pekerjaan Umum)</p></b></font></div></a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2 sm"><img src="images/telkom.jpeg" class="gambar"></img><font class="teks">Telkom Indonesia <p>Membuka Lowongan Pekerjaan</p><b><p>(Sales & Marketing)</p></b></font></div> </a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2 mc"><img src="images/rcti.png" class="gambar"></img><font class="teks">RCTI <p>Membuka Lowongan Pekerjaan</p><b><p>(Media & Creative)</p></b></font></div></a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2 umum"><img src="images/logobaru2.png" class="gambar"></img><font class="teks">PT. Hannux Project <p>Membuka Lowongan Pekerjaan</p><b><p>(Pekerjaan Umum)</p></b></font></div></a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2 umum"><img src="images/logobaru2.png" class="gambar"></img><font class="teks">PT. Hannux Project <p>Membuka Lowongan Pekerjaan</p><b><p>(Pekerjaan Umum)</p></b></font></div></a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2 umum"><img src="images/logobaru2.png" class="gambar"></img><font class="teks">PT. Hannux Project <p>Membuka Lowongan Pekerjaan</p><b><p>(Pekerjaan Umum)</p></b></font></div></a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2 umum"><img src="images/logobaru2.png" class="gambar"></img><font class="teks">PT. Hannux Project <p>Membuka Lowongan Pekerjaan</p><b><p>(Pekerjaan Umum)</p></b></font></div></a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2 umum"><img src="images/logobaru2.png" class="gambar"></img><font class="teks">PT. Hannux Project <p>Membuka Lowongan Pekerjaan</p><b><p>(Pekerjaan Umum)</p></b></font></div></a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2 umum"><img src="images/logobaru2.png" class="gambar"></img><font class="teks">PT. Hannux Project <p>Membuka Lowongan Pekerjaan</p><b><p>(Pekerjaan Umum)</p></b></font></div></a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2 umum"><img src="images/logobaru2.png" class="gambar"></img><font class="teks">PT. Hannux Project <p>Membuka Lowongan Pekerjaan</p><b><p>(Pekerjaan Umum)</p></b></font></div></a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2"><img src="images/logobaru2.png" class="gambar"></img><font class="teks">PT. Hannux Project <p>Membuka Lowongan Pekerjaan</p><b><p>(Pekerjaan Umum)</p></b></font></div></a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2"><img src="images/logobaru2.png" class="gambar"></img><font class="teks">PT. Hannux Project <p>Membuka Lowongan Pekerjaan</p><b><p>(Pekerjaan Umum)</p></b></font></div></a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2"><img src="images/logobaru2.png" class="gambar"></img><font class="teks">PT. Hannux Project <p>Membuka Lowongan Pekerjaan</p><b><p>(Pekerjaan Umum)</p></b></font></div></a>
          <a href="lowongan/1.html" class="inilink"><div class="gatau2"><img src="images/logobaru2.png" class="gambar"></img><font class="teks">PT. Hannux Project <p>Membuka Lowongan Pekerjaan</p><b><p>(Pekerjaan Umum)</p></b></font></div></a>
        </div>
</center><br><br><br><br><br><br><br>
<script src="filter.js"></script>
<script src="script.js"></script>
</body>
</html>
