<?php

/* Template Name: Article */

	/* Article Stylesheet */
	add_action('wp_enqueue_scripts', 'add_stylesheets_article');
	function add_stylesheets_article() {
		wp_enqueue_style('article-css', get_bloginfo('stylesheet_directory') . '/assets/css/article.css', array());
	}

	$smarty = wp_smarty();

	$smarty->assign('date', get_the_date('l, F j, Y'));

    $posts = array();
    $posts_query = new WP_Query(array(
        'posts_per_page'    => -1,
        'post_type'         => 'post'
    ));

    while($posts_query->have_posts()) {
        $posts_query->the_post();
        $posts_query->post->url = get_permalink();
        $posts_query->post->post_excerpt = get_the_excerpt();
        $posts_query->post->display_date = get_the_date('l, F j, Y');
        $posts[] = $posts_query->post;
    }

    $smarty->assign('blog_posts', $posts);

	get_header();

	$smarty->display('page-article.tpl');

	get_footer();
