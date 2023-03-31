<?php
// Check if there are any posts to display
if (have_posts()): ?>
 
    <?php
    // The Loop
    while (have_posts()):
        the_post(); ?>
        <div class="post">
          <a class="post__link" href="<?php the_permalink() ?>" rel="bookmark">
            <div class="post__content group">
              <div class="post__thumbnail">
                <img class="post__thumbnail-image" src="<? echo get_the_post_thumbnail_url(); ?>" alt="">
              </div>
              <h2 class="post__title">
                <?php the_title(); ?>
              </h2>
              <div class="post__excerpt">
                <?php echo get_the_excerpt();?>
              </div>
            </div>
          </a>
        </div>
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
 
<?php endif; ?>