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
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/p3/logo.png") ?>" alt="sekkab logo" class="img-fluid">
                </div>
                <div class="col-md-12 title-menteri text-sm-start text-center">
                    <h2 class="fw-bold">KEMENTERIAN PEMBERDAYAAN DAN PERLINDUNGAN PEREMPUAN</h2>
                    <h2 class="fw-bold bawah">EM UB 2023</h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/p3/bph.png") ?>" class="img-fluid" id="img-menteri">
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
                    "heading" => "Lekas Pulih",
                    "content" => "Lekas Pulih merupakan suatu layanan bagi mahasiswa Universitas Brawijaya yang
                    menjadi korban kekerasan seksual yang dimana membantu dan memfasilitasi
                    mahasiswa yang menjadi korban dari pelecehan dan kekerasan seksual untuk
                    mendapatkan pendampingan, baik pendampingan psikologi, hukum, ataupun
                    pendampingan lain."
                ),
                array(
                    "heading" => "Lentera Perjuangan",
                    "content" => "Lentera Perjuangan adalah program dimana setiap civitas akademika UB baik laki-laki maupun perempuan yang
                    ingin ikut mempropagandakan pemberdayaan perempuan dan kesetaraan gender
                    dapat mengirimkan propagandanya berupa tulisan, audio, video, animasi kepada email
                    P3 EM UB yang akan dipublikasikan setelah adanya seleksi yang dilakukan oleh
                    internal kementerian."
                ),
                array(
                    "heading" => "16 HAKTP",
                    "content" => "16 HAKTP merupakan program kerja yang berjalan selama 16 hari dengan tujuan kampanye terkait penolakan kekerasan terharap
                    perempuan yang meliputi sosialisasi, layanan pengaduan,
                    dan campaign lainnya."
                ),
            );
            $rightAccordionData = array(
                array(
                    "heading" => "Ruang Tengah",
                    "content" => "Ruang Tengah merupakan sebuah ruang aman bagi
                    mahasiswa untuk menyuarakan pendapat dan perspektif lain
                    yang diadakan untuk berdialog membahas tentang isu-isu
                    keperempuanan dari berbagai perspektif dan sudut pandang
                    serta adanya pengenalan, pemahaman dan pencerdasan
                    kepada mahasiswa Universitas Brawijaya mengenai isu-isu
                    keperempuanan yang sedang berkembang di dalam kampus
                    maupun di skala regional dan nasional."
                ),
                array(
                    "heading" => "Tuan Puan Bersuara",
                    "content" => "Tuan Puan Bersuara merupakan program kerja yang tertuang pada konten IG yang nantinya berbentuk seperti menfess yang berisi tentang
                    keresahan dan kekecewaan mahasiswa/i Universitas Brawijaya secara anonim mengenai kekecewaan terhadap penanganan KSP atau ketidakadilan gender
                    yang ada di Universitas Brawijaya."
                ),
                array(
                    "heading" => "P3 The Explorer",
                    "content" => "P3 The Explorer merupakan program kerja yang melakukan kunjungan ke NGO untuk melakukan study visit."
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