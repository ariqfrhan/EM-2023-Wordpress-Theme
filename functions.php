<?php 
add_theme_support('menus');
add_theme_support('post-thumbnails');

function em_style(){
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css', array(),false);
    wp_enqueue_style('style',get_theme_file_uri('/assets/style-hp.css'), array(), false);
    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_style('logo',get_theme_file_uri("/assets/Logo EM.png"));
    wp_enqueue_style('about',get_theme_file_uri('/assets/style-about.css'), array(), false);
}

add_action('wp_enqueue_scripts', 'em_style');

function homepage(){
    require("homepage.php");
}

function about(){
    require("page-about.php");
}
add_shortcode('about', 'about');

function kemenkoan($attr) {
    if($attr){
        if(array_values($attr)[0] == "internal"){
            require("page-menko.internal.php");
        }else if(array_values($attr)[0] == "pelayanan"){
            require("page-menko.pelayanan.php");
        }else if(array_values($attr)[0] == "pengembangan"){
            require("page-menko.pengembangan.php");
        }else if(array_values($attr)[0] == "pergerakan"){
            require("page-menko.pergerakan.php");
        }else if(array_values($attr)[0] == "pengabdian"){
            require("page-menko.pengabdian.php");
        }else if(array_values($attr)[0] == "sekbend"){
            require("page-menko.sekbend.php");
        }
    }else{
        require("page-pres.wapres.php");
    }
}
add_shortcode('kemenkoan', 'kemenkoan');

function kementerian($attr) {
    if($attr){
        if(array_values($attr)[0] == "advo"){
            require("page-menteri.advo.php");
        }else if(array_values($attr)[0] == "budpora"){
            require("page-menteri.budpora.php");
        }else if(array_values($attr)[0] == "bumm"){
            require("page-menteri.bumm.php");
        }else if(array_values($attr)[0] == "dagri"){
            require("page-menteri.dagri.php");
        }else if(array_values($attr)[0] == "keuangan"){
            require("page-menteri.keuangan.php");
        }else if(array_values($attr)[0] == "kominfo"){
            require("page-menteri.kominfo.php");
        }else if(array_values($attr)[0] == "lh"){
            require("page-menteri.lh.php");
        }else if(array_values($attr)[0] == "lugri"){
            require("page-menteri.lugri.php");
        }else if(array_values($attr)[0] == "p3"){
            require("page-menteri.p3.php");
        }else if(array_values($attr)[0] == "pao"){
            require("page-menteri.pao.php");
        }else if(array_values($attr)[0] == "psdm"){
            require("page-menteri.psdm.php");
        }else if(array_values($attr)[0] == "rispensi"){
            require("page-menteri.rispensi.php");
        }else if(array_values($attr)[0] == "sekkab"){
            require("page-menteri.sekkab.php");
        }else if(array_values($attr)[0] == "sosma"){
            require("page-menteri.sosma.php");
        }
    }else{
        require("page-pres.wapres.php");
    }
}
add_shortcode('kementerian', 'kementerian');
?>