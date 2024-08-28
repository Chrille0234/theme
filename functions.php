<?php 
add_filter("show_admin_bar","__return_false");
function mytheme_register_menus() {
    register_nav_menus(
        array(
            'menu-1' => __( 'Primary Menu', 'mytheme' ),
        )
    );
}
add_action( 'init', 'mytheme_register_menus' );

function w_theme_customizer_settings($wp_customize) {
    $wp_customize->add_section('w_theme_colors', array(
        'title'    => __('Colors', 'your-theme-textdomain'),
        'priority' => 30,
    ));

    $color_options = [
        "background_primary_color" => [
            "default" => "#fff",
            "label" => __("Background Primary","w_theme"),
        ],
        "background_secondary_color" => [
            "default" => "#fff",
            "label" => __("Background Secondary","w_theme"),
        ],
        "text_color" => [
            "default" => "#000",
            "label" => __("Text", "w_theme"),
        ],
        "text_accent" => [
            "default" => "#000",
            "label"=> __("Text Accent","w_theme"),
        ],
        "heading_primary_color" => [
            "default" => "#000",
            "label"=> __("Headings Primary","w_theme"),
        ],
        "heading_secondary_color" => [
            "default" => "#000",
            "label"=> __("Headings Secondary","w_theme"),
        ],
        "primary_header_background" => [
            "default" => "#fff",
            "label" => __("Header","w_theme"),
        ]
    ];

    foreach ($color_options as $key => $value) {
        $wp_customize->add_setting($key, array(
            'default'   => $value['default'],
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $key, array(
            'label'    => $value['label'],
            'section'  => 'w_theme_colors',
            'settings' => $key,
        )));
    }
}
add_action('customize_register', 'w_theme_customizer_settings');

function w_theme_customizer_css() {
    include('styling/style.php');
    include("styling/header.php");
    include("styling/posts.php");
    include("styling/post.php");
}
add_action('wp_head', 'w_theme_customizer_css');