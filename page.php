<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'your-theme-textdomain' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>

            </article>

            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; 
        ?>
</div>