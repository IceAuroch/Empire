<?php

function teachers_post_type()
{
    $labels = [
        'name' => _x('Команда', 'Post Type General Name', 'empire'),
        'singular_name' => _x('Профессионал', 'Post Type Singular Name', 'empire'),
        'menu_name' => __('Профессионалы', 'empire'),
        'name_admin_bar' => __('Профессионалы', 'empire'),
        'all_items' => __('Все профессионалы', 'empire'),
        'add_new_item' => __('Добавить профессионала', 'empire'),
        'add_new' => __('Добавить профессионала', 'empire'),
        'new_item' => __('Новый  профессионала', 'empire'),
        'edit_item' => __('Редактировать профессионала', 'empire'),
        'update_item' => __('Обновить профессионала', 'empire'),
        'view_item' => __('Просмотреть', 'empire'),
        'view_items' => __('Просмотреть все', 'empire'),
        'search_items' => __('Найти профессионала', 'empire'),
    ];
    $args = [
        'label' => __('Профессионал', 'empire'),
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
    register_post_type('teams', $args);
}
add_action('init', 'teachers_post_type', 0);