<?php
add_action('wp_enqueue_scripts', 'autoservice_styles');
add_action('wp_enqueue_scripts', 'autoservice_scripts');

function autoservice_styles() {
    wp_enqueue_style('autoservice-style', get_stylesheet_uri() );
    // wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/layout.css' );
    wp_enqueue_style('fonts-style', 'http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700');
    wp_enqueue_style('vendor-style', get_template_directory_uri() . '/assets/vendor/simple-line-icons/css/simple-line-icons.css');
    wp_enqueue_style('vendor-bootstrap-style', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/vendor/swiper/css/swiper.min.css');
    wp_enqueue_style('popup-style', get_template_directory_uri() . '/assets/vendor/magnific-popup/magnific-popup.css');
    wp_enqueue_style('icon-style', 'favicon.ico');
};
function autoservice_scripts() {
    wp_enqueue_script('autoservice-scripts', get_template_directory_uri() . '/assets/js/layout.js', array(), null, true);
    wp_enqueue_script('jquery-scripts', get_template_directory_uri() . '/assets/vendor/jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('migrate-scripts', get_template_directory_uri() . '/assets/vendor/jquery-migrate.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-scripts', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('easing-scripts', get_template_directory_uri() . '/assets/vendor/jquery.easing.js', array('jquery'), null, true);
    wp_enqueue_script('top-scripts', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('scroll-scripts', get_template_directory_uri() . '/assets/vendor/jquery.smooth-scroll.js', array('jquery'), null, true);
    wp_enqueue_script('wow-scripts', get_template_directory_uri() . '/assets/vendor/jquery.wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('swiper-scripts', get_template_directory_uri() . '/assets/vendor/swiper/js/swiper.jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-scripts', get_template_directory_uri() . '/assets/vendor/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('masonry-scripts', get_template_directory_uri() . '/assets/vendor/masonry/jquery.masonry.pkgd.min.js', array('jquery'), null, true);
    wp_enqueue_script('imagesloaded-scripts', get_template_directory_uri() . '/assets/vendor/masonry/imagesloaded.pkgd.min.js', array('jquery'), null, true);
    wp_enqueue_script('maps-scripts', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap', array(), null, true);
    wp_enqueue_script('wowmin-scripts', get_template_directory_uri() . '/assets/js/layout.min.js', array('jquery'), null, true);
    wp_enqueue_script('swipermin-scripts', get_template_directory_uri() . '/assets/js/components/swiper.min.js', array('jquery'), null, true);
    wp_enqueue_script('popupmin-scripts', get_template_directory_uri() . '/assets/js/components/maginific-popup.min.j', array('jquery'), null, true);
    wp_enqueue_script('masonrymin-scripts', get_template_directory_uri() . '/assets/js/components/masonry.min.js', array('jquery'), null, true);
    wp_enqueue_script('gmap-scripts', get_template_directory_uri() . '/assets/js/components/gmap.min.js', array('jquery'), null, true);
}

add_theme_support('custom-logo');
?>