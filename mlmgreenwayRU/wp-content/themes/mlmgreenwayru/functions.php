<?php
if (!defined('ABSPATH')) {
	die();
}

add_action('after_setup_theme', 'theme_setup');
add_action('wp_print_styles', 'add_my_stylesheet');
add_action('wp_print_styles', 'add_my_scripts');

if (!function_exists('mlmgreenwayru_setup')) :
	function theme_setup()
	{
		require_once get_template_directory() . '/vendor/autoload.php';

		load_theme_textdomain('mlmgreenwayru', get_template_directory() . '/languages');


		add_theme_support('post-thumbnails');

		add_image_size('360', 360, 260);
		add_image_size('759', 759, 380);
		add_image_size('377', 377, 380);

		register_nav_menus(array(
			'menu-menu' => __('Главное меню', 'mlmgreenwayru'),
			'footer-menu' => __('Меню в подвале', 'mlmgreenwayru'),
		));

		function add_my_stylesheet()
		{
			wp_enqueue_style('style', get_stylesheet_uri());
			wp_enqueue_style('raznoe1', get_template_directory_uri() . '/css/layout.min.css');
			wp_enqueue_style('raznoe2', get_template_directory_uri() . '/css/layout-rtl.min.css');
			wp_enqueue_style('raznoe3', get_template_directory_uri() . '/css/layout-rtl.css');
			wp_enqueue_style('raznoe4', get_template_directory_uri() . '/css/layout.css');
			wp_enqueue_style('raznoe5', get_template_directory_uri() . '/vendor/swiper/css/swiper.min.css');
			wp_enqueue_style('raznoe6', get_template_directory_uri() . '/css/animate.css');
			wp_enqueue_style('raznoe7', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
			wp_enqueue_style('raznoe8', get_template_directory_uri() . '/vendor/simple-line-icons/simple-line-icons.min.css');
		}

		function add_my_scripts()
		{
			wp_deregister_script('jquery');
			wp_register_script('jquery', get_template_directory_uri() . '/vendor/jquery.min.js');
			wp_enqueue_script('jquery');

			wp_enqueue_script('migrate', get_template_directory_uri() . '/vendor/jquery-migrate.min.js', array(), '20151215', true);
			wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), '20151215', true);
			wp_enqueue_script('easing', get_template_directory_uri() . '/vendor/jquery.easing.js', array(), '20151215', true);
			wp_enqueue_script('back-to-top', get_template_directory_uri() . '/vendor/jquery.back-to-top.js', array(), '20151215', true);
			wp_enqueue_script('smooth', get_template_directory_uri() . '/vendor/jquery.smooth-scroll.js', array(), '20151215', true);
			wp_enqueue_script('wow', get_template_directory_uri() . '/vendor/jquery.wow.min.js', array(), '20151215', true);
			wp_enqueue_script('swiper', get_template_directory_uri() . '/vendor/swiper/js/swiper.jquery.min.js', array(), '20151215', true);
			wp_enqueue_script('pkgd', get_template_directory_uri() . '/vendor/masonry/jquery.masonry.pkgd.min.js', array(), '20151215', true);
			wp_enqueue_script('loaded', get_template_directory_uri() . '/vendor/masonry/imagesloaded.pkgd.min.js', array(), '20151215', true);
			wp_enqueue_script('layout', get_template_directory_uri() . '/js/layout.min.js', array(), '20151215', true);
			wp_enqueue_script('wow-min', get_template_directory_uri() . '/js/components/wow.min.js', array(), '20151215', true);
			wp_enqueue_script('swiper-min', get_template_directory_uri() . '/js/components/swiper.min.js', array(), '20151215', true);
			wp_enqueue_script('masonry-min', get_template_directory_uri() . '/js/components/masonry.min.js', array(), '20151215', true);
		}
	}
endif;
