<style>
    .site-header {
        background-color: <?php echo get_theme_mod('primary_header_background', '#ffffff');?> !important;
        display: flex;
        justify-content: space-between;
        align-items: center;

        padding-inline: 30px;
        padding-block: 5px;
    }

    .site-header ul {
        display: flex;
        gap: 15px;
        align-items: center;
        list-style: none;
    }

    .site-header a {
        color: <?= get_theme_mod('text_accent','#000')?>;
        text-decoration: none;
    }

    .page_item{
        position: relative;
    }

    .page_item:hover::after, .site-header .current_page_item::after{
        content: ''; 
        position: absolute; 
        left: 0; 
        bottom: -5px; 
        width: 100%; 
        height: 2px; 
        background-color: <?= get_theme_mod("text_accent", "#000") ?>;
    }
</style>