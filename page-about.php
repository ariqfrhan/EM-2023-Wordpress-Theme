<?php
/*
Template Name : Page About
*/
get_header() ?>

<style>
    #title-post {
        display: none;
    }

    #halo {
        padding-top: 5vh;
        height: auto;
        padding-bottom: 5vh;
    }

    #halo #haloCard {
        margin: 3vw;
        padding-top: 2em;
        padding-bottom: 0.5em;
        border-radius: 75px;
        background-color: #343434;
        -webkit-box-shadow: -5px 7.5px 15px rgb(0, 0, 0, 0.35);
        box-shadow: -5px 7.5px 15px rgb(0, 0, 0, 0.35);
    }

    #haloCard .btn-warning {
        color: white;
        background-color: #F89F1F;
        border-radius: 50px;
        font-weight: 700;
    }

    #haloCard .btn-warning:hover {
        color: black;
        background-color: rgba(249, 214, 30, 1);
        border-color: #F9DC1E;
        border-radius: 50px;
        font-weight: 700;
    }

    .bg-selamat {
        display: inline-block;
        padding: 15px;
        background: rgb(248, 159, 31);
        width: auto;
        border-radius: 50px;
        cursor: pointer;
    }

    #halo #teks-tentang {
        text-align: justify;
        font-weight: 500;
    }


    /* Visi */
    #visi {
        margin-top: 20vh;
        height: auto;
        padding-bottom: 5vh;
    }

    .bg-poin-orange {
        background-color: #F89F1F;
        border-radius: 75px;
        ;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        transition: 0.5s;
    }

    .bg-poin-orange:hover {
        transform: translateY(-4px);
        transition: 0.5s;
        -webkit-box-shadow: 0px 0px 15px 2px #F89F1F;
        box-shadow: 0px 0px 15px 2px #F89F1F;
    }

    .bg-poin-black {
        background-color: #343434;
        border-radius: 75px;
        ;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        transition: 0.5s;
    }

    .bg-poin-black:hover {
        transform: translateY(-4px);
        transition: 0.5s;
        -webkit-box-shadow: 0px 0px 15px 2px #343434;
        box-shadow: 0px 0px 15px 2px #343434;
    }

    .bg-title-yellow {
        background-color: #F9DC1E;
        border-radius: 75px;
        font-weight: 700;
        font-size: 16px;
        cursor: pointer;
        transition: 0.5s;
    }

    .bg-title-yellow:hover {
        transform: translateY(-4px);
        transition: 0.5s;
        -webkit-box-shadow: 0px 0px 15px 2px #F9DC1E;
        box-shadow: 0px 0px 15px 2px #F9DC1E;
    }

    /* Misi */
    #misi {
        margin-top: 20vh;
        height: auto;
    }

    #misi-title-mobile {
        display: none;
    }

    #misi #misi-title {
        text-align: end;
    }

    /* Fokus Isu Strategis */
    #fokus {
        margin-top: 10vh;
        height: auto;
        padding-bottom: 10vh;
    }

    /* Goals */
    #goals {
        margin-top: 10vh;
        height: auto;
        padding-bottom: 10vh;
    }

    .btn-warning {
        height: 56px;
    }

    .bg-urut {
        font-size: 14px;
        width: 5px;
        text-align: center;
        background-color: #F9DC1E;
        border-radius: 100%;
        width: 100%;
    }

    @media only screen and (max-width: 992px) {

        .btn-warning {
            width: 60%;
            font-size: 12px;
            margin-top: 5vh;
            margin-left: 17vw;
        }

        .bg-selamat {
            font-size: 16px;
            margin-left: 8%;
        }

        #teks-tentang {
            font-size: 12px;
        }

        #halo {
            height: auto;
        }

        #haloCard img {
            width: 95%;
        }

        #foto-card {
            display: none;
        }

        #visi {
            margin-top: 10vh;
            text-align: center;
        }

        .bg-poin-orange {
            border-radius: 50px;
            margin-top: 3vh;
            font-size: 11px;
        }

        .bg-poin-black {
            border-radius: 50px;
            margin-top: 3vh;
            font-size: 11px;
        }

        .bg-title-yellow {
            font-size: 13px;
            margin-top: 5vh;
        }

        .bg-urut {
            padding: 5px;
            background-color: transparent;
            border-radius: 100%;
        }

        #misi {
            margin-top: 5vh;
            text-align: center;
        }

        #misi-title {
            display: none;
        }

        #misi-title-mobile {
            display: block;
        }

        #fokus {
            text-align: center;
        }

        #goals {
            text-align: center;
        }
    }
