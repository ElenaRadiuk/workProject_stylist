<?php
/**
 * The main template file
 */

get_header(); ?>

<div class="wrap">
  <div id="primary" class="container-fluid">
    <div class="row">
      <main id="main" class="site-main" role="main">

        <?php if (function_exists('meteor_slideshow')) {
          meteor_slideshow("home_slider", "");
        } ?>


      </main>
      <div class="container_services_menu">

        <? wp_nav_menu(array('theme_location' => 'topMenu', 'menu' => 'services_menu', 'menu_class' => 'nav-services owl-carousel', 'container' => 'ul')); ?>

        <div class="gift_sertif  hidden-sm hidden-xs">
          <div class="gift_sertif_btn common bn-4">
            <div><a href="/zakazat-uslugu/"">
              Заказать подарочный сертификат
              </a>
            </div>
          </div>

          <div class="order_service">
            <div class="order_service_btn bn-4">
              <div><a href="/zakazat-uslugu/"> Заказать услугу</a></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--    <div class="container visible-sm">-->
  <!--        <div class="row">-->
  <!--            --><? // wp_nav_menu(array('theme_location' => 'topMenu', 'menu' => 'services_menu', 'menu_class' => 'nav-services owl-carousel', 'container' => 'ul')); ?>
  <!---->
  <!--        </div>-->
  <!--    </div>-->


  <div class="container visible-xs">
    <div class="row">
      <div class="col-xs-12">
        <div class="style_block">

          <h3>СТИЛИСТ-ИМИДЖМЕЙКЕР</h3>
          <h1>ЕКАТЕРИНА ПЕРЕВЕРЗЕВА</h1>
          <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Екатерина Переверзева">
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="gift_sertif">

          <!--                 24-->
          <?php $the_query = new WP_Query('p=24'); ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail('full', array('class' => 'img-responsive center-block')); ?>


            <div class="gift_sertif_btn center-block">

              <div class="btn-4"><a href="/zakazat-uslugu/"> Заказать подарочный сертификат</a></div>


            </div>

          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-12 review_home">
        <h2>Отзывы</h2>
        <div>

          <!--                    6-->
          <?php $the_query = new WP_Query('cat=6'); ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


            <div class="review_img">
              <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
            </div>

            <h3><?php the_title(); ?></h3>

            <div class="review_text">

              <div> <?php the_content(); ?> </div>


            </div>

          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="container">
  <div class="row portfolio_home">
    <h2 class="page-header">Портфолио</h2>
    <div class="owl-carousel owl-theme portfolio-carousel">

      <?php $the_query = new WP_Query('cat=22'); ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="item">

          <div class="portfolio_items">

            <div><? the_post_thumbnail('for_circle', array('class' => 'img-responsive img-circle')); ?></div>
            <h3><a href="<? the_permalink() ?>"><?php the_title(); ?></a></h3>

          </div>
        </div>
      <?php endwhile; ?>

    </div>

  </div>
</div>

</div>

<script>
  (function ($) {
    $(document).ready(function () {

      $('.owl-carousel.nav-services').owlCarousel({
        loop: true,
        margin: 10,
        // autoWidth:true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            autoWidth: true,
            nav: true
          },
          440: {
            items: 2,
            autoWidth: true,
            nav: true
          },
          600: {
            items: 3,
            nav: true
          },
          1000: {
            items: 4,
            nav: true,
            loop: false
          },
          1200: {
            items: 5,
            nav: true,
            loop: false
          }
        }
      });
      $('.owl-carousel.portfolio-carousel').owlCarousel({
        loop: true,
        margin: 75,
        // autoWidth:true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            autoWidth: true,
              autoplay:true,
              dots: false,
              center: true,
            nav: false
          },
          440: {
            items: 2,
            autoWidth: true,
              autoplay:true,
              center: true,
              dots: false,
            nav: false
          },
          600: {
            items: 3,
              dots: true,
            nav: true
          },
          1000: {
            items: 3,
            nav: true,
            loop: true
          },
          1200: {
            items: 3,
            nav: true,
            loop: true
          }
        }
      });

    });
  })(jQuery)
</script>

<?php get_footer(); ?>
