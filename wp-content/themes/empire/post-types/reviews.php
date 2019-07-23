<?php

function reviews_post_type()
{
    $labels = [
        'name' => _x('Отзывы', 'Post Type General Name', 'empire'),
        'singular_name' => _x('Отзыв', 'Post Type Singular Name', 'empire'),
        'menu_name' => __('Отзывы', 'empire'),
        'name_admin_bar' => __('Отзывы', 'empire'),
        'all_items' => __('Все отзывы', 'empire'),
        'add_new_item' => __('Добавить новый отзыв', 'empire'),
        'add_new' => __('Добавить отзыв', 'empire'),
        'new_item' => __('Новый отзыв', 'empire'),
        'edit_item' => __('Редактировать отзыв', 'empire'),
        'update_item' => __('Обновить отзыв', 'empire'),
        'view_item' => __('Просмотреть', 'empire'),
        'view_items' => __('Просмотреть все', 'empire'),
        'search_items' => __('Найти отзыв', 'empire'),
    ];
    $args = [
        'label' => __('Отзыв', 'empire'),
        'labels' => $labels,
        'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => [],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'menu_icon' => 'dashicons-clipboard',
    ];
    register_post_type('reviews', $args);
}
add_action('init', 'reviews_post_type', 0);