<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>



</head>
<body <?php body_class(); ?>>


<?php if ( is_front_page() ) {?>


<div class="top-menu-main">
        <div class="container">
            <div class="row">
                <div class="left col-xs-12 col-sm-4 hidden-xs">
                    <div class="top-social">
                        <ul>
                            <li class="fb"><a href="https://www.facebook.com/KathrinPereverzeva" target="_blank"><span class="fa fa-facebook"></span></a> </li>
                            <li class="youtube"><a href="https://www.youtube.com/channel/UCeyzQ99UJ2UHYZPMRkrUbIw" target="_blank"><span class="fa fa-youtube-square"></span></a></li>
                            <li class="inst"><a href="https://instagram.com/katya.style/" target="_blank"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="contacts col-xs-12 col-sm-8 hidden-xs">
                    <p class="phone"><a href="tel:+380977870202"><span class="fa fa-mobile-phone"></span> (097) 787 02 02</a>, Харьков, Стамбул, Милан</p>
                </div>
                <div class="contacts contact_mob col-xs-12 visible-xs text-center">
                    <p class="phone"><a href="tel:+380977870202"><span class="fa fa-mobile-phone"></span> (097) 787 02 02</a></p>
                    <p class="phone"><a href="tel:+380663369269"><span class="fa fa-mobile-phone"></span> (066) 336 92 69</a></p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <header class="header_menu">


                        <nav class="navbar navbar-default">
                            <div class="container">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand visible-xs" href="/new"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="" class="img-responsive"></a>
                                </div>

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <? wp_nav_menu(array('theme_location' => 'topMenu', 'menu' => 'topMenu', 'menu_class' => 'nav navbar-nav mainmenu', 'container' => 'ul')); ?>
                                </div>
                            </div>
                        </nav>
                </header>
            </div>
        </div>
    <div class="logo_container hidden-xs">
        <div class="logo">
            <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Екатерина Переверзева" >
        </div>
    </div>
</div>
<?php } else { ?>
<div class="top-menu-main-page">
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="left col-xs-12 col-md-4">-->
<!--                <div class="top-social">-->
<!--                    <ul>-->
<!--                        <li class="fb"><a href="https://www.facebook.com/KathrinPereverzeva" target="_blank"><span class="fa fa-facebook"></span></a> </li>-->
<!--                        <li class="youtube"><a href="https://www.youtube.com/channel/UCeyzQ99UJ2UHYZPMRkrUbIw" target="_blank"><span class="fa fa-youtube-square"></span></a></li>-->
<!--                        <li class="inst"><a href="https://instagram.com/katya.style/" target="_blank"><span class="fa fa-instagram"></span></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="contacts col-xs-12 col-md-8">-->
<!--                <p class="phone"><a href="tel:+380977870202"><span class="fa fa-mobile-phone"></span> (097) 787 02 02</a>, Харьков, Стамбул, Милан</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
            <header class="header_menu">


                <nav class="navbar navbar-inner navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/index.php"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="top-social hidden-xs">
                            <ul>
                                <li class="fb"><a href="https://www.facebook.com/KathrinPereverzeva" target="_blank"><span class="fa fa-facebook"></span></a> </li>
                                <li class="youtube"><a href="https://www.youtube.com/channel/UCeyzQ99UJ2UHYZPMRkrUbIw" target="_blank"><span class="fa fa-youtube-square"></span></a></li>
                                <li class="inst"><a href="https://instagram.com/katya.style/" target="_blank"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                        <div class="contacts hidden-xs">
                            <p class="phone"><a href="tel:+380977870202"><span class="fa fa-mobile-phone"></span> (097) 787 02 02</a>, Харьков, Стамбул, Милан</p>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <? wp_nav_menu(array('theme_location' => 'topMenu', 'menu' => 'topMenu', 'menu_class' => 'nav navbar-nav mainmenu', 'container' => 'ul')); ?>
                        </div>
                    </div>
                </nav>
            </header>
<!--        </div>-->
<!--    </div>-->
<!--    <div class="logo_container">-->
<!--        <div class="logo">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/img/logo.png" alt="Екатерина Переверзева" >-->
<!--        </div>-->
<!--    </div>-->
</div>
<?php } ?>