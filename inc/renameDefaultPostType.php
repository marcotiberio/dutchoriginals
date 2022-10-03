<?php

/*** Remove Default Post Type ***/

add_filter('post_type_labels_post', 'post_rename_labels');

/**
* Rename default post type to news
*
* @param object $labels
* @hooked post_type_labels_post
* @return object $labels
*/
function post_rename_labels($labels)
{
    # Labels
    $labels->name = 'Products';
    $labels->singular_name = 'Product';

    # Menu
    $labels->menu_name = 'Products';
    $labels->name_admin_bar = 'Product';

    return $labels;
}
