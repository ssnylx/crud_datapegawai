<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--  google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--  icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Beranda</title>
</head>
<body style="background-color: #F1F1F1">
    <main> 
      <!-- header -->
        <header>
        <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #222831">
    <div class="container">
      <a class="navbar-brand fw-bold fs-4" href="#">PT CodeCraft IT Solutions</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
        <ul class="navbar-nav gap-4">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="coba.php">Beranda</a>
        </li>
          <li class="nav-item">
            <a class="nav-link active" href="#ttg">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#contact">Kontak</a>
          </li>
        </ul>
        <div class="d-flex gap-4 align-items-center">
    <a href="login.php" class="btn" style="background-color: #F1F1F1">Login</a>
</div>
      </div>
    </div>
  </nav>
  </header>

  <div class="custom-container">
        <div style="padding-left: 70px; margin-top: 20px">
          <h3>Hallo,</h3>
          <h6>Temukan Solusi Teknologi Bisnis Anda di CodeCraft IT Solutions</h6>
          <br />
        </div>

        <!-- carousel -->
  <div id="wrapper"> 
      <div id="carousel">
        <div id="content">
          <img
            class="item"
            src="image/c.jpg"
          />
          <img
            src="image/c1.png"
            class="item"
          />
          <img
            src="image/c2.jpg"
            class="item"
          />
        </div>
      </div>
      <button id="prev">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
        >
          <path fill="none" d="M0 0h24v24H0V0z" />
          <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
        </svg>
      </button>
      <button id="next">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
        >
          <path fill="none" d="M0 0h24v24H0V0z" />
          <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
        </svg>
      </button>
    </div> 
   <br>

    <!-- section -->
        <section>
            <div class="container">
            <div class="row mt-5 align-items-center" id="ttg">
            <h2 style="font-size: 20px; padding-left: 90px">Apa sih PT CodeCraft IT Solutions itu??</h2>
        <div class="col-md-6">
            <div class="content-text" style="padding-left: 80px; padding-right: 40px" >
           CodeCraft IT Solutions adalah sebuah perusahaan yang berfokus pada solusi teknologi informasi di Indonesia. Perusahaan ini dikenal karena menyediakan berbagai layanan dan produk dalam bidang IT, termasuk pengembangan perangkat lunak, konsultasi IT, integrasi sistem, dan solusi infrastruktur IT.
            CodeCraft IT Solutions didirikan dengan tujuan untuk membantu perusahaan-perusahaan meningkatkan efisiensi operasional dan inovasi melalui penerapan teknologi terkini. Mereka mungkin memiliki tim yang terampil dalam pengembangan perangkat lunak khusus, seperti aplikasi web dan mobile, serta solusi enterprise untuk memenuhi kebutuhan klien dari berbagai sektor industri.
            </div>
        </div>
        <div class="col-md-6">
            <img src="image/office.png" style="width: 100%">
        </div>
    </div>

    <br><br>

    <!-- carousel -->
    <!-- <h4 class="text-center mt-md-5 mb-md-2" id="produk">Produk</h4>
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/img.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block " style="color: black">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/img1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/img1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

    <!-- layanan -->
    <h4 class="text-center mt-md-5 mb-md-2" id="layanan">Layanan</h4>
    <div class="card-body">
            <p class="p-0 mb-4 text-lg-center">PT CodeCraft IT Solutions menghadirkan layanan terbaik untuk memenuhi kebutuhan produktivitas dan kredibilitas bisnis Anda</p>
        </div>
    <div class="row row-cols-md-3 row-cols-2 gx-5 p-5" style="background-color: #222831">
        <div class="col mb-5">
          <div class="card shadow">
          <i class="fa-brands fa-uncharted mt-3" style="color: #000000; font-size: 100px; display: flex;
            justify-content: center;
            align-items: center;"></i>
            <div class="card-body text-center">
              <p class="card-text fw-bold">Pengembangan Perangkat Lunak (Software Development)</p>
              <p class="fw-7">Pembuatan perangkat lunak, aplikasi web, aplikasi berbasis mobile (smartphone & tablet) khusus sesuai kebutuhan spesifik klien.</p>
              <a class="btn btn-sm btn-dark d-block" style="justify-content: center; align-items: center;">Detail</a>
            </div>
          </div>
        </div>
        <div class="col mb-5">
        <div class="card shadow">
        <i class="fa-solid fa-desktop mt-3" style="color: #000000; font-size: 100px; display: flex;
            justify-content: center;
            align-items: center;"></i>
            <div class="card-body text-center">
              <p class="card-text fw-bold">Layanan Konsultasi IT (IT Consulting Services)</p>
              <p class="fw-7">Membantu bisnis merencanakan strategi IT, memberikan saran dan solusi mengenai teknologi terbaru untuk mencapai tujuan bisnis.</p>
              <a class="btn btn-sm btn-dark d-block" style="justify-content: center; align-items: center;">Detail</a>
            </div>
          </div>
        </div>
        <div class="col mb-5">
        <div class="card shadow">
        <i class="fa-solid fa-shield-halved mt-3" style="color: #000000; font-size: 100px; display: flex;
            justify-content: center;
            align-items: center;"></i>
            <div class="card-body text-center">
              <p class="card-text fw-bold">Layanan Keamanan Siber (Cybersecurity Services)</p>
              <p class="fw-7">Menilai kerentanan sistem dan jaringan terhadap ancaman keamanan. Pemantauan dan pengelolaan keamanan jaringan secara berkelanjutan.</p>
              <a class="btn btn-sm btn-dark d-block" style="justify-content: center; align-items: center;">Detail</a>
            </div>
          </div>
        </div>
        <div class="col mb-5">
        <div class="card shadow">
        <i class="fa-solid fa-circle-nodes mt-3" style="color: #000000; font-size: 100px; display: flex;
            justify-content: center;
            align-items: center;"></i>
            <div class="card-body text-center">
              <p class="card-text fw-bold">Layanan Infrastruktur IT (IT Infrastructure Services)</p>
              <p class="fw-7">Merancang dan mengimplementasikan jaringan komputer. Mengelola dan memelihara server, termasuk pemantauan dan perbaikan.</p>
              <a class="btn btn-sm btn-dark d-block" style="justify-content: center; align-items: center;">Detail</a>
            </div>
          </div>
        </div>
        <div class="col mb-5">
        <div class="card shadow">
        <i class="fa-solid fa-gears mt-3" style="color: #000000; font-size: 100px; display: flex;
            justify-content: center;
            align-items: center;"></i>
            <div class="card-body text-center">
              <p class="card-text fw-bold">Layanan Dukungan Teknis (Technical Support Services)</p>
              <p class="fw-7">Menyediakan dukungan teknis untuk masalah sehari-hari yang dihadapi oleh pengguna. Menyediakan dukungan teknis di lokasi pengguna.</p>
              <a class="btn btn-sm btn-dark d-block" style="justify-content: center; align-items: center;">Detail</a>
            </div>
          </div>
        </div>
        <div class="col mb-5">
        <div class="card shadow">
        <i class="fa-solid fa-bars-progress mt-3" style="color: #000000; font-size: 100px; display: flex;
            justify-content: center;
            align-items: center;"></i>
            <div class="card-body text-center">
              <p class="card-text fw-bold">Layanan Manajemen Proyek IT (IT Project Management Services)</p>
              <p class="fw-7">Merencanakan & melaksanakan proyek IT dari awal hingga selesai. Mengelola sumber daya manusia & material yang diperlukan.</p>
              <a class="btn btn-sm btn-dark d-block" style="justify-content: center; align-items: center;">Detail</a>
            </div>
          </div>
        </div>
      </div>
    <br><br>

    <h4 class="text-center mt-md-5 mb-md-2" id="contact">Kontak Kami</h4>
        <div class="card-body">
            <p class="p-0 mb-2 text-lg-center">Masukkan kritik dan saran Anda kepada aplikasi kami ini.</p>
        </div>
        <div class="mb-3 row " style="justify-content: center; align-items: center;">
            <div class="col-sm-10 w-50">
                <input type="text" class="form-control" id="email" placeholder="Masukkan email Anda">
            </div>
        </div>
        <div class="mb-3 row" style="justify-content: center; align-items: center;">
            <div class="col-sm-10 w-50">
                <input type="text" class="form-control" id="pesan" placeholder="Masukkan pesan Anda">
            </div>
        </div>
        <div class="mb-3 row" style="justify-content: center; align-items: center;">
            <div class="col-sm-10 w-50" >
                <input type="submit" class="form-control" id="kirim" value="Kirim Pesan" style="background-color:#222831; color: white">
            </div>
        </div>
        <br><br><br>
            </div>
            
            <!-- footer -->
            <footer style="background-color: #222831">
            <div class="container">
            <div class="d-flex justify-content-between gap-5 pt-4">
                    <div class="title-left w-25">
                        <div class="header-title fs-6 mb-2 fw-bolder">
                            Visi & Misi
                        </div>
                        <p>Menjadi pemimpin di industri teknologi informasi dengan memberikan solusi inovatif dan terdepan yang mengubah cara organisasi menggunakan teknologi.</p>
                    </div>
                    <div class="title middle w-25">
                        <div class="header-title fs-6 mb-2 fw-bolder">
                            Kontak
                        </div>
                        <ul class="list-unstyled">
                            <li>
                                <p>
                                Jl. Pahlawan Seribu No. 31, Kota Jakarta Pusat
                                </p>
                            </li>
                            <li>
                                <p>Telp : 0832-3452-1123</p>
                            </li>
                        </ul>
                    </div>
                    <div class="title-sosmed w-30">
                        <div class="header-title fs-6 mb-2 fw-bolder">
                            Sosial Media
                        </div>
                        <div class="sosmed d-flex gap-3">
                            <i class="fa-brands fa-instagram fa-2x"></i>
                            <i class="fa-brands fa-square-facebook fa-2x"></i>
                            <i class="fa-brands fa-whatsapp fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="text-center p-lg-4 mt-3 fs-8">
                    Copy right @ Web by Sinta
                </div>
                </footer>
    </main>


  </body>
  <script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>