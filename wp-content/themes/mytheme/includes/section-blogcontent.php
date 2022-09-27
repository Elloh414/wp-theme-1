<?php if (have_posts()) : while (have_posts()): the_post();?>

<!-- //if we have posts for a specific page we are on, while we have a post, show us that posts -->
<h3>This is a single post</h3>
    <?php the_content();?>

   <p> <?php echo get_the_date(); ?></p>

    <?php     
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    // echo $fname . " " . $lname ;    
    ?>

   <p> Posted by <?php echo $fname?> <?php echo $lname;?></p>


   <?php 
   
   $tags= get_the_tags();
   foreach($tags as $tag):?>

   <a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-success" >
    <?php echo $tag->name; ?>
</a>
   <?php endforeach; ?>

   <?php 
   $categories = get_the_category();
   foreach($categories as $cat ):?>

    <a href=" <?php echo get_category_link($cat->term_id);?>"> <?php echo $cat->name;?> </a>
    <?php endforeach;?>
   ?>



   <?php comments_template();?>?>

<?php endwhile; else: endif;?>