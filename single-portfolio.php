<?php get_header(); ?>

  <div class="wrapper st_wrapper">

    <?php include('part/title-page.php'); ?>

    <?php include('part/service-top-btn.php'); ?>
    <div class="container single_info">

      <div class="single_info_item">
        <div class="row">


          <div class="col-xs-12">


            <?php if (have_posts()): while (have_posts()): the_post();

              $gallery = get_post_gallery_images($post);

              $content = strip_shortcode_gallery(get_the_content());

              $imgBefore = catch_that_image();

              $content = remove_first_image($content);
              ?>

              <h2> <?php the_title(); ?> </h2>

              <div class="text_descrip">
                <?= $content; ?>
              </div>

              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <h3>До:</h3>
                  <div class="img-before">
                    <img src="<?= $imgBefore; ?>" alt="" class="img-responsive">
                  </div>
                </div>
                <div class="col-xs-12 col-md-6">
                  <h3>После:</h3>
                  <div class="owl-carousel">
                    <? foreach ($gallery as $img_url) { ?>
                      <div class="item"><img src="<?= $img_url; ?>"></div>

                    <? } ?>

                  </div>

                </div>
              </div>

            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
    <script>
      (function ($) {
        $(document).ready(function () {

          $('.owl-carousel').owlCarousel({
            dots: false,
            loop: true,
              autoplay: true,
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
                items: 1,
                autoWidth: true,
                nav: true
              },
              600: {
                items: 1,
                nav: true
              },
              1000: {
                items: 1,
                nav: true
              },
              1200: {
                items: 1,
                nav: true
              }
            }
          });

        });
      })(jQuery);
    </script>

  </div>


<?php get_footer(); ?>