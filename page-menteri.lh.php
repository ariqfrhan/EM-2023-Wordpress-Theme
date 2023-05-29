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
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/lh/logo.png") ?>" alt="sekkab logo" class="img-fluid">
                </div>
                <div class="col-md-12 title-menteri text-sm-start text-center">
                    <h2 class="fw-bold">KEMENTERIAN LINGKUNGAN HIDUP </h2>
                    <h2 class="fw-bold bawah">EM UB 2023</h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/lh/bph.png") ?>" class="img-fluid" id="img-menteri">
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
                    "heading" => "Zero Waste Action",
                    "content" => "Zero Waste Action merupakan kegiatan yang dilakukan guna untuk mengurangi dampak pencemaran lingkungan
                    akibat buang sampah sembarangan yang tidak di pilah dan menjadikan sampah adalah
                    benda yang bisa memberi manfaat bagi masyarakat terkhusus Mahasiwa Universitas
                    Brawijaya."
                ),
                array(
                    "heading" => "Lingkar Lestari Brawijaya",
                    "content" => "Lingkar Lestari Brawijaya merupakan kegiatan kolaborasi Kementrian Lingkungan
                    Hidup EM 2023 dan LH BEM setiap fakultas yang ada di Universitas Brawijaya.
                    Kegiatan ini dengan melakukan kegiatan pertemuan rutin antar Kementrian Lingkungan
                    Hidup."
                ),
                array(
                    "heading" => "Eco-Policy (Sekolah Ekologi, Politik, dan
                    Konservasi / Sanitasi)",
                    "content" => "Eco-Policy merupakan workshop dan FGD bersertifikasi yang diiisi oleh beberapa materi
                    dalam beberapa jenjang waktu, terdapat beberapa rangkaian yang menyasar mahasiswa dan masyarakat daerah tertentu, untuk mahasiswa mengikuti rangkaian
                    pendidikan dan volunteer revitalisasi/clean up (harapannya dapat dimasukkan dalam
                    rangkaian eco–tourism dan diakhiri dengan kegiatan revitalisasi)."
                ),
            );
            $rightAccordionData = array(
                array(
                    "heading" => "ECOTOURISM",
                    "content" => "ECOTOURISM merupakan kegiatan pengembangan yang dilakukan dalam bentuk sistem
                    pengelolaan wisata alam, perawatan ekosistem yang ada, penerimaan tamu atau tour
                    guide, sistem pembayaran dan pembangunan fasilitas yang dapat menunjang kegiatan
                    ekonomi."
                ),
                array(
                    "heading" => "Peduli Makan (Perhatikan Reduksi Lingkungan
                    Masifkan Pergerakan)",
                    "content" => "Peduli Makan merupakan kegiatan semi – insidental, yang dilakukan selama satu periode kepengurusan satu kuartal
                    satu kali, dan di kuartal ke-dua atau ke-tiga terdapat seminar bertaraf nasional yang
                    harapannya akan diselenggarakan di Widyaloka atau di Samantha Krida."
                ),
                array(
                    "heading" => "ENCoTree (Enviromental
                    Communitation Centre-Media)",
                    "content" => "ENCoTree
                    memberikan informasi seputar lingkungan hidup dalam bentuk berita, isu lingkungan
                    dan kegiatan yang menyangkut lingkungan hidup melalui media sosial terkini dan
                    spanduk di wilayah Universitas Brawijaya."
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