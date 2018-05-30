<?php
/*
Template Name: uslugi
*/
?>

<?php get_header(); ?>

<div class="wrapper st_wrapper">

            <?php include ('part/title-page.php'); ?>

            <?php include ('part/service-top-btn.php'); ?>

        <div class="container services_info">


            <?php $the_query = new WP_Query('cat=13'); ?>
            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="services_info_item">
                    <div class="row">

                    <div class="col-xs-12">

                        <div class="img_round_services <?php $shortcode = get_post_meta($post->ID, 'class_img', true);
                        echo do_shortcode("$shortcode");?>">

                        </div>

                        <h2> <?php the_title(); ?> </h2>

                        <div>
<!--                            --><?php //the_excerpt(); ?>
                            <?php $parts = get_extended( $post->post_content );
                            echo $parts['main']; ?>
                        </div>
                        <div class="btn_readmore">
                            <a href="<?php the_permalink(); ?>">
                                Подробнее...
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <?php endwhile; ?>

        </div>

</div>

<?php get_footer(); ?>