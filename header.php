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
	  <title>EM UB 2023</title>
    <meta property="og:url" content=https://em.ub.ac.id/>
    <meta property="og:description" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri("/assets/style-hp.css") ?>" />
    <!-- <link rel="stylesheet" href="<?php echo get_theme_file_uri("/assets/style-about.css") ?>" /> -->
   <?php wp_head() ?>
  </head>
  <body>
  <nav id="navbar_top" class="navbar navbar-expand-lg bg-transparent">
      <div class="container">
        <a class="navbar-brand" href="https://em.ub.ac.id/">
          <img src="<?php echo get_theme_file_uri("/assets/Logo EM.png")?>" width="160px" alt="Logo-EM">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item me-3">
              <a class="nav-link active" aria-current="page" href="https://em.ub.ac.id/">Beranda</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Berita</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="https://em.ub.ac.id/tentang">Tentang</a>
            </li>
            <li class="nav-item dropdown me-3">
              <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kemenkoan
              </a>
              <ul class="dropdown-menu animate slideIn">
              <li><a class="dropdown-item" href="#">Kepresidenan</a>
                  <ul class="dropdown-menu dropdown-submenu animate slideIn">
                    <li>
                      <a class="dropdown-item" href="#">Presiden & Wakil Presiden</a>
                      <a class="dropdown-item" href="#">Sekretariat Presiden</a>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="https://em.ub.ac.id/kemenkoan-internal-2023/">Internal</a>
                  <ul class="dropdown-menu dropdown-submenu animate slideIn">
                    <li>
                      <a class="dropdown-item" href="#">Kementerian Keuangan</a>
                      <a class="dropdown-item" href="#">Kementerian Sekretariat Kabinet</a>
                      <a class="dropdown-item" href="#">Kementerian PAO</a>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="https://em.ub.ac.id/kemenkoan-pengabdian-2023/">Pengabdian</a>
                  <ul class="dropdown-menu dropdown-submenu animate slideIn">
                    <li>
                      <a class="dropdown-item" href="#">Kementerian Sosial Masyarakat</a>
                      <a class="dropdown-item" href="#">Kementerian Lingkungan Hidup</a>
                      <a class="dropdown-item" href="#">Direktorat Brawijaya Mengajar</a>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="https://em.ub.ac.id/kemenkoan-pergerakan-2023/">Pergerakan</a>
                  <ul class="dropdown-menu dropdown-submenu animate slideIn">
                    <li>
                      <a class="dropdown-item" href="#">Kementerian Advokesma</a>
                      <a class="dropdown-item" href="#">Kementerian Kastrat</a>
                      <a class="dropdown-item" href="#">Kementerian P3</a>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="https://em.ub.ac.id/kemenkoan-pelayanan-2023/">Pelayanan</a>
                  <ul class="dropdown-menu dropdown-submenu animate slideIn">
                    <li>
                      <a class="dropdown-item" href="#">Kementerian Kominfo</a>
                      <a class="dropdown-item" href="#">Kementerian Dalam Negeri</a>
                      <a class="dropdown-item" href="#">Kementerian Luar Negeri</a>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="https://em.ub.ac.id/kemenkoan-pengembangan-2023/">Pengembangan</a>
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
            <a class="pe-2 logo-socmed" href="https://twitter.com/em_ubofficial"><img src="<?php echo get_theme_file_uri("/assets/images/twitter_dark.png")?>" width="36px"></a>
            <a class="pe-2 logo-socmed" href="https://www.youtube.com/@EMUBOfficial"><img src="<?php echo get_theme_file_uri("/assets/images/youtube_dark.png")?>" width="36px"></a>
            <a class="pe-2 logo-socmed" href="https://www.tiktok.com/@em_ubofficial"><img src="<?php echo get_theme_file_uri("/assets/images/tiktok_dark.png")?>" width="36px"></a>
            <a class="pe-2 logo-socmed" href="https://www.linkedin.com/company/em-ub-2022/"><img src="<?php echo get_theme_file_uri("/assets/images/linkedin_dark.png")?>" width="36px"></a>
            <a class="pe-2 logo-socmed" href=" https://www.instagram.com/em_ubofficial/"><img src="<?php echo get_theme_file_uri("/assets/images/instagram_dark.png")?>" width="36px"></a>
          </div>
        </div>
      </div>
    </nav>