<?php get_header(); ?>
<hr>

<h1 class="shop-title2">Shop stuff</h1>


<?php $terms = get_terms( array(
    'taxonomy' => 'product-type',
    'hide_empty' => false,
));?>

<div class="product-types"> 

<?php

foreach ($terms as $term):

$phrase  = $term->slug;
 ;?>
 

<a href="<?php echo get_home_url() . '/product-type/' . $term->slug ;?>"><?php echo $phrase;?></a>

<?php endforeach;?>

</div>
<hr class="dashed">


<section class= "taxonomy-products-grid">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <figure class="archive-products">
    <a href="<?php echo get_permalink();?>">

     <?php the_post_thumbnail('large');?>
    
    <div class="grey-space"></div>

    <figcaption>
        
    
    
<div class="prducts-link">
        <p><?php the_title();?></p>
        <p><?php echo " $" . get_field('price');?></p>
    </div>
    
    </a>
    </div>   
        
    </figcaption>
   
    </figure>  
      

    <!-- Loop ends -->
    <?php endwhile;?>

    <!-- <?php the_posts_navigation();?> -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>
    
<?php get_footer();?>