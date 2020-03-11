<<<<<<< HEAD
<?php get_header(); ?>
<hr>
<p>You searched for:"<?php echo get_home_url('/');?>"</p>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <h2><?php the_title(); ?></h2>
  
   <h6> <?php echo get_permalink();?></h6> 
    <?php the_content();?>  
    
    <?php the_post_thumbnail();?> 
    <!-- Loop ends -->

    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

<div class="sidebar">
<?php get_sidebar();?>
</div>

</div>

=======
<?php get_header(); ?>
<hr>
<p>You searched for:"<?php echo get_home_url('/');?>"</p>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <h2><?php the_title(); ?></h2>
  
   <h6> <?php echo get_permalink();?></h6> 
    <?php the_content();?>  
    
    <?php the_post_thumbnail();?> 
    <!-- Loop ends -->

    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

<div class="sidebar">
<?php get_sidebar();?>
</div>

</div>

>>>>>>> a52e190a3a0aa362037a38dff58674d54990556c
<?php get_footer();?>