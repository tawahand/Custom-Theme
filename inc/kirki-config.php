<?php
kirki::add_config('html2wp_options', array(
    'capability'            => 'edit_theme_options',
    'option_type'           => 'theme_mod',
));

new \Kirki\Panel(
	'header_settings',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Header Settings', 'kirki' ),
		'description' => esc_html__( 'Manage Header & Menu Layout.', 'kirki' ),
	]
);
new \Kirki\Section(
	'Header_Layout_Settings',
	[
		'title'       => esc_html__( 'Layout', 'kirki' ),
		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
		'panel'       => 'header_settings',
		'priority'    => 160,
	]
);
new \Kirki\Section(
	'Menu_Settings',
	[
		'title'       => esc_html__( 'Menu Settings', 'kirki' ),
		'description' => esc_html__( 'Manage Menu Layout and Settings.', 'kirki' ),
		'panel'       => 'header_settings',
		'priority'    => 160,
	]
);

new \Kirki\Section(
	'Typography_Settings',
	[
		'title'       => esc_html__( 'Typography', 'kirki' ),
		'description' => esc_html__( 'Text Style & options.', 'kirki' ),
		'priority'    => 160,
	]
);


new \Kirki\Section(
	'Home_Banner_Settings',
	[
		'title'       => esc_html__( 'Home Banner Layout', 'kirki' ),
		'description' => esc_html__( 'Text Style & options.', 'kirki' ),
		'priority'    => 160,
        'icon'  => 'dashicons-layout'
	]
);
// CONTROLES

// header background

new \Kirki\Field\Background(
	[
		'settings'    => 'background_setting',
		'label'       => esc_html__( 'Background Control', 'kirki' ),
		'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
		'section'     => 'Header_Layout_Settings',
		'default'     => [
			'background-color'      => 'rgba(255,255,255,1)',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#header',
			],
		],
	]
);

// menu settings
new \Kirki\Field\Background(
	[
		'settings'    => 'menu_background_setting',
		'label'       => esc_html__( 'Menu Background', 'kirki' ),
		'description' => esc_html__( '', 'kirki' ),
		'section'     => 'Menu_Settings',
		'default'     => [
			'background-color'      => 'white',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#nav',
			],
		],
	]
);


new \Kirki\Field\Background(
	[
		'settings'    => 'menu_active_background_setting',
		'label'       => esc_html__( 'Menu Active & Hover', 'kirki' ),
		'description' => esc_html__( '', 'kirki' ),
		'section'     => 'Menu_Settings',
		'default'     => [
			'background-color'      => '#d52349',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#nav > ul > li > a:hover, #nav > ul > li.current-menu-item > a',
			],
		],
	]
);


// Typography 
new \Kirki\Field\Typography(
	[
		'settings'    => 'typography_setting',
		'label'       => esc_html__( 'Heading Settings', 'kirki' ),
		'description' => esc_html__( 'The full set of options.', 'kirki' ),
		'section'     => 'Typography_Settings',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Roboto',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'color'           => '#333333',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => '',
		],
        'choices' => [
            'fonts' => [
                'google'   => [ 'popularity', 50 ],
                'standard' => [
                    'Georgia,Times,"Times New Roman",serif',
                    'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
                ],
            ],
        ],
		'output'      => [
			[
				'element' => 'h2',
			],
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'Toogle_Home_Banner',
		'label'       => esc_html__( 'Homepage Banner', 'kirki' ),
		'description' => esc_html__( 'Simple switch control', 'kirki' ),
		'section'     => 'Home_Banner_Settings',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
    ]
    );

    //text
    new \Kirki\Field\Text(
        [
            'settings' => 'home_Banner_Heading_text',
            'label'    => esc_html__( 'Banner text', 'kirki' ),
            'section'  => 'Home_Banner_Settings',
            'default'  => esc_html__( 'A responsive template by HTML5 UP', 'kirki' ),
            'priority' => 10,
        ]
    );

	

?>