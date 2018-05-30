<?php
/*
Template Name: zakaz-uslugi
*/
?>

<?php get_header(); ?>

<div class="wrapper st_wrapper">

            <?php include ('part/title-page.php'); ?>


    <div class="container wrapper_form">
        <ul  class="nav nav-pills">
            <li class="active">
                <a  href="#1a" data-toggle="tab" id="order">Заказать услугу</a>
            </li>
            <li><a href="#2a" data-toggle="tab" id="gift">Подарить услугу</a>
            </li>
        </ul>

        <div class="tab-content clearfix">
            <div class="tab-pane fade in active" id="1a">
<!--                --><?php //echo do_shortcode('[contact-form-7 id="208" title="Contact form Order"]'); ?>
                <?php $the_query = new WP_Query('p=217'); ?>
                <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php if( has_post_thumbnail() ) {
                    the_post_thumbnail('full', array('class' => 'img-responsive center-block'));
                } ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
            <div class="tab-pane fade" id="2a">
                <div>
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/img/sertif_new.jpg" alt="sertificat" class="img-responsive center-block">-->
                    <?php $the_query = new WP_Query('p=212'); ?>
                    <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php if( has_post_thumbnail() ) {
                        the_post_thumbnail('full', array('class' => 'img-responsive center-block'));
                } ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
<!--                --><?php //echo do_shortcode('[contact-form-7 id="211" title="Contact form Gift"]'); ?>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>