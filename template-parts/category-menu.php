
<div class=" bg-white dark:bg-slate-800">        
<div class="container mx-auto">
<ul class="flex mb-5">


  <?php 
    $categories = get_categories( [
      'taxonomy'     => 'category',
      'type'         => 'post',
      'child_of'     => 0,
      'parent'       => '',
      'orderby'      => 'name',
      'order'        => 'ASC',
      'hide_empty'   => 1,
      'hierarchical' => 1,
      'exclude'      => '',
      'include'      => '',
      'number'       => 0,
      'pad_counts'   => false,
    ] );

    if( $categories ) {
      foreach( $categories as $cat ) {

    ?>
      <li class="p-5 <? echo (is_category($cat->slug)?'bg-primary text-white':''); ?>">
        <a 
          href="<?php echo get_category_link($cat->term_id); ?>"
         >
          <?php echo $cat->name; ?>
        </a>
      </li>

  <?php
      }
    }
  ?>
</ul>
</div>
</div>