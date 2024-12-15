<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
  <title>NUR SALSABILA - Portofolio</title>
</head>

<body>
  <!-- Header Section -->

  <header>
    <a href="index.html" class="logo">NUR SALSABILA</a>

    <div class='bx bx-menu' id="menu-icon"></div>
    <ul class="navbar">
      <li><a href="./index.php">Home</a></li>
      <li><a href="./about.php">About</a></li>
      <li><a href="./portfolio.php">Portfolio</a></li>
      <li><a href="./contact.php">Contact</a></li>
    </ul>

    <div class="top-btn">
      <a href="#contact" class="nav-btn">Contact Me</a>
    </div>
  </header>

  <!-- Home Section Code -->

  <section class="home" id="home">
    <div class="home-content">
      <h3>Hi, Myself</h3>
      <h1>NUR SALSABILA</h1>
      <h3>I'm a <span class="multiple-text"></span></h3>
      <p>
        Saya adalah mahasiswa Pendidikan bahasa inggris di Universitas Bengkulu dengan minat yang terus
        <br>
        berkembang dalam berbahasa inggris . Saya berkomitmen untuk mempelajari bahasa inggris

        <br>
        dan melatih bicara saya agar fasih berbahasa inggris dan berusaha
        <br>
        meraih kesuksesan di bidang ini.
      </p>
      <div class="social-media">
        <a href="https://www.linkedin.com/in/damianus-christopher-saosir-554972147/"><i
            class='bx bxl-linkedin'></i></a>
        <a href="https://github.com/chrstprs"><i class='bx bxl-github'></i></a>
        <a href="https://www.facebook.com/damianus.christophers/"><i class='bx bxl-facebook'></i></a>
        <a href="https://www.instagram.com/christprs/?hl=id"><i class='bx bxl-instagram'></i></a>
      </div>

      <a href="#" class="btn">Download CV</a>
    </div>

    <div class="home-img">
      <img src="side-logo.png" alt="Profile chris">
    </div>
  </section>

  <!-- About Section Code -->

  <section class="about" id="about">
    <div class="about-img">
      <img src="foto.jpg" alt="">
    </div>

    <div class="about-content">
      <h2 class="heading">About <span>Me</span></h2>
      <h3>I'm a <span>Web Developer</span></h3>
      <p>
        Saya adalah mahasiswa FKIP Program Studi Pendidikan Bahasa Inggris. Setiap hari, saya belajar tentang tata
        bahasa, keterampilan berbicara, dan cara mengajar yang efektif. Saya bercita-cita menjadi seorang guru bahasa
        Inggris yang mampu menginspirasi siswa-siswa saya di masa depan. Meskipun terkadang tugas-tugasnya sulit, saya
        merasa senang karena ini adalah langkah menuju impian saya.
        <br>
        Selama belajar di Program Studi Pendidikan Bahasa Inggris, saya mempelajari tata bahasa, menulis, berbicara,
        dan metode pengajaran. Awalnya, saya merasa gugup berbicara di depan umum, tetapi dengan latihan dan dukungan
        dosen, saya semakin percaya diri. Pengalaman praktek mengajar di sekolah memberi saya gambaran nyata tentang
        tantangan dan kebahagiaan menjadi seorang guru. Semua ini membuat saya semakin yakin dengan pilihan saya.
        <br>
        Fokus saya selama pembelajaran di Program Studi Pendidikan Bahasa Inggris adalah meningkatkan kemampuan
        berbicara, memahami tata bahasa, dan mempelajari metode pengajaran yang efektif. Saya juga berusaha membangun
        rasa percaya diri dalam menggunakan bahasa Inggris, baik secara lisan maupun tulisan, agar dapat menjadi guru
        yang kompeten di masa depan.
      </p>

      <a href="#" class="btn">Read More</a>
    </div>

  </section>

  <!-- Portfolio Section Code -->

  <section class="portfolio" id="portfolio">

    <h2 class="heading">My <span>Portfolio</span></h2>

    <div class="portfolio-content">
      <div class="row">
        <img src="gambar6.jpg" alt="">

        <h4>First time seeing the Eiffel Tower, but only an imitation</h4>
      </div>

      <div class="row">
        <img src="gambar5.jpg" alt="">

        <h4>Every time there is a meeting, there must be a separation</h4>
      </div>

      <div class="row">
        <img src="gambar4.jpg" alt="">

        <h4>First time watching a concert
          Juicy Luisy</h4>
      </div>

      <div class="row">
        <img src="gambar3.jpg" alt="">

        <h4>My cat</h4>
      </div>

      <div class="row">
        <img src="gambar2.jpg" alt="">

        <h4>yearbook</h4>
      </div>

      <div class="row">
        <img src="gambar1.jpg" alt="">

        <h4>first look, tiger</h4>
      </div>
    </div>

  </section>

  <!-- Contact Section Code -->

  <section class="contact" id="contact">

    <h2 class="heading">Contact <span>Me</span></h2>

    <form action="./contact_process.php" method="post">
      <div class="input-box">
        <input type="text" placeholder="Full Name" name="full_name">
        <input type="email" placeholder="Email Address" name="email">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Phone Number" name="phone">
        <input type="text" placeholder="Email Subject" name="subject">
      </div>

      <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>

      <input type="submit" value="Send Message" class="btn">
    </form>

  </section>

  <!-- Footer Section Code -->

  <footer class="footer">
    <div class="social">
      <a href="https://www.linkedin.com/in/wahyu-ozorah-3a6a36212/"><i class='bx bxl-linkedin'></i></a>
      <a href="https://github.com/"><i class='bx bxl-github'></i></a>
      <a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a>
      <a href="https://https://www.instagram.com/wahyuozorahmanurung_/"><i class='bx bxl-instagram'></i></a>
    </div>

    <p class="copyright">
      &copy; Nur Salsabila@2024
    </p>
  </footer>

  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <script src="script.js"></script>
</body>

</html>