<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Urazaev_Production
 */

?>


<footer class="footer">
    <div class="footer__container container">
        <div class="footer__row row">

            <div class="footer__column footer__column_top col-sm-12">
                <div class="footer__content-wrapper">
                    <div class="footer__content">
                        <a class="footer__logo" href="/">
                            <img class="footer__logo-item" src="<?php echo get_template_directory_uri(); ?>/img/logo-normal-white.png" alt="Urazaev Production">
                        </a>
                        <p class="footer__sublogo">Разработка и продвижение веб сайтов - основанная на выработанных с годами, критериях качества. </p>
                        <p class="footer__stat"><?php echo fw_get_db_settings_option('years');?>  лет на рынке</p>
                        <p class="footer__stat"><?php echo fw_get_db_settings_option('projects');?>  выполненных проекта</p>
                    </div>
                </div>
            </div>
            <!-- footer__column-->

            <div class="footer__column col-sm-12">
                <div class="footer__content-wrapper">
                    <div class="footer__content">
                                
                    <?php /* Primary navigation */
                    wp_nav_menu( array(
                    'menu' => 'footer-menu',
	                'menu_class'      => '', 
                    'depth' => 2,
                    ));
                    ?>
 
                    </div>
                </div>
            </div>

            <div class="footer__column footer__column_bottom col-sm-12">
                <div class="footer__content-wrapper">
                    <div class="footer__content footer__content_contacts">
                        <p><i class="fa fa-envelope"></i> Email: <a href="mailto:<?php echo fw_get_db_settings_option('email');?>"><?php echo fw_get_db_settings_option('email');?></a>
                            <i class="fa fa-phone"></i> Телефон: <a href="tel:<?php echo fw_get_db_settings_option('telephone');?>"><?php echo fw_get_db_settings_option('telephone');?></a>
                            <i class="fa fa-map"></i> Адрес: <?php echo fw_get_db_settings_option('adress');?> 
                            <span class="footer__content_socials pull-right">
                            <a class="social-link social-link--footer social-link--facebook" href="<?php echo fw_get_db_settings_option('facebook');?>" target="_blank">
                                <svg  class="social-link__ico" baseProfile="tiny" id="Layer_1" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25"><g><path d="M13,10h3v3h-3v7h-3v-7H7v-3h3V8.745c0-1.189,0.374-2.691,1.118-3.512C11.862,4.41,12.791,4,13.904,4H16v3h-2.1   C13.402,7,13,7.402,13,7.899V10z"/></g></svg>
                            </a>
                            <!--
                            <a class="social-link social-link--footer social-link--vk" href="<?php echo fw_get_db_settings_option('vk');?>" target="_blank">
                                <svg class="social-link__ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"  width="25" height="25">
                                
                                <g id="l2v22" data-name="Слой 1">    
                                
                                <path d="M21.547 7h-3.29a.743.743 0 0 0-.655.392s-1.312 2.416-1.734 3.23C14.734 12.813 14 12.126 14 11.11V7.604A1.104 1.104 0 0 0 12.896 6.5h-2.474a1.982 1.982 0 0 0-1.751.813s1.256-.204 1.256 1.49c0 .419.022 1.626.041 2.64a.73.73 0 0 1-1.273.503 21.54 21.54 0 0 1-2.498-4.543.693.693 0 0 0-.63-.403h-2.99a.508.508 0 0 0-.48.685C3.005 10.175 6.916 18 11.38 18h1.879a.742.742 0 0 0 .742-.742v-1.135a.73.73 0 0 1 1.229-.531l2.248 2.113a1.09 1.09 0 0 0 .746.295h2.953c1.424 0 1.424-.988.647-1.753-.546-.538-2.518-2.617-2.518-2.617a1.019 1.019 0 0 1-.078-1.323c.637-.839 1.68-2.212 2.122-2.8.604-.804 1.698-2.507.198-2.507z"/>
                                </g>
                                
                                </svg>
                            </a>
                            
                            <a class="social-link social-link--footer social-link--twitter" href="<?php echo fw_get_db_settings_option('twitter');?>" target="_blank">
                                <svg  class="social-link__ico" id="Layer_11" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  width="25" height="25"><path d="M196.9,462C317.2,462,383,362.3,383,275.9c0-2.8,0-5.6-0.2-8.5c12.8-9.3,23.8-20.7,32.6-33.9  c-11.9,5.3-24.6,8.8-37.6,10.3c13.7-8.2,23.9-21,28.8-36.2c-12.8,7.6-26.9,13-41.5,15.9c-24.8-26.3-66.2-27.6-92.5-2.8  c-17,16-24.2,39.8-18.9,62.5c-52.6-2.6-101.6-27.5-134.8-68.3c-17.4,29.9-8.5,68.1,20.2,87.3c-10.4-0.3-20.6-3.1-29.7-8.2  c0,0.3,0,0.5,0,0.8c0,31.1,22,57.9,52.5,64.1c-9.6,2.6-19.7,3-29.5,1.1c8.6,26.6,33.1,44.9,61.1,45.4  c-23.2,18.2-51.8,28.1-81.2,28.1c-5.2,0-10.4-0.3-15.6-0.9C126.5,451.8,161.3,462,196.9,462" id="XMLID_22_"/></svg>
                            </a>
                            
                            <a class="social-link social-link--footer social-link--instagram" href="<?php echo fw_get_db_settings_option('instagram');?>" target="_blank">
                                <svg  class="social-link__ico" data-name="Layer 21" height="24" id="Layer_21" viewBox="0 0 24 24" width="25" xmlns="http://www.w3.org/2000/svg"><title/><path d="M15.5,3h-7A5.5,5.5,0,0,0,3,8.5v7A5.5,5.5,0,0,0,8.5,21h7A5.5,5.5,0,0,0,21,15.5v-7A5.5,5.5,0,0,0,15.5,3Zm4,12.5a4.00454,4.00454,0,0,1-4,4h-7a4.00454,4.00454,0,0,1-4-4v-7a4.0045,4.0045,0,0,1,4-4h7a4.0045,4.0045,0,0,1,4,4Z"/><path d="M12,7.5A4.5,4.5,0,1,0,16.5,12,4.5,4.5,0,0,0,12,7.5ZM12,15a3,3,0,1,1,3-3A3.0034,3.0034,0,0,1,12,15Z"/><circle cx="16.70001" cy="7.29999" r="1"/></svg>
                            </a>-->
                            </span>
                            </p>
                    </div>
                </div>
            </div>
            <!-- footer__column-->
            
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="order-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php echo do_shortcode( '[contact-form-7 id="6264" title="Заявка" html_class="super-forms"]' ); ?>
        </div>
        <!-- modal-content-->
    </div>
    <!-- modal-dialog-->
</div>
<!-- modal-->

<script type="text/javascript">
    jQuery(document).ready(function () {
        ContactForm.initContactForm();
        $('.stats').parallax({
            imageSrc: '<?php echo get_template_directory_uri(); ?>/img/stats.jpg'
        });
        $('.counter').counterUp({
            delay: 1,
            time: 300
        });
    });
</script>

<?php wp_footer(); ?>

<?php echo fw_get_db_settings_option('counters');?>

</body>
</html>