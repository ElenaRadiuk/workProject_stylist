<?php
/*
Template Name: pablisiti
*/
?>

<?php get_header(); ?>

<div class="wrapper st_wrapper">

            <?php include ('part/title-page.php'); ?>

            <?php include ('part/service-top-btn.php'); ?>

        <div class="container blog_info">


            <?php $the_query = new WP_Query('cat=12'); ?>
            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="blog_info_item">
                    <div class="row">

                        <?php if ( has_post_thumbnail()) { ?>
                            <div class="col-xs-12 col-sm-5">
                                <div class="img_pablisiti">
                                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="blog_info_header">
                                    <h2> <?php the_title(); ?> </h2>
                                </div>

                                <div> <?php the_excerpt(); ?> </div>
                                <div class="btn_readmore">
                                    <a href="<?php the_permalink(); ?>">
                                    Подробнее...
                                    </a>
                                </div>
                            </div>

                        <?php }  else {?>
                        <div class="col-xs-12">
                            <div class="blog_info_header">
                                <h2> <?php the_title(); ?> </h2>
                            </div>

                            <div> <?php the_content(); ?> </div>

                        </div>
                        <?php } ?>

                    </div>
                </div>
            <?php endwhile; ?>

        </div>

</div>

<?php get_footer(); ?>