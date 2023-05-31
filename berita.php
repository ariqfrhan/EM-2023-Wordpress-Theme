<?php
get_header() ?>

<style>
    #title-container {
        border-radius: 100px 0px;
        background: #212121;
    }

    .custom-card {
        height: 65vh;
        background-color: #212121;
        border-radius: 25px;
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
    }


    .col:hover .custom-card {
        transition: 0.5s;
        transform: translateY(-4px);
        -webkit-box-shadow: 0px 7.5px 15px rgb(0, 0, 0, 0.35);
        box-shadow: 0px 7.5px 15px rgb(0, 0, 0, 0.35);
    }

    .news {
        padding-left: 8vw;
        padding-right: 8vw;
    }

    .title {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        color: white;
    }

    .sub-title {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 12px;
        color: white;
    }

    .label {
        background-color: #F89F1F;
        height: 15vh;
    }

    @media (max-width: 767.98px) {
        .custom-card {
            height: 30vh;
            background-color: #212121;
            border-radius: 10px;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }

        .label {
            background-color: #F89F1F;
            height: 6vh;
        }

        .title {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 12px;

        }

        .sub-title {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 8px;
            text-overflow: ellipsis;
        }

        #news-title {
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
        }
    }
</style>

<section>
    <div class="container mt-4 mb-5 ">
        <div class="row">
            <div class="col-md-4 col-6 align-items-center text-center md-mx-0 mx-4 px-md-2 py-md-4 px-1 py-2 d-inline-block" data-aos="fade-right" data-aos-duration="1000" id="title-container">
                <h4 class="text-white fw-bold" id="news-title">BREAKING NEWS</h4>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="news container text-center mb-5">
        <div class="row row-cols-md-3 g-md-5 g-3 row-cols-2">
            <?php
            $jumlah = 0;
            if (have_posts()) :
                while ($jumlah < 12 && have_posts()) :
                    the_post();
                    $jumlah++;
                    $aos;
                    $aos = 'data-aos="zoom-in" data-aos-duration="1000"';
                    if (has_post_thumbnail()) {
                        $url =  get_the_post_thumbnail_url(get_the_ID(), 'on-post-thumbnail');
                        echo '<div class="col">
                        <div class="custom-card d-flex flex-column justify-content-end" style="background-image: url(\'' . $url . '\');"' . $aos . '>
                            <div class="label mb-4 text-start d-flex">
                                <div class="desc mx-2 my-auto">
                                    <p class="title m-0">' . get_the_title() . '</p>
                                    <p class="sub-title m-0">' . wp_trim_words(get_the_excerpt(), 12, '...') . '</p>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                endwhile;
            endif;
            ?>


        </div>
    </div>
</section>

<?php get_footer() ?>