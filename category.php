<?php
/**
 * A Simple Category Template
 */

get_header(); ?>


<?php get_template_part('template-parts/banner'); ?>
<?php get_template_part('template-parts/category', 'menu'); ?>
<div class="container mx-auto">


    <div class="grid grid-cols-3 gap-4 py-10">

        <?php get_template_part('template-parts/post', 'card'); ?>


    </div>




</div>

<?php get_footer(); ?>