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
        margin-bottom: 10vh;
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
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/dagri/logo.png") ?>" alt="sekkab logo" class="img-fluid">
                </div>
                <div class="col-md-12 title-menteri text-sm-start text-center">
                    <h2 class="fw-bold">KEMENTERIAN DALAM NEGERI</h2>
                    <h2 class="fw-bold bawah">EM UB 2023</h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/dagri/bph.png") ?>" class="img-fluid" id="img-menteri">
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
                    "heading" => "Kampung Budaya",
                    "content" => "Kampung Budaya merupakan program kerja dengan melibatkan forum-forum daerah
                    yang terdapat di Universitas Brawijaya. Memiliki tujuan utama meningkatkan rasa kecintaan dan
                    kepedulian terhadap budaya, serta memperkenalkan dan melestarikan budaya asli
                    Indonesia kepada masyarakat umum khususnya civitas akademika Universitas
                    Brawijaya di era milenial saat ini."
                ),
                array(
                    "heading" => "Get To Know-LKM",
                    "content" => "Get To Know-LKM merupakan program kerja yang dilaksanakan untuk
                    berbincang bersama LKM yang berupa podcast dengan perwakilan LKM yang ada di
                    Universitas Brawijaya. Podcast berisi pembahasan mengenai
                    isu-isu yang sekiranya berkaitan dengan LKM tersebut serta dapat menjadi ranah
                    promosi LKM tersebut ke mahasiswa Universitas Brawijaya."
                ),
            );
            $rightAccordionData = array(
                array(
                    "heading" => "BRACIATE (Brawijaya Appreciate)",
                    "content" => "Brawijaya Appreciate (Braciate) adalah program kerja dimana pemberian nominasi dan
                    penghargaan terhadap Lembaga setingkat BEM-F, UKM/LKM, HMP/J, mahasiswa berprestasi, serta penjaringan mahasiswa Universitas Brawijaya pemenang lomba
                    dengan skala regional, nasional, maupun internasional."
                ),
                array(
                    "heading" => "Jelajah Brawijaya",
                    "content" => "Jelajah Brawijaya merupakan program kerja yang dilaksanakan untuk
                    mendengar keluhan, menampung aspirasi serta membuka ruang diskusi dengan mengunjungi BEM, HMJ, LKM, Ormek, serta Forda di Universitas Brawijaya secara
                    mendetail dan aktual. Hasil kunjungan tersebut akan dikaji ulang serta membantu
                    menemukan solusi terhadap masalah terkait."
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