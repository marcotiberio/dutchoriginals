<?php

namespace Flynt\Components\BlockVideoUpload;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockVideoUpload',
        'label' => 'Block: Video Upload',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Video', 'flynt'),
                'name' => 'video',
                'type' => 'file',
                'return_format' => 'url',
                'mime_types' => 'mp4',
                'wrapper' => [
                    'width' => 100,
                ]
            ],
        ]
    ];
}