</style>

<header id="halo">
    <div class="container">
        <div class="col-lg-12">
            <h1 class="fw-bold" data-aos="fade-right" data-aos-duration="1000">Halo Brawijayans!</h1>
        </div>
        <div id="haloCard" data-aos="zoom-out-up" data-aos-duration="1000">
            <div class="row">
                <div class="col-lg-7">
                    <h4 class="text-white mt-2 fw-bold bg-selamat text-center ms-md-4 p-3">Selamat Datang di EM UB 2023</h4>
                    <div id="teks-tentang" class="text-white p-4 ms-md-4">
                        <p class="text-justify">Eksekutif Mahasiswa Universitas Brawijaya (EM UB) 2023 akan hadir sebagai
                            organisasi yang reformatif, transformatif, dan orientatif dalam menghadapi
                            tantangan masa depan yang lebih kompleks.
                            <br><br>
                            EM UB sebagai organisasi mahasiswa yang primus inter pares di tengah kompleksitas peradaban tentu
                            memiliki posisi yang sentral sebagai poros dan sekaligus kiblat mahasiswa dalam menjalankan aktivitas perkuliahannya disamping bidang akademiknya.
                        </p>

                        <p id="collapse-text" class="collapse">Sebagai respon, EM UB 2023 berupaya melakukan reformasi dan restrukturisasi birokrasi internal demi pelayanan publik yang lebih efektif, efisien, dan responsif,sehingga terbentuk SDM yang siap berkualitas dan berdaya saing tinggi.
                            <br><br>
                            Sebagai gagasan utama menyongsong era baru, EM UB 2023 akan membawa misi besar terkait pengembangan peningkatan mutu kompetitif mahasiswa di tingkat nasional dan internasional dalam berbagai bidang.
                        </p>

                        <button type="button" class="btn btn-warning mt-4" data-bs-toggle="collapse" data-bs-target="#collapse-text" aria-expanded="false" aria-controls="collapse-text">Baca Selengkapnya</button>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="<?php echo get_theme_file_uri("/assets/images/Group 9.png") ?>" alt="pres-wapres" width="400px" class="text-center">
                </div>
            </div>
        </div>
    </div>
</header>

