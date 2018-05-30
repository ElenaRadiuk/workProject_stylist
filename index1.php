<?php
/**
 * The main template file
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="container-fluid">
        <div class="row">
		<main id="main" class="site-main" role="main">

            <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow( "home_slider", "" ); } ?>
		</main>
        </div>
	</div>


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
                 <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>

                     <h2><?php the_title(); ?></h2>
                     <?php the_post_thumbnail('full', array('class' => 'img-responsive center-block')); ?>



                     <div class="gift_sertif_btn center-block">

                         <div class="btn-4"><a href="#"> Заказать подарочный сертификат</a> </div>


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
                    <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>


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

<?php get_footer(); ?>
