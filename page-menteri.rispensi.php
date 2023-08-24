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
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/rispensi/logo.png") ?>" alt="sekkab logo" class="img-fluid">
                </div>
                <div class="col-md-12 title-menteri text-sm-start text-center">
                    <h2 class="fw-bold">KEMENTERIAN RISET, PENALARAN, DAN INOVASI</h2>
                    <h2 class="fw-bold bawah">EM UB 2023</h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/rispensi/bph.png") ?>" class="img-fluid" id="img-menteri">
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
                    "heading" => "Manifesto Brawijaya",
                    "content" => "Manifesto Brawijaya merupakan wadah penjurnalan
                    karya ilmiah
                    mahasiswa yang akan dikelola oleh tim direksi yang berasal dari internal kementerian, dibawah naungan ditjen riset dan penalaran serta dipublikasikan dengan web hosting
                    yang baik disertai pendaftaran akreditasi index ISSN dan Garuda Kemendikbud."
                ),
                array(
                    "heading" => "Philosophy Incubation Institute",
                    "content" => "Kajian Filsafat merupakan kegiatan kajian yang berkolaborasi dengan organisasi
                    eksternal dalam membahas materi mengenai filsafat yang akan menghasilkan output
                    berupa forum kajian dan notulensi yang disebarluaskan kepada mahasiswa UB."
                ),
                array(
                    "heading" => "CoA (Conference of Achievement)",
                    "content" => "CoA merupakan suatu konferensi sebagai wadah edukasi untuk meningkatkan
                    pengetahuan dan keterampilan dalam bidang kepenulisan serta pemahaman mengenai
                    MAWAPRES."
                ),
                array(
                    "heading" => "Contest Catalogue",
                    "content" => "Contest Catalogue merupakan pusat informasi dalam mempromosikan event-event
                    terkait perlombaan atau kompetisi di bidang riset, penalaran, dan pengembangan
                    inovasi."
                )
            );
            $rightAccordionData = array(
                array(
                    "heading" => "BRAWSCON (Brawijaya National Student
                    Conference)",
                    "content" => "BRAWSCON merupakan program yang ditujukan sebagai wadah partisipasi mahasiswa
                    dalam menjawab tantangan permasalahan nyata yang berada ditengah masyarakat
                    yang berlandaskan dari point sustainable development goals."
                ),
                array(
                    "heading" => "Lingkar Riset",
                    "content" => "Lingkar Riset merupakan forum yang dilaksanakan dengan UKM riset dan BEM fakultas khususnya kementerian
                    yang bergerak dalam bidang riset, penalaran dan pengembangan inovasi dengan
                    pemaparan proker, progres, dan kendala yang terjadi sehingga dapat bertukar informasi
                    dan memberikan solusi guna peningkatan kualitas."
                ),
                array(
                    "heading" => "LOKARIA (Lokal Riset Brawijaya)",
                    "content" => "LOKARIA merupakan kegiatan riset yang menghasilkan output berupa konten
                    pencerdasan yang dilakukan dengan dengan mengusung isu seputar permasalahan di
                    lingkungan mahasiswa brawijaya yang berkaitan dengan riset, penalaran, dan inovasi."
                ),
                array(
                    "heading" => "KATA MUAN (Kata Ilmuan)",
                    "content" => "KATA MUAN adalah penyusunan fun fact dan publikasi informasi menarik mengenai kepenulisan dan life
                    hack yang dapat memberikan solusi praktis dalam penulisan."
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