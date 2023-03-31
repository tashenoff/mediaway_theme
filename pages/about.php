<?php
/**
 * Template Name: about
 *
 * @package WordPress
 */
?>


<?php get_header(); ?>
<?php get_template_part('template-parts/banner'); ?>

<div class="container mx-auto">
  
<p class="break-words w-full"><?php echo  get_the_content();?></p>
    
</div>


<?php get_footer(); ?>