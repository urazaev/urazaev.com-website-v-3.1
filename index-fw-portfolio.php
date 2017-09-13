<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Urazaev_Production
 * Template Name: Portfolio
 */


get_header(); ?>


<main>
    <article>
        <header class="heading heading_page_open heading_color14">
            <div class="container">
                <div class="heading__row row">
                    <div class="heading__txt-column col-sm-6">
                        <?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); } ?>

                        <h1 class="heading__header">Выполненные проекты</h1>
                        <p class="heading__description">
                          Портфолио — это образцы выполненных проектов. <br>
                          На страницах по ссылкам ниже, вы можете увидеть более подробную информацию о проектах.
                        </p>
                    </div>
                    <div class="heading__image-column col-sm-6">
                        <img class="heading__image-item" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-icon.png" alt="">
                    </div>
                </div>
            </div>
        </header>

    <section class="portfolio">
        <div class="container">
            <div class="portfolio__row row row-flex row-flex-wrap">

                        
            <?php
                if ( have_posts() ) :
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();?>
                        <div class="portfolio__column col-sm-4 col-xs-6">
                            <a class="portfolio__content" href="<?php the_permalink() ?>">

                                <figure class="portfolio__image">
                                    <?php the_post_thumbnail() ?>
                                    <p class="portfolio__image-details button button_cube">Подробнее</p>
                                </figure>

                                <h3 class="portfolio__heading"><?php the_title(); ?></h3>
                                <div class="portfolio__txt">
                                    <?php echo the_excerpt(); ?>
                                </div>
                            </a>
                        </div>
                        <!-- blog-listing__column-->
                    <?php endwhile;?>
                <div class="blog-listing__column col-xs-12 text-center"> 
                        <?php up_numeric_posts_nav();?>
                </div>
                
            <?php            
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif; ?>            

            </div>
        </div>
    </section>
        
    </article>
</main>



<?php
get_sidebar();
get_footer();
