<footer id="footer" class="">
      <div class="container-fluid">
        <div class="row">
        <div id="mobile-footer" class="col-lg-12">
            <ul>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/linkedin.png")?>" width="20px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/twitter-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/tiktok-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/instagram-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/youtube-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/telephone_.png")?>./assets/telephone_.png" width="20px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/line.png")?>" width="26px"></a></li>
              <li class="ms-4"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/🦆 icon _location_.png")?>" width="20px"></a></li>
            </ul>
          </div>
          <div id="copyright" class="col-lg-4">
            <p class="text-white">Copyright &copy; KOMINFO EM UB 2023 | All Rights Reserved.</p>
          </div>
          <div class="col-lg-4">
            <ul id="socmed-footer" class="mx-auto">
              <li class="mx-auto">Social Media</li>
              <li class="mx-auto">|</li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/linkedin.png")?>" width="20px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/twitter-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/tiktok-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/instagram-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/youtube-white.png")?>" width="26px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/telephone_.png")?>" width="20px"></a></li>
              <li class="ms-3"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/line.png")?>" width="26px"></a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <ul id="address-footer" class="mx-auto">
              <li class="ms-3">Address</li>
              <li class="ms-4">|</li>
              <li class="ms-4"><a href=""><img src="<?php echo get_theme_file_uri("/assets/images/🦆 icon _location_.png")?>" width="20px"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      var navbar = document.getElementById('navbar_top');
      navbar.classList.add('fixed-top');
      navbar.classList.remove('bg-transparent');
      navbar.classList.add('bg-color');

      // Menambahkan efek transisi
      navbar.style.transition = 'background-color 1s, padding-top 1s';

      // Menambahkan padding top untuk menampilkan konten di belakang navbar
      var navbar_height = document.querySelector('.navbar').offsetHeight;
      document.body.style.paddingTop = navbar_height + 'px';
    } else {
      var navbar = document.getElementById('navbar_top');
      navbar.classList.remove('fixed-top');
      navbar.classList.add('bg-transparent');

      // Menghapus efek transisi
      navbar.style.transition = '';

      // Menghapus padding top dari body
      document.body.style.paddingTop = '0';
    }
  });
});
    </script>
   <?php wp_footer() ?>
  </body>
</html>