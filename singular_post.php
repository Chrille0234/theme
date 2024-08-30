<button><--</button>
<article class="post">
    <header class="post-header">
        <h1><?php the_title() ?></h1>
        <div>Written by: <?= get_the_author_meta("display_name", $post->post_author) ?>, <?= get_the_date() ?></div>
    </header>
    <main class="post-content">
        <?php the_content()?>
    </main>

    <script>
        let button = document.querySelector("button")

        button.addEventListener("click", function(){
            let referer = document.referrer;
            if (referer) {
                window.location.href = referer;
            } else {
                // Fallback to a default page if no referrer is found
                window.location.href = "/";
            }
        })
    </script>
</article>