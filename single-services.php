<?php get_header(); ?>

    <div class="wrapper st_wrapper">

        <div class="container title_header">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1>УСЛУГИ</h1>
                </div>
            </div>
        </div>

        <?php include ('part/service-top-btn.php'); ?>

        <div class="container single_info">

                <div class="single_info_item">
                    <div class="row">


                            <div class="col-xs-12">


                                <?php if (have_posts()): while (have_posts()): the_post();

                                  $gallery = get_post_gallery_images( $post );

                                  $content = strip_shortcode_gallery( get_the_content() );

                                ?>

                                    <h2> <?php the_title(); ?> </h2>

                                <div>
                                    <?= $content; ?>
                                </div>
                                    <div class="service_price">
                                        <?php $price = get_post_meta($post->ID, 'price', true);
                                        echo $price;?>
                                    </div>

                                <div class="owl-carousel">
                                  <?foreach ($gallery as $img_url){?>
                                    <div class="item"><img src="<?=$img_url;?>"></div>

                                    <?}?>

                                </div>

                                <?php endwhile; endif; ?>
                            </div>
                    </div>
                </div>
        </div>

    </div>
<script>
  (function($){
    $(document).ready(function () {

  $('.owl-carousel').owlCarousel({
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
  
  var $dots = $('.owl-dot');

      dotcount = 1;

      $dots.each(function() {
        $( this ).addClass( 'dotnumber' + dotcount);
        $( this ).attr('data-info', dotcount);
        dotcount=dotcount+1;
      });

      slidecount = 1;

      $('.owl-item').not('.cloned').each(function() {
        $( this ).addClass( 'slidenumber' + slidecount);
        slidecount=slidecount+1;
      });

      $dots.each(function() {

        grab = $(this).data('info');

        slidegrab = $('.slidenumber'+ grab +' img').attr('src');

        $(this).css("background-image", "url("+slidegrab+")");

      });

      amount = $dots.length;
      gotowidth = 100/amount;

      $dots.css("width", gotowidth+"%");
      newwidth = $dots.width();
      $dots.css("height", newwidth+"px");


    });
  })(jQuery);
</script>

<?php get_footer(); ?>