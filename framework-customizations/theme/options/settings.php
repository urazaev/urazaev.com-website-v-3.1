<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
    'general' => array(
        'title' => __('Общие настройки', 'unyson'),
        'type' => 'tab',
        'options' => array(
            'telephone' => array(
                'label' => __('Телефон', '{domain}'),
                'desc'  => __('Например +99893 1727887', '{domain}'),
                'type'  => 'text',
//                'value' => 'Default value'
            ),
            'skype' => array(
                'label' => __('Skype', '{domain}'),
                'desc'  => __('Например ur-studio', '{domain}'),
                'type'  => 'text',
//                'value' => 'Default value'
            ),
            'email' => array(
                'label' => __('Skype', '{domain}'),
                'desc'  => __('Например alexander@urazaev.com', '{domain}'),
                'type'  => 'text',
//                'value' => 'Default value'
            ),
            'adress' => array(
                'label' => __('Адрес', '{domain}'),
                'desc'  => __('Текст с адресом', '{domain}'),
                'type'  => 'text',
//                'value' => 'Default value'
            ),
            'adress_full' => array(
                'label' => __('Адрес полный', '{domain}'),
                'desc'  => __('Текст с адресом', '{domain}'),
                'type'  => 'textarea',
//                'value' => 'Default value'
            ),
            'facebook' => array(
                'label' => __('Facebook', '{domain}'),
                'desc'  => __('Ссылка на социальную сеть', '{domain}'),
                'type'  => 'text',
//                'value' => 'Default value'
            ),
            'instagram' => array(
                'label' => __('Instagram', '{domain}'),
                'desc'  => __('Ссылка на социальную сеть', '{domain}'),
                'type'  => 'text',
//                'value' => 'Default value'
            ),
            'twitter' => array(
                'label' => __('Twitter', '{domain}'),
                'desc'  => __('Ссылка на социальную сеть', '{domain}'),
                'type'  => 'text',
//                'value' => 'Default value'
            ),
            'vk' => array(
                'label' => __('Vk', '{domain}'),
                'desc'  => __('Ссылка на социальную сеть', '{domain}'),
                'type'  => 'text',
//                'value' => 'Default value'
            ),
            'projects' => array(
                'label' => __('Выполненно проектов', '{domain}'),
                'desc'  => __('Только цифры', '{domain}'),
                'type'  => 'text',
//                'value' => 'Default value'
            ),
            'years' => array(
                'label' => __('Лет на рынке', '{domain}'),
                'desc'  => __('Только цифры', '{domain}'),
                'type'  => 'text',
//                'value' => 'Default value'
            ),
            'supports' => array(
                'label' => __('Проектов на обслуживании', '{domain}'),
                'desc'  => __('Только цифры', '{domain}'),
                'type'  => 'text',
//                'value' => 'Default value'
            ),
            'counters' => array(
                'label' => __('Счетчики статистики', '{domain}'),
                'desc'  => __('Выведу до закрывающего body', '{domain}'),
                'type'  => 'textarea',
//                'value' => 'Default value'
            ),
            'share' => array(
                'label' => __('Социальные кнопки', '{domain}'),
                'desc'  => __('Код', '{domain}'),
                'type'  => 'textarea',
//                'value' => 'Default value'
            ),
    ))
);