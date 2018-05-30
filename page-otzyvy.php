<?php
/*
Template Name: otzyvy
*/
?>

<?php get_header(); ?>

<div class="wrapper st_wrapper">

            <?php include ('part/title-page.php'); ?>

            <?php include ('part/service-top-btn.php'); ?>

        <div class="container otzyvy_info">


            <?php $the_query = new WP_Query('cat=5'); ?>
            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="otzyvy_info_item">
                    <div class="row">

                    <div class="col-xs-12">

                        <div class="img_round">
                            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                        </div>

                        <h2> <?php the_title(); ?> </h2>

                        <div> <?php the_content(); ?> </div>

                    </div>
                </div>
            </div>
            <?php endwhile; ?>

        </div>

</div>

<?php get_footer(); ?>