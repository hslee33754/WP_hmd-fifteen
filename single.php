<?php get_header(); ?>

<!-- BEGIN CONTENTS -->
<?php if(have_posts()) : while (have_posts()) : the_post();?>
<?php the_content('');?>
<?php endwhile; endif; ?>

</section>
<!-- END SECTION -->

<?php get_sidebar();?>

<?php get_footer(); ?>