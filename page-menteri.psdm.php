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
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/psdm/logo.png") ?>" alt="sekkab logo" class="img-fluid">
                </div>
                <div class="col-md-12 title-menteri text-sm-start text-center">
                    <h2 class="fw-bold">KEMENTERIAN PENGEMBANGAN SUMBER DAYA MANUSIA</h2>
                    <h2 class="fw-bold bawah">EM UB 2023</h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/psdm/bph.png") ?>" class="img-fluid" id="img-menteri">
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
                    "heading" => "RAJA Brawijaya",
                    "content" => "RAJA Brawijaya atau Rangkaian Acara Jelajah Almamater Universitas Brawijaya
                    adalah serangkaian kegiatan yang bertujuan untuk memfasilitasi mahasiswa baru Universitas Brawijaya agar dapat mengetahui hal-hal yang terkait dengan kehidupan
                    kampus. Rangkaian ini terdiri dari tiga rangkaian yakni PKKMB, PBPK, OH."
                ),
                array(
                    "heading" => "BLB (Brawijaya Leadership Bootcamp)",
                    "content" => "BLB merupakan kegiatan yang bertujuan untuk membekali mahasiswa dengan keterampilan
                    menyelenggarakan kegiatan kemahasiswaan dengan perencanaan dan sistematika
                    yang baik, dengan kurikulum LKMM DIKTI KEMDIKBUD 2020."
                ),
                array(
                    "heading" => "KIAK (Kanal Informasi Agama dan Kebangsaan)",
                    "content" => "KIAK memberikan wadah atau sarana untuk penyampaian dari
                    berbagai sudut pandang dan nantinya akan analisa oleh para ahli dibidangnya terkait isi
                    dari pendapat mahasiswa UB baik pengetahuan wawasan kebangsaan dan radikalisme
                    serta kerohanian."
                ),
                array(
                    "heading" => "SKB (Sekolah Kebangsaan Brawijaya)",
                    "content" => "SKB merupakan program kerja berupa kegiatan seminar dialog
                    perspektif dan training bersama mahasiswa Universitas Brawijaya untuk meningkatkan
                    spiritual kebangsaan dan bela negara dalam menghadapi pengaruh dan ajakan
                    radikalisme baik di lingkup internal maupun eksternal perguruan tinggi."
                )
            );
            $rightAccordionData = array(
                array(
                    "heading" => "LKMM TL",
                    "content" => "LKMM TL merupakan rangkaian alur kaderisasi lanjutan dari LKMM TM dalam bentuk
                    seminar, praktik sebagai wujud pembekalan mahasiswa dengan wawasan dan keterampilan mengelola opini publik yang dapat menyokong mahasiswa untuk siap
                    menghadapi bonus demografi."
                ),
                array(
                    "heading" => "PKM UB",
                    "content" => "PKM merupakan Pembuatan Pedoman Kaderisasi Mahasiswa Universitas Brawijaya oleh Kementrian
                    PSDM."
                ),
                array(
                    "heading" => "FYM (For Your Motivation)",
                    "content" => "FYM adalah program kerja yang mana mengapresiasi mahasiswa UB yang
                    memenangkan suatu perlombaan serta mereka dapat bercerita mengenai struggle yang
                    mereka hadapi dalam mencapai suatu kemenangan."
                ),
                array(
                    "heading" => "Lingkar PSDM",
                    "content" => "Lingkar PSDM merupakan kegiatan forum atau kajian bersama kementerian PSDM BEM fakultas seluruh UB sehingga
                    terciptanya kolaborasi yang Inovatif, Adaptif, Kolaboratif dan Transformasi."
                ),
                array(
                    "heading" => "Lingkar Keagamaan",
                    "content" => "Lingkar Keagamaan merupakan program kerja berupa kegiatan diskusi/kajian terkait isu dan permasalahan mahasiswa dalam
                    mencegah adanya radikalisme di lingkungan kampus."
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