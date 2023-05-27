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
                // array(
                //     "heading" => "Awarding Staff",
                //     "content" => "Awarding Staff merupakan suatu kegiatan program kerja sebagai bentuk apresiasi yang diberikan kepada kepada pengurus EM UB yang berkomitmen tinggi dan menjadi yang paling baik diantara yang terbaik yang nantinya akan diposting dalam feed akun instagram EM mengadakan acara award secara langsung."
                // ),
                // array(
                //     "heading" => "Farewell Party",
                //     "content" => "Farewell Party merupakan suatu kegiatan perpisahan untuk mengapresiasi setelah 1 periode kepengurusan para pengurus dan menjadi acara penutup setelah 1 tahun EM UB 2023 bekerja."
                // ),
                // array(
                //     "heading" => "OPSI (Optimalisasi dan Evaluasi)",
                //     "content" => "Opsi merupakan suatu pelatihan workshop softkill dan juga seminar di khususkan untuk pengembangan internal staff EM UB 2023. Opsi juga merupakan salah satu cara untuk mengetahui kekurangan, kelemahan, dan kekuatan dalam segi perencanaan dan implementasi kegiatan/program."
                // ),
                // array(
                //     "heading" => "PENA (Penilaian Kinerja)",
                //     "content" => "PENA (Penilaian kinerja) ini merupakan suatu bentuk penilaian sebagai tujuan untuk menilai kinerja dari para BPI/H& Staff disetiap Biro/Kementrian nya yang apabila terdapat ditemukannya hasil penilaian yang kurang baik maka akan dilakukan pemanggilan untuk dievaluasi."
                // )
            );
            $rightAccordionData = array(
                // array(
                //     "heading" => "BOCIL (Bounding N Chill)",
                //     "content" => "Bounding n chill merupakan suatu kegiatan refreshing yang bertujuan untuk mempererat kedekatan dan kekompakan antar pengurus maupun mengupgrade semangat pada masing-masing pengurus yang dimana dapat diharapkan untuk meningkatkan rasa kepemilikan yang dapat meningkatkan kinerja pengurus EM UB."
                // ),
                // array(
                //     "heading" => "Oprec Staff Ahli/Magang, Welcoming Staff, dan Training Organization",
                //     "content" => "Bounding n chill merupakan suatu kegiatan refreshing yang bertujuan untuk mempererat kedekatan dan kekompakan antar pengurus maupun mengupgrade semangat pada masing-masing pengurus yang dimana dapat diharapkan untuk meningkatkan rasa kepemilikan yang dapat meningkatkan kinerja pengurus EM UB."
                // ),
                // array(
                //     "heading" => "RAKAB (Rapat Kabinet)",
                //     "content" => "Rapat kerja ini diharapkan menjadi jalan terang bagi pengurus EM UB 23 untuk mewujudkan visi melalui berbagai misi selama satu periode kedepan. Mengingat bahwa dalam menjalankan program kerja, masing masing kementerian pasti akan saling bersinergi dengan kementerian yang lain. Sehingga penting bagi Kabinet Karya Paripurna untuk melakukan harmonisasi semaksimal mungkin."
                // ),

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