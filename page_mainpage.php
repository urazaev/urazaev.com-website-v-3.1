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
 * Template Name: Main page
 */

get_header(); ?>


<section class="slider-top">
    <h2 class="dn">Предложение от  Urazaev Prodiction</h2>
    <div class="slider-top__content">
        <?php
        
            $args = array( 'post_type' => 'slider', 'posts_per_page' => 1000 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
            $post_id = get_the_ID();

            ?>

            <div class="slider-top__item slider-top__item_bg_slide<?php echo fw_get_db_post_option($post_id, 'bg', $default_value = null); ?> item">
                <div class="slider-top__img">
                    <?php the_post_thumbnail() ?>
                </div>
                <div class="slider-top__txt slider-top__txt_item_<?php echo fw_get_db_post_option($post_id, 'bg', $default_value = null); ?>">
                    <h2 class="slider-top__heading"><?php the_title(); ?></h2>
                    <div class="slider-top__subheading"><?php the_content(); ?></div>
                    <a class="button button_cube slider-top__button" href="<?php echo fw_get_db_post_option($post_id, 'link', $default_value = null); ?>">Подробнее</a> 
                    <a class="button button_cube slider-top__button" href="/services">Все услуги</a>
                    
                </div>
            </div>
            
        <?php endwhile; ?>

    </div>
    <!-- slider-top -->
</section>

<section class="services-three-cols container">
    <h2 class="dn">Услуги проекта Urazaev Prodiction</h2>
    <div class="services-three-cols__row row">

        <div class="services-three-cols__column col-sm-4">
            <a class="services-three-cols__content" href="/services/web-production">
                <div class="services-three-cols__radius services-three-cols__radius_color_cold">
                    <svg class="services-three-cols__column-ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.39 33.03">
                        <g id="l1v1" data-name="Слой 1">
                            <path d="M27.38,33a4.5,4.5,0,0,1-3.19-1.32l-5.58-5.58a1,1,0,0,1,0-1.36l1.83-1.83-1.81-1.81L8.05,31.71a4.51,4.51,0,0,1-6.38-6.38L12.25,14.75,6,8.51,4.76,9.75A1,1,0,0,1,4,10a1,1,0,0,1-.71-.45L.14,4.45A1,1,0,0,1,.28,3.27l2.2-2.2A1,1,0,0,1,3.66.93L8.78,4.05A1,1,0,0,1,9,5.55l-1.6,1.6,6.24,6.24,4.21-4.21a7.84,7.84,0,0,1,10-8.85,1,1,0,0,1,.4,1.6L25.12,5l.69,2.57,2.57.69,3.08-3.08a1,1,0,0,1,1.6.4,7.84,7.84,0,0,1-8.85,10L20,19.78l1.81,1.81,1.83-1.83a1,1,0,0,1,1.36,0l5.58,5.58A4.51,4.51,0,0,1,27.38,33Zm-6.73-7.57,4.9,4.9a2.59,2.59,0,0,0,3.67-3.67l-4.9-4.9-1.65,1.65a.93.93,0,0,1-.16.22.94.94,0,0,1-.21.16ZM25.49,1.92A5.92,5.92,0,0,0,19.8,9.26a1,1,0,0,1-.25.91L3,26.69a2.6,2.6,0,0,0,0,3.67,2.67,2.67,0,0,0,3.67,0L18,19.1h0l5.26-5.26a1,1,0,0,1,.91-.25,5.92,5.92,0,0,0,7.34-5.69L29.34,10a1,1,0,0,1-.93.25l-3.64-1a1,1,0,0,1-.68-.68L23.12,5A1,1,0,0,1,23.37,4ZM2.17,4.09l2.1,3.44L6.74,5.06,3.3,3Z" />
                        </g>
                    </svg>
                </div>
                <h2 class="services-three-cols__heading">
                   Веб продакшн под ключ
               </h2>
                <p class="services-three-cols__txt">
                    Разработка веб проектов различной сложности. Под ключ.
                </p>
            </a>
        </div>
        <!-- services-three-cols__column-->

        <div class="services-three-cols__column col-sm-4">
            <a class="services-three-cols__content" href="/services/site-promotion">
                <div class="services-three-cols__radius services-three-cols__radius_color_warm">

                    <svg class="services-three-cols__column-ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.38 28.88">
                        <g id="l3v3" data-name="Слой 1">
                            <path class="cls-1" d="M4.77,14.84a3.39,3.39,0,1,1,3.39-3.39A3.39,3.39,0,0,1,4.77,14.84Zm0-4.85a1.47,1.47,0,1,0,1.47,1.47A1.47,1.47,0,0,0,4.77,10Zm15.89,4a3.39,3.39,0,1,1,3.39-3.39A3.39,3.39,0,0,1,20.67,14Zm0-4.85a1.47,1.47,0,1,0,1.47,1.47A1.47,1.47,0,0,0,20.67,9.14Zm7.95,1.18A3.39,3.39,0,1,1,32,6.93,3.39,3.39,0,0,1,28.61,10.32Zm0-4.85a1.47,1.47,0,1,0,1.47,1.47A1.47,1.47,0,0,0,28.61,5.47ZM12.72,6.77A3.39,3.39,0,1,1,16.1,3.39,3.39,3.39,0,0,1,12.72,6.77Zm0-4.85a1.47,1.47,0,1,0,1.47,1.47A1.47,1.47,0,0,0,12.72,1.92Z" />
                            <path class="cls-1" d="M23.06,10.53a1,1,0,0,1-.42-1.82l2.85-1.39A1,1,0,0,1,26.33,9l-2.85,1.39A1,1,0,0,1,23.06,10.53ZM6.94,10.21a1,1,0,0,1-.67-1.64L10,4.87a1,1,0,1,1,1.35,1.37L7.62,9.94A1,1,0,0,1,6.94,10.21Zm11.75-.42A1,1,0,0,1,18,9.54L14.26,6.08a1,1,0,0,1,1.3-1.42l3.79,3.46a1,1,0,0,1-.65,1.67Z" />
                            <path class="cls-1" d="M32.42,28.88H1A1,1,0,1,1,1,27h.75V19a1,1,0,0,1,1-1H6.87a1,1,0,0,1,1,1v8H9.66V11a1,1,0,0,1,1-1h4.21a1,1,0,0,1,1,1V27H17.6V18.12a1,1,0,0,1,1-1h4.21a1,1,0,0,1,1,1V27h1.82V14.43a1,1,0,0,1,1-1h4.21a1,1,0,0,1,1,1V27h.75a1,1,0,0,1,0,1.92Zm-5-2h2.29V15.39H27.47Zm-7.95,0h2.29V19.08H19.52Zm-7.95,0h2.29V12H11.58Zm-7.95,0H5.91v-7H3.63Z" />
                        </g>
                    </svg>
                </div>
                <h2 class="services-three-cols__heading">
                   Продвижение сайтов
               </h2>
                <p class="services-three-cols__txt">
                    Поисковая раскрутка сайтов, контекстная реклама. Увеличение продаж.
                </p>
            </a>
        </div>
        <!-- services-three-cols__column-->

        <div class="services-three-cols__column col-sm-4">
            <a class="services-three-cols__content" href="/services/smm">
                <div class="services-three-cols__radius services-three-cols__radius_color_neutral">

                    <svg class="services-three-cols__column-ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.38 32.22">
                        <g id="l2v2" data-name="Слой 1">
                            <path class="cls-1" d="M27.11,30.33H26.8c-.7,0-1.26-.58-2.75-2.14-2.51-2.63-7.2-7.51-11.82-7.51H3.53A3.53,3.53,0,0,1,0,17.15v-4A3.53,3.53,0,0,1,3.53,9.65h8.7c4.63,0,9.31-4.89,11.82-7.51C25.54.58,26.1,0,26.8,0h.31A2.86,2.86,0,0,1,30,2.85V27.47A2.86,2.86,0,0,1,27.11,30.33Zm0-1.86ZM27,28.41h.11a.93.93,0,0,0,.93-.93V2.85a.93.93,0,0,0-.93-.93H27c-.3.23-1,.93-1.56,1.55-2.71,2.83-7.76,8.1-13.21,8.1H3.53a1.61,1.61,0,0,0-1.61,1.61v4a1.61,1.61,0,0,0,1.61,1.61h8.7c5.44,0,10.49,5.27,13.21,8.1C26,27.48,26.69,28.18,27,28.41Z" />
                            <path class="cls-1" d="M29,20.73a1,1,0,0,1-.27-1.88,3.84,3.84,0,0,0,0-7.37,1,1,0,1,1,.54-1.84,5.76,5.76,0,0,1,0,11.05A1,1,0,0,1,29,20.73Z" />
                            <path class="cls-1" d="M12.39,20.67a1,1,0,0,1-1-1v-9.1a1,1,0,0,1,1.92,0v9.1A1,1,0,0,1,12.39,20.67Z" />
                            <path class="cls-1" d="M12.19,32.22H9.08A3.3,3.3,0,0,1,6,29.77L3.65,19.94a1,1,0,0,1,.93-1.18h5.73a1,1,0,0,1,.95.79,15,15,0,0,1,.17,2.17,6.63,6.63,0,0,0,.75,3.52l2.07,3.26a2.32,2.32,0,0,1,0,2.38A2.41,2.41,0,0,1,12.19,32.22ZM5.8,20.67l2.05,8.65a1.4,1.4,0,0,0,1.23,1h3.11a.73.73,0,0,0,.37-.39.54.54,0,0,0,.07-.38l-2.07-3.26a8.34,8.34,0,0,1-1.05-4.49c0-.38,0-.74-.05-1.1Z" />
                        </g>
                    </svg>
                </div>
                <h2 class="services-three-cols__heading">
                   Social Media Marketing
               </h2>
                <p class="services-three-cols__txt">
                    Вывод и сопровождение бренда в социальных сетях. Планирование и внедрение стратегий продвижения.
                </p>
            </a>
        </div>
        <!-- services-three-cols__column-->

    </div>
</section>

<section class="order-form-to-down">
    <h2 class="dn">Форма заказа веб сайта</h2>
    <div class="container">
        <div class="order-form-to-down__row row">
            <div class="order-form-to-down__column col-md-12">
                <div class="order-form-to-down__content">
                    <h3 class="order-form-to-down__hcolumn-header">Вам нужен продающий вебсайт или продвижение вашего мертвого сайта?</h3>
                    <h4 class="order-form-to-down__hcolumn-subheader">Закажите прямо сейчас. Создание тз или глубокий анализ сайта бесплатно!</h4>

                    <a class="order-form-to-rdown__button button button_cube" href="#" data-toggle="modal" data-target="#order-form">Заказать</a>

                </div>
            </div>
            <!-- order-form-to-right__column -->
        </div>
    </div>
</section>

<section class="portfolio">
    <div class="container">
        <h2 class="portfolio__header">Портфолио</h2>
        <p class="portfolio__hcolumn-text">Здесь некоторые работы, все работы можно смотреть в разделе <a href="/portfolio">Портфолио.</a></p>


        <div class="portfolio__row row row-flex row-flex-wrap">
            <?php               
                $args = array( 'post_type' => 'fw-portfolio', 'posts_per_page' => 3 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>

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

                    <?php
                endwhile;
            ?>
        </div>

        <a class="button portfolio__btn portfolio__btn_color_hot button button_cube" href="/portfolio">Смотреть все работы</a>
        <a class="button portfolio__btn portfolio__btn_color_cold button button_cube" href="#" data-toggle="modal" data-target="#order-form">Заказать сайт</a>

    </div>
</section>

<section class="stats">
    <div class="container">
        <h2 class="dn">статистика из 3х колонок</h2>
        <div class="stats__row row">

            <div class="stats__column col-sm-4 col-xs-4">
                <div class="stats__content">
                    <div class="stats__figure">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.67 29.89">
                            <path class="cls-1" d="M32.71,29.89H1a1,1,0,0,1-1-1V1A1,1,0,0,1,1,0H32.71a1,1,0,0,1,1,1v28A1,1,0,0,1,32.71,29.89ZM1.92,28H31.75V8.54H1.92Zm0-21.36H31.75V1.92H1.92Z" />
                            <path class="cls-2" d="M28.71,3.17A1.18,1.18,0,0,0,27.58,4.4a1.14,1.14,0,1,0,2.26,0,1.18,1.18,0,0,0-1.13-1.22Z" />
                            <path class="cls-2" d="M25,3.17A1.18,1.18,0,0,0,23.9,4.4a1.14,1.14,0,1,0,2.26,0A1.18,1.18,0,0,0,25,3.17Z" />
                            <path class="cls-1" d="M15.76,25.7l-.2,0a1,1,0,0,1-.74-1.14l2.74-12.82a1,1,0,1,1,1.88.4L16.7,24.94A1,1,0,0,1,15.76,25.7Zm5.93-2.1a1,1,0,0,1-.61-1.7l4.37-3.56-4.37-3.56a1,1,0,0,1,1.21-1.49l5.29,4.31a1,1,0,0,1,0,1.49l-5.29,4.31A1,1,0,0,1,21.69,23.6Zm-9.7,0a1,1,0,0,1-.61-.22L6.09,19.08a1,1,0,0,1,0-1.49l5.29-4.31a1,1,0,1,1,1.21,1.49L8.22,18.33l4.37,3.56A1,1,0,0,1,12,23.6Z" />
                        </svg>
                    </div>

                    <h4 class="stats__heading counter">
                   <?php echo fw_get_db_settings_option('projects');?>
               </h4>
                    <p class="stats__txt">
                        Выполненных проекта
                    </p>
                </div>
            </div>
            <!-- stats__column-->

            <div class="stats__column col-sm-4 col-xs-4">
                <div class="stats__content">
                    <div class="stats__figure">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.77 33.64">
                            <path class="cls-1" d="M13.38,33.64a1,1,0,0,1-.68-.28c-3-3-9.62-10.64-11.3-14a13.25,13.25,0,0,1-1.41-6,13.38,13.38,0,1,1,26.77,0,13.25,13.25,0,0,1-1.41,6c-1.68,3.35-8.27,11-11.3,14A1,1,0,0,1,13.38,33.64Zm0-31.72A11.48,11.48,0,0,0,1.92,13.38a11.34,11.34,0,0,0,1.21,5.12c1.45,2.9,7.15,9.56,10.26,12.8,3.11-3.24,8.81-9.9,10.26-12.8A11.47,11.47,0,0,0,13.38,1.92Z" />
                            <path class="cls-1" d="M18.42,21.4a1,1,0,0,1-.42-.1l-4.62-2.24L8.77,21.31a1,1,0,0,1-1.37-1l.7-5.08-3.56-3.7a1,1,0,0,1,.52-1.61l5-.9L12.54,4.5a1,1,0,0,1,1.69,0L16.65,9l5.05.9a1,1,0,0,1,.52,1.61l-3.56,3.7.7,5.08a1,1,0,0,1-1,1.09Zm-5-4.36a1,1,0,0,1,.42.1l3.42,1.66L16.7,15a1,1,0,0,1,.26-.8l2.63-2.74-3.74-.67a1,1,0,0,1-.68-.49L13.38,7l-1.79,3.35a1,1,0,0,1-.68.49l-3.74.67,2.63,2.74a1,1,0,0,1,.26.8l-.52,3.76L13,17.13A1,1,0,0,1,13.38,17Z" />
                        </svg>
                    </div>

                    <h4 class="stats__heading counter">
                   <?php echo fw_get_db_settings_option('years');?>
               </h4>
                    <p class="stats__txt">
                        Лет на рынке
                    </p>
                </div>
            </div>
            <!-- stats__column-->

            <div class="stats__column col-sm-4 col-xs-4">
                <div class="stats__content">
                    <div class="stats__figure">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.67 29.89">
                            <path class="cls-1" d="M32.71,29.89H1a1,1,0,0,1-1-1V1A1,1,0,0,1,1,0H32.71a1,1,0,0,1,1,1v28A1,1,0,0,1,32.71,29.89ZM1.92,28H31.75V8.54H1.92Zm0-21.36H31.75V1.92H1.92Z" />
                            <path class="cls-2" d="M28.71,3.17A1.18,1.18,0,0,0,27.58,4.4a1.14,1.14,0,1,0,2.26,0,1.18,1.18,0,0,0-1.13-1.22Z" />
                            <path class="cls-2" d="M25,3.17A1.18,1.18,0,0,0,23.9,4.4a1.14,1.14,0,1,0,2.26,0A1.18,1.18,0,0,0,25,3.17Z" />
                            <path class="cls-1" d="M25.1,29.89H8.56a1,1,0,0,1-.29,0L5.66,29.6a1,1,0,0,1-.84-.74,10.75,10.75,0,0,1,0-4.85,1,1,0,0,1,.85-.74l2.19-.21q.11-.3.25-.6l-1.4-1.7a1,1,0,0,1-.07-1.12A10.78,10.78,0,0,1,10,16.22a1,1,0,0,1,1.12.08l1.69,1.4.6-.25.21-2.19a1,1,0,0,1,.74-.85,10.83,10.83,0,0,1,4.85,0,1,1,0,0,1,.74.85l.21,2.19.6.25,1.69-1.4a1,1,0,0,1,1.12-.08A10.78,10.78,0,0,1,27,19.65,1,1,0,0,1,27,20.77l-1.4,1.7q.13.29.25.6l2.19.21a1,1,0,0,1,.85.74,10.75,10.75,0,0,1,0,4.85,1,1,0,0,1-.84.74l-2.62.25A.91.91,0,0,1,25.1,29.89Zm-3-1.92H24.9L25,28l2.09-.2a8.83,8.83,0,0,0,0-2.64L25,24.92a1,1,0,0,1-.83-.68,7.55,7.55,0,0,0-.6-1.44,1,1,0,0,1,.1-1.07L25,20.1a8.86,8.86,0,0,0-1.87-1.87l-1.62,1.34a1,1,0,0,1-1.07.1,7.66,7.66,0,0,0-1.45-.6,1,1,0,0,1-.68-.83l-.2-2.09a8.89,8.89,0,0,0-2.64,0l-.2,2.09a1,1,0,0,1-.68.83,7.72,7.72,0,0,0-1.45.6,1,1,0,0,1-1.07-.1L10.5,18.23a8.81,8.81,0,0,0-1,.87,8.7,8.7,0,0,0-.86,1L10,21.72a1,1,0,0,1,.1,1.07,7.63,7.63,0,0,0-.6,1.44,1,1,0,0,1-.83.68l-2.09.2a8.83,8.83,0,0,0,0,2.64l2.09.2.12,0h2.77a5.52,5.52,0,1,1,10.6,0Zm-8.55,0h6.51a3.6,3.6,0,1,0-6.51,0Zm.78-9.82h0Z" />
                        </svg>
                    </div>

                    <h4 class="stats__heading counter">
                   <?php echo fw_get_db_settings_option('supports');?>
               </h4>
                    <p class="stats__txt">
                        Проектов на обслуживании
                    </p>
                </div>
            </div>
            <!-- stats__column-->
        </div>
    </div>
</section>

<section class="experience container">
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

<section class="blog-listing">
    <div class="container">
        <h2 class="blog-listing__header">Последнее из блога</h2>
        <div class="blog-listing__row row row-flex row-flex-wrap">

           <?php               
                $args = array( 'post_type' => 'post', 'posts_per_page' => 4 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    
            <div class="blog-listing__column col-md-3 col-xs-6">
                <a class="blog-listing__content" href="<?php echo get_permalink(); ?>">
                    <figure class="blog-listing__image">
                        <?php the_post_thumbnail() ?>
                    </figure>
                    <h4 class="blog-listing__heading">
                        <?php the_title(); ?>
                    </h4>
                    <div class="blog-listing__txt">
                        <?php echo get_the_excerpt(); ?>
                        
                    </div>
                </a>
            </div>
            <!-- blog-listing__column-->
            
            <?php
                endwhile;
            ?>

        </div>
    </div>
</section>

<?php
get_sidebar();
get_footer();