<?php

namespace Flynt\Components\GridNewsIndex;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

const POST_TYPE = 'news';

add_filter('Flynt/addComponentData?name=GridNewsIndex', function ($data) {
    $postType = POST_TYPE;

    $data['taxonomies'] = $data['taxonomies'] ?: [];

    $data['items'] = Timber::get_posts([
        'post_status' => 'publish',
        'post_type' => $postType,
        'posts_per_page' => -1,
        'ignore_sticky_posts' => 1,
        'post__not_in' => array(get_the_ID())
    ]);

    $data['postTypeArchiveLink'] = get_post_type_archive_link($postType);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'GridNewsIndex',
        'label' => 'Grid: News Index',
        'sub_fields' => [
            [
                'label' => __('Title', 'flynt'),
                'name' => 'titleTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentTitle',
                'type' => 'text'
            ],
            [
                'label' => __('Content Selection', 'flynt'),
                'name' => 'contentSelectionTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            // [
            //     'label' => __('Categories', 'flynt'),
            //     'name' => 'taxonomies',
            //     'type' => 'taxonomy',
            //     'instructions' => __('Select 1 or more categories or leave empty to show from all posts.', 'flynt'),
            //     'taxonomy' => 'category',
            //     'field_type' => 'multi_select',
            //     'allow_null' => 1,
            //     'multiple' => 1,
            //     'add_term' => 0,
            //     'save_terms' => 0,
            //     'load_terms' => 0,
            //     'return_format' => 'object'
            // ]
            // [
            //     'label' => __('Post', 'flynt'),
            //     'name' => 'post',
            //     'type' => 'relationship',
            //     'post_type' => [
            //         'post',
            //         'news',
            //         'page'
            //     ],
            //     'allow_null' => 1,
            //     'multiple' => 1,
            //     'return_format' => 'post_object',
            //     'ui' => 1,
            //     'required' => 0,
            // ],
            // [
            //     'label' => __('Options', 'flynt'),
            //     'name' => 'optionsTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0
            // ],
            // [
            //     'label' => '',
            //     'name' => 'options',
            //     'type' => 'group',
            //     'layout' => 'block',
            //     'sub_fields' => [
            //         [
            //             'label' => __('Columns', 'flynt'),
            //             'name' => 'columns',
            //             'type' => 'number',
            //             'default_value' => 3,
            //             'min' => 1,
            //             'max' => 4,
            //             'step' => 1
            //         ]
            //     ]
            // ]
        ]
    ];
}

Options::addTranslatable('GridNewsIndex', [
    [
        'label' => __('Labels', 'flynt'),
        'name' => 'labelsTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => '',
        'name' => 'labels',
        'type' => 'group',
        'sub_fields' => [
            [
                'label' => __('All Posts', 'flynt'),
                'name' => 'allPosts',
                'type' => 'text',
                'default_value' => 'See More Posts',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ],
        ],
    ]
]);
