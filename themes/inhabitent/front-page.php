<?php get_header(); ?>
<div class="home-hero">
<img src="<?php echo get_template_directory_uri() .'./images/home-hero.jpg';?>">
</div>
<img src="<?php echo get_template_directory_uri() .'./images/logos/inhabitent-logo-tent-white.svg';?>">
<div class="home-hero-logo">
<img  src="<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-full.svg">
</div>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail();?>
    
    <h3><?php the_permalink();?></h3>
    

    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>