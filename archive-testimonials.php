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
 * Template Name: Testimonials
 */


get_header(); ?>

    <!--  тест отзывы  -->
    <?php
if( function_exists( 'view_quotes_posts' ) ) {
    echo view_quotes_posts();
} 
?>

<main>
    <article>
        <header class="heading heading_page_open heading_color10">
            <div class="container">
                <div class="heading__row row">
                    <div class="heading__txt-column col-sm-6">
                     <?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); } ?>
                        <h1 class="heading__header">Отзывы о сотрудничестве</h1>

                        <p class="heading__description">
                            На этой странице мы собрали отзывы.
                            <br> От наших некоторых клиентов.
                        </p>

                    </div>
                    <div class="heading__image-column col-sm-6">
                        <img class="heading__image-item" src="<?php echo get_template_directory_uri(); ?>/img/pages-item-testimonials.png" alt="">
                    </div>
                </div>
            </div>
        </header>
        <section class="experience container">
            <h2 class="dn">Суммарный опыт Urazaev Prodiction</h2>
            <div class="experience__row row">

                <div class="experience__column col-sm-5">
                    <h3 class="clients__header">Нас выбирают</h3>
                        <div class="clients row">
                        <?php               
                        $args = array( 'post_type' => 'clientlogos', 'posts_per_page' => 1000 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="clients__col col-xs-6">
                                <div class="clients__img">
                                    <?php the_post_thumbnail() ?>
                                </div>
                                <p class="clients__txt">
                                    <?php the_title(); ?>
                                </p>
                            </div>
                            <?php
                        endwhile;
                        ?>
                        </div>
                        <!-- clients-->
                </div>
                <!-- experience__column -->

                <div class="col-sm-1 hidden-xs"></div>

                <div class="experience__column  col-sm-6">
                    <h3 class="testimonials__header">О нас говорят</h3>

                    <div class="testimonials">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="item">
                                <div class="testimonials__content">
                                    <?php the_content(); ?>
                                        <div class="testimonials__content-lquote"><i class="fa fa-quote-left"></i></div>
                                        <div class="testimonials__content-rquote"><i class="fa fa-quote-right"></i></div>
                                </div>
                                <div class="testimonials__who">
                                    <figure class="testimonials__ava">
                                        <?php the_post_thumbnail() ?>
                                    </figure>
                                    <div class="testimonials__name">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="testimonials__position">
                                        <?php echo the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile; else: ?>
                                <?php endif; ?>

                    </div>
                </div>
                <!-- experience__column.testimonials -->

            </div>
            <!-- experience__row-->
        </section>
    </article>
</main>

        <?php
get_sidebar();
get_footer();