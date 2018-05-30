<div class="footer">
    <div class="container">
        <div class="row">
            <div class="bottom-social  col-md-4">
                <ul>
                    <li class="fb"><a href="https://www.facebook.com/KathrinPereverzeva" target="_blank"></a> </li>
                    <li class="youtube"><a href="https://www.youtube.com/channel/UCeyzQ99UJ2UHYZPMRkrUbIw" target="_blank"></a></li>
                    <li class="inst"><a href="https://instagram.com/katya.style/" target="_blank"></a></li>
                </ul>
            </div>
            <div class="footer-menu col-md-8">
                    <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                <? wp_nav_menu(array('theme_location' => 'footerMenu', 'menu' => 'footerMenu', 'menu_class' => 'nav navbar-nav navbar-right footer-menu', 'container' => 'ul')); ?>
                            </div>
                    </nav>
            </div>

                <div class="ask_question  col-md-4">
                    <img src="<?php bloginfo('template_url'); ?>/img/ask_question.png"/>
                    <p><a href="#" data-toggle="modal" data-target="#myModal">Задать вопрос стилисту</a></p>
                </div>
                <div class="bottom  col-md-4">

                    <div class="mail_address">
                        <a href="mailto:katya.image@gmail.com"><span class="fa fa-envelope"></span> katya.image@gmail.com</a>
                    </div>
                </div>
                <div class="bottom  col-md-4">

                    <div class="signature">
                        <p>&copy; Имидж-студия Екатерины Переверзевой 2018</p>
                    </div>
                </div>
        </div>
    </div>
</div>


<div id="myModal" class="modal fade contactform_st">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>
                <h4 class="modal-title">Задать вопрос стилисту</h4>
            </div>
<!--            <div class="modal-body">--><?php //echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?><!--</div>-->
            <div class="modal-body"><?php echo do_shortcode('[contact-form-7 id="15" title="Contact form Ask"]');?></div>
<!--            <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button></div>-->
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>