      <footer class="footer">
        <div class="footer__top container">
          <div class="footer_title">
            <span class="title title--small">Kontakt</span>
            <h2 class="title title--white">Zapraszam do współpracy</h2>
          </div>
          <div class="footer__data">
            <a href="tel: +48 602 249 622">
              <img
                src="<?php bloginfo('template_url'); ?>/img/phone.svg"
                alt=""
              />
              +48 602 249 622
            </a>
            <span class="line"></span>
            <a href="mailto:gskupniewicz@cfoservices.com">
              <img
                src="<?php bloginfo('template_url'); ?>/img/mail.svg"
                alt=""
              />
              gskupniewicz@cfoservices.com
            </a>
          </div>
        </div>
        <div class="footer__form container">
          <?php echo  do_shortcode(get_theme_mod('footer_content', '')) ?>
        </div>
        <div class="footer__author">
          <div class="container">
            <a href="/" class="footer__logo">
              <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="" />
            </a>
            <a href="http://websitestyle.pl" class="footer__copyright">
              Websitestyle - Strony www
            </a>
          </div>
        </div>
      </footer>
    </main>
    <?php wp_footer(); ?>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/hamburger.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
      $(document).ready(function(){
      $('#references__owl').owlCarousel({
                    loop:true,
                    margin:0,
                    responsiveClass:true,
                    center:true,
                    nav:true,
                    navText : ['<img src="<?php bloginfo('template_url'); ?>/img/nav_arrow_next.svg">','<img src="<?php bloginfo('template_url'); ?>/img/nav_arrow_prev.svg">'],
                    responsive:{
                        0:{
                            items:1,
                            nav:true,
                            autoHeight:true
                        },
                        400:{
                            items:1,
                            nav:true,
                          autoHeight:true
                        },
                        600:{
                            items:1,
                            nav:true,
                          autoHeight:true
                        }
                    }
                });
                $('#benefits__owl').owlCarousel({
                    loop:true,
                    margin:0,
                    responsiveClass:true,
                    center:true,
                    nav:true,
                    mouseDrag: false,
                    touchDrag: false,
                    navText : ['<img src="<?php bloginfo('template_url'); ?>/img/nav_arrow_next.svg"><span class="line"></span></span>','<img src="<?php bloginfo('template_url'); ?>/img/nav_arrow_prev.svg">'],
                    responsive:{
                        0:{
                            items:1,
                            nav:true,
                            autoHeight:true
                        },
                        400:{
                            items:1,
                            nav:true,
                          autoHeight:true
                        },
                        600:{
                            items:1,
                            nav:true,
                          autoHeight:true
                        }
                    }

                })
      });
    </script>
  </body>
</html>
