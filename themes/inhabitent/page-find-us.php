<?php get_header();?>
<?php if(have_posts()):
//The wordPress Loop:loader post content

while(have_posts()):
    the_post();?>
   
    <hr>
    <h2><?php the_title();?></h2>
<!-- 
    
    <h3><?php the_permalink();?></h3> -->
   <div class="find-us-posts">
    <?php the_content();?>

    <!-- Loop ends-->
<?php endwhile;?>
<?php the_posts_navigation();?>
<?php else:?>
<p>No posts found</p>
<?php endif;?>

<div>
<?php get_sidebar();?>

</div>
</div>
<?php get_footer();?>