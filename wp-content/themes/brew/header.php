<?php $smarty = wp_smarty(); ?>
<!DOCTYPE html>
<!--[if IE 8]>
	<html class='no-js lt-ie9'>
<![endif]-->

<!--[if IE 9]>
	<html class='no-js lt-ie10'>
<![endif]-->

<!--[if gt IE 9]><!-->
	<html class='no-js'>
<!--<![endif]-->

<head>

	<!-- Site Meta Data ==================================================== -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Digital Dose of Design.</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons ========================================================== -->
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Google Fonts ====================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic|Roboto:400,900,100,300,700,500|Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

	<!-- wp_head =========================================================== -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php

	$smarty->display('layout/navigation.tpl');
