<?php

add_theme_support('title-tag');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
register_nav_menus(
    array(
        'primary-menu' => 'Header Menu'
    )
);
register_sidebar(
    array(
        'name' => 'Sidebar',
        'id' => 'main_sidebar'
    )
);
register_sidebar(
    array(
        'name' => 'Footer Widget',
        'id' => 'footer_sidebar'
    )
);
function custom_search_result($query)
{
    if ($query->is_main_query() && !is_admin() && $query->is_search()) {
        $query->set('post_type', array('post'));
        $query->set('post_per_page', 3);
    }
};
add_action('pre_get_posts', 'custom_search_result');
function catin_pagination()
{
    $allowed_tags = [
        'span' => [
            'class' => []
        ],
        'a' => [
            'class' => [],
            'href' => [],
        ]
    ];
    $args = [
        'before_page_number' => '<span class="button">',
        'after_page_number' => '</span>',
    ];
    printf('<nav class="catinpagination">%s</nav>', wp_kses(paginate_links($args), $allowed_tags));
}

?>