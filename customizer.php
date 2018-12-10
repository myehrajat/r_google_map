<?php
function RentIt_Google_Map_customizer($wp_customize){
	
    /*******************************************************************
     * Google Map Panel
     *******************************************************************/

	
	
	
	
	$tmp_sectionname = "map";
	/***********/
	$tmp_settingname = $tmp_sectionname . '_api';

    $wp_customize->add_setting($tmp_settingname, array('default' => 'AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs',
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Google map API', 'rentit'),
        'section' => $tmp_sectionname . "_section",
        'settings' => $tmp_settingname,
		'priority' => 1,
        'type' => 'text',
    ));
	
	/***********/
	$tmp_settingname = $tmp_sectionname . '_min_zoom';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Minimun zoom level', 'rentit'),
        'section' => $tmp_sectionname . "_section",
        'settings' => $tmp_settingname,
		'priority' => 99,
        'type' => 'text',
    ));
	/***********/
	$tmp_settingname = $tmp_sectionname . '_max_zoom';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Maximum zoom level', 'rentit'),
        'section' => $tmp_sectionname . "_section",
        'settings' => $tmp_settingname,
		'priority' => 99,
        'type' => 'text',
    ));
	/***********/
	$tmp_settingname = $tmp_sectionname . '_zoom_control';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Show zoom control', 'rentit'),
        'section' => $tmp_sectionname . "_section",
        'settings' => $tmp_settingname,
		'priority' => 99,
		'type' => 'checkbox',
    ));
	/***********/
	$tmp_settingname = $tmp_sectionname . '_zoom_scroll';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Zoom by scroll', 'rentit'),
        'section' => $tmp_sectionname . "_section",
        'settings' => $tmp_settingname,
		'priority' => 99,
		'type' => 'checkbox',
    ));	/***********/
	$tmp_settingname = $tmp_sectionname . '_map_type_control';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Show map type control', 'rentit'),
        'section' => $tmp_sectionname . "_section",
        'settings' => $tmp_settingname,
		'priority' => 99,
        'type' => 'checkbox',
    ));	/***********/
	$tmp_settingname = $tmp_sectionname . '_sensor';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Sensor permission', 'rentit'),
        'section' => $tmp_sectionname . "_section",
        'settings' => $tmp_settingname,
		'priority' => 99,
        'type' => 'checkbox',
    ));	/***********/
	$tmp_settingname = $tmp_sectionname . '_language';

    $wp_customize->add_setting($tmp_settingname, array('default' => 'en',
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Map language', 'rentit'),
        'description' => esc_html__('The language of map', 'rentit'),
        'section' => $tmp_sectionname . "_section",
        'settings' => $tmp_settingname,
		'priority' => 99,
        'type' => 'select',
		'choices' => array(
        'ar' => esc_html__('ARABIC', 'rentit'),
        'eu' => esc_html__('BASQUE', 'rentit'),
        'bg' => esc_html__('BULGARIAN', 'rentit'),
        'bn' => esc_html__('BENGALI', 'rentit'),
        'ca' => esc_html__('CATALAN', 'rentit'),
        'cs' => esc_html__('CZECH', 'rentit'),
        'da' => esc_html__('DANISH', 'rentit'),
        'de' => esc_html__('GERMAN', 'rentit'),
        'el' => esc_html__('GREEK', 'rentit'),
        'en' => esc_html__('ENGLISH', 'rentit'),
        'en-AU' => esc_html__('ENGLISH (AUSTRALIAN)', 'rentit'),
        'en-GB' => esc_html__('ENGLISH (GREAT BRITAIN)', 'rentit'),
        'es' => esc_html__('SPANISH', 'rentit'),
        'eu' => esc_html__('BASQUE', 'rentit'),
        'fa' => esc_html__('FARSI', 'rentit'),
        'fi' => esc_html__('FINNISH', 'rentit'),
        'fil' => esc_html__('FILIPINO', 'rentit'),
        'fr' => esc_html__('FRENCH', 'rentit'),
        'gl' => esc_html__('GALICIAN', 'rentit'),
        'gu' => esc_html__('GUJARATI', 'rentit'),
        'hi' => esc_html__('HINDI', 'rentit'),
        'hr' => esc_html__('CROATIAN', 'rentit'),
        'hu' => esc_html__('HUNGARIAN', 'rentit'),
        'id' => esc_html__('INDONESIAN', 'rentit'),
        'it' => esc_html__('ITALIAN', 'rentit'),
        'iw' => esc_html__('HEBREW', 'rentit'),
        'ja' => esc_html__('JAPANESE', 'rentit'),
        'kn' => esc_html__('KANNADA', 'rentit'),
        'ko' => esc_html__('KOREAN', 'rentit'),
        'lt' => esc_html__('LITHUANIAN', 'rentit'),
        'lv' => esc_html__('LATVIAN', 'rentit'),
        'ml' => esc_html__('MALAYALAM', 'rentit'),
        'mr' => esc_html__('MARATHI', 'rentit'),
        'nl' => esc_html__('DUTCH', 'rentit'),
        'no' => esc_html__('NORWEGIAN', 'rentit'),
        'pl' => esc_html__('POLISH', 'rentit'),
        'pt' => esc_html__('PORTUGUESE', 'rentit'),
        'pt-BR' => esc_html__('PORTUGUESE (BRAZIL)', 'rentit'),
        'pt-PT' => esc_html__('PORTUGUESE (PORTUGAL)', 'rentit'),
        'ro' => esc_html__('ROMANIAN', 'rentit'),
        'ru' => esc_html__('RUSSIAN', 'rentit'),
        'sk' => esc_html__('SLOVAK', 'rentit'),
        'sl' => esc_html__('SLOVENIAN', 'rentit'),
        'sr' => esc_html__('SERBIAN', 'rentit'),
        'sv' => esc_html__('SWEDISH', 'rentit'),
        'tl' => esc_html__('TAGALOG', 'rentit'),
        'ta' => esc_html__('TAMIL', 'rentit'),
        'te' => esc_html__('TELUGU', 'rentit'),
        'th' => esc_html__('THAI', 'rentit'),
        'tr' => esc_html__('TURKISH', 'rentit'),
        'uk' => esc_html__('UKRAINIAN', 'rentit'),
        'vi' => esc_html__('VIETNAMESE', 'rentit'),
        'zh-CN' => esc_html__('CHINESE (SIMPLIFIED)', 'rentit'),
        'zh-TW' => esc_html__('CHINESE (TRADITIONAL)', 'rentit'),    
		)
	));

}
add_action('customize_register', 'RentIt_Google_Map_customizer');