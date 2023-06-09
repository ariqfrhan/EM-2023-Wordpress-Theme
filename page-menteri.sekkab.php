<?php
/*
Template Name : Page About
*/
get_header() ?>

<style>
  #title-post {
    display: none;
  }

  #menteri {
    height: 100vh;
    /* margin-bottom: 10vh; */
  }

  @media (max-width: 767.98px) {
    #menteri {
      height: auto;
      margin-bottom: 0;
    }
  }

  .line {
    border: 0;
    border-radius: 50px;
    height: 20px;
    background: rgb(248, 159, 31);
    background: linear-gradient(90deg, rgba(248, 159, 31, 1) 0%, rgba(249, 191, 30, 1) 49%, rgba(249, 214, 30, 1) 100%);
    opacity: 1;
  }


  #menteri #img-menteri {
    cursor: pointer;
    padding: 10px;
    transition: 1s;
    width: 560px;
  }

  #img-menteri:hover {
    transform: translateY(-6px) scale(1.05);
    transition: 1s;
  }

  #proker {
    padding-bottom: 10vh;
  }

  .accordion-body {
    color: white;
  }
</style>
<header id="menteri">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12 my-auto" data-aos="fade-right" data-aos-duration="1000">
        <div class="col-md-3 mb-3 d-sm-block d-none">
          <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/sekkab/logo.png") ?>" alt="sekkab logo" class="img-fluid">
        </div>
        <div class="col-md-12 title-menteri text-sm-start text-center">
          <h2 class="fw-bold">KEMENTRIAN SEKRETARIAT KABINET</h2>
          <h2 class="fw-bold bawah">EM UB 2023</h2>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
          <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/sekkab/bph.png") ?>" class="img-fluid" id="img-menteri">
        </div>
      </div>
    </div>
  </div>
</header>

<section id="proker">
  <div class="container">
    <div data-aos="flip-up" data-aos-duration="1000">
      <div class="text-md-start text-center">
        <h2 class="fw-bold">PROGRAM KERJA</h2>
      </div>
      <div class="container-fluid px-0 m-bottom mb-5">
        <hr class="line">
      </div>
    </div>
    <div class="row row-cols-md-2 row-cols-1">
      <?php
      $leftAccordionData = array(
        array(
          "heading" => "Buletin EM UB",
          "content" => "Buletin EM UB mewadahi pengelolaan produk pers dan media dari internal dan eksternal yang berkaitan dengan EM UB 2023. Bentuk pengelolaan ini didasarkan pada pembuatan pedoman, ketentuan, pengelolaan, publikasi, dan arsip produk pers dan media."
        ),
        array(
          "heading" => "PORSI (Pos Arsip)",
          "content" => "PORSI atau Pos Arsip menghadirkan integrasi wadah berupa Google Drive dan platform penyimpanan lain yang difungsikan untuk menyimpan, mengarsipkan, mengelola, dan mengamankan data dan dokumen penting yang berhubungan tata rumah tangga internal dan hubungan eksternal EM UB 2023."
        ),
        array(
          "heading" => "Smart Education",
          "content" => "Smart Education merupakan kegiatan pelatihan terkait administrasi kerumahtanggaan,tata laksana dan protokol yang diperuntukkan pengurus internal Eksekutif Mahasiswa Universitas Brawijaya 2023. "
        ),
      );
      $rightAccordionData = array(
        array(
          "heading" => "PERS Training",
          "content" => "Pers Training merupakan pelatihan jurnalistik untuk meningkatkan kemampuan menulis berita. Program ini berupa workshop yang mengasah kemampuan individu dalam menyampaikan berita sesuai dengan ilmu jurnalistik sehingga masyarakat bisa mendapatkan informasi penting, terbaru, dan faktual mengenai peristiwa yang sedang terjadi."
        ),
        array(
          "heading" => "SERASI (Sekret Rapi dan Bersih)",
          "content" => "SERASI atau Sekret Rapi dan Bersih merupakan pengelolaan dan penjagaan terhadap Gedung Sekretariat EM UB dilakukan secara berkala mengenai kebersihan, kerapian, kelengkapan barang dan peralatan, kenyamanan, dan lain-lain. "
        ),
        array(
          "heading" => "VIRALIN (Video Tutorial Administrasi)",
          "content" => "VIRALIN (Video Tutorial Administrasi) dihadirkan dengan pembuatan konten yang berisi panduan, penjelasan, tutorial, atau teknik bersifat operasional yang berhubungan dengan administrasi guna membantu pelaksanaan program kerja bagi Sekretariat Jenderal dan Sekretaris Pelaksana."
        ),
      );
      //leftAccordion
      echo ('<div class="accordion" id="accordionOne" data-aos="fade-right" data-aos-duration="1000">');
      for ($i = 0; $i < count($leftAccordionData); $i++) {
        $headingId = "accordionOne-heading-" . $i;
        $contentId = "accordionOne-content-" . $i;
        echo ('
        <div class="accordion-item">
        <h2 class="accordion-header" id="' . $headingId . '">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $contentId . '" aria-expanded="false" aria-controls="' . $contentId . '">
            ' . $leftAccordionData[$i]["heading"] . '
          </button>
        </h2>
        <div id="' . $contentId . '" class="accordion-collapse collapse" aria-labelledby="' . $headingId . '">
          <div class="accordion-body">
          ' . $leftAccordionData[$i]["content"] . '
          </div>
        </div>
      </div>');
      }
      echo ('</div>');

      //right accordion
      echo ('<div class="accordion" id="accordionTwo" data-aos="fade-left" data-aos-duration="1000">');
      for ($i = 0; $i < count($rightAccordionData); $i++) {
        $headingId = "accordionTwo-heading-" . $i;
        $contentId = "accordionTwo-content-" . $i;
        echo ('
        <div class="accordion-item">
        <h2 class="accordion-header" id="' . $headingId . '">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $contentId . '" aria-expanded="false" aria-controls="' . $contentId . '">
            ' . $rightAccordionData[$i]["heading"] . '
          </button>
        </h2>
        <div id="' . $contentId . '" class="accordion-collapse collapse" aria-labelledby="' . $headingId . '">
          <div class="accordion-body">
          ' . $rightAccordionData[$i]["content"] . '
          </div>
        </div>
      </div>');
      }
      echo ('</div>');
      ?>

    </div>
  </div>
  </div>
</section>
<?php get_footer() ?>