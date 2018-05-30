<?php
/*
Template Name: o-stiliste
*/
?>

<?php get_header(); ?>

<div class="wrapper st_wrapper">

            <?php include ('part/title-page.php'); ?>

            <?php include ('part/service-top-btn.php'); ?>

        <div class="container biography_info">
            <div class="row">
            <?php $the_query = new WP_Query('p=85'); ?>
            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="col-xs-12">
                    <h2 class="title_main"> <?php the_title(); ?> </h2>

                        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                    </div>
                <div class="col-xs-12 col-sm-6">
                        <div class="biography_content"> <?php the_content(); ?> </div>
                    </div>
                <?php endwhile; ?>

                <?php $the_query = new WP_Query('p=87'); ?>
                <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-xs-12 col-sm-6">

                        <div class="biography_content"> <?php the_content(); ?> </div>

                    </div>
            <?php endwhile; ?>
            </div>
        </div>

</div>

<?php get_footer(); ?>