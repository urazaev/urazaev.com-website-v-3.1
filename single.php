<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Urazaev_Production
 */

get_header(); ?>

<main>
    <article>
        <header class="heading heading_page_open heading_color13">
            <div class="container">
                <div class="heading__row row">
                    <div class="heading__txt-column heading__txt-column--page-open col-sm-12">
                        <?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); } ?>
                            <h1 class="heading__header heading__header--page-open"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </header>

        <section class="content container">
            <div class="blog-listing__row row">
            <?php
                while ( have_posts() ) : the_post();?>
                <div class="blog-listing__open-content col-md-12">
			        <?php get_template_part( 'template-parts/content', get_post_format() );?>
                </div>
  
                <div class="social-share col-md-12">
                    <?php echo fw_get_db_settings_option('share');?>
                </div>
                
                <div class="blog-open-nav col-md-12">
                    <?php the_post_navigation(); ?>
                </div>
                
                
                <div class="blog-open-comments  col-md-12">
                        <?php // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template( '/alternative-comments.php' ); 
                        endif;?>
                </div>
            <?php endwhile; // End of the loop.
            ?>

            </div>
        </section>
    </article>
</main>

<?php
get_sidebar();
get_footer();
