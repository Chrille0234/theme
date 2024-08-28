<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/style.css" />
    <?php wp_head(); ?>
</head>
<body style="padding: 0; margin: 0;"  <?php body_class(); ?>>
<header>
    <div class="site-header">
        <div class="site-branding">
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <span class="logo"><?php bloginfo( 'name' ); ?></span>
                </a>
                <p><?php bloginfo( 'description' ); ?></p>
                <?php
            }
            ?>
        </div>

        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </nav>
    </div>
</header>
