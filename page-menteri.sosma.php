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
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/sosma/logo.png") ?>" alt="sekkab logo" class="img-fluid">
                </div>
                <div class="col-md-12 title-menteri text-sm-start text-center">
                    <h2 class="fw-bold">KEMENTERIAN SOSIAL DAN MASYARAKAT </h2>
                    <h2 class="fw-bold bawah">EM UB 2023</h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?php echo get_theme_file_uri("/assets/images/kementrian/sosma/bph.png") ?>" class="img-fluid" id="img-menteri">
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
                    "heading" => "Abdi Desa",
                    "content" => "Abdi Desa hadir untuk membersamai masyarakat desa dalam hal
                    pengembangan potensi yang ada dalam desa tersebut. Dalam program kerja ini
                    meliputi bidang kesehatan lingkungan dan sosial ekonomi budaya."
                ),
                array(
                    "heading" => "Brawijaya for Inclusivity",
                    "content" => "Brawijaya for Inclusivity merupakan program untuk membentuk lingkungan kampus
                    yang inklusif secra komprehensif. Diwujudkan dengan mengoptimalkan kolaborasi
                    dalam campaign inklusi serta mengadakan edukasi inklusi."
                ),
                array(
                    "heading" => "SSB (Sinergisitas Sosma Brawijaya)",
                    "content" => "SSB merupakan forum silahturahmi dan kolaborasi yang dilkukan oleh SOSMA EM dengan
                    SOSMA BEM Fakultas UB untuk menjalin hubungan yang baik dengan membahas
                    setiap program yang bisa di kolabarasikan nantinya antar SOSMA se Brawijaya."
                ),
                array(
                    "heading" => "VIBRAS (Visual Branding Sosma)",
                    "content" => "VIBRAS merupakan program yang memuat redaksi dan branding apa itu SOSMA sebenarnya melalui
                    redaksi liputan atau liputan langsung seluruh kegiatan SOSMA dalam bentuk poster,
                    feeds, video dan infografis. Media sosial yang akan menjadi fokus yaitu Instagram,
                    Twitter, Spotify, Website, dan Tiktok."
                )
            );
            $rightAccordionData = array(
                array(
                    "heading" => "Sosma Movement",
                    "content" => "Sosma Movement memiliki tugas dalam merespon isu-isu strategis dan
                    kontemporer sosial masyarakat dengan analisis rasional, berkelanjutan, dan dapat diimplentasikan."
                ),
                array(
                    "heading" => "Brawijaya Urban Social Project",
                    "content" => "Brawijaya Urban Social Project merupakan rehabilitasi sosial di daerah masyarakat kota yang didasarkan pada potensi daerah
                    setempat yang bisa dikembangkan sehingga taraf kehidupan meningkat ke arah yang
                    lebih baik dan berkelanjutan."
                ),
                array(
                    "heading" => "Mega Ekspedisi Brawijaya",
                    "content" => "Mega Ekspedisi Brawijaya merupakan program ekspedisi yang dilakukan di Banda Neira, Maluku dan menjadi
                    sebuah wadah kolaborasi dengan pihak luar SOSMA EM sehingga dapat memperluas
                    dampak pengabdian secara absolut."
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