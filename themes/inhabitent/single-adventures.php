
<?php get_header(); ?>

<section>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <div class="single-product">
        <?php the_post_thumbnail('large');?>
    </div>
    <div>
            <h2> <?php  the_title(); ?></h2>
            <?php the_content(); ?>

         <section>
            <button class="social-button"><i class="fab fa-facebook-f"></i> LIKE </button>
              <button class="social-button"><i class="fab fa-pinterest"></i> PIN </button>
               <button class="social-button"> <i class="fab fa-twitter"></i> TWEET </button>
        </section>
        </div>
    
    
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</section>
    

<?php get_header(); ?>

<section>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <div class="single-product">
        <?php the_post_thumbnail('large');?>
    </div>
    <div>
            <h2> <?php  the_title(); ?></h2>
            <?php the_content(); ?>

         <section>
            <button class="social-button"><i class="fab fa-facebook-f"></i> LIKE </button>
              <button class="social-button"><i class="fab fa-pinterest"></i> PIN </button>
               <button class="social-button"> <i class="fab fa-twitter"></i> TWEET </button>
        </section>
        </div>
    
    
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</section>
    
<?php get_footer();?>