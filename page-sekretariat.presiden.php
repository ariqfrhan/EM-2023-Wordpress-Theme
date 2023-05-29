<?php
/*
Template Name : Page About
*/
get_header() ?>

<style>
    #title-post {
        display: none;
    }

    /* sekpres */
    #sekpres {
        height: auto;
        padding-bottom: 10vh;
    }


    #sekpres .line {
        border: 0;
        border-radius: 50px;
        height: 20px;
        background: rgb(248, 159, 31);
        background: linear-gradient(90deg, rgba(248, 159, 31, 1) 0%, rgba(249, 191, 30, 1) 49%, rgba(249, 214, 30, 1) 100%);
        opacity: 1;
    }

    #sekpres #img-sekpres {
        cursor: pointer;
        padding: 10px;
        transition: 1s;
        width: 320px;
    }

    #img-sekpres:hover {
        transform: translateY(-4px);
        transition: 1s;
    }

    /* sekpres */

    #sekpres-kementrian {
        padding-bottom: 10vh;
    }

    .image-sekpres {
        width: 320px;
        margin-bottom: 20px;
        border-radius: 95%;
        cursor: pointer;
        transition: 0.5s;
    }

    .image-sekpres:hover {
        transition: 0.5s;
        transform: translateY(-4px);
        -webkit-box-shadow: 0px 7.5px 15px rgb(0, 0, 0, 0.35);
        box-shadow: 0px 7.5px 15px rgb(0, 0, 0, 0.35);
    }

    @media only screen and (max-width: 428px) {

        #sekpres #img-sekpres {
            width: 240px;
        }

        .image-sekpres {
            width: 180px;
            margin-bottom: 20px;
            border-radius: 95%;
            cursor: pointer;
            transition: 0.5s;
        }
    }

    @media only screen and (min-width: 768px) and (max-width:1200px) {

        #sekpres #img-sekpres {
            width: 320px;
        }

        .image-sekpres {
            width: 180px;
            margin-bottom: 20px;
            border-radius: 95%;
            cursor: pointer;
            transition: 0.5s;
        }
    }
</style>

<header id="sekpres">
    <div class="container">
        <div class="col-md-7 col-12 my-auto p-3" data-aos="fade-right" data-aos-duration="1000">
            <div class="title-sekpres text-md-start text-sm-start text-center">
                <h2 class="fw-bold">SEKRETARIAT PRESIDEN</h2>
                <h2 class="fw-bold bawah">EM UB 2023</h2>
                <div class="col-md-5 col-12">
                    <hr class="line">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                <img src="<?php echo get_theme_file_uri("/assets/images/sekpres-1.png") ?>" class="justify-content-center" id="img-sekpres" class="image-sekpres">
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                <img src="<?php echo get_theme_file_uri("/assets/images/sekpres-2.png") ?>" class="justify-content-center" id="img-sekpres" class="image-sekpres">
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                <img src="<?php echo get_theme_file_uri("/assets/images/sekpres-3.png") ?>" class="justify-content-center" id="img-sekpres" class="image-sekpres">
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                <img src="<?php echo get_theme_file_uri("/assets/images/sekpres-4.png") ?>" class="justify-content-center" id="img-sekpres" class="image-sekpres">
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                <img src="<?php echo get_theme_file_uri("/assets/images/sekpres-5.png") ?>" class="justify-content-center" id="img-sekpres" class="image-sekpres">
            </div>
        </div>
    </div>
</header>

<?php get_footer() ?>