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
 * Template Name: Contacts
 */

get_header(); ?>

<main>
    <article>
            <header class="heading heading_page_open heading_color16">
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

            <section class="contacts content container">
                <div class="row">
                    <div class="contacts__contacts col-sm-6">
                        <h2 class="content__h2--wborder">Контакты</h2>
                        <p><i class="fa fa-phone contacts__fa"></i> Телефон:
                            <a href="tel:<?php echo fw_get_db_settings_option('telephone');?>">
                                <?php echo fw_get_db_settings_option('telephone');?>
                            </a>
                            <a href="https://t.me/UrazaevProduction" class="ntd">
                                <svg enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" width="20" height="20" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="contacts__vector-ico">
                                    <g>
                                        <circle cx="50" cy="50" fill="#139BD0" r="45" />
                                        <path clip-rule="evenodd" d="M51.474,60.754c-1.733,1.688-3.451,3.348-5.153,5.021   c-0.595,0.586-1.264,0.91-2.118,0.865c-0.583-0.031-0.909-0.287-1.088-0.84c-1.304-4.047-2.627-8.084-3.924-12.135   c-0.126-0.393-0.312-0.584-0.71-0.707c-3.072-0.938-6.138-1.898-9.199-2.871c-0.471-0.15-0.946-0.346-1.353-0.623   c-0.629-0.426-0.721-1.121-0.157-1.621c0.521-0.461,1.143-0.863,1.789-1.119c3.755-1.488,7.53-2.928,11.299-4.381   c9.565-3.693,19.13-7.383,28.696-11.076c1.819-0.703,3.217,0.287,3.028,2.254c-0.121,1.258-0.447,2.496-0.71,3.738   c-2.077,9.807-4.156,19.615-6.244,29.42c-0.496,2.328-2.131,2.936-4.047,1.523c-3.209-2.365-6.415-4.738-9.622-7.107   C51.808,60.984,51.649,60.877,51.474,60.754z M44.271,63.732c0.036-0.01,0.072-0.02,0.108-0.029   c0.02-0.092,0.049-0.182,0.057-0.273c0.206-2.223,0.424-4.445,0.603-6.672c0.04-0.496,0.21-0.848,0.583-1.182   c2.958-2.645,5.898-5.307,8.844-7.963c3.261-2.941,6.523-5.879,9.772-8.832c0.201-0.182,0.285-0.492,0.423-0.744   c-0.306-0.033-0.634-0.156-0.912-0.084c-0.379,0.098-0.738,0.318-1.076,0.531c-7.197,4.533-14.388,9.074-21.59,13.598   c-0.407,0.256-0.483,0.473-0.328,0.92c0.531,1.525,1.014,3.064,1.515,4.6C42.937,59.646,43.604,61.689,44.271,63.732z" fill="#FFFFFF" fill-rule="evenodd" />
                                    </g>
                                </svg>
                            </a>
                            <a href="whatsapp://?call+998931727887"  class="ntd"><svg version="1.1" viewBox="0 0 60 60" width="20" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="contacts__vector-ico">
                                <title/>
                                <defs/>
                                <g fill="none" fill-rule="evenodd" id="flat" stroke="none" stroke-width="1">
                                    <g id="whatsapp">
                                        <path d="M30,60 C46.5685433,60 60,46.5685433 60,30 C60,13.4314567 46.5685433,0 30,0 C13.4314567,0 0,13.4314567 0,30 C0,46.5685433 13.4314567,60 30,60 Z" fill="#57BB63" />
                                        <path d="M30.0712615,46.2210462 C27.2108308,46.2210462 24.5235692,45.4899692 22.1856,44.2068923 L13.1538462,47.0769231 L16.0980923,38.3918769 C14.6130462,35.9523692 13.7575385,33.0915692 13.7575385,30.0336 C13.7575385,21.0934154 21.0612923,13.8461538 30.0716308,13.8461538 C39.0808615,13.8461538 46.3846154,21.0934154 46.3846154,30.0336 C46.3846154,38.9737846 39.0812308,46.2210462 30.0712615,46.2210462 Z M30.0712615,16.4241231 C22.5079385,16.4241231 16.3558154,22.5293538 16.3558154,30.0336 C16.3558154,33.0114462 17.3265231,35.7692308 18.9681231,38.0130462 L17.2548923,43.0670769 L22.5252923,41.3918769 C24.6912,42.8137846 27.2854154,43.6430769 30.0712615,43.6430769 C37.6334769,43.6430769 43.7867077,37.5382154 43.7867077,30.0339692 C43.7867077,22.5297231 37.6334769,16.4241231 30.0712615,16.4241231 L30.0712615,16.4241231 Z M38.3088,33.7617231 C38.2083692,33.5966769 37.9417846,33.4969846 37.5426462,33.2987077 C37.1424,33.1004308 35.1758769,32.1400615 34.8099692,32.0082462 C34.4429538,31.8760615 34.176,31.8092308 33.9097846,32.2065231 C33.6435692,32.6038154 32.8770462,33.4969846 32.6433231,33.7617231 C32.4099692,34.0268308 32.1769846,34.0600615 31.7771077,33.8614154 C31.3776,33.6631385 30.0889846,33.2440615 28.5611077,31.8923077 C27.3725538,30.8407385 26.5698462,29.5425231 26.3368615,29.1448615 C26.1035077,28.7479385 26.3121231,28.5334154 26.5122462,28.3358769 C26.6920615,28.1579077 26.9121231,27.8724923 27.1122462,27.6409846 C27.3123692,27.4091077 27.3788308,27.2440615 27.5117538,26.9789538 C27.6454154,26.7142154 27.5785846,26.4827077 27.4785231,26.2836923 C27.3784615,26.0854154 26.5783385,24.1329231 26.2452923,23.3383385 C25.9122462,22.5444923 25.5795692,22.6766769 25.3458462,22.6766769 C25.1124923,22.6766769 24.8459077,22.6434462 24.5793231,22.6434462 C24.3127385,22.6434462 23.8792615,22.7427692 23.5126154,23.1396923 C23.1463385,23.5369846 22.1136,24.4969846 22.1136,26.4491077 C22.1136,28.4016 23.5458462,30.288 23.7463385,30.5523692 C23.9460923,30.8167385 26.5118769,34.9536 30.5767385,36.5424 C34.6430769,38.1308308 34.6430769,37.6009846 35.3763692,37.5348923 C36.1085538,37.4688 37.7412923,36.5752615 38.0754462,35.6488615 C38.4081231,34.7217231 38.4081231,33.9271385 38.3088,33.7617231 L38.3088,33.7617231 Z" fill="#FFFFFF" />
                                    </g>
                                </g>
                            </svg>
                            </a>
                        </p>
                        <p><i class="fa fa-envelope contacts__fa"></i> Email:
                            <a href="mailto:<?php echo fw_get_db_settings_option('email');?>">
                                <?php echo fw_get_db_settings_option('email');?>
                            </a>
                        </p>
                        <p><i class="fa fa-skype contacts__fa"></i> Skype: <a href="callto:ur-studio"><?php echo fw_get_db_settings_option('skype');?></a></p>
                    </div>
                    <div class="contacts__adress col-sm-6">
                        <h2 class="content__h2--wborder">Адрес</h2>
                        <?php echo fw_get_db_settings_option('adress_full');?>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="contacts_worktime col-sm-6">
                        <h2 class="content__h2--wborder">Режим работы</h2>
                        <?php the_content(); ?> 
                    </div>
                    <div class="contacts__socials col-sm-6">
                        <h2 class="content__h2--wborder">Социальные сети</h2> 
                            <a class="social-link social-link--facebook" href="<?php echo fw_get_db_settings_option('facebook');?>" target="_blank">
                                <svg  class="social-link__ico" baseProfile="tiny" id="Layer_1" version="1.2" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25"><g><path d="M13,10h3v3h-3v7h-3v-7H7v-3h3V8.745c0-1.189,0.374-2.691,1.118-3.512C11.862,4.41,12.791,4,13.904,4H16v3h-2.1   C13.402,7,13,7.402,13,7.899V10z"/></g></svg>
                            </a>
                            <!--
                            <a class="social-link social-link--vk" href="<?php echo fw_get_db_settings_option('vk');?>" target="_blank">
                                <svg class="social-link__ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"  width="25" height="25">
                                
                                <g id="l2v2" data-name="Слой 1">    
                                
                              <path clip-rule="evenodd" d="M16,24c1,0,1-1.441,1-2c0-1,1-2,2-2s2.715,1.715,4,3c1,1,1,1,2,1s3,0,3,0  s2-0.076,2-2c0-0.625-0.685-1.685-3-4c-2-2-3.026-0.967,0-5c1.843-2.456,3.184-4.681,2.954-5.323C29.734,7.064,24.608,6.088,24,7  c-2,3-2.367,3.735-3,5c-1,2-1.099,3-2,3c-0.909,0-1-1.941-1-3c0-3.306,0.479-5.644-1-6c0,0-2,0-3,0c-1.61,0-3,1-3,1  s-1.241,0.968-1,1c0.298,0.04,2-0.414,2,1c0,1,0,2,0,2s0.009,4-1,4c-1,0-3-4-5-7C5.215,6.823,5,7,4,7C2.928,7,2.001,7.042,1,7.042  C0,7.042-0.128,7.679,0,8c2,5,3.437,8.14,7.237,12.096C10.722,23.725,13.05,23.918,15,24C15.5,24.021,15,24,16,24z" fill-rule="evenodd" id="VK"/
                                </g>
                                
                                </svg>
                            </a>
                            -->
                            <a class="social-link social-link--twitter" href="<?php echo fw_get_db_settings_option('twitter');?>" target="_blank">
                                <svg  class="social-link__ico" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  width="25" height="25"><path d="M196.9,462C317.2,462,383,362.3,383,275.9c0-2.8,0-5.6-0.2-8.5c12.8-9.3,23.8-20.7,32.6-33.9  c-11.9,5.3-24.6,8.8-37.6,10.3c13.7-8.2,23.9-21,28.8-36.2c-12.8,7.6-26.9,13-41.5,15.9c-24.8-26.3-66.2-27.6-92.5-2.8  c-17,16-24.2,39.8-18.9,62.5c-52.6-2.6-101.6-27.5-134.8-68.3c-17.4,29.9-8.5,68.1,20.2,87.3c-10.4-0.3-20.6-3.1-29.7-8.2  c0,0.3,0,0.5,0,0.8c0,31.1,22,57.9,52.5,64.1c-9.6,2.6-19.7,3-29.5,1.1c8.6,26.6,33.1,44.9,61.1,45.4  c-23.2,18.2-51.8,28.1-81.2,28.1c-5.2,0-10.4-0.3-15.6-0.9C126.5,451.8,161.3,462,196.9,462" id="XMLID_22_"/></svg>
                            </a>
                            <!--
                            <a class="social-link social-link--instagram" href="<?php echo fw_get_db_settings_option('instagram');?>" target="_blank">
                                <svg  class="social-link__ico" data-name="Layer 21" height="24" id="Layer_21" viewBox="0 0 24 24" width="25" height="25" xmlns="http://www.w3.org/2000/svg"><title/><path d="M15.5,3h-7A5.5,5.5,0,0,0,3,8.5v7A5.5,5.5,0,0,0,8.5,21h7A5.5,5.5,0,0,0,21,15.5v-7A5.5,5.5,0,0,0,15.5,3Zm4,12.5a4.00454,4.00454,0,0,1-4,4h-7a4.00454,4.00454,0,0,1-4-4v-7a4.0045,4.0045,0,0,1,4-4h7a4.0045,4.0045,0,0,1,4,4Z"/><path d="M12,7.5A4.5,4.5,0,1,0,16.5,12,4.5,4.5,0,0,0,12,7.5ZM12,15a3,3,0,1,1,3-3A3.0034,3.0034,0,0,1,12,15Z"/><circle cx="16.70001" cy="7.29999" r="1"/></svg>
                            </a>
-->
                    </div>
                </div>
                <div class="row">
                    <div class="contacts-column col-sm-6">
                        <h2 class="content__h2--wborder">Обратная связь</h2>
                        <div class="feedback-form">
                            <?php echo do_shortcode( '[contact-form-7 id="1786" title="Обратная связь" html_class="super-forms"]' ); ?>
                        </div>
                    </div>
                    <div class="contacts-column col-sm-6">
                        <h2 class="content__h2--wborder">Схема проезда</h2>
                        <section class="map" id="map">

                        </section>

                    </div>
                </div>

            </section>
        </article>
</main>

    <?php
get_sidebar();
get_footer();