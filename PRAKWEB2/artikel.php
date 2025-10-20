<!DOCTYPE html>
<html>
<head>
  <title>Artikel - Layout Mockup Dengan Semantik HTML</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="wrapper">
    <div id="container">

      <!-- HEADER -->
      <header>
        <img src="images/header.png" alt="Header" width="960" height="120">
      </header>

      <!-- NAVIGASI -->
      <nav>
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="artikel.php">Artikel</a></li>
          <li>
            <a href="profil.php">Profil</a>
            <ul class="submenu">
              <li><a href="hubkami.php">Hub Kami</a></li>
              <li><a href="tentangkami.php">Tentang Kami</a></li>
            </ul>
          </li>
        </ul>
      </nav>

      <!-- KONTEN UTAMA -->
      <content>
        <article>
          <h1>Daftar Artikel</h1>
          <p>Berisi kumpulan artikel tentang pemrograman web, desain, dan lainnya.</p>

          <div id="single">
            <div id="t-images" style="background:url(images/gambar2.png)">&nbsp;</div>
            <h2>Belajar Web dengan HTML+CSS3</h2>
            Click Insert and then choose the elements you want from the different galleries. Themes and styles also help keep your document coordinated. 
            <div id="more"><a href="info.php">Baca selengkapnya</a></div>
          </div>

          <div id="single">
            <div id="t-images" style="background:url(images/gambar3.png)">&nbsp;</div>
            <h2>Mockup Web dengan Word</h2>
            Click Insert and then choose the elements you want from the different galleries. Themes and styles also help keep your document coordinated. 
            <div id="more"><a href="info2.php">Baca selengkapnya</a></div>
          </div>

          <div id="single">
            <div id="t-images" style="background:url(images/gambar3.png)">&nbsp;</div>
            <h2>Desain Web Statis</h2>
            Click Insert and then choose the elements you want from the different galleries. Themes and styles also help keep your document coordinated. 
            <div id="more"><a href="info3.php">Baca selengkapnya</a></div>
          </div>

          <a href="index.php">← Kembali ke Beranda</a>
        </article>

        <!-- SIDEBAR -->
        <aside>
          <li class="widget">
            <h2>Berita Populer</h2>
            <ul>
              <li><a href="#">Belajar Web dengan HTML+CSS3</a></li>
              <li><a href="#">Mockup Web dengan Word</a></li>
              <li><a href="#">Desain Web Statis</a></li>
            </ul>
          </li>

          <li class="widget">
            <h2>Artikel Populer</h2>
            <ul>
              <li><a href="#">Pelatihan WEB DIGITALENT</a></li>
              <li><a href="#">Pelantikan Kepala Kominfo</a></li>
              <li><a href="#">Peresmian Kelas Coding WEB</a></li>
            </ul>
          </li>

          <li class="widget">
            <h2>Berita Selanjutnya</h2>
            <ul>
              <li><a href="#">UINSU Ganti Logo</a></li>
              <li><a href="#">Informasi Digitalent Kominfo</a></li>
              <li><a href="#">Cuaca di Medan</a></li>
            </ul>
          </li>
        </aside>
      </content>

      <!-- FOOTER -->
      <footer>
        <div id="column">
          <h2>LAYANAN</h2>
          E-Mail<br>
          E-Learning<br>
          E-Jurnal<br>
          Digital Library<br>
          Portal SIA<br>
          SI-Selma<br>
          SI-Dahlia
        </div>

        <div id="column">
          <h2>Business Hour</h2>
          Silahkan hubungi Pusbangnis UINSU telp 064123123 pada jam kerja 
          atau email <a href="#">pusbangnis@uinsu.ac.id</a>
        </div>

        <div id="column">
          <h2>Head Office</h2>
          Jl. Willem Iskandar, Pasar V, Medan Estate<br>
          Tel: +62-61-6615683<br>
          Email: humas@uinsu.ac.id
        </div>
      </footer>

    </div>
  </div>
</body>
</html>
