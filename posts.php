<section class="posts-section">
    <?php while ( have_posts() ) : the_post(); ?>
        <article class="post-article">
            <a href="<?= get_permalink()?>">
                <h3><?= get_the_title() ?></h3>
            </a>
        </article>
    <?php endwhile; ?>
</section>