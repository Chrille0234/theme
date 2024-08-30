<?php

?>
<section class="posts-section">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php
        $image_url = get_the_post_thumbnail_url(NULL, 'thumbnail');
        if ($image_url == false) {
            $image_url = get_template_directory_uri() . "/images/placeholder.jpg";
        }
        ?>
        <article class="post-article">
            <a href="<?= get_permalink()?>">
                <h3><?= get_the_title() ?></h3>
                <img src="<?= $image_url?>">
            </a>
        </article>
    <?php endwhile; ?>
</section>