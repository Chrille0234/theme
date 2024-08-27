<section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
    <article>
        <?php 
        $current_url = ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if ($current_url != get_permalink()) : ?>
        <a href="<?= the_permalink() ?>"><h1> <?= the_title() ?> </h1></a>
        <?php else : ?>
            <h1><?= the_title() ?></h1>
        <?php endif ?>
        <p> <?= the_content() ?> </p>
        
        <!-- content to be displayed, when clicking on the post -->
        <?php if ($current_url == get_permalink()) : ?>
            <div>
                <?php if (get_comments_number() > 0) : ?>
                <div>
                    <h3> Comments: </h3>
                    <ul>
                        <?php foreach (get_comments() as $comment) : ?>
                            <div style="display: flex; align-items: center; gap: 9px">
                                <?= get_avatar($comment->comment_author_email, 48) ?>
                                <h4> <?= $comment->comment_author?> </h4>
                            </div>
                            <p> <?= $comment->comment_content?> </p>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php else : ?>
                    <p>No comments</p>

                <?php endif ?>
            </div>
        <?php endif ?>
    </article>
    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'No posts uploaded' ); ?></p>
    <?php endif; ?>
</section>