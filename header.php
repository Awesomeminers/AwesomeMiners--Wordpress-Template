<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head profile="http://gmpg.org/xfn/11">
 
   <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
   <title><?php wp_title(' - ', true, 'right'); ?> <?php bloginfo('name'); ?></title>
 
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
   <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/blueprint/typography.css" type="text/css" media="screen, projection">
 
   <?php wp_head(); ?>
 
</head>
<body>
 
<div id="wrapper">

	<div id="pattern_top">
		<h2><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h2>
		<h3><?php bloginfo('description'); ?></h3>
	</div>

	   <div id="header">
			<img src="/images/logo.png">
	   </div><!-- header -->

			<div id="menu_bar">

					<div id="nav">
						<li>
							<a href="<?php echo get_option('home'); ?>/" class="on">Blog</a>
						</li>
						<ul>
							<?php wp_list_pages('depth=1&title_li=&sort_column=menu_order'); ?>
						</ul>
					</div> <!-- nav -->

			</div><!-- menu_bar -->