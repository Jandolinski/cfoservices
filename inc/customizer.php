<?php
 function cfo_customize_register($wp_customize) {
  //banner section
  $wp_customize->add_section('banner', array(
    'title' => __('Banner', 'CFOServices'),
    'description' => sprintf(__('Opcje dla banneru', 'CFOServices')),
    'priority' => 130
  ));
  //Description banner
  $wp_customize->add_setting('description', array(
    'default' => _x('W <strong>CFOServices</strong> rozwiązujemy ten problem, oferując
            klientom możliwość współpracy z doświadczonymi dyrektorami
            finansowymi, na elastycznych zasadach', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('description', array(
    'label' => __('Description', 'CFOServices'),
    'section' => 'banner',
    'priority' => 1
  ));
  //Button banner
   $wp_customize->add_setting('btn_url', array(
    'default' => _x('http://google.com', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('btn_url', array(
    'label' => __('Button URL', 'CFOServices'),
    'section' => 'banner',
    'priority' => 2
  ));
  $wp_customize->add_setting('btn_text', array(
    'default' => _x('ZACZNIJMY WSPÓŁPRACĘ', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('btn_text', array(
    'label' => __('Button Text', 'CFOServices'),
    'section' => 'banner',
    'priority' => 3
  ));
  //Image banner
  $wp_customize->add_setting('banner_img', array(
    'default' => get_bloginfo('template_directory').'/img/gettyimages-544545589-2048x2048.png',
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_img', array(
    'label' => __('Banner image', 'CFOServices'),
    'section' => 'banner',
    'settings' => 'banner_img',
    'priority' => 4
  )));

  //services section
  $wp_customize->add_section('services', array(
    'title' => __('Zakres Współpracy', 'CFOServices'),
    'description' => sprintf(__('Services', 'CFOServices')),
    'priority' => 131
  ));
  //Link service1
  $wp_customize->add_setting('service1_link', array(
    'default' => _x('http://google.pl', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('service1_link', array(
    'label' => __('Box1 link', 'CFOServices'),
    'section' => 'services',
    'priority' => 1
  ));
  //Image service1
  $wp_customize->add_setting('service1_img', array(
    'default' => get_bloginfo('template_directory').'/img/suitcase.svg',
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service1_img', array(
    'label' => __('Box1 Image', 'CFOServices'),
    'section' => 'services',
    'settings' => 'service1_img',
    'priority' => 2
  )));
  //Text service1
  $wp_customize->add_setting('service1_text', array(
    'default' => _x('Zewnętrzny CFO /Dyrektor Finansowy', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('service1_text', array(
    'label' => __('Box1 Text', 'CFOServices'),
    'section' => 'services',
    'priority' => 3
  ));
  //Link service2
  $wp_customize->add_setting('service2_link', array(
    'default' => _x('http://google.pl', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('service2_link', array(
    'label' => __('Box2 link', 'CFOServices'),
    'section' => 'services',
    'priority' => 4
  ));
  //Image service2
  $wp_customize->add_setting('service2_img', array(
    'default' => get_bloginfo('template_directory').'/img/target.svg',
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service2_img', array(
    'label' => __('Box2 Image', 'CFOServices'),
    'section' => 'services',
    'settings' => 'service2_img',
    'priority' => 5
  )));
  //Text service2
  $wp_customize->add_setting('service2_text', array(
    'default' => _x('Zewnętrzny Menedżer /Kontroler Finansowy', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('service2_text', array(
    'label' => __('Box2 Text', 'CFOServices'),
    'section' => 'services',
    'priority' => 6
  ));
  //Link service3
  $wp_customize->add_setting('service3_link', array(
    'default' => _x('http://google.pl', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('service3_link', array(
    'label' => __('Box3 link', 'CFOServices'),
    'section' => 'services',
    'priority' => 7
  ));
  //Image service3
  $wp_customize->add_setting('service3_img', array(
    'default' => get_bloginfo('template_directory').'/img/help.svg',
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service3_img', array(
    'label' => __('Box3 Image', 'CFOServices'),
    'section' => 'services',
    'settings' => 'service3_img',
    'priority' => 8
  )));
  //Text service3
  $wp_customize->add_setting('service3_text', array(
    'default' => _x('Wsparcie transakcyjne dla funduszy VC', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('service3_text', array(
    'label' => __('Box3 Text', 'CFOServices'),
    'section' => 'services',
    'priority' => 9
  ));
  //Link service4
  $wp_customize->add_setting('service4_link', array(
    'default' => _x('http://google.pl', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('service4_link', array(
    'label' => __('Box4 link', 'CFOServices'),
    'section' => 'services',
    'priority' => 10
  ));
  //Image service4
  $wp_customize->add_setting('service4_img', array(
    'default' => get_bloginfo('template_directory').'/img/develop.svg',
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service4_img', array(
    'label' => __('Box4 Image', 'CFOServices'),
    'section' => 'services',
    'settings' => 'service4_img',
    'priority' => 11
  )));
  //Text service4
  $wp_customize->add_setting('service4_text', array(
    'default' => _x('Współpraca projektowa w zakresie finansów', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('service4_text', array(
    'label' => __('Box4 Text', 'CFOServices'),
    'section' => 'services',
    'priority' => 12
  ));

  //Cooperation section
  $wp_customize->add_section('cooperation', array(
    'title' => __('Formy Współpracy', 'CFOServices'),
    'description' => sprintf(__('Cooperation', 'CFOServices')),
    'priority' => 132
  ));
  //Image coop1
  $wp_customize->add_setting('coop1_img', array(
    'default' => get_bloginfo('template_directory').'/img/coop1.png',
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'coop1_img', array(
    'label' => __('Box1 Image', 'CFOServices'),
    'section' => 'cooperation',
    'settings' => 'coop1_img',
    'priority' => 1
  )));
  //Title coop1
  $wp_customize->add_setting('coop1_title', array(
    'default' => _x('Współpraca długoterminowa', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('coop1_title', array(
    'label' => __('Box1 Title', 'CFOServices'),
    'section' => 'cooperation',
    'priority' => 2
  ));
  //Description coop1
  $wp_customize->add_setting('coop1_description', array(
    'default' => _x('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('coop1_description', array(
    'label' => __('Box1 Description', 'CFOServices'),
    'section' => 'cooperation',
    'priority' => 3
  ));

  //Image coop2
  $wp_customize->add_setting('coop2_img', array(
    'default' => get_bloginfo('template_directory').'/img/coop2.png',
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'coop2_img', array(
    'label' => __('Box2 Image', 'CFOServices'),
    'section' => 'cooperation',
    'settings' => 'coop2_img',
    'priority' => 4
  )));
  //Title coop2
  $wp_customize->add_setting('coop2_title', array(
    'default' => _x('Ryczałt', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('coop2_title', array(
    'label' => __('Box2 Title', 'CFOServices'),
    'section' => 'cooperation',
    'priority' => 5
  ));
  //Description coop2
  $wp_customize->add_setting('coop2_description', array(
    'default' => _x('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('coop2_description', array(
    'label' => __('Box2 Description', 'CFOServices'),
    'section' => 'cooperation',
    'priority' => 6
  ));

  //Image coop3
  $wp_customize->add_setting('coop3_img', array(
    'default' => get_bloginfo('template_directory').'/img/coop3.png',
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'coop3_img', array(
    'label' => __('Box3 Image', 'CFOServices'),
    'section' => 'cooperation',
    'settings' => 'coop3_img',
    'priority' => 7
  )));
  //Title coop3
  $wp_customize->add_setting('coop3_title', array(
    'default' => _x('Współpraca według stawek godzinowych', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('coop3_title', array(
    'label' => __('Box3 Title', 'CFOServices'),
    'section' => 'cooperation',
    'priority' => 8
  ));
  //Description coop3
  $wp_customize->add_setting('coop3_description', array(
    'default' => _x('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('coop3_description', array(
    'label' => __('Box3 Description', 'CFOServices'),
    'section' => 'cooperation',
    'priority' => 9
  ));

  //Benefits section
  $wp_customize->add_section('benefits', array(
    'title' => __('Korzyści', 'CFOServices'),
    'description' => sprintf(__('benefits', 'CFOServices')),
    'priority' => 133
  ));
  //Content benefits
  $wp_customize->add_setting('benefits_content', array(
    'default' => _x('
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
    ', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('benefits_content', array(
    'label' => __('Content', 'CFOServices'),
    'section' => 'benefits',
    'type' => 'textarea',
    'priority' => 1
  ));

  //References section
  $wp_customize->add_section('references', array(
    'title' => __('Referencje', 'CFOServices'),
    'description' => sprintf(__('references', 'CFOServices')),
    'priority' => 134
  ));
  //Content References
  $wp_customize->add_setting('references_content', array(
    'default' => _x('<div class="references__carousel">
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
            </div>', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('references_content', array(
    'label' => __('Content', 'CFOServices'),
    'section' => 'references',
    'type' => 'textarea',
    'priority' => 1
  ));


   //Footer section
  $wp_customize->add_section('footer', array(
    'title' => __('Stopka', 'CFOServices'),
    'description' => sprintf(__('footer', 'CFOServices')),
    'priority' => 135
  ));
  //Content Footer
  $wp_customize->add_setting('footer_content', array(
    'default' => _x('', 'CFOServices'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('footer_content', array(
    'label' => __('Content', 'CFOServices'),
    'section' => 'footer',
    'type' => 'textarea',
    'priority' => 1
  ));
 }

 add_action('customize_register', 'cfo_customize_register');