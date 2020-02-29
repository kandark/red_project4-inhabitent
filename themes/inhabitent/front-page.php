<?php get_header(); ?>
<div class="home-hero">
<img src="<?php echo get_template_directory_uri() .'./images/home-hero.jpg';?>">
</div>
<!-- <img src="<?php echo get_template_directory_uri() .'./images/logos/inhabitent-logo-tent-white.svg';?>"> -->
<div class="home-hero-logo">
<img  src="<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-full.svg">
</div>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    
    <!-- <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail();?> -->
<!--     
    <h3><?php the_permalink();?></h3>
     -->

    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
<h1>Shop Stuff</h1>
<div class="terms">
<?php
$terms=get_terms(array(
    'taxonomy'=>'product-type',
    'hide_empty'=> false

));
foreach($terms as $term) :
    
    $file_name = $term->name . '.svg';?>
    <div class="stuff">
        
    <img src='<?php echo get_template_directory_uri() . "/images/product-type-icons/$file_name"?>'>

   <?php echo "<p>";
   echo $term->description; 
    echo "</p>";?>
    
    
    <button><?php echo $term->name;?></button>
</div>



<?php endforeach;?>    
 </div>
<h1>Inhabitent journal</h1>
<!-- custom post loop starts -->
<div class="inhabitent-principal">
<?php
   $args = array( 'post_type' => 'post', 
   'order' => 'ASC',
'numberposts'=>3
);
   $product_posts = get_posts( $args ); // returns an array of posts
?>

<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   <!-- <?php the_title() ?>
   <?php the_post_thumbnail()?> -->
  
<div class="inhabitent-img">
    <?php the_post_thumbnail();?>
    <?php echo the_date() . ' / ';?>
    <?php echo comments_number();?>
    <br>
    <h1><?php the_title();?></h1>
    <br>
    
    <a href="<?php echo get_permalink();?>"><button>Read entry</button></a>
</div>

    
<?php endforeach; wp_reset_postdata(); ?>
</div>


<h1>Latest adventure</h1>
<!-- custom post loop starts -->
<div class="inhabitent-adventure">
<?php
   $args = array( 'post_type' => 'post', 
   'adventures' => 'ASC',
'numberposts'=>4
);
   $product_posts = get_posts( $args ); // returns an array of posts
?>

<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   <!-- <?php the_title() ?>
   <?php the_post_thumbnail()?> -->
  
<div class="inhabitent-img2">
    <?php the_post_thumbnail();?>

    <br>
    <h1><?php the_title();?></h1>
    <br>
    
    <a href="<?php echo get_permalink();?>"><button>Read more</button></a>
</div>

    
<?php endforeach; wp_reset_postdata(); ?>
</div>


<?php get_footer();?>