<style>
    .posts-section {
        background-color: <?= get_theme_mod("background_secondary_color", "#000") ?>;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 5px;
        margin: 15px;
        padding: 5px;
    }

    .post-article {
        background: <?= get_theme_mod("post_background", "#fff") ?>;
        padding: 10px;
    }
    .post-article > a {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between; 
        align-items: space-between;
    }

    .post-article img {
        margin-top: 5px;
        flex-shrink: 0;
        height: 250px;
        width: 100%;
        object-fit: cover;
    }
</style>