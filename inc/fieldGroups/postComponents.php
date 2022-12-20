<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'postMeta',
        'title' => 'Hover Image',
        'style' => '',
        'menu_order' => 1,
        'position' => 'side',
        'fields' => [
            [
                'label' => __('', 'flynt'),
                'name' => 'hoverImage',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'wrapper' => [
                    'width' => '100',
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ],
            ],
        ],
    ]);
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
                    Components\BlockBannerImage\getACFLayout(),
                    Components\BlockCircles\getACFLayout(),
                    Components\BlockDownloads\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockImageTextLink\getACFLayout(),
                    Components\BlockMap\getACFLayout(),
                    Components\BlockNewsletter\getACFLayout(),
                    Components\BlockShortcode\getACFLayout(),
                    Components\BlockTeam\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\BlockWysiwygTwoCol\getACFLayout(),
                    Components\BlockTextFormTwoCol\getACFLayout(),
                    Components\GridAllPosts\getACFLayout(),
                    Components\GridNewsIndex\getACFLayout(),
                    Components\GridPostsLatest\getACFLayout(),
                    Components\GridPostsSelector\getACFLayout(),
                    Components\HeroImageText\getACFLayout(),
                    Components\HeroImageTextHalf\getACFLayout(),
                    Components\HeroVideo\getACFLayout(),
                    Components\SliderImagesDefault\getACFLayout(),
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
