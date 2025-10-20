<!DOCTYPE html>
<html>
<head>
  <title>Mockup Web dengan Word</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
  <header>
    <h2>LAYOUT WEB SEMANTIK</h2>
  </header>
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

  <article>
    <div id="single">
      <h2>Mockup Web dengan Word</h2>
      <img src="images/gambar3.png" width="300px" style="float:left; margin:10px;">
      <p>
        Mockup merupakan rancangan awal dari tampilan suatu website sebelum diubah menjadi kode HTML dan CSS. 
        Dengan membuat mockup menggunakan Microsoft Word, kita dapat menentukan tata letak elemen seperti header, menu, konten, sidebar, dan footer dengan mudah.
      </p>
      <p>
        Proses pembuatan mockup bertujuan agar desainer dan pengembang memiliki panduan visual yang jelas sebelum masuk ke tahap coding. 
        Warna, gambar, dan font dapat diuji terlebih dahulu untuk memastikan kesesuaian desain.
      </p>
      <p>
        Setelah desain mockup selesai, hasilnya dapat dijadikan acuan dalam pembuatan layout HTML menggunakan elemen semantik seperti 
        <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;article&gt;</code>, dan <code>&lt;footer&gt;</code>.
      </p>
      <a href="index.php" style="float:right; margin-top:10px;">← Kembali ke Beranda</a>
    </div>
  </article>

  <footer>
    <div id="column">
      <h2>LAYANAN</h2>
      E-Mail<br>
      E-Learning<br>
      E-Jurnal<br>
      Digital Library<br>
      Portal SIA<br>
      SI-Selma
    </div>
    <div id="column">
      <h2>Business Hour</h2>
      Hubungi UINSU Telp 064123123<br>
      Email: <a href="#">pusbangnis@uinsu.ac.id</a>
    </div>
    <div id="column">
      <h2>Head Office</h2>
      Jl. Willem Iskandar, Pasar V, Medan Estate<br>
      Tel : +62-61-6615683<br>
      Email : humas@uinsu.ac.id
    </div>
  </footer>
</div>
</body>
</html>
