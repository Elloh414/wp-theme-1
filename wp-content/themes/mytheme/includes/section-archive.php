<?php if (have_posts()) : while (have_posts()): the_post();?>

<!-- //if we have posts for a specific page we are on, while we have a post, show us that posts -->

<div class="card mb-3">
    <div class="card-body">
        <h3><?php the_title();?></h3>
        <?php the_excerpt();?>
        <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
    </div>
</div>
<?php endwhile; else: endif;?>