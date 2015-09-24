<!-- START Aside -->
<aside>       

<div class="side1">
<!-- START Side nav-->
<?php 
$children = get_pages( array( 'child_of' => $post->ID ) );
if ($post->post_parent || (is_page() && count( $children ) > 0)) : ?>
<h2> <?php echo get_the_title( $post->post_parent ); ?></h2>
<nav class="side-menu">
    <ul id="side-nav">
        <?php 
        if($post->post_parent){
            wp_list_pages(array(
                'title_li' => __(''),
                'child_of' => $post->post_parent,
            ));
        }else{
            wp_list_pages(array(
                'title_li' => __(''),
                'child_of' => $post->ID,
            ));
        } ?>
    </ul>
</nav>
<?php endif; ?>
<!-- END Side nav -->
</div>

<!--Begin Dynamic Sidebar-->
<?php dynamic_sidebar('sidebar 3');?>
    
<?php 
if(is_front_page()){
    dynamic_sidebar('sidebar 2');
}else{
    dynamic_sidebar('sidebar 1');
}
;?>
<!-- End Dynamic Sidebar -->

<p class="btt"><a href="#top">Back to top</a></p>

</aside>
<!-- END ASIDE -->