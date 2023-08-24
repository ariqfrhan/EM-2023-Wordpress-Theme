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
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/kominfo/logo.png") ?>" alt="sekkab logo" class="img-fluid">
                </div>
                <div class="col-md-12 title-menteri text-sm-start text-center">
                    <h2 class="fw-bold">KEMENTERIAN KOMUNIKASI DAN INFORMATIKA</h2>
                    <h2 class="fw-bold bawah">EM UB 2023</h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/kominfo/bph.png") ?>" class="img-fluid" id="img-menteri">
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
                    "heading" => "EMUB Apps",
                    "content" => "EMUBApps sebagai bentuk upgrade platform website EM UB menjadi aplikasi
                    smartphone. Program ini bertujuan untuk memberikan layanan digital terhadap
                    pengaduan/ komplain mahasiswa dan informasi terpadu."
                ),
                array(
                    "heading" => "LTAB (Let’s Talk About Brawijaya)",
                    "content" => "LTAB merupakan konten video kreatif berdurasi satu menit atau lebih berisi informasi mengenai
                    lingkungan kampus Universitas Brawijaya. Konten dapat berupa penelusuran, sesi
                    tanya jawab dengan mahasiswa, atau pengenalan sarana-prasarana yang ada di
                    lingkungan kampus."
                ),
                array(
                    "heading" => "Maintenance Website dan Sosial Media EM UB ",
                    "content" => "Maintenance dilakukan untuk memelihara dan memperbarui, serta mengunggah informasi terkini ke website dan
                    sosial media EM UB, yang meliputi Instagram, Tiktok, Official LINE, LinkedIn, Twitter, Youtube,
                    dan Spotify."
                ),
                array(
                    "heading" => "Podcast Brawijaya Bertukar Cerita",
                    "content" => "Podcast Brawijaya Bertukar Cerita merupakan pembuatan konten video dan audio dengan format mirip dengan radio yang bisa di
                    streaming atau didownload melalui Internet untuk dikonsumsi para pendengar."
                ),
                array(
                    "heading" => "Postingan Rutin",
                    "content" => "Postingan Rutin merupakan penyaluran konten visual yang memuat informasi yang terdiri dari visualisasi dan branding
                    program kerja dari kementerian, badan, atau
                    direktorat yang ada di EM UB ke linimasa EM UB."
                ),
            );
            $rightAccordionData = array(
                array(
                    "heading" => "Company Profile EM UB",
                    "content" => "Company Profile EM UB merupakan pembuatan video kreatif yang memberikan ikhtisar tentang visi misi, tujuan, nilai,
                    program dan layanan, kemitraan, dampak, dan struktur tata kelola organisasi yang ada
                    di EM UB."
                ),
                array(
                    "heading" => "Tech101",
                    "content" => "Tech101 merupakan konten video kreatif yang memberikan informasi dan strategi kepada
                    audiens untuk menggunakan teknologi secara lebih efektif. Konten video kiat teknologi
                    dapat mencakup berbagai topik. Video dapat dibuat dalam format penelusuran, panduan langkah demi
                    langkah, dan sesi tanya jawab."
                ),
                array(
                    "heading" => "Bootcamp Graphic Design, Videography, and 
                    Content
                    Writing: Unlocking Your Creative
                    Potential",
                    "content" => "Bootcamp merupakan kegiatan atau sesi pelatihan internal yang memberikan peningkatan keterampilan
                    desain grafis, videografi, dan penulisan konten kepada peserta. Bootcamp dimulai dengan presentasi tentang masalah desain, diikuti dengan sesi brainstorming kelompok
                    dan pembuatan ide."
                ),
                array(
                    "heading" => "Remembrance Day",
                    "content" => "Remembrance Day merupakan konten untuk memperingati hari yang telah ditetapkan untuk memperingati peristiwa, orang, atau masalah tertentu. Konten peringatan dapat mencakup infografis atau kampanye media sosial."
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