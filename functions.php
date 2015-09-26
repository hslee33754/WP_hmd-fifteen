<?php

/*
Theme Name: HMD-Fifteen
Author: Kate Lee
Author URI: http://kateleeseattle.com
Desctiption: 
Version: 1.0
*/

//Create Page Excerpts
add_post_type_support('page', 'excerpt');
//

//This theme uses wp_nav_menu() in two locations.
register_nav_menus(array(
    'main-menu' => __('Main', 'HMD-Fifteen')

));
//

//Register Sidebars
register_sidebars( 3, array(
    'before_title' =>'<h2>',
    'after_title' =>'</h2>',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
));
//

//Create fuction for Flexslider
function get_flexslider(){
    
    //get attachments
    $attachments = get_children( array(
        'post_parent' => get_the_ID(),
        'post_type' => 'attachment',
        'order' => 'ASC'
    ));
    
    //open slider 
    $slider .='
    <!-- Start Flexslider -->
    <div class="flexslider">
        <ul class="slides">
    ';
    
    //get conditional slider
    if($attachments){
        
        foreach ($attachments as $attachment_id => $attachment){

            $theUrl = wp_get_attachment_url($attachment_id);
            $theCaption = get_post_field('post_excerpt', $attachment->ID);

            $slider .='
            <li data-thumb="'.$theUrl.'">
                <img src="'.$theUrl.'" alt="slider1"/>
            </li>
            ';
        }
    }
    
    //end slider
    $slider .='
        </ul>
        </div>
        <!-- End Flexslider -->
    ';
    
    //return slider
    return $slider;
    
}

add_shortcode( 'flexslider', 'get_flexslider');

//Create function for responsive carousel gallery

function get_RCgallery(){
    
    $attachments = get_children( array(
        'post_parent' => get_the_ID(),
        'post_type' => 'attachment',
        'order' => 'ASC'
    ));
    
    $gallery .='<div class="container">
			<h2 id="pageid">Pictures from HMD Acamedy</h2>
			
			<div class="content">
			
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>';
        //get conditional slider
    
    if($attachments){

        foreach ($attachments as $attachment_id => $attachment){

        $thePermalink = get_permalink($attachment_id);
        $theUrl = wp_get_attachment_url($attachment_id);
        $theTitle = apply_filters('the_title', $attachment->post_title);
        
        $gallery .='<li><a href="#"><img src="'.$theUrl.'" data-large="'.$theUrl.'" alt="'.$theTitle.'" data-description="" /></a></li>';
        
        }; //end foreach
    } //end if
    
    $gallery .='
								</ul>
							</div> <!-- class="es-carousel"-->
						</div> <!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
			</div><!-- content -->	
		</div><!-- container -->
    ';
    
    return $gallery;
    
}//end get rc-gallery function

add_shortcode( 'RCgallery', 'get_RCgallery');

?>