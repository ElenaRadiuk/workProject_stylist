<?
function enqueue_styles() {

    wp_register_style('font-style', get_template_directory_uri() . '/fonts/HelveticaNeue-Light.otf');
    wp_enqueue_style('HelveticaNeue');
//    wp_register_style('font-style', get_template_directory_uri() . '/fonts/FuturaBookNormalRegular.ttf');
//    wp_enqueue_style('FuturaBook');
    wp_register_style('font-style', get_template_directory_uri() . '/fonts/BodoniItalic.ttf');
    wp_enqueue_style('Bodoni');
    wp_register_style('font-style', get_template_directory_uri() . '/fonts/futurabook.otf');
    wp_enqueue_style('FuturaBook');


    wp_register_style('bootstrapstyle1', 'https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrapstyle1');
    wp_register_style('bootstrapstyle2', 'https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css');
    wp_enqueue_style( 'bootstrapstyle2');

    wp_register_style('fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'fontawesome');

    wp_register_style('owl', get_template_directory_uri() . '/owl/dist/assets/owl.carousel.min.css');
    wp_enqueue_style( 'owl');

    wp_register_style('owltheme', get_template_directory_uri() . '/owl/dist/assets/owl.theme.default.min.css');
    wp_enqueue_style( 'owltheme');

  wp_enqueue_style( 'style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'enqueue_styles');


add_theme_support( 'post-thumbnails' );


register_nav_menu( 'topMenu', 'topMenu' );
register_nav_menu( 'footerMenu', 'footerMenu' );

register_nav_menu( 'topMenu', 'services_menu' );



function wpb1_adding_scripts() {
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js','','2.2', false);
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', 'https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js', '','3.3.2', false);
    wp_enqueue_script('bootstrap');
    wp_register_script('custom',  get_template_directory_uri().'/js/script.js', '','', false);
    wp_enqueue_script('custom');

//    wp_register_script('owl', get_template_directory_uri() . '/owl/dist/owl.carousel.min.js',['jquery'],'4.9.5', true);
    wp_register_script('owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js', '','2.3.3',true);
    wp_enqueue_script('owl');


//    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js',['jquery'],'1.1', true);
//    wp_enqueue_script('custom');

}

add_action( 'wp_enqueue_scripts', 'wpb1_adding_scripts' );



function add_responsive_class($content){

    $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
    $document = new DOMDocument();
    libxml_use_internal_errors(true);
    if($content) {
        $document->loadHTML(utf8_decode($content));
    }
    $imgs = $document->getElementsByTagName('img');
    foreach ($imgs as $img) {
//    $img->setAttribute('class','img-responsive');
        $existing_class = $img->getAttribute('class');
        $img->setAttribute('class', "img-responsive center-block $existing_class");
    }

    $html = $document->saveHTML();
    return $html;
}
add_filter('the_content', 'add_responsive_class');

function add_posttype_slug_template( $single_template ){

    if( in_category( 'pablisiti' ) ){
        $single_template = locate_template( 'single-pablisiti.php' );
    }
    if( in_category( 'services' ) ){
        $single_template = locate_template( 'single-services.php' );
    }
    if( in_category( 'portfolio' ) ){
        $single_template = locate_template( 'single-portfolio.php' );
    }

    return $single_template;
}

add_filter( 'single_template', 'add_posttype_slug_template' );


add_filter('the_excerpt', 'do_shortcode', 11);
add_filter('the_content', 'do_shortcode', 11);


add_filter('show_admin_bar', '__return_false'); // отключить

add_image_size( 'for_circle', 330, 330, true );


function strip_shortcode_gallery( $content ) {
  preg_match_all( '/' . get_shortcode_regex() . '/s', $content, $matches, PREG_SET_ORDER );

  if ( ! empty( $matches ) ) {
    foreach ( $matches as $shortcode ) {
      if ( 'gallery' === $shortcode[2] ) {
        $pos = strpos( $content, $shortcode[0] );
        if( false !== $pos ) {
          return substr_replace( $content, '', $pos, strlen( $shortcode[0] ) );
        }
      }
    }
  }

  return $content;
}

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  return $first_img;
}

function remove_first_image ($content) {
  if (!is_page() && !is_feed() && !is_home()){
    $content = preg_replace("/<img[^>]+\>/i", "", $content, 1);
  } return $content;
}