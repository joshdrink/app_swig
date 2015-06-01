<?php

/* Template Name: Landing */

    /* Landing Stylesheet */
    add_action('wp_enqueue_scripts', 'add_stylesheets_landing');
    function add_stylesheets_landing() {
        wp_enqueue_style('landing-css', get_bloginfo('stylesheet_directory') . '/assets/css/landing.css', array());
    }

    $smarty = wp_smarty();

    $posts = array();
    $posts_query = new WP_Query(array(
        'posts_per_page'    => -1,
        'post_type'         => 'post'
    ));

    while($posts_query->have_posts()) {
        $posts_query->the_post();
        $posts_query->post->url = get_permalink();
        $posts_query->post->post_excerpt = get_the_excerpt();
        $posts_query->post->display_date = date('l, F j, Y');
        $posts[] = $posts_query->post;
    }

    $smarty->assign('blog_posts', $posts);

    get_header();

    $smarty->display('page-landing.tpl');

    get_footer();
