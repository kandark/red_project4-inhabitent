<<<<<<< HEAD
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
<h1 class="shop-title">Shop Stuff</h1>
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
<h1 class="shop-title">Inhabitent journal</h1>
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
  
     <div class="title-van">
           <?php echo the_date() . ' / ';?>
    <?php echo comments_number();?>
   
    <h1><?php the_title();?></h1>
</div>
    
    <a href="<?php echo get_permalink();?>"><button>Read entry</button class="btn"></a>
</div>

    
<?php endforeach; wp_reset_postdata(); ?>
</div>


<h1 class="shop-title">Latest adventures</h1>
<!-- custom post loop starts -->
<div class="latest-adventures">
<?php
   $args = array( 'post_type' => 'adventure', 
   'order' => 'ASC',
'numberposts'=>4
);
   $adventure_posts = get_posts( $args ); // returns an array of posts
?>

<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
 
<div class="latest-adventure-posts">
    <?php the_post_thumbnail();?>


    <p><?php the_title();?></p>
    <div class="gulp">
    <a href="<?php echo get_permalink();?>"><button>Read more</button></a>
    </div>
 </div>
 
    
<?php endforeach; wp_reset_postdata(); ?>
</div>
<section class="btn-adventure">
    <a href="<?php echo get_post_type_archive_link('adventure') ;?>"><button>More adventures</button></a>
    </section>

=======
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
<h1 class="shop-title">Shop Stuff</h1>
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
<h1 class="shop-title">Inhabitent journal</h1>
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
  
     <div class="title-van">
           <?php echo the_date() . ' / ';?>
    <?php echo comments_number();?>
   
    <h1><?php the_title();?></h1>
</div>
    
    <a href="<?php echo get_permalink();?>"><button>Read entry</button class="btn"></a>
</div>

    
<?php endforeach; wp_reset_postdata(); ?>
</div>


<h1 class="shop-title">Latest adventures</h1>
<!-- custom post loop starts -->
<div class="latest-adventures">
<?php
   $args = array( 'post_type' => 'adventure', 
   'order' => 'ASC',
'numberposts'=>4
);
   $adventure_posts = get_posts( $args ); // returns an array of posts
?>

<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
 
<div class="latest-adventure-posts">
    <?php the_post_thumbnail();?>


    <p><?php the_title();?></p>
    <div class="gulp">
    <a href="<?php echo get_permalink();?>"><button>Read more</button></a>
    </div>
 </div>
 
    
<?php endforeach; wp_reset_postdata(); ?>
</div>
<section class="btn-adventure">
    <a href="<?php echo get_post_type_archive_link('adventure') ;?>"><button>More adventures</button></a>
    </section>

>>>>>>> a52e190a3a0aa362037a38dff58674d54990556c
<?php get_footer();?>