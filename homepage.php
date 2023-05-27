<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      property="og:title"
      content="Eksekutif"
      Mahasiswa
      Universitas
      Brawijaya
    />
    <meta
      property="og:site_name"
      content="Eksekutif"
      Mahasiswa
      Universitas
      Brawijaya
    />
    <meta property="og:url" content=https://em.ub.ac.id/>
    <meta property="og:description" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri("/assets/style-hp.css") ?>" />
  </head>
  
  <body>
    <nav id="navbar_top" class="navbar navbar-expand-lg bg-transparent">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?php echo get_theme_file_uri("/assets/Logo EM.png")?>" width="160px" alt="Logo-EM">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item me-3">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Berita</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Tentang</a>
            </li>
            <li class="nav-item dropdown me-3">
              <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kemenkoan
              </a>
              <ul class="dropdown-menu animate slideIn">
                <li><a class="dropdown-item" href="#">Internal</a>
                  <ul class="dropdown-menu dropdown-submenu animate slideIn">
                    <li>
                      <a class="dropdown-item" href="#">Kementerian Keuangan</a>
                      <a class="dropdown-item" href="#">Kementerian Sekretariat Kabinet</a>
                      <a class="dropdown-item" href="#">Kementerian PAO</a>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="#">Pengabdian</a>
                  <ul class="dropdown-menu dropdown-submenu animate slideIn">
                    <li>
                      <a class="dropdown-item" href="#">Kementerian Sosial Masyarakat</a>
                      <a class="dropdown-item" href="#">Kementerian Lingkungan Hidup</a>
                      <a class="dropdown-item" href="#">Direktorat Brawijaya Mengajar</a>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="#">Pergerakan</a>
                  <ul class="dropdown-menu dropdown-submenu animate slideIn">
                    <li>
                      <a class="dropdown-item" href="#">Kementerian Advokesma</a>
                      <a class="dropdown-item" href="#">Kementerian Kastrat</a>
                      <a class="dropdown-item" href="#">Kementerian P3</a>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="#">Pelayanan</a>
                  <ul class="dropdown-menu dropdown-submenu animate slideIn">
                    <li>
                      <a class="dropdown-item" href="#">Kementerian Kominfo</a>
                      <a class="dropdown-item" href="#">Kementerian Dalam Negeri</a>
                      <a class="dropdown-item" href="#">Kementerian Luar Negeri</a>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="#">Pengembangan</a>
                  <ul class="dropdown-menu dropdown-submenu animate slideIn">
                    <li>
                      <a class="dropdown-item" href="#">Kementerian Rispensi</a>
                      <a class="dropdown-item" href="#">Kementerian PSDM</a>
                      <a class="dropdown-item" href="#">Kementerian BUMM</a>
                      <a class="dropdown-item" href="#">Kementerian BUDPORA</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Mitra</a>
            </li>
          </ul>
          <div class="d-flex">
            <a class="pe-2 logo-socmed" href="twitter.com"><img src="<?php echo get_theme_file_uri("/assets/images/twitter_dark.png")?>" width="36px"></a>
            <a class="pe-2 logo-socmed" href="youtube.com"><img src="<?php echo get_theme_file_uri("/assets/images/youtube_dark.png")?>" width="36px"></a>
            <a class="pe-2 logo-socmed" href="twitter.com"><img src="<?php echo get_theme_file_uri("/assets/images/tiktok_dark.png")?>" width="36px"></a>
            <a class="pe-2 logo-socmed" href="youtube.com"><img src="<?php echo get_theme_file_uri("/assets/images/linkedin_dark.png")?>" width="36px"></a>
            <a class="pe-2 logo-socmed" href="youtube.com"><img src="<?php echo get_theme_file_uri("/assets/images/instagram_dark.png")?>" width="36px"></a>
          </div>
        </div>
      </div>
    </nav>

    <header id="hero">
      <div class="container-fluid">
        <div class="col-lg-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo get_theme_file_uri("/assets/images/prologue.png")?>" class="d-block w-100 h-10" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_theme_file_uri("/assets/images/prologue-2.png")?>" class="d-block w-100 h-10" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_theme_file_uri("/assets/images/prologue-3.png")?>" class="d-block w-100 h-10" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_theme_file_uri("/assets/images/prologue-4.png")?>" class="d-block w-100 h-10" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_theme_file_uri("/assets/images/prologue-5.png")?>" class="d-block w-100 h-10" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </header>

    <section id="news">
      <div class="container">
        <div class="row align-items-center">
          <div data-aos="fade-right" data-aos-duration="1000" id="title-news" class="col-lg-7">
            <div class="row align-items-center">
              <div id="kominfo-logo" class="col-lg-7">
                <img src="<?php echo get_theme_file_uri("/assets/images/KOMINFO 1.png")?>" width="380px">
              </div>
              <div id="header-news" class="col-lg-5">
                <h2 class="fw-bold atas">Berita</h2>
                <h2 class="fw-bold bawah">EM UB 2023</h2>
              </div>
              <div id="deskripsi-news" class="col-lg-12">
                <p class="text-center fw-bold">EM UB 2023 menyajikan informasi seputar akademik,<br> kegiatan mahasiswa, beasiswa, magang dan lainnya.</p>
              </div>
            </div>
          </div>
          <div data-aos="fade-left" data-aos-duration="1000" class="col-lg-5">
            <div class="row align-items-center">
              <div id="card" class="col-lg-8">
                <?php 
                  if (has_post_thumbnail()) {
                    echo the_post_thumbnail('on-post-thumbnail');
                } else {
              ?>
              <img src="./assets/Logo EM.png" width="150" height="150" alt="training">
              <?php } ?>
                <a href="">
                  <div id="head" class="text-white fw-bold">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt() ?></p>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-warning text-center">Baca Lebih Banyak</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="rise">
      <div class="container">
        <div id="title-news" class="col-lg-12" data-aos="fade-right" data-aos-duration="1000">
          <h2 class="fw-bold atas">RISE OF</h2>
          <h2 class="fw-bold bawah">BRAWIJAYANS!</h2>
        </div>
        <div id="riseCard" data-aos="zoom-out-up" data-aos-duration="1000">
          <div class="row">
            <div id="foto-card" class="col-lg-5">
              <img src="<?php echo get_theme_file_uri("/assets/images/Tinju.png")?>" alt="pres-wapres" width="380px" class="ms-5">
            </div>
            <div class="col-lg-7">
              <h4 class="text-white mt-4 fw-bold bg-fun text-center">Fundamental Value</h4>
              <div class="row p-5 text-center">
                <div class="col-5">
                  <p class="text-white bg-poin">Amanah</p>
                  <p class="text-white bg-poin">Harmonis</p>
                  <p class="text-white bg-poin">Adaptif</p>
                </div>
                <div id="kanan" class="col-5">
                  <p class="text-white bg-poin">Kompeten</p>
                  <p class="text-white bg-poin">Loyal</p>
                  <p class="text-white bg-poin">Kolaboratif</p>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="proker">
      <div class="container">
        <div class="title-proker" data-aos="fade-right" data-aos-duration="1000">
          <h2 class="fw-bold atas">PROGRAM KERJA</h2>
          <h2 class="fw-bold bawah">UNGGULAN EM UB 2023</h2>
        </div>
        <div class="accordion-proker" data-aos="fade-up" data-aos-duration="1000">
          <div class="row">
            <div class="col-lg-6">
              <div class="accordion" id="accordion1">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="accordion1-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseOne" aria-expanded="false" aria-controls="accordion1-collapseOne">
                      Brawijaya Business Center
                    </button>
                  </h2>
                  <div id="accordion1-collapseOne" class="accordion-collapse collapse" aria-labelledby="accordion1-headingOne">
                    <div class="accordion-body text-white">
                      Pendirian badan-badan usaha mikro mahasiswa di bawah Kementerian BUMM dengan mematenkan hak merek agar nilai branding menjadi meningkat dan lebih berharga.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="accordion1-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseTwo" aria-expanded="false" aria-controls="accordion1-collapseTwo">
                      Brawijaya Virtual Internship
                    </button>
                  </h2>
                  <div id="accordion1-collapseTwo" class="accordion-collapse collapse" aria-labelledby="accordion1-headingTwo">
                    <div class="accordion-body text-white">
                      Pembukaan akses magang virtual dengan perusahaan/start up rekanan.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="accordion1-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseThree" aria-expanded="false" aria-controls="accordion1-collapseThree">
                      Manifesto Brawijaya
                    </button>
                  </h2>
                  <div id="accordion1-collapseThree" class="accordion-collapse collapse" aria-labelledby="accordion1-headingThree">
                    <div class="accordion-body text-white">
                      Kanal pendaftaran jurnal mahasiswa Universitas Brawijaya bertema poleksosbudhankam.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="accordion" id="accordion2">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="accordion2-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion2-collapseOne" aria-expanded="false" aria-controls="accordion2-collapseOne">
                      Brawijaya International Festival
                    </button>
                  </h2>
                  <div id="accordion2-collapseOne" class="accordion-collapse collapse" aria-labelledby="accordion2-headingOne">
                    <div class="accordion-body text-white">
                      Festival internasional yang meliputi
                      seminar dan konferensi bertaraf internasional dan pekan kebudayaan
                      antar bangsa-bangsa di tingkat ASEAN.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="accordion2-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion2-collapseTwo" aria-expanded="false" aria-controls="accordion2-collapseTwo">
                      Brawijaya Multidisplicinary Laboratory
                    </button>
                  </h2>
                  <div id="accordion2-collapseTwo" class="accordion-collapse collapse" aria-labelledby="accordion2-headingTwo">
                    <div class="accordion-body text-white">
                      Laboratorium riset pengembangan
                      ilmu pengetahuan multidisipliner berbentuk seminar yang membedah
                      wacana pembangunan nasional berdasarkan SDGs dengan output jurnal
                      resolusi pembangunan nasional.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="accordion2-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion2-collapseThree" aria-expanded="false" aria-controls="accordion2-collapseThree">
                      Brawijaya Scholarship Center
                    </button>
                  </h2>
                  <div id="accordion2-collapseThree" class="accordion-collapse collapse" aria-labelledby="accordion2-headingThree">
                    <div class="accordion-body text-white">
                      Pembinaan Beasiswa Dalam dan Luar Negeri serta pembinaan TOEFL/IELTS.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="accor-78" class="col-lg-12 pt-4">
            <div class="accordion" id="accordion3">
              <div class="accordion-item">
                <h2 class="accordion-header" id="accordion3-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion3-collapseOne" aria-expanded="false" aria-controls="accordion3-collapseOne">
                    Pembinaan PPK Ormawa
                  </button>
                </h2>
                <div id="accordion3-collapseOne" class="accordion-collapse collapse" aria-labelledby="accordion3-headingOne">
                  <div class="accordion-body text-white">
                    Pembinaan PPK Ormawa Kemendikbudristek Republik Indonesia: sebagai bentuk kontribusi EM UB pada semangat pembangunan nasional maka penting bagi EM UB untuk turut ikut serta dalam Program Penguatan Kapasitas Organisasi Kemahasiswaan utamanya di daerah Malang Raya
                    yang belum tersentuh pembangunan SDM dan peningkatan taraf ekonomi melalui pengadaan pembinaan/mentoring.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="accordion3-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion3-collapseTwo" aria-expanded="false" aria-controls="accordion3-collapseTwo">
                    Eco Tourism
                  </button>
                </h2>
                <div id="accordion3-collapseTwo" class="accordion-collapse collapse" aria-labelledby="accordion3-headingTwo">
                  <div class="accordion-body text-white">
                    EM UB harus mampu mewujudkan peningkatan pendapatan ekonomi masyarakat dan peningkatan pendapatan daerah melalui kegiatan wisata berwawasan lingkungan, seperti bekerjasama dengan POKMASWAS KKP di daerah pesisir untuk meningkatkan daya saing
                    wisata di daerah terpencil.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </section>

    <footer id="footer" class="">
      <div class="container-fluid">
        <div class="row">
          <div id="mobile-footer" class="col-lg-12">
            <ul>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/linkedin.png")?>" width="20px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/twitter-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/tiktok-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/instagram-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/youtube-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/telephone_.png")?>" width="20px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/line.png")?>" width="26px"></a></li>
              <li class="ms-4"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/🦆 icon _location_.png")?>" width="20px"></a></li>
            </ul>
          </div>
          <div id="copyright" class="col-lg-4">
            <p class="text-white">Copyright &copy; KOMINFO EM UB 2023 | All Rights Reserved.</p>
          </div>
          <div class="col-lg-5">
            <ul id="socmed-footer" class="mx-auto">
              <li class="mx-auto">Social Media</li>
              <li class="mx-auto">|</li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/linkedin.png")?>" width="20px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/twitter-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/tiktok-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/instagram-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/youtube-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/telephone_.png")?>" width="20px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/line.png")?>" width="26px"></a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul id="address-footer" class="mx-auto">
              <li class="ms-2">Address</li>
              <li class="ms-3">|</li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/🦆 icon _location_.png")?>" width="20px"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      var navbar = document.getElementById('navbar_top');
      navbar.classList.add('fixed-top');
      navbar.classList.remove('bg-transparent');
      navbar.classList.add('bg-color');

      // Menambahkan efek transisi
      navbar.style.transition = 'background-color 1s, padding-top 1s';

      // Menambahkan padding top untuk menampilkan konten di belakang navbar
      var navbar_height = document.querySelector('.navbar').offsetHeight;
      document.body.style.paddingTop = navbar_height + 'px';
    } else {
      var navbar = document.getElementById('navbar_top');
      navbar.classList.remove('fixed-top');
      navbar.classList.add('bg-transparent');

      // Menghapus efek transisi
      navbar.style.transition = '';

      // Menghapus padding top dari body
      document.body.style.paddingTop = '0';
    }
    });
  });
    </script>
    <script>
      AOS.init();
    </script>
  </body>
</html>