<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Urazaev_Production
 */

get_header(); ?>
<main>
    <article>
        <header class="heading heading_page_open heading_color11">
            <div class="container">
                <div class="heading__row row">
                    <div class="heading__txt-column col-sm-6">
                        <?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); } ?>
                            <h1 class="heading__header"><?php single_post_title(); ?></h1>
                            <div class="heading__description">
                            <? if ( $_post = get_post( 6158 ) ) {
                                    setup_postdata( $post = $_post );
                                    the_excerpt();
                                    // Any other template tags for this post
                                    wp_reset_postdata();
                            }?>
                            </div>
                    </div>
                    <div class="heading__image-column col-sm-6">
                        <img class="heading__image-item" src="<?php echo get_template_directory_uri(); ?>/img/pages-item-blog.png" alt="">
                    </div>
                </div>
            </div>
        </header>

        <section class="content container">
            <div class="blog-listing__row row row-flex row-flex-wrap clearfix">
            <?php
                    if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();?>
                            <div class="blog-listing__column col-md-3 col-xs-6">
                                <a class="blog-listing__content" href="<?php echo get_permalink(); ?>">
                                    <figure class="blog-listing__image">
                                        <?php the_post_thumbnail() ?>
                                    </figure>
                                    <h2 class="blog-listing__heading">
                                        <?php the_title(); ?>
                                    </h2>
                                    <div class="blog-listing__txt">
                                        <?php echo get_the_excerpt(); ?>

                                    </div>
                                </a>
                            </div>
                            <!-- blog-listing__column-->
                        <?php endwhile;?>
            </div>
                         
            <div class="blog-listing__nav-row row">
                <div class="blog-listing__nav col-xs-12 text-center"> 
                    <?php up_numeric_posts_nav();?>
                </div>
            </div>
            <?php            
                    else :
                        get_template_part( 'template-parts/content', 'none' );
            endif; ?>
           
        </section>
    </article>
</main>

<?php
get_sidebar();
get_footer();
