<?php

add_action( 'init', 'gallery_register' );

function gallery_register() {
	$labels = array(
		'name'               => _x( 'Галерея', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Елемент галереї', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Галерея', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Галерея', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Додати новий елемент галереї', 'team member', 'understrap' ),
		'add_new_item'       => __( 'Додати новий елемент галереї', 'understrap' ),
		'new_item'           => __( 'Новий елемент галереї', 'understrap' ),
		'edit_item'          => __( 'Редагувати елемент галереї', 'understrap' ),
		'view_item'          => __( 'Переглянути галерею', 'understrap' ),
		'all_items'          => __( 'Вся галерея', 'understrap' ),
		'search_items'       => __( 'Знайти елементи галереї', 'understrap' ),
		'parent_item_colon'  => __( 'Схожі елементи галереї:', 'understrap' ),
		'not_found'          => __( 'Не знайдено жодного елементу галереї', 'understrap' ),
		'not_found_in_trash' => __( 'Не знайдено жодного елементу галереї', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Це список елементів галереї', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gallery' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'editor', 'comments', 'revisions')
	);

	register_post_type( 'Gallery', $args );
}

add_action( 'init', 'video_gallery_register' );

function video_gallery_register() {
	$video = array(
		'name'               => _x( 'Відео-галерея', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Елемент відео-галереї', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Відео-галерея', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Відео-галерея', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Додати новий елемент відео-галереї', 'team member', 'understrap' ),
		'add_new_item'       => __( 'Додати новий елемент відео-галереї', 'understrap' ),
		'new_item'           => __( 'Новий елемент відео-галереї', 'understrap' ),
		'edit_item'          => __( 'Редагувати елемент відео-галереї', 'understrap' ),
		'view_item'          => __( 'Переглянути відео-галерею', 'understrap' ),
		'all_items'          => __( 'Вся відео-галерея', 'understrap' ),
		'search_items'       => __( 'Знайти елементи відео-галереї', 'understrap' ),
		'parent_item_colon'  => __( 'Схожі елементи відео-галереї:', 'understrap' ),
		'not_found'          => __( 'Не знайдено жодного елементу відео-галереї', 'understrap' ),
		'not_found_in_trash' => __( 'Не знайдено жодного елементу відео-галереї', 'understrap' )
	);

	$vargs = array(
		'labels'             => $video,
		'description'        => __( 'Це список елементів галереї', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'video-gallery' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail')
	);

	register_post_type( 'video-gallery', $vargs );
}