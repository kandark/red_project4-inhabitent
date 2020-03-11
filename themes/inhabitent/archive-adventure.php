<<<<<<< HEAD
<?php get_header(); ?>

<div class="adventures-title">
<h1>Latest Adventures</h1>
</div>

<div class="product-types"> 

<hr class="dashed">

<section class="adventures-grid">

    <?php
    $args = array( 'numberposts' => 4, 'post_type' => 'adventure', 'order' => 'ASC', 'orderby' => 'date');
    $postslist = get_posts( $args );
    foreach ($postslist as $post): setup_postdata($post);?>

    <figure class="adventure">

    <div>    
    <?php the_post_thumbnail('large');?>
    <p><?php the_title();?></p>

    <section>
    <a href="<?php echo get_permalink();?>"><button>Read more</button></a>
    </section>

    </div>

    </figure> 

    <?php endforeach;?>

</section>
    
=======
<?php get_header(); ?>

<div class="adventures-title">
<h1>Latest Adventures</h1>
</div>

<div class="product-types"> 

<hr class="dashed">

<section class="adventures-grid">

    <?php
    $args = array( 'numberposts' => 4, 'post_type' => 'adventure', 'order' => 'ASC', 'orderby' => 'date');
    $postslist = get_posts( $args );
    foreach ($postslist as $post): setup_postdata($post);?>

    <figure class="adventure">

    <div>    
    <?php the_post_thumbnail('large');?>
    <p><?php the_title();?></p>

    <section>
    <a href="<?php echo get_permalink();?>"><button>Read more</button></a>
    </section>

    </div>

    </figure> 

    <?php endforeach;?>

</section>
    
>>>>>>> a52e190a3a0aa362037a38dff58674d54990556c
<?php get_footer();?>