<?php if (have_posts()) : while (have_posts()): the_post();?>

<!-- //if we have posts for a specific page we are on, while we have a post, show us that posts -->

    <?php the_content();?>
<?php endwhile; else: endif;?>