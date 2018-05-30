<?php get_header(); ?>

    <div class="wrapper st_wrapper">

        <?php include ('part/title-page.php'); ?>

        <?php include ('part/service-top-btn.php'); ?>

        <div class="container single_info">

                <div class="blog_info_item">
                    <div class="row">


                            <div class="col-xs-12">
                                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                                    <?php the_content(); ?>
                                <?php endwhile; endif; ?>
                            </div>
                    </div>
                </div>
        </div>

    </div>


<?php get_footer(); ?>