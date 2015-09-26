<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('name');?> | <?php bloginfo('description'); ?> | Seattle, WA</title>
<meta charset="utf-8"/>

<!-- BEGIN META -->
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="keywords" content="taekwondo,tae kwon do,taekgyeon,seattle,hmd,taekwondo in seattle,taekwon, martial arts, martial arts in seattle">
<meta name="author" content="Matt Hartman">
<meta name="viewport" content="width=device-width, maximum-scale=2"/>
<!-- END META -->
	
<!-- BEGIN STYLES -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>  
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/flexslider.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/elastislide.css" />
<link rel="icon" type="image/ico" href="http://hmdseattle.com/images/favicon.ico">
<!-- END STYLES -->

<!--[if ltIE9]>
<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    
<?php wp_head(); ?>

</head>
 <body <?php body_class(); ?>>
 	<header>
 		<div id="top-wrapper">
 			<div id="bizlogo"> <a href="<?php echo home_url();?>"><img class="logo" alt="logo" src="<?php bloginfo( 'template_directory' ) ?>/images/hmdlogo.png" /></a>
 			</div>
 			<div id="bizname">
 				<h1><?php bloginfo('name');?></h1>
 				<h3><?php bloginfo('description');?></h3>
 			</div>
 		</div>

<!-- START NAVIGATION (Main) -->
<?php
$defaults = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => 'nav',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'mainlist',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );
?>        
<!-- END NAVIGATION -->
        
</header>
<!-- ENE HEADER -->

<noscript>
    <style>
        .es-carousel ul{
            display:block;
        }
    </style>
</noscript>
<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
    <div class="rg-image-wrapper">
        {{if itemsCount > 1}}
            <div class="rg-image-nav">
                <a href="#" class="rg-image-nav-prev">Previous Image</a>
                <a href="#" class="rg-image-nav-next">Next Image</a>
            </div>
        {{/if}}
        <div class="rg-image"></div>
        <div class="rg-loading"></div>
        <div class="rg-caption-wrapper">
            <div class="rg-caption" style="display:none;">
                <p></p>
            </div>
        </div>
    </div>
</script>
     
<script type="text/javascript">

</script> 

<!-- START ARTICLE -->
<article>
    
<!-- START Section -->
<section>