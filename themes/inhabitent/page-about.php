<?php get_header(); ?>
<body <?php body_class();?>>

<div class="image-about">

    <?php echo get_home_url();?><img style="width:100%; height: 400px;" src="<?php echo get_stylesheet_directory_uri();?>/images/about-hero.jpg;?>">
<h1>About</h1>
</div>


<div class="abour-content">
<h1>OUR STORY</h1>

<p>Inhabitent Camping Supply Co. has been Vancouvr baked-good icon for more than two whole monts! Customers often comment on the bustle of activity they seen in store...that's  where the magic happness every  day.</p>
<p>We want to bridge the gap between the comfort of city life and the lovely instagram-worthiness of the great outdoors that support us, we sell that's fun and functional. So much fun, In fact, that you'll want to pitch a tent inside your  one-bedroom apartment so you can use it everyday.</p>
<h2>OUR TEAM</h2>
Inhabitent Camping Supply Co.'s staff made up of an amazing team of inspired retail associates.We really know our stuff when it comes to travel hammocks and campfire cooking gaadgets.From a provincial park campground to the back-country, our staff knows what you need to outfit your outdoor couting.
<p>Our shop in nestled in a lovely litle comer of vancouver. Pop iin, say hi, and try out our tents!</p>
</div>

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>