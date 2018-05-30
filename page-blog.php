<?php
/*
Template Name: blog
*/
?>

<?php get_header(); ?>

<div class="wrapper st_wrapper">

            <?php include ('part/title-page.php'); ?>

            <?php include ('part/service-top-btn.php'); ?>

        <div class="container blog_info">


            <?php $the_query = new WP_Query('cat=10'); ?>
            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="blog_info_item">
                    <div class="row">

                    <div class="col-xs-12">

                        <div class="blog_info_header">
                            <h2> <?php the_title(); ?> </h2>
                        </div>

                        <div> <?php the_content(); ?> </div>

                    </div>
                </div>
            </div>
            <?php endwhile; ?>

        </div>

</div>

<?php get_footer(); ?>