<?php
/**
 * Understrap Theme Customizer
 *
 * @package understrap
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'understrap_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function understrap_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
}
add_action( 'customize_register', 'understrap_customize_register' );

if ( ! function_exists( 'understrap_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function understrap_theme_customize_register( $wp_customize ) {

		// Theme layout settings.
		$wp_customize->add_section( 'understrap_theme_layout_options', array(
			'title'       => __( 'Theme Layout Settings', 'understrap' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Container width and sidebar defaults', 'understrap' ),
			'priority'    => 160,
		) );

		 //select sanitization function
        function understrap_theme_slug_sanitize_select( $input, $setting ){
         
            //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
            $input = sanitize_key($input);
 
            //get the list of possible select options 
            $choices = $setting->manager->get_control( $setting->id )->choices;
                             
            //return input if valid or return default option
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
             
        }

		$wp_customize->add_setting( 'understrap_container_type', array(
			'default'           => 'container',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'understrap_container_type', array(
					'label'       => __( 'Container Width', 'understrap' ),
					'description' => __( "Choose between Bootstrap's container and container-fluid", 'understrap' ),
					'section'     => 'understrap_theme_layout_options',
					'settings'    => 'understrap_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __( 'Fixed width container', 'understrap' ),
						'container-fluid' => __( 'Full width container', 'understrap' ),
					),
					'priority'    => '10',
				)
			) );

		$wp_customize->add_setting( 'understrap_sidebar_position', array(
			'default'           => 'right',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_text_field',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'understrap_sidebar_position', array(
					'label'       => __( 'Sidebar Positioning', 'understrap' ),
					'description' => __( "Set sidebar's default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.",
					'understrap' ),
					'section'     => 'understrap_theme_layout_options',
					'settings'    => 'understrap_sidebar_position',
					'type'        => 'select',
					'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
					'choices'     => array(
						'right' => __( 'Right sidebar', 'understrap' ),
						'left'  => __( 'Left sidebar', 'understrap' ),
						'both'  => __( 'Left & Right sidebars', 'understrap' ),
						'none'  => __( 'No sidebar', 'understrap' ),
					),
					'priority'    => '20',
				)
			) );
	}
} // endif function_exists( 'understrap_theme_customize_register' ).
add_action( 'customize_register', 'understrap_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'understrap_customize_preview_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function understrap_customize_preview_js() {
		wp_enqueue_script( 'understrap_customizer', get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ), '20130508', true );
	}
}
add_action( 'customize_preview_init', 'understrap_customize_preview_js' );


if ( ! function_exists( 'customize_contact_register' ) ) {
    function customize_contact_register($wp_customize)
    {
        $wp_customize -> add_section(
            'contact_text_section', array(
            'title' => __('Дані у нижній частині сайту'),
            'description' => __('Напишіть контактну інформацію. Ця інформація автоматично відображатиметься на сторінці контактів')
        ));


        $wp_customize -> add_setting('form_name', array(
            'default' => ''
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'form_name', array(
                'type'=>'text',
                'label' => __("Назва форми зворотнього зв'язку на сторінці Контактів"),
                'section' => 'contact_text_section',
                'settings' => 'form_name',
            )));

		$wp_customize -> add_setting('about_us', array(
			'default' => ''
		));
		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'about_us', array(
				'type'=>'text',
				'label' => __('Коротка інформація про компанію'),
				'section' => 'contact_text_section',
				'settings' => 'about_us',
			)));

		$wp_customize -> add_setting('nav_name', array(
			'default' => '',
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'nav_name', array(
				'type'=>'text',
				'label' => __('Заголовок до блоку навігації по сайту'),
				'section' => 'contact_text_section',
				'settings' => 'nav_name',
			)));

		$wp_customize -> add_setting('info_name', array(
			'default' => '',
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'info_name', array(
				'type'=>'text',
				'label' => __('Заголовок до блоку контактів'),
				'section' => 'contact_text_section',
				'settings' => 'info_name',
			)));

        $wp_customize -> add_setting('address_city', array(
            'default' => '',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'address_city', array(
                'type'=>'text',
                'label' => __('Місто, країна'),
                'section' => 'contact_text_section',
                'settings' => 'address_city',
            )));

        $wp_customize -> add_setting('address_text', array(
            'default' => '',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'address_text', array(
                'type'=>'text',
                'label' => __('Адреса місця знаходження компанії'),
                'section' => 'contact_text_section',
                'settings' => 'address_text',
            )));

        $wp_customize -> add_setting('phone_number', array(
            'default' => '+38 '
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'phone_number', array(
                'type'=>'text',
                'label' => __('Номер телефону'),
                'section' => 'contact_text_section',
                'settings' => 'phone_number',
            )));

        $wp_customize -> add_setting('phone_number2', array(
            'default' => '+38 '
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'phone_number2', array(
                'type'=>'text',
                'label' => __('Номер телефону'),
                'section' => 'contact_text_section',
                'settings' => 'phone_number2',
            )));

        $wp_customize -> add_setting('email_address', array(
        'default' => 'example@gmail.com'
    ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'email_address', array(
                'type'=>'text',
                'label' => __('Ваша email адреса'),
                'section' => 'contact_text_section',
                'settings' => 'email_address',
            )));

        $wp_customize -> add_setting('fb_link', array(
            'default' => ''
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'fb_link', array(
                'type'=>'text',
                'label' => __('Посилання на сторінку у Facebook'),
                'section' => 'contact_text_section',
                'settings' => 'fb_link',
            )));


        $wp_customize -> add_setting('google_link', array(
            'default' => ''
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'google_link', array(
                'type'=>'text',
                'label' => __('Посилання на акаунт в Google+'),
                'section' => 'contact_text_section',
                'settings' => 'google_link',
            )));

        $wp_customize -> add_setting('twitter_link', array(
            'default' => '',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'twitter_link', array(
                'type'=>'text',
                'label' => __('Посилання на акаунт в Twitter'),
                'section' => 'contact_text_section',
                'settings' => 'twitter_link',
            )));


        $wp_customize -> add_setting('in_link', array(
            'default' => '',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'in_link', array(
                'type'=>'text',
                'label' => __('Посилання на акаунт Instagram'),
                'section' => 'contact_text_section',
                'settings' => 'in_link',
            )));

        $wp_customize -> add_setting('youtube_link', array(
            'default' => ''
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'youtube_link', array(
                'type'=>'text',
                'label' => __('Посилання на Youtube канал'),
                'section' => 'contact_text_section',
                'settings' => 'youtube_link',
            )));

        $wp_customize->add_setting('img-upload');
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'img-upload',
                array(
                    'label' => 'Завантажте логотип партнеру №1',
                    'section' => 'contact_text_section',
                    'settings' => 'img-upload'
                )
            ));

        $wp_customize -> add_setting('mentors-link', array(
            'default' => ''
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'mentors-link', array(
                'type'=>'text',
                'label' => __('Посилання на сторінку партнера'),
                'section' => 'contact_text_section',
                'settings' => 'mentors-link',
            )));

        $wp_customize->add_setting('img-upload2');
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'img-upload2',
                array(
                    'label' => 'Завантажте логотип партнеру №2',
                    'section' => 'contact_text_section',
                    'settings' => 'img-upload2'
                )
            ));

        $wp_customize -> add_setting('mentors-link2', array(
            'default' => ''
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'mentors-link2', array(
                'type'=>'text',
                'label' => __('Посилання на сторінку партнера №2'),
                'section' => 'contact_text_section',
                'settings' => 'mentors-link2',
            )));

        $wp_customize->add_setting('img-upload3');
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'img-upload3',
                array(
                    'label' => 'Завантажте логотип партнеру №3',
                    'section' => 'contact_text_section',
                    'settings' => 'img-upload3'
                )
            ));

        $wp_customize -> add_setting('mentors-link3', array(
            'default' => ''
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'mentors-link3', array(
                'type'=>'text',
                'label' => __('Посилання на сторінку партнера №3'),
                'section' => 'contact_text_section',
                'settings' => 'mentors-link3',
            )));

		$wp_customize -> add_setting('site-name', array(
			'default' => ''
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
				$wp_customize,
				'site-name', array(
				'type'=>'text',
				'label' => __('Інформативна частина'),
				'section' => 'contact_text_section',
				'settings' => 'site-name',
			)));
    }
}
add_action('customize_register', 'customize_contact_register');

//======= header customize =============

if ( ! function_exists( 'header_fields_register' ) ) {
    function header_fields_register($wp_customize)
    {
        $wp_customize -> add_section(
            'section_1', array(
                'title' => __('Текст в шапці сайту', 'ContactPage'),
                'description' => __('Тут можна вводити текст в шупку сайта')
            ));
//=====================================================================
        $wp_customize -> add_setting('header', array(
            'default' => ''
        ));
        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'header', array(
                    'type'=>'text',
                    'label' => __('Сам текст', 'Text'),
                    'section' => 'section_1',
                    'settings' => 'header',
                )));        
    }
}
add_action('customize_register', 'header_fields_register');