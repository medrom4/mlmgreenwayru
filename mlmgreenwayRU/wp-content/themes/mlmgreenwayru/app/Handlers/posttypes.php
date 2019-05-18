<?php

namespace mlmgreenwayRu\Handlers;

class Posttypes
{


	public static function init()
	{
		add_action('init', [self::class, 'benefits_type']);
	}


	public static function benefits_type()
	{

		// Register Custom Post Type Преимущества
		$labels = array(
			'name' => _x('Преимущества', 'Post Type General Name', 'mlmgreenwayru'),
			'singular_name' => _x('Преимущества', 'Post Type Singular Name', 'mlmgreenwayru'),
			'menu_name' => _x('Преимущества', 'Admin Menu text', 'mlmgreenwayru'),
			'name_admin_bar' => _x('Преимущества', 'Add New on Toolbar', 'mlmgreenwayru'),
			'archives' => __('Преимущества Archives', 'mlmgreenwayru'),
			'attributes' => __('Преимущества Attributes', 'mlmgreenwayru'),
			'parent_item_colon' => __('Родительское преимущество:', 'mlmgreenwayru'),
			'all_items' => __('Все Преимущества', 'mlmgreenwayru'),
			'add_new_item' => __('Добавить новое преимущество', 'mlmgreenwayru'),
			'add_new' => __('Добавить новое', 'mlmgreenwayru'),
			'new_item' => __('Новое', 'mlmgreenwayru'),
			'edit_item' => __('Редактировать преимущество', 'mlmgreenwayru'),
			'update_item' => __('Обновить преимущество', 'mlmgreenwayru'),
			'view_item' => __('Посмотреть преимущество', 'mlmgreenwayru'),
			'view_items' => __(' Посмотреть', 'mlmgreenwayru'),
			'search_items' => __('Поиск', 'mlmgreenwayru'),
			'not_found' => __('Не найдено', 'mlmgreenwayru'),
			'not_found_in_trash' => __('Корзина пуста', 'mlmgreenwayru'),
			'items_list' => __('Список преимуществ', 'mlmgreenwayru'),
			'items_list_navigation' => __('Навигация по списку', 'mlmgreenwayru'),
			'filter_items_list' => __('Фильтр', 'mlmgreenwayru'),
		);
		$args = array(
			'label' => __('Преимущества', 'mlmgreenwayru'),
			'description' => __('', 'mlmgreenwayru'),
			'labels' => $labels,
			'menu_icon' => 'dashicons-admin-post',
			'supports' => array('title', 'editor'),
			'taxonomies' => array(),
			'public' => false,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 5,
			'show_in_admin_bar' => true,
			'show_in_nav_menus' => true,
			'can_export' => true,
			'has_archive' => false,
			'hierarchical' => false,
			'exclude_from_search' => false,
			'show_in_rest' => true,
			'publicly_queryable' => false,
			'capability_type' => 'post',
		);
		register_post_type('benefits', $args);
	}
}
