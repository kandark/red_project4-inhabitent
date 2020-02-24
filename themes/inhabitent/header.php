<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>

<nav class="navigation">
<a href="<?php echo get_home_url();?>"><img style="width: 90px; height: 40px;" src="<?php echo get_stylesheet_directory_uri(); ?>
    /images/logos/inhabitent-logo-tent.svg;?>" alt="Inhabitents logo"></a>

<div class="main-menu">
    
<?php wp_nav_menu(array('theme_location'=>'main'));?>
<?php echo get_search_form();?>
</div>
</nav>
<hr>

