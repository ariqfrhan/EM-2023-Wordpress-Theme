<?php
/*
Template Name : Page About
*/
get_header() ?>

<style>
  #title-post {
    display: none;
  }

  /* menko */
  #menko {
    height: auto;
    padding-bottom: 10vh;
  }


  #menko .line {
    border: 0;
    border-radius: 50px;
    height: 20px;
    background: rgb(248, 159, 31);
    background: linear-gradient(90deg, rgba(248, 159, 31, 1) 0%, rgba(249, 191, 30, 1) 49%, rgba(249, 214, 30, 1) 100%);
    opacity: 1;
  }

  #menko #img-menko {
    cursor: pointer;
    padding: 10px;
    transition: 1s;
    width: 480px;
  }

  #img-menko:hover {
    transform: translateY(-4px);
    transition: 1s;
  }

  /* Menko */

  #menko-kementrian {
    padding-bottom: 10vh;
  }

  .image-logo {
    width: 320px;
    margin-bottom: 20px;
    border-radius: 95%;
    cursor: pointer;
    transition: 0.5s;
  }

  .image-logo:hover {
    transition: 0.5s;
    transform: translateY(-4px);
    -webkit-box-shadow: 0px 7.5px 15px rgb(0, 0, 0, 0.35);
    box-shadow: 0px 7.5px 15px rgb(0, 0, 0, 0.35);
  }

  @media only screen and (max-width: 992px) {

    #menko #img-menko{
      width: 480px;
    }

    .image-logo {
    width: 180px;
    margin-bottom: 20px;
    border-radius: 95%;
    cursor: pointer;
    transition: 0.5s;
    }
  }

  @media only screen and (max-width: 1200px) {

    #menko #img-menko{
      width: 480px;
    }

    .image-logo {
    width: 180px;
    margin-bottom: 20px;
    border-radius: 95%;
    cursor: pointer;
    transition: 0.5s;
    }
  }
</style>

<header id="menko">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-12 my-auto" data-aos="fade-right" data-aos-duration="1000">
        <div class="title-menko text-md-start text-sm-start text-center">
          <h2 class="fw-bold">KEMENTERIAN KOORDINATOR <br> INTERNAL</h2>
          <h2 class="fw-bold bawah">EM UB 2023</h2>
          <div class="col-md-7 col-12">
            <hr class="line">
          </div>
        </div>
      </div>
      <div class="col-md-5 col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1000">
        <img src="<?php echo get_theme_file_uri("/assets/images/menko-internal.png") ?>" class="justify-content-center" id="img-menko">
      </div>
    </div>
  </div>
</header>

<section id="menko-kementrian">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-4 col-sm-6" data-aos="zoom-out-up" data-aos-duration="1000">
        <img src="<?php echo get_theme_file_uri("/assets/images/sekben-logo.png") ?>" class="image-logo" onclick="window.open('https://em.ub.ac.id/', '_blank')">
        <h3 class="fw-bold">Sekretariat <br> Kabinet</h3>
      </div>
      <div class="col-lg-4 col-sm-6" data-aos="zoom-out-up" data-aos-duration="1000">
        <img src="<?php echo get_theme_file_uri("/assets/images/keuangan-logo.png") ?>" class="image-logo" onclick="window.open('https://em.ub.ac.id/', '_blank')">
        <h3 class="fw-bold">Keuangan</h3>
      </div>
      <div class="col-lg-4 col-sm-6" data-aos="zoom-out-up" data-aos-duration="1000">
        <img src="<?php echo get_theme_file_uri("/assets/images/pao-logo.png") ?>" class="image-logo" onclick="window.open('https://em.ub.ac.id/', '_blank')">
        <h3 class="fw-bold">PAO</h3>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>