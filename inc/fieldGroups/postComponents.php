<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    // ACFComposer::registerFieldGroup([
    //     'name' => 'postMeta',
    //     'title' => 'Hover Image',
    //     'style' => '',
    //     'menu_order' => 1,
    //     'position' => 'acf_after_title',
    //     'fields' => [
    //         // [
    //         //     'label' => __('Subtitle', 'flynt'),
    //         //     'name' => 'subtitle',
    //         //     'type' => 'text',
    //         //     'wrapper' => [
    //         //         'width' => '100',
    //         //     ],
    //         // ],
    //         // [
    //         //     'label' => __('', 'flynt'),
    //         //     'name' => 'hoverImage',
    //         //     'type' => 'image',
    //         //     'return_format' => 'url',
    //         //     'preview_size' => 'medium',
    //         //     'library' => 'all',
    //         //     'wrapper' => [
    //         //         'width' => '100',
    //         //     ],
    //         // ],
    //     ],
    //     'location' => [
    //         [
    //             [
    //                 'param' => 'post_type',
    //                 'operator' => '==',
    //                 'value' => 'post',
    //             ],
    //         ],
    //     ],
    // ]);
    ACFComposer::registerFieldGroup([
        'name' => 'postComponents',
        'title' => 'Post Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'postComponents',
                'label' => __('Post Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\blockProductSpecifics\getACFLayout()
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ]
            ],
        ],
    ]);
});
