<article class="post">
    <header>
        <h1><?php the_title() ?></h1>
        <div>Written by: <?= get_the_author_meta("display_name", $post->post_author) ?>, <?= get_the_date() ?></div>
    </header>
    <main class="post-content">
        <?php the_content()?>
    </main>
</article>