<?php get_header(); ?>
    <main class="main">
      <section class="banner">
        <img src="<?php echo get_theme_mod('banner_img', get_bloginfo('template_url').'/img/gettyimages-544545589-2048x2048.png'); ?>" alt="" />
        <div class="banner__content container">
          <p>
            <?php echo get_theme_mod('description', 'W <strong>CFOServices</strong> rozwiązujemy ten problem, oferując
            klientom możliwość współpracy z doświadczonymi dyrektorami
            finansowymi, na elastycznych zasadach') ?>
            
          </p>
          <a href="<?php echo get_theme_mod('btn_url', 'http://google.pl') ?>" class="button button--blue"><?php echo get_theme_mod('btn_text', 'ZACZNIJMY WSPÓŁPRACĘ') ?></a>
        </div>
      </section>
      <section class="services container">
        <h2 class="title title--blue">Zakres Współpracy</h2>
        <div
          class="flex pattern__parent pattern__parent--right"
          data-aos="fade-left"
          data-aos-anchor-placement="top-center"
        >
          <a class="services__box" href="<?php echo get_theme_mod('service1_link', 'http://google.pl') ?>">
            <div class="box__content">
              <img src="<?php echo get_theme_mod('service1_img', get_bloginfo('template_url').'/img/suitcase.svg'); ?>" alt="" class="box__icon" />
              <p><?php echo get_theme_mod('service1_text', 'Zewnętrzny CFO /Dyrektor Finansowy') ?></p>
            </div>
          </a>
          <a class="services__box" href="<?php echo get_theme_mod('service2_link', 'http://google.pl') ?>">
            <div class="box__content">
              <img src="<?php echo get_theme_mod('service2_img', get_bloginfo('template_url').'/img/target.svg'); ?>" alt="" class="box__icon" />
              <p><?php echo get_theme_mod('service2_text', 'Zewnętrzny Menedżer /Kontroler Finansowy') ?></p>
            </div>
          </a>
          <a class="services__box" href="<?php echo get_theme_mod('service3_link', 'http://google.pl') ?>">
            <div class="box__content">
              <img src="<?php echo get_theme_mod('service3_img', get_bloginfo('template_url').'/img/help.svg'); ?>" alt="" class="box__icon" />
              <p><?php echo get_theme_mod('service3_text', 'Wsparcie transakcyjne dla funduszy VC') ?></p>
            </div>
          </a>
          <a class="services__box" href="<?php echo get_theme_mod('service4_link', 'http://google.pl') ?>">
            <div class="box__content">
              <img src="<?php echo get_theme_mod('service4_img', get_bloginfo('template_url').'/img/develop.svg'); ?>" alt="" class="box__icon" />
              <p><?php echo get_theme_mod('service4_text', 'Współpraca projektowa w zakresie finansów') ?></p>
            </div>
          </a>
        </div>
      </section>
      <section class="benefits container">
        <h2 class="title title--blue">Korzyści</h2>
        <div
          class="flex pattern__parent pattern__parent--left"
          data-aos="fade-right"
          data-aos-anchor-placement="top-center"
        >
        
        <div class="owl-carousel owl-theme" id="benefits__owl">
            <?php echo get_theme_mod('benefits_content', '
            <div class="benefits__carousel">
              <div class="benefits__image">
                <img src="wp-content/themes/CFOServices/img/benefits1.png" alt="">
              </div>
              <div class="benefits__number">
                <span>01</span>
              </div>
              <div class="benefits__description">
                <h3 class="benefits__heading">WYSOKIE KOMPETENCJE</h3>
                <p>dyrektorów finansowch z wieloletnim doświadczeniem</p>
              </div>
            </div>
            <div class="benefits__carousel">
              <div class="benefits__image">
                <img src="wp-content/themes/CFOServices/img/benefits1.png" alt="">
              </div>
              <div class="benefits__number">
                <span>02</span>
              </div>
              <div class="benefits__description">
                <h3 class="benefits__heading">WYSOKIE KOMPETENCJE</h3>
                <p>dyrektorów finansowch z wieloletnim doświadczeniem</p>
              </div>
            </div>
          </div>
            '); ?>
            
          
      </section>
      <section class="cooperation container">
        <h2 class="title title--blue">Formy Współpracy</h2>
        <div
          class="flex"
          data-aos="fade-left"
          data-aos-anchor-placement="top-center"
        >
          <div class="cooperation__box">
            <div
              class="cooperation__box__heading"
              style="background-image: url('<?php echo get_theme_mod('coop1_img', get_bloginfo('template_url').'/img/coop1.png'); ?>')"
            >
              <p><?php echo get_theme_mod('coop1_title', 'Współpraca długoterminowa') ?></p>
            </div>
            <div class="cooperation__box__description">
              <p>
                <?php echo get_theme_mod('coop1_description', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod') ?>
              </p>
            </div>
          </div>
          <div class="cooperation__box">
            <div
              class="cooperation__box__heading"
              style="background-image: url('<?php echo get_theme_mod('coop2_img', get_bloginfo('template_url').'/img/coop2.png'); ?>');"
            >
              <p><?php echo get_theme_mod('coop2_title', 'Ryczałt') ?></p>
            </div>
            <div class="cooperation__box__description">
              <p>
                <?php echo get_theme_mod('coop2_description', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod') ?>
              </p>
            </div>
          </div>
          <div class="cooperation__box">
            <div
              class="cooperation__box__heading"
              style="background-image: url('<?php echo get_theme_mod('coop3_img', get_bloginfo('template_url').'/img/coop3.png'); ?>');"
            >
              <p><?php echo get_theme_mod('coop3_title', 'Współpraca według stawek godzinowych') ?></p>
            </div>
            <div class="cooperation__box__description">
              <p>
                <?php echo get_theme_mod('coop3_description', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod') ?>
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="references container">
        <h2 class="title title--blue">Referencje:</h2>
        <div data-aos="fade-right" data-aos-anchor-placement="top-center">
          <div class="owl-carousel owl-theme" id="references__owl">
            <?php echo get_theme_mod('references_content', '
            <div class="references__carousel">
              <img src="wp-content/uploads/2019/08/EEC-Venrures-logo.png" alt="">
              <p class="references__company">EEC Ventures</p>
              <p class="references__quote">
                Przygotowując biznesplan zwróciłem się do pana Grzegorza Skupniewicza z prośbą o zaopiniowanie modelu finansowania naszego projektu. To, co otrzymaliśmy przekroczyło nasze najśmielsze oczekiwania! Zestaw arkuszy kalkulacyjnych pozwalał na precyzyjne modelowanie, wyliczenia potrzeb inwestycyjnych, kalkulacje przepływów finansowych i ryzyk. Bardzo dużo sami się nauczyliśmy przy okazji. Dzisiaj nie umiem sobie wyobrazić sytuacji, w której nie mamy profesjonalnego wsparcia pana Grzegorza
              </p>
              <p class="references__author">Maria Wajda</p>
            </div>
            <div class="references__carousel">
              <img src="wp-content/uploads/2019/08/EEC-Venrures-logo.png" alt="">
              <p class="references__company">EEC Ventures</p>
              <p class="references__quote">
                Przygotowując biznesplan zwróciłem się do pana Grzegorza Skupniewicza z prośbą o zaopiniowanie modelu finansowania naszego projektu. To, co otrzymaliśmy przekroczyło nasze najśmielsze oczekiwania! Zestaw arkuszy kalkulacyjnych pozwalał na precyzyjne modelowanie, wyliczenia potrzeb inwestycyjnych, kalkulacje przepływów finansowych i ryzyk. Bardzo dużo sami się nauczyliśmy przy okazji. Dzisiaj nie umiem sobie wyobrazić sytuacji, w której nie mamy profesjonalnego wsparcia pana Grzegorza
              </p>
              <p class="references__author">Maria Wajda</p>
            </div>
            <div class="references__carousel">
              <img src="wp-content/uploads/2019/08/EEC-Venrures-logo.png" alt="">
              <p class="references__company">EEC Ventures</p>
              <p class="references__quote">
                Przygotowując biznesplan zwróciłem się do pana Grzegorza Skupniewicza z prośbą o zaopiniowanie modelu finansowania naszego projektu. To, co otrzymaliśmy przekroczyło nasze najśmielsze oczekiwania! Zestaw arkuszy kalkulacyjnych pozwalał na precyzyjne modelowanie, wyliczenia potrzeb inwestycyjnych, kalkulacje przepływów finansowych i ryzyk. Bardzo dużo sami się nauczyliśmy przy okazji. Dzisiaj nie umiem sobie wyobrazić sytuacji, w której nie mamy profesjonalnego wsparcia pana Grzegorza
              </p>
              <p class="references__author">Maria Wajda</p>
            </div>'); ?>
            
          </div>
        </div>
        </div>
      </section>
<?php get_footer(); ?>