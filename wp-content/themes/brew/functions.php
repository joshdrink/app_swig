<?php

	function wp_smarty(){
		global $wp_smarty;
		if(!$wp_smarty){
			$wp_smarty = smarty_get_instance();
			$stylesheet_directory = get_bloginfo('stylesheet_directory');
			$wp_smarty->assign('stylesheet_directory', $stylesheet_directory);
			global $post;
			setup_postdata($post);
			$original_post = $post;
			$wp_smarty->assign('title', $post->post_title);
			$wp_smarty->assign('content', apply_filters('the_content', get_the_content()));
			$wp_smarty->assign('url', get_permalink($post->ID));
		}
		return $wp_smarty;
	}
	add_action('wp_enqueue_scripts', 'enqueue_stylesheets');
	function enqueue_stylesheets() {
		$stylesheet_directory = get_bloginfo('stylesheet_directory') . '/assets/';
		wp_enqueue_style('normalize-css', $stylesheet_directory . 'bower_components/normalize.css/normalize.css', array());
		wp_enqueue_style('fontawesome-css', $stylesheet_directory . 'bower_components/fontawesome/css/font-awesome.min.css', array());
		wp_enqueue_style('app-css', $stylesheet_directory . 'css/app.css', array());
	}

	add_action('wp_enqueue_scripts', 'enqueue_javascripts');
	function enqueue_javascripts() {
		$javascript_directory = get_bloginfo('stylesheet_directory') . '/assets/';
		wp_enqueue_script('modernizr-js', $javascript_directory . 'bower_components/modernizr/modernizr.js', array());
		wp_enqueue_script('jquery-js', $javascript_directory . 'bower_components/jQuery/dist/jquery.min.js', array());
		wp_enqueue_script('buggyfill-js', $javascript_directory . 'bower_components/viewport-units-buggyfill/viewport-units-buggyfill.js', array());
		wp_enqueue_script('match-media-js', $javascript_directory . 'bower_components/matchMedia/matchMedia.js', array());
		wp_enqueue_script('app-js', $javascript_directory . 'js/app.js', array());
	}

	// Custom Excerpt Length ===================================================
	function custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	// Custom Ellipsis =========================================================
	function new_excerpt_more( $more ) {
		return ' [Read.]';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
