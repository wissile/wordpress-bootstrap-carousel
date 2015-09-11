<?php
/**
 * Created by PhpStorm.
 * User: wissilesogoyou
 * Date: 9/8/15
 * Time: 12:10 PM
 *
 * Plugin Name: Wordpress Bootstrap Carousel
 * Plugin URI: http://www.sogoyou.org
 * Description: Wordpress Bootstrap Carousel
 * Author: Wissile Sogoyou
 * Author URI: http://www.sogoyou.org
 * Version: 1.0
 */


// Enqueue css and js for Bootstrap and add template file


// Dynamically add banners CSS from theme customizer to head
function banner1_customizer_css() {
    ?>
    <style type="text/css">
        .item.ban1 .banner-container {
            color: <?php echo get_theme_mod( 'bayeast_color1' ); ?>;
            float: <?php echo get_theme_mod( 'bayeast_align1' ); ?>;
            text-align: <?php echo get_theme_mod( 'bayeast_align1' ); ?>;
        }
        .item.ban2 .banner-container {
            color: <?php echo get_theme_mod( 'bayeast_color2' ); ?>;
            float: <?php echo get_theme_mod( 'bayeast_align2' ); ?>;
            text-align: <?php echo get_theme_mod( 'bayeast_align2' ); ?>;
        }
        .item.ban3 .banner-container {
            color: <?php echo get_theme_mod( 'bayeast_color3' ); ?>;
            float: <?php echo get_theme_mod( 'bayeast_align3' ); ?>;
            text-align: <?php echo get_theme_mod( 'bayeast_align3' ); ?>;
        }
    </style>
<?php
}
add_action( 'wp_head', 'banner1_customizer_css' );








