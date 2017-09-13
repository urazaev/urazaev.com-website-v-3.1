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
 * Template Name: Sale
 */


get_header(); ?>


<main>
    <article>
        <header class="heading heading_page_open heading_color8">
            <div class="container">
                <div class="heading__row row">
                    <div class="heading__txt-column col-sm-6">
                        <?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); } ?>
                        <h1 class="heading__header"><?php the_title(); ?></h1>
                        <div class="heading__description"><?php echo the_excerpt(); ?></div>
                    </div>
                    <div class="heading__image-column col-sm-6"><?php the_post_thumbnail() ?></div>
                </div>
            </div>
        </header>

        <section class="content container">
           
            <div class="row col-md-6">
                <?php the_content(); ?>
            </div>
            <div class="row col-md-6">
                <?php echo do_shortcode( '[contact-form-7 id="2411" title="Продать сайт" html_class="super-forms"]' ); ?>
            </div>
        </section>
        
    </article>
</main>


<?php
get_sidebar();
get_footer();