<section id="visi">
    <div class="container">
        <div class="row p-md-5">
            <div id="visi-title" class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="fw-bold atas my-auto">VISI</h1>
                    <h2 class="fw-bold bawah mb-3">EM UB 2023</h1>
                        <h4 class="fw-bold bg-dark text-white d-inline p-2 rounded-pill">KABINET KARYA PARIPURNA</h4>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="bg-poin-orange">
                    <p class="text-center text-white p-4">Eksekutif Mahasiswa sebagai Laboratorium Pengetahuan, Katalisator Layanan-Pengabdian, dan Inkubator Pergerakan menuju Brawijaya sebagai Akselerator Pembangunan Nasional dan Kontributor Inovasi Global</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="misi">
    <div class="container">
        <div class="row p-md-5">
            <div id="misi-title-mobile" class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="fw-bold atas my-auto">MISI</h1>
                    <h2 class="fw-bold bawah mb-3">EM UB 2023</h1>
                        <h4 class="fw-bold bg-dark text-white d-inline p-2 rounded-pill">KABINET KARYA PARIPURNA</h4>
            </div>
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="bg-poin-orange">
                    <p class="text-center text-white p-4">Pemutakhiran layanan mahasiswa berintegritas dan terpadu berbasis digital</p>
                </div>
                <div class="bg-poin-black mt-2">
                    <p class="text-center text-white p-4">Pengabdian sosial inklusif untuk resolusi kemanusiaan dan lingkungan hidup</p>
                </div>
                <div class="bg-poin-orange mt-2">
                    <p class="text-center text-white p-4">Pengembangan mutu SDM yang kompetitif di tingkat nasional dan
                        internasional</p>
                </div>
                <div class="bg-poin-black mt-2">
                    <p class="text-center text-white p-4">Pergerakan mahasiswa berbasis LDA dan teknologi yang berorientasi pada
                        terciptanya resolusi pembangunan nasional</p>
                </div>
            </div>
            <div id="misi-title" class="col-lg-6 my-auto" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="fw-bold atas my-auto">MISI</h1>
                    <h2 class="fw-bold bawah mb-3">EM UB 2023</h1>
                        <h4 class="fw-bold bg-dark text-white d-inline p-2 rounded-pill">KABINET KARYA PARIPURNA</h4>
            </div>
        </div>
    </div>
</section>

<section id="fokus">
    <div class="container">
        <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="fw-bold atas my-auto">FOKUS</h1>
                <h2 class="fw-bold bawah mb-3">ISU STRATEGIS</h1>
                    <h4 class="fw-bold bg-dark text-white d-inline p-2 rounded-pill">KABINET KARYA PARIPURNA</h4>
        </div>
        <div class="row mt-md-5 p-md-5">
            <div class="col-lg-6" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="bg-poin-orange badge text-black p-3">
                    Isu Pembangunan Berkelanjutan <img src="<?php echo get_theme_file_uri("/assets/images/pembangunan.png") ?>" width="32px" class="ms-2">
                </div><br>
                <div class="bg-poin-black mt-4 badge text-white text-center p-3 ms-md-5 ms-0">
                    Sustainable Development Goals (SDGs)
                </div>
                <div class="bg-poin-black mt-1 badge text-white text-center p-3 ms-md-5">
                    Indeks Pembangunan Manusia (IPM)
                </div><br>
                <div class="bg-poin-black mt-1 badge text-white text-center p-3 ms-md-5">
                    Indeks Pembangunan Pemuda
                </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="bg-poin-orange badge text-black p-3">
                    Isu Lingkungan Hidup
                    (Eco Movement) <img src="<?php echo get_theme_file_uri("/assets/images/tree.svg") ?>" width="24px" class="ms-2">
                </div>
                <br>
                <div class="bg-poin-black mt-4 badge text-white text-center p-3 ms-md-5">
                    Degradasi lingkungan
                </div>
                <div class="bg-poin-black mt-1 badge text-white text-center p-3 ms-md-5">
                    Pembangunan berwawasan ekologi dan antropologi
                </div>
            </div>
            <div class="col-lg-6 mt-md-5" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="bg-poin-orange badge text-black p-3">
                    Isu Pergerakan Nasional dan Internasional
                    <img src="<?php echo get_theme_file_uri("/assets/images/pergerakan.svg") ?>" width="32px" class=" ms-2">
                </div>
                <div class="bg-poin-black mt-4 badge text-white text-center p-3 ms-md-5">
                    Demokrasi pasca berlakunya KUHP baru
                </div>
                <div class="bg-poin-black mt-1 badge text-white text-center p-3 ms-md-5">
                    Monitoring pengentasan kasus pelanggaran HAM berat
                </div>
                <div class="bg-poin-black mt-1 badge text-white text-center p-3 ms-md-5">
                    Ancaman resesi ekonomi
                </div><br>
                <div class="bg-poin-black mt-1 badge text-white text-center p-3 ms-md-5">
                    Ancaman bagi pekerja pasca UU Cipta Kerja
                </div>
                <div class="bg-poin-black mt-1 badge text-white text-center p-3 ms-md-5">
                    Ancaman non militer negara-negara berkembang
                </div>
            </div>
            <div class="col-lg-6 mt-md-5" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="bg-poin-orange badge text-black p-3">
                    Isu Pendidikan <img src="<?php echo get_theme_file_uri("/assets/images/pendidikan.svg") ?>" width="32px" class=" ms-2">
                </div>
                <br>
                <div class="bg-poin-black mt-4 badge text-white text-center p-3 ms-md-5">
                    Demokrasi dan kesejahteraan mahasiswa pasca PTN BH
                </div>
                <div class="bg-poin-black mt-1 badge text-white text-center p-3 ms-md-5">
                    Monitoring pengentasan kasus pelanggaran HAM berat
                </div>
                <div class="bg-poin-black mt-1 badge text-white text-center p-3 ms-md-5">
                    Komparasi paradigma pembangunan kapasitas<br> manusia dan pemuda
                </div>
                <div class="bg-poin-black mt-1 badge text-white text-center p-3 ms-md-5">
                    Inklusivitas pendidikan bagi golongan tidak mampu dan <br>penyintas disabilitas
                </div>
            </div>
        </div>
    </div>