//Add Banner uploader to page
function bayeast_banner_customizer( $wp_customize ) {

    //-----------------Banner 1 SECTION --------------------------------------

    $wp_customize->add_section( 'bayeast_banner1_section' , array(
        'title'       => __( 'Banner 1', 'bayeast' ),
        'priority'    => 31,
        'description' => 'Upload content to banner 1',
    ) );

    // Image 1
    $wp_customize->add_setting( 'bayeast_banner1');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bayeast_banner1', array(
        'label'    => 'Upload',
        'section'  => 'bayeast_banner1_section',
        'settings' => 'bayeast_banner1',
    ) ) );

    // Color picker 1
    $wp_customize->add_setting( 'bayeast_color1', array( 'default' => '#808080', 'transport'   => 'postMessage'));
    $wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'bayeast_color1', array(
        'label'      => __( 'Choose color' ),
        'section'    => 'bayeast_banner1_section',
        'settings'   => 'bayeast_color1',
    ) ) );

    // Align text 1
    $wp_customize->add_setting( 'bayeast_align1');
    $wp_customize->add_control( 'bayeast_align1', array(
            'label'    => __( 'Align Text', 'bayeast' ),
            'section'  => 'bayeast_banner1_section',
            'settings' => 'bayeast_align1',
            'type'     => 'radio',
            'choices'  => array(
                'left'   => 'left',
                'center' => 'center',
                'right'  => 'right'
            )
        )
    );

    // Title 1
    $wp_customize->add_setting( 'bayeast_title1');
    $wp_customize->add_control( 'bayeast_title1', array(
        'label'    => 'Banner 1 Title (Required)',
        'section'  => 'bayeast_banner1_section',
        'settings' => 'bayeast_title1',
    ) );

    // Description 1
    $wp_customize->add_setting( 'bayeast_text1');
    $wp_customize->add_control( 'bayeast_text1', array(
        'label'    => 'Banner 1 Description',
        'section'  => 'bayeast_banner1_section',
        'settings' => 'bayeast_text1',
    ) );

    // Button 1
    $wp_customize->add_setting( 'bayeast_button1');
    $wp_customize->add_control( 'bayeast_button1', array(
        'label'    => 'Banner 1 button link',
        'section'  => 'bayeast_banner1_section',
        'settings' => 'bayeast_button1',
    ) );





    //-----------------Banner 2 SECTION --------------------------------------

    $wp_customize->add_section( 'bayeast_banner2_section' , array(
        'title'       => __( 'Banner 2', 'bayeast' ),
        'priority'    => 32,
        'description' => 'Upload content to banner 2',
    ) );

    // Image 2
    $wp_customize->add_setting( 'bayeast_banner2');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bayeast_banner2', array(
        'label'    => 'Upload',
        'section'  => 'bayeast_banner2_section',
        'settings' => 'bayeast_banner2',
    ) ) );

    // Color picker 2
    $wp_customize->add_setting( 'bayeast_color2', array( 'default' => '#808080', 'transport'   => 'postMessage'));
    $wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'bayeast_color2', array(
        'label'      => __( 'Choose color' ),
        'section'    => 'bayeast_banner2_section',
        'settings'   => 'bayeast_color2',
    ) ) );

    // Align text 2
    $wp_customize->add_setting( 'bayeast_align2');
    $wp_customize->add_control( 'bayeast_align2', array(
            'label'    => __( 'Align Text', 'bayeast' ),
            'section'  => 'bayeast_banner2_section',
            'settings' => 'bayeast_align2',
            'type'     => 'radio',
            'choices'  => array(
                'left'   => 'left',
                'center' => 'center',
                'right'  => 'right'
            )
        )
    );

    // Title 2
    $wp_customize->add_setting( 'bayeast_title2');
    $wp_customize->add_control( 'bayeast_title2', array(
        'label'    => 'Banner 1 Title (Required)',
        'section'  => 'bayeast_banner2_section',
        'settings' => 'bayeast_title2',
    ) );

    // Description 2
    $wp_customize->add_setting( 'bayeast_text2');
    $wp_customize->add_control( 'bayeast_text2', array(
        'label'    => 'Banner 1 Description',
        'section'  => 'bayeast_banner2_section',
        'settings' => 'bayeast_text2',
    ) );

    // Button 2
    $wp_customize->add_setting( 'bayeast_button2');
    $wp_customize->add_control( 'bayeast_button2', array(
        'label'    => 'Banner 1 button link',
        'section'  => 'bayeast_banner2_section',
        'settings' => 'bayeast_button2',
    ) );




    //-----------------Banner 3 SECTION --------------------------------------

    $wp_customize->add_section( 'bayeast_banner3_section' , array(
        'title'       => __( 'Banner 3', 'bayeast' ),
        'priority'    => 33,
        'description' => 'Upload content to banner 3',
    ) );

    // Image 3
    $wp_customize->add_setting( 'bayeast_banner3' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bayeast_banner3', array(
        'label'    => 'Upload',
        'section'  => 'bayeast_banner3_section',
        'settings' => 'bayeast_banner3',
    ) ) );

    // Color picker 3
    $wp_customize->add_setting( 'bayeast_color3', array( 'default' => '#808080', 'transport'   => 'postMessage'));
    $wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'bayeast_color3', array(
        'label'      => __( 'Choose color' ),
        'section'    => 'bayeast_banner3_section',
        'settings'   => 'bayeast_color3',
    ) ) );

    // Align text 3
    $wp_customize->add_setting( 'bayeast_align3');
    $wp_customize->add_control( 'bayeast_align3', array(
            'label'    => __( 'Align Text', 'bayeast' ),
            'section'  => 'bayeast_banner3_section',
            'settings' => 'bayeast_align3',
            'type'     => 'radio',
            'choices'  => array(
                'left'   => 'left',
                'center' => 'center',
                'right'  => 'right'
            )
        )
    );

    // Title 3
    $wp_customize->add_setting( 'bayeast_title3');
    $wp_customize->add_control( 'bayeast_title3', array(
        'label'    => 'Banner 1 Title (Required)',
        'section'  => 'bayeast_banner3_section',
        'settings' => 'bayeast_title3',
    ) );

    // Description 1
    $wp_customize->add_setting( 'bayeast_text3');
    $wp_customize->add_control( 'bayeast_text3', array(
        'label'    => 'Banner 1 Description',
        'section'  => 'bayeast_banner3_section',
        'settings' => 'bayeast_text3',
    ) );

    // Button 1
    $wp_customize->add_setting( 'bayeast_button3');
    $wp_customize->add_control( 'bayeast_button3', array(
        'label'    => 'Banner 1 button link',
        'section'  => 'bayeast_banner3_section',
        'settings' => 'bayeast_button3',
    ) );
}
add_action('customize_register', 'bayeast_banner_customizer');

