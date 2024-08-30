<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/style.css" />
    <?php get_header(); ?>
</head>
<body>
    <section>
        <?php if(is_page()) include("page.php") ?>

        <?php if(have_posts()) : ?>
            <?php if(is_singular()) {
                include("singular_post.php");
            } else include("posts.php") ?>

        <?php endif; ?>
    </section>
</body>
</html>
