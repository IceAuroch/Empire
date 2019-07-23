<?php
get_header();

$sections = [
    'intro',
    'advantages',
    'pain',
    'response',
    'comparison',
    'sale',
    'reviews',
    'saving',
    'stages',
    'order',
    'teams',
    'contacts',
];

foreach ($sections as $section)
{
    get_template_part('template-parts/' . $section);
}

get_footer();
