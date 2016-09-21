<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
	<link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet"> 
</head>

<body <?php body_class(); ?>>
 <!--preloader-->
    <div class="preloader">
        <div class="cssload-thecube">
            <div class="cssload-cube cssload-c1"></div>
            <div class="cssload-cube cssload-c2"></div>
            <div class="cssload-cube cssload-c4"></div>
            <div class="cssload-cube cssload-c3"></div>
        </div>
    </div>
    <!--preloader-->
   
    <div class="main">
        <header class="header">
            <div class="container">
                <div class="header-inner">
                    <div class="top-social pull-left">
                        <ul>
                            <li><a href="<?php echo get_option_tree('twitter');?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option_tree('facebook');?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option_tree('linkedin');?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option_tree('instagram');?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option_tree('envelope');?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="wc-login pull-right">
                        <ul>
                            <li><a href="#"><?php echo get_option_tree('webcenter_login_text');?><i class="icons fa fa-lock1" aria-hidden="true"><span class="icons"></span></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
		
        <nav id="nav" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <a class="navbar-brand logo" href="<?php echo site_url();?>"><img src="<?php echo get_option_tree('logo');?>" alt="Logo" title=""></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!--START CODE USE FOR GETTING FOOTER MENU-->
							<?php

								$defaults = array(
								'theme_location'  => '',
								'menu'            => 'Header_menu',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '%3$s',
								'depth'           => 0,
								'walker'          => ''
								);

								wp_nav_menu( $defaults );
							?>
						<!--END OF CODE USE FOR GETTING FOOTER MENU-->
                    </ul>
					
					<!---START SEARCH -->
                    <div class="search-main">
                        <div class="search-icons"> <a class="search-btn active" href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a> <a class="search-close-btn" href="javascript:void(0)"><i class="fa fa-times" aria-hidden="true"></i></a> </div>
                        <div class="search-field">
                            <div class="search-field-inner">
							      
								<form role="search" method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<input type="text" class="form-control" placeholder="Type what you're looking for and press Enter to search" name="s" id="s" value="<?php echo get_search_query(); ?>"><!--<button type="submit" class="btn"><i class="fa fa-search"></i></button>-->
								</form>
							</div>
                        </div>
                    </div>
					<!--END OF SEARCH--->
					
                </div>
            </div>
        </nav>
