<?php
setlocale(LC_ALL, 'ru_RU');


//Clear header
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

show_admin_bar(false);


//Theme setup

function theme_setup()
{
    add_theme_support('title_tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

}

add_action('after_setup_theme', 'theme_setup');

//Enqueue scripts

function theme_scripts()
{
    wp_deregister_script('wp-embed');
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
    wp_enqueue_script('lib', 'https://unpkg.com/leaflet@1.0.1/dist/leaflet.js', null, '', true);
    wp_enqueue_script('app', get_theme_file_uri('dist/app.js'), null, '', true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');


// Enqueue styles
function theme_styles()
{
    wp_enqueue_style('theme-app', get_theme_file_uri('dist/app.css'), null, null);
}

add_action('wp_enqueue_scripts', 'theme_styles');


// Post types

require_once('post-types/reviews.php');
require_once('post-types/team.php');
require_once('post-types/cars.php');


//Other

function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        ceil($length / strlen($x)))), 1, $length);
}

// Contact list

function theme_customize_register($wp_customize)
{
    $wp_customize->add_section('contacts', [
        'title' => 'Контакты',
        'priority' => 30,
    ]);
//        $wp_customize->add_setting('facebook');
//        $wp_customize->add_control('facebook', [
//            'section' => 'contacts',
//            'label' => 'Facebook',
//            'type' => 'text',
//        ]);
//        $wp_customize->add_setting('instagram');
//        $wp_customize->add_control('instagram', [
//            'section' => 'contacts',
//            'label' => 'Instagram',
//            'type' => 'text',
//        ]);
//        $wp_customize->add_setting('youtube');
//        $wp_customize->add_control('youtube', [
//            'section' => 'contacts',
//            'label' => 'YouTube',
//            'type' => 'text',
//        ]);

    $wp_customize->add_setting('email');
    $wp_customize->add_control('email', [
        'section' => 'contacts',
        'label' => 'E-mail',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('address');
    $wp_customize->add_control('address', [
        'section' => 'contacts',
        'label' => 'Адресс',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('address_link');
    $wp_customize->add_control('address_link', [
        'section' => 'contacts',
        'label' => 'Адресс ссылка',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('address_long');
    $wp_customize->add_control('address_long', [
        'section' => 'contacts',
        'label' => 'Долгота',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('address_lat');
    $wp_customize->add_control('address_lat', [
        'section' => 'contacts',
        'label' => 'Широта',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('address2');
    $wp_customize->add_control('address2', [
        'section' => 'contacts',
        'label' => 'Адресс 2',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('address_link2');
    $wp_customize->add_control('address_link2', [
        'section' => 'contacts',
        'label' => 'Адресс ссылка 2',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('address_long2');
    $wp_customize->add_control('address_long2', [
        'section' => 'contacts',
        'label' => 'Долгота2',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('address_lat2');
    $wp_customize->add_control('address_lat2', [
        'section' => 'contacts',
        'label' => 'Широта2',
        'type' => 'text',
    ]);


    $wp_customize->add_setting('phone');
    $wp_customize->add_control('phone', [
        'section' => 'contacts',
        'label' => 'Телефон',
        'type' => 'text',
    ]);
}

add_action('customize_register', 'theme_customize_register');

// DD

function dd($args)
{
    echo '<pre>';
    var_dump($args);
    echo '</pre>';

    die();
}

// Video attr
function get_video_id($url)
{
    if (!$url) {
        return null;
    }

    preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/",
        $url, $matches);
    return $matches[1];
}

function getVideoImageLinkAttribute($url)
{
    return 'https://img.youtube.com/vi/' . get_video_id($url) . '/maxresdefault.jpg';
}

function getVideoLinkAttribute($url)
{
    return 'https://www.youtube.com/embed/' . get_video_id($url);
}