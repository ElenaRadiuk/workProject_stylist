<?php
/*
Template Name: partnery
*/
?>

<?php get_header(); ?>

<div class="wrapper st_wrapper">

            <?php include ('part/title-page.php'); ?>

            <?php include ('part/service-top-btn.php'); ?>

        <div class="container partners_info">


            <?php $the_query = new WP_Query('cat=9'); ?>
            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="partners_info_item">
                    <div class="row">

                    <div class="col-xs-12 text-center">

                        <h2> <?php the_title(); ?> </h2>

                    </div>
                    <div class="col-xs-12 center-block">

                        <?php the_post_thumbnail('full', array('class' => 'img-responsive center-block')); ?>

                    </div>

                    <div class="col-xs-12 text-center">

                        <div> <?php the_content(); ?> </div>

                    </div>
                </div>
            </div>
            <?php endwhile; ?>

        </div>

</div>

<?php get_footer(); ?>