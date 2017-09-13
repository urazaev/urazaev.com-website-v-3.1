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

        <section class="portfolio-item content container">
            <?php $gallery = fw_ext_portfolio_get_gallery_images(); ?>
                <div class="portfolio-item__row row">

                    <?php
                    while ( have_posts() ) : the_post();?>
                    <div class="portfolio-item__description col-md-5 col-md-push-7">
                        <p class="portfolio-item__url">
                            <img class="portfolio-item__fav" src="<?php $favicon =  fw_get_db_post_option($post_id, 'favicon', $default_value = null);  echo $favicon['url'];?>" alt="">

                            <a href="<?php echo fw_get_db_post_option($post_id, 'url', $default_value = null); ?>" target="_blank" rel="nofollow">
                                <?php echo fw_get_db_post_option($post_id, 'url', $default_value = null); ?>
                            </a>
                        </p>
                        <p class="portfolio-item__date">
                            <?php echo fw_get_db_post_option($post_id, 'date', $default_value = null); ?>
                        </p>
                        <section class="portfolio-item__type">
                            <?php echo fw_get_db_post_option($post_id, 'type', $default_value = null); ?>
                        </section>
                        
                        <?php get_template_part( 'template-parts/content', get_post_format() );?>
                    
                        <div class="social-share">
                            <?php echo fw_get_db_settings_option('share');?>
                        </div>
                    </div>

                    <div class="portfolio-item__slider col-md-7 col-md-pull-5">
                        <div class="slider-portfolio__content">
                            <?php foreach( $gallery as $image ) : ?>
                            <div class="slider-portfolio__item item">
                                <div class="slider-portfolio__img">
                                    <img src="<?php echo $image['url'] ?>" />
                                </div>

                                <div class="slider-portfolio__txt">
                                    <?php echo $image['title'] ?>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                        <!-- slider-portfolio__content -->
                    </div>


                    <div class="blog-open-nav  col-md-12">
                        <?php the_post_navigation(); ?>
                    </div>
                    
                    <?php endwhile; // End of the loop.?>
                </div>
        </section>
    </article>
</main>

    <?php
get_sidebar();
get_footer();