</section>

<section id="goals">
    <div class="container">
        <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="fw-bold atas my-auto">ANNUAL</h1>
                <h2 class="fw-bold bawah mb-3">GOALS</h1>
                    <h4 class="fw-bold bg-dark text-white d-inline p-2 rounded-pill">KABINET KARYA PARIPURNA</h4>
        </div>
        <div class="row mt-md-5 p-5">
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="bg-poin-orange p-3 text-white">
                    <div class="row">
                        <div class="col-lg-2 my-auto">
                            <h5 class="text-center bg-urut p-1">1</h5>
                        </div>
                        <div class="col-lg-10">
                            Optimalisasi peranan EM UB dalam berpartisipasi di era digital dan globalisasi
                        </div>
                    </div>
                </div>
                <div class="bg-poin-orange p-3 mt-2 text-white">
                    <div class="row">
                        <div class="col-lg-2 my-auto">
                            <h5 class="text-center bg-urut p-1">2</h5>
                        </div>
                        <div class="col-lg-10 p-2">
                            Optimalisasi peranan EM UB sebagai wadah pengembangan potensi sumber daya manusia yang kompetitif dalam menunjang pembangunan nasional dan berkontribusi dalam inovasi global
                        </div>
                    </div>
                </div>
                <div class="bg-poin-orange p-3 mt-2 text-white">
                    <div class="row">
                        <div class="col-lg-2 my-auto">
                            <h5 class="text-center bg-urut p-1">3</h5>
                        </div>
                        <div class="col-lg-10 p-2">
                            Optimalisasi peranan EM UB dalam memberikan layanan kepada mahasiswa demi meningkatkan taraf kesejahteraan mahasiswa
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-auto" data-aos="fade-right" data-aos-duration="1000">
                <div class="bg-poin-orange p-3 text-white">
                    <div class="row">
                        <div class="col-lg-2 my-auto">
                            <h5 class="text-center bg-urut p-md-1">4</h5>
                        </div>
                        <div class="col-lg-10 p-2">
                            Optimalisasi peranan EM UB dalam berpartisipasi di era digital dan globalisasi
                        </div>
                    </div>
                </div>
                <div class="bg-poin-orange p-3 mt-2 text-white">
                    <div class="row">
                        <div class="col-lg-2 my-auto">
                            <h5 class="text-center bg-urut p-1">5</h5>
                        </div>
                        <div class="col-lg-10 p-2">
                            Optimalisasi peranan EM UB sebagai wadah pengembangan potensi sumber daya manusia yang kompetitif dalam menunjang pembangunan nasional dan berkontribusi dalam inovasi global
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>