
<?php get_header(); ?>
<hr class="dotted">
<div class="product-type-header">
<div>
<?php

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

$phrase  = $term->slug;
$healthy = ("STUFF");
$yummy   = ("");
$output = str_replace($healthy, $yummy, $phrase);?>

<h1><?php echo $output;?></h1>
<?php echo category_description($term->term_id);?>
</div>
</div>

<hr class="dashed">

<section class="taxonomy-products-grid">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

<figure class="archive-products">
    
    <a href="<?php echo get_permalink();?>">

        <?php the_post_thumbnail('large');?>

        <div class="grey-space"></div>

        <figcaption>
        
        <div class="product-info">
            <p><?php the_title();?></p>
            <p><?php echo " $" . get_field('price');?></p>
        </div>
    
    </a>

        </figcaption>
   
</figure>  
    
    <!-- Loop ends -->
    <?php endwhile;?>


<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

<a class="shop-button" href="<?php echo get_home_url() . '/products/';?>">
  
</a>

<?php get_footer();?>