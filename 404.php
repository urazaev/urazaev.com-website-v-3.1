<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
                            <h1 class="heading__header heading__header--page-open"><?php esc_html_e( 'Страница не найдена.', 'urazaev-production' ); ?></h1>
                    </div>
                </div>
            </div>
        </header>

        <section class="content container">
            <div class="blog-listing__row row">

                <div class="blog-listing__open-content blog-listing__open-content-mb60 col-md-12">
<?php esc_html_e( 'К сожалению ничего не найденно.', 'urazaev-production' ); ?>
                </div>
  

            </div>
        </section>
    </article>
</main>

<?php
get_footer();

    
    
    
    
