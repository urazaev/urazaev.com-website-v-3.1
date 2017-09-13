<?php
/*
Template Name: Gallery Page
*/
 
$args = array(
    'numberposts' => -1, // Using -1 loads all posts
    'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager
    'order'=> 'ASC',
    'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos
    'post_parent' => $post->ID, // Important part - ensures the associated images are loaded
    'post_status' => null,
    'post_type' => 'attachment'
);
 
$images = get_children( $args );

if($images){ ?>
<div id="slider">
    <?php foreach($images as $image){ ?>
    <img src="<?php echo $image->guid; ?>" alt="<?php echo $image->post_title; ?>" title="<?php echo $image->post_title; ?>" />
    <?php    } ?>
</div>
<?php } ?>