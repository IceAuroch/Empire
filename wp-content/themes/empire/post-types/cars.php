<?php

function cars_post_type()
{
    $labels = [
        'name' => _x('Машины', 'Post Type General Name', 'empire'),
        'singular_name' => _x('Машина', 'Post Type Singular Name', 'empire'),
        'menu_name' => __('Машины', 'empire'),
        'name_admin_bar' => __('Машиныы', 'empire'),
        'all_items' => __('Все машиныы', 'empire'),
        'add_new_item' => __('Добавить машину', 'empire'),
        'add_new' => __('Добавить машину', 'empire'),
        'new_item' => __('Новая  машинаа', 'empire'),
        'edit_item' => __('Редактировать машину', 'empire'),
        'update_item' => __('Обновить машину', 'empire'),
        'view_item' => __('Просмотреть', 'empire'),
        'view_items' => __('Просмотреть все', 'empire'),
        'search_items' => __('Найти машину', 'empire'),
    ];
    $args = [
        'label' => __('Машина', 'empire'),
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
        'menu_icon' => 'dashicons-id',
    ];
    register_post_type('cars', $args);
}
add_action('init', 'cars_post_type', 0);