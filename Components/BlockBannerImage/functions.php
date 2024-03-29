<?php

namespace Flynt\Components\BlockBannerImage;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockBannerImage',
        'label' => 'Block: Banner Image',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Page Title', 'flynt'),
                'name' => 'pageTitle',
                'type' => 'text'
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG, GIF.', 'flynt'),
                'mime_types' => 'gif,jpg,jpeg,png',
                'wrapper' => [
                    'width' => 50,
                ]
            ],
            [
                'label' => __('Video', 'flynt'),
                'name' => 'video',
                'type' => 'file',
                'return_format' => 'url',
                'mime_types' => 'mp4',
                'wrapper' => [
                    'width' => 50,
                ]
            ],
            [
                'label' => __('Audio', 'flynt'),
                'name' => 'audioTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [    
                'label' => __('Audio Track', 'flynt'),
                'name' => 'audioEmbed',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
                'instructions' => __('Copy here the embed code from the audio player.', 'flynt')
            ],
        ]
    ];
}
