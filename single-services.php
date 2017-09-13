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
        <?php
            while ( have_posts() ) : the_post();
            $post_id = get_the_ID();
        ?>
        <header class="heading heading_page_open" style="background: <?php echo fw_get_db_post_option($post_id, 'color', $default_value = null); ?>;">
                    <div class="container">
                        <div class="heading__row row">
                            <div class="heading__txt-column col-sm-6">
                                    <?php echo get_hansel_and_gretel_breadcrumbs(); ?>
                                       
                                    <h1 class="heading__header"><?php the_title(); ?></h1>
                                    <div class="heading__description">
                                        <?php echo the_excerpt(); ?>
                                    </div>
                            </div>
                            <div class="heading__image-column col-sm-6">
                                <?php the_post_thumbnail() ?>
                            </div>
                        </div>
                    </div>
                </header>
                
                
                
            
        <section class="content container">
            <div class="blog-listing__row row">
           
             
                <div class="blog-listing__open-content col-md-12">
			         <?php get_template_part( 'template-parts/content', get_post_format() );?>
                    
                </div>
  

                <div class="social-share col-md-12">
<!--                            <?php echo fw_get_db_settings_option('share');?>-->
                </div>
                
                <div class="blog-open-nav col-md-12">
                   
                     <?php the_post_navigation(); ?>
                </div>
                           
                
            </div>
        </section>
        
        <?php 
                endwhile; // End of the loop.
            ?>
        

        <section class="order-form-to-down">
        <h2 class="dn">Форма заказа веб сайта</h2>
        <div class="container">
            <div class="order-form-to-down__row row">
                <div class="order-form-to-down__column col-md-12">
                    <div class="order-form-to-down__content">
                        <h3 class="order-form-to-down__hcolumn-header">Оставьте заявку сейчас</h3>
                        <h4 class="order-form-to-down__hcolumn-subheader">И получите скидку 10%!</h4>

                        <a class="order-form-to-rdown__button button button_cube" href="#" data-toggle="modal" data-target="#order-form">Заказать</a>

                    </div>
                </div>
                <!-- order-form-to-right__column -->
            </div>
        </div>
        </section>

        <section class="experience experience--services-page container">
            <h2 class="dn">Суммарный опыт Urazaev Prodiction</h2>
            <div class="experience__row row">

                <div class="experience__column col-sm-5">
                            <h3 class="clients__header">Нас выбирают</h3>
                            <div class="clients row">
                                <?php               
                                    $args = array( 'post_type' => 'clientlogos', 'posts_per_page' => 6 );
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
                                <?php               
                                    $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 1000 );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
                                    <?php
                                        endwhile;
                                    ?>
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