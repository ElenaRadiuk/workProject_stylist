<?php
/*
Template Name: kontakty
*/
?>

<?php get_header(); ?>

<div class="wrapper st_wrapper">

            <?php include ('part/title-page.php'); ?>

            <?php include ('part/service-top-btn.php'); ?>

        <div class="container contact_info">
            <div class="row">
            <?php $the_query = new WP_Query('p=50'); ?>
            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-xs-12 col-sm-6">

                        <?php the_post_thumbnail('full', array('class' => 'img-responsive center-block')); ?>

                    </div>

                    <div class="col-xs-12 col-sm-6">

                        <div class="contact_text"> <?php the_content(); ?> </div>

                    </div>
            <?php endwhile; ?>
            </div>
        </div>

</div>

<?php get_footer(); ?>