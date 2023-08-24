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
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/advo/logo.png") ?>" alt="sekkab logo" class="img-fluid">
                </div>
                <div class="col-md-12 title-menteri text-sm-start text-center">
                    <h2 class="fw-bold">KEMENTERIAN ADVOKASI DAN KESEJAHTERAAN MAHASISWA</h2>
                    <h2 class="fw-bold bawah">EM UB 2023</h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/advo/bph.png") ?>" class="img-fluid" id="img-menteri">
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
                    "heading" => "Crisis Center EM UB",
                    "content" => "Crisis Center EM UB 2023 merupakan wadah bagi mahasiswa/i Universitas Brawijaya
                    dalam memperoleh informasi, pendampingan serta pengawalan pengajuan bantuan
                    keuangan (IPI/UKT) yang diajukan selama proses perkuliahan."
                ),
                array(
                    "heading" => "Advo Siaga",
                    "content" => "Advo Siaga merupakan wadah untuk melakukan penyebaran beragam informasi yang berkaitan dengan
                    kebutuhan mahasiswa dan menyampaikan keluhannya."
                ),
                array(
                    "heading" => "Keliling Yuk, Braw!",
                    "content" => "Keliling Yuk, Braw! merupakan program pemberian informasi dan publikasi tentang sarana maupun prasarana yang ada di Universitas Brawijaya dengan mengambil topik sesuai dengan
                    urgensi tertentu sehingga dapat menghasilkan output berupa konten video yang kreatif
                    dan inovatif menyesuaikan trend yang ada."
                ),
                array(
                    "heading" => "Brawijayans Care",
                    "content" => "Brawijayans Care hadir untuk memberikan konten pencerdasan yang dapat
                    meningkatkan pengetahuan dan kesadaran akan kesehatan mental, menyediakan
                    dukungan berupa layanan konseling dan wadah untuk bercerita serta rangkaian
                    seminar untuk mahasiswa/i Universitas Brawijaya dan umum."
                )
            );
            $rightAccordionData = array(
                array(
                    "heading" => "Brawijaya Scholarship Center",
                    "content" => "Brawijaya Scholarship Center merupakan program kerja yang dirancang untuk membantu mahasiswa
                    memahami dan mengejar peluang beasiswa yang tersedia dengan cara yang efektif
                    dan efisien."
                ),
                array(
                    "heading" => "Theassist",
                    "content" => "Theassist merupakan program pembantuan pengerjaan skripsi yang berkolaborasi
                    dengan CT Institute dengan cara membuka open registration untuk mahasiswa yang
                    berminat melakukan konsultasi mengenai skripsinya lalu akan dihubungkan ke CT
                    Institute untuk melakukan konsultasinya."
                ),
                array(
                    "heading" => "Advo News!",
                    "content" => "Advo News! adalah tempat penyebaran berita mengenai bantuan-bantuan dan
                    kebijakan-kebijakan yang diberikan oleh Universitas Brawijaya sebagai tempat disebarluaskan dan diberikan transparansinya dari maksud dan urgensi bantuan-bantuan dan kebijakan kebijakan yang diberikan."
                ),
                array(
                    "heading" => "#SOBAT Brawijayans (Sobat Sambat Brawijayans)",
                    "content" => "#SOBAT Brawijayans merupakan program yang memberikan layanan aduan terkait permasalahan atau
                    keluhan mahasiswa dari masing-masing fakultas yang membahas mengenai semua
                    masalah perkuliahan dari akademik, fasilitas, finansial, kemahasiswaan, disabilitas,
                    mental health, dan lain-lain."
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