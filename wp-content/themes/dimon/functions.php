<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Dimon
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function dimon_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
    wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ));


//	// Register the IE11 polyfill loader.
//	wp_register_script(
//		'twenty-twenty-one-ie11-polyfills',
//		null,
//		array(),
//		wp_get_theme()->get( 'Version' ),
//		true
//	);

//	// Main navigation scripts.
//	if ( has_nav_menu( 'primary' ) ) {
//		wp_enqueue_script(
//			'twenty-twenty-one-primary-navigation-script',
//			get_template_directory_uri() . '/assets/js/primary-navigation.js',
//			array( 'twenty-twenty-one-ie11-polyfills' ),
//			wp_get_theme()->get( 'Version' ),
//			true
//		);
//	}

}
add_action( 'wp_enqueue_scripts', 'dimon_scripts' );









function dimon_register_theme_customizer( $wp_customize ) {
    $panels = [
        'panel_dimon' => [
            'priority'       => 500,
            'theme_supports' => '',
            'title'          => __( 'Dimon Content', 'dimon' ),
            'description'    => __( 'Here you can edit all or almost all content of this website', 'dimon' ),
            'sections' => [
                'section_socials' => [
                    'title'    => __('Social Links','dimon'),
                    'fields' => [
                        'field_social_yt' => [
                            'label'    => __( 'YouTube', 'dimon' ),
                            'type'     => 'text',
                        ],
                        'field_social_ig' => [
                            'label'    => __( 'Instagram', 'dimon' ),
                            'type'     => 'text',
                        ],
                        'field_social_fb' => [
                            'label'    => __( 'Facebook', 'dimon' ),
                            'type'     => 'text',
                        ],
                        'field_social_tt' => [
                            'label'    => __( 'TikTok', 'dimon' ),
                            'type'     => 'text',
                        ],
                        'field_social_tg' => [
                            'label'    => __( 'Telegram', 'dimon' ),
                            'type'     => 'text',
                        ],
                        'field_social_vb' => [
                            'label'    => __( 'Viber', 'dimon' ),
                            'type'     => 'text',
                        ],
                        'field_social_wa' => [
                            'label'    => __( 'WatsApp', 'dimon' ),
                            'type'     => 'text',
                        ],
                    ]
                ],
                'section_intro' => [
                    'title'    => __('Intro','dimon'),
                    'fields' => [
                        'field_slogan' => [
                            'label'    => __( 'Slogan', 'dimon' ),
                            'type'     => 'text',
                        ],
                        'field_publicity' => [
                            'label'    => __( 'Publicity', 'dimon' ),
                            'type'     => 'text',
                            'default'  => __( 'private', 'dimon' ),
                        ],
                        'field_occupation' => [
                            'label'    => __( 'Occupation', 'dimon' ),
                            'type'     => 'text',
                            'default'  => __( 'detective', 'dimon' ),
                        ]
                    ]
                ],
                'section_about' => [
                    'title'    => __('About','dimon'),
                    'fields' => [
                        'field_about' => [
                            'label'    => __( 'About', 'dimon' ),
                            'type'     => 'textarea',
                        ]
                    ]
                ],
                'section_services' => [
                    'title'    => __('Services','dimon'),
                    'fields' => [
                        'field_services' => [
                            'label'    => __( 'Services', 'dimon' ),
                            'type'     => 'dropdown-pages',
                        ]
                    ]
                ],
                'section_qa' => [
                    'title'    => __('Q&A','dimon'),
                    'fields' => [
                        'field_qa' => [
                            'label'    => __( 'Q&A', 'dimon' ),
                            'type'     => 'dropdown-pages',
                        ]
                    ]
                ],
            ]
        ]
    ];

    foreach ($panels as $panelKey => $panel) {
        $wp_customize->add_panel( $panelKey, $panel );

        if(!empty($panel['sections'])){
            $sections_num = 1;
            foreach ($panel['sections'] as $sectionKey => $section) {
                $wp_customize->add_section( $sectionKey , array(
                    'title'    => $section['title'],
                    'panel'    => $panelKey,
                    'priority' => $section_num * 10
                ) );

                if(!empty($section['fields'])){
                    $field_num = 1;
                    foreach ($section['fields'] as $fieldKey => $field) {
                        $wp_customize->add_setting( $fieldKey, array(
                            'default'           => !empty($field['default']) ? $field['default'] : '',
                            'sanitize_callback' => 'sanitize_text'
                        ) );
                        $wp_customize->add_control( new WP_Customize_Control(
                                $wp_customize,
                                $fieldKey,
                                array(
                                    'label'    => $field['label'],
                                    'section'  => $sectionKey,
                                    'settings' => $fieldKey,
                                    'type'     => $field['type'],
                                )
                            )
                        );
                        $field_num += 1;
                    }
                }
                $section_num += 1;
            }
        }
    }
//    $panel_dimon = 'panel_dimon';
//    $section_main = 'section_main';
//    $field_slogan = 'field_slogan';
//    $field_publicity = 'field_publicity';
//    $field_occupation = 'field_occupation';
//    // Create custom panel.
//    $wp_customize->add_panel( $panel_dimon, array(
//
//    ) );
//    $wp_customize->add_section( $section_main , array(
//        'title'    => __('Intro','dimon'),
//        'panel'    => $panel_dimon,
//        'priority' => 10
//    ) );
//    $wp_customize->add_setting( $field_slogan, array(
//        'default'           => __( 'private', 'dimon' ),
//        'sanitize_callback' => 'sanitize_text'
//    ) );
//    $wp_customize->add_control( new WP_Customize_Control(
//            $wp_customize,
//            $field_slogan,
//            array(
//                'label'    => __( 'Slogan', 'dimon' ),
//                'section'  => $section_main,
//                'settings' => $field_slogan,
//                'type'     => 'text'
//            )
//        )
//    );
//    $wp_customize->add_setting( $field_publicity, array(
//        'default'           => __( 'private', 'dimon' ),
//        'sanitize_callback' => 'sanitize_text'
//    ) );
//    $wp_customize->add_control( new WP_Customize_Control(
//            $wp_customize,
//            $field_publicity,
//            array(
//                'label'    => __( 'Publicity', 'dimon' ),
//                'section'  => $section_main,
//                'settings' => $field_publicity,
//                'type'     => 'text'
//            )
//        )
//    );
//    $wp_customize->add_setting( $field_occupation, array(
//        'default'           => __( 'detective', 'dimon' ),
//        'sanitize_callback' => 'sanitize_text'
//    ) );
//    $wp_customize->add_control( new WP_Customize_Control(
//            $wp_customize,
//            $field_occupation,
//            array(
//                'label'    => __( 'Occupation', 'dimon' ),
//                'section'  => $section_main,
//                'settings' => $field_occupation,
//                'type'     => 'text'
//            )
//        )
//    );


    // Sanitize text
    function sanitize_text( $text ) {
        return sanitize_text_field( $text );
    }
}
add_action( 'customize_register', 'dimon_register_theme_customizer' );
