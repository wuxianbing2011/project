<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chuangye
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo('name'); echo " - "; bloginfo('description'); ?></title>
	<meta id="daxiao" name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<!--IOS中Safari允许全屏浏览：-->
	<meta content="black" name="apple-mobile-web-app-status-bar-style">
	<!--IOS中Safari顶端状态条样式：-->
	<meta content="telephone=no" name="format-detection">
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.fullPage.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/b_js.js"></script>
	<link href="<?php bloginfo('template_url'); ?>/css/css.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/b_css.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="b_nav">
		<?php // wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'clearfix', 'menu_class' => 'clearfix' , '$menu_id' => 'b_nav_' , 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>') ); ?>
		<ul class="clearfix">
			<li class="b_nav_1"><a href="">首页</a></li>
			<li class="b_nav_2">
				<a href="">故事</a>
				<div>
					<p class="b_nav2_checked"><a href="">年入20万</a></p>
					<p class=""><a href="">代卖发家</a></p>
					<p><a href="">网店致富</a></p>
				</div>
			</li>
			<li class="b_nav_3"><a href="">视频</a></li>
			<li class="b_nav_4"><a href="">购买</a></li>
		</ul>
	</div>