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
 * Template Name: Services
 */


get_header(); ?>
<main>
    <article>
        <header class="heading heading_page_open heading_color13 nomb">
            <div class="container">
                <div class="heading__row row">
                    <div class="heading__txt-column heading__txt-column--page-open col-sm-12 12312312">
                        <?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); } ?>
                            <h1 class="heading__header heading__header--page-open">Услуги нашего проекта</h1>
                            <p class="heading__description">
                             Мы разрабатываем веб проекты, а также продвигаем бизнес в интернете. 
                            </p>
                    </div>
                </div>
            </div>
        </header>

        
        <div class="container">
            <div class="services-listing__row row row-flex">
            <?php               
                $args = array( 'post_type' => 'services', 'posts_per_page' => 1000 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); 
                $post_id = get_the_ID();
            ?>
                <a class="services-listing-column col-sm-4" style="background: <?php echo fw_get_db_post_option($post_id, 'color', $default_value = null); ?>;" href="<?php the_permalink() ?>">
                    <div class="services-listing__image"><img class="services-listing__image-item" src="<?php the_post_thumbnail_url( 'full' );  ?>" alt=""></div>
                    <p class="services-listing__header"><?php the_title(); ?></p>
                    <div class="services-listing__description"><?php echo the_excerpt(); ?></div>
                    <span class="services-listing__button button button_cube">Подробнее</span>
                </a>
            <?php
                endwhile;
            ?>
            </div>
        </div>
        
        
    </article>
</main>

<?php
get_sidebar();
get_footer();
