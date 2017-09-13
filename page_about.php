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
 * Template Name: About
 */

get_header(); ?>

    <main>
        <article>
            <header class="heading heading_page_open heading_color12">
                <div class="container">
                    <div class="heading__row row">
                        <div class="heading__txt-column col-sm-6">
                            <?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); } ?>
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

            <section class="content about-content-open container">
                <div class="row">
                    <div class="col-sm-12">
                       <?php the_content(); ?>
                    </div>
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
        </article>
    </main>

    <?php
get_sidebar();
get_footer();