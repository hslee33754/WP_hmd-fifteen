
</article>
<!-- END ARTICLE -->

<!-- START FlexSlider Code, place just before closing body tag --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.tmpl.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.elastislide.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/gallery.js"></script>

<!-- Optional FlexSlider Additions --> 
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.easing.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.mousewheel.js"></script>

<!-- Initialize the slider on the div we named "flexslider" --> 
<script type="text/javascript">
$(document).ready(function(){
    $('.flexslider').flexslider({
        animation: "slide", // set animation to slide
        smoothHeight: true // auto-adjust to fit the height of images
    });
}); 

</script> 

<!-- Start Footer -->
<footer>
    
<!-- START NAVIGATION (footmenu) -->
<?php

$defaults = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => false,
	'menu_class'      => 'footmenu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => ' | ',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 1,
	'walker'          => ''
);

wp_nav_menu( $defaults );
?>        
<!-- END NAVIGATION -->
    
<small>HMD SEATTLE - 7110 62nd Ave NE, Seattle, WA 98115<br/>&copy; <?php echo date("Y") ?>, HMD SEATTLE. All Rights Reserved. 
<?php wp_loginout();?>
</small>
</footer>
<!-- End Footer -->

<?php wp_footer(); ?>
</body>
</html>