<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'newsComponents',
        'title' => 'News Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'newsComponents',
                'label' => __('News Components', 'flynt'),
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
                    'value' => 'news',
                ]
            ],
        ],
    ]);
});
