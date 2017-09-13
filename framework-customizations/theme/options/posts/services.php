<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
    'general' => array(
        'title' => __('Внешний вид', 'unyson'),
        'type' => 'tab',
//        'context' => 'side',
        'options' => array(
            'color' => array(
                'label' => __('Цвет фона', '{domain}'),
                'desc'  => __('Например: #ff6600', '{domain}'),
                'type'  => 'color-picker',
                'value' => '#FF0000',
                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                // palette colors array
//                'palettes' => array( '#ba4e4e', '#0ce9ed'),
            )
    ))
);