<?php

return [
    [
        'title' => 'Dashboards', // Optional section name
        'type' => 'item', // Default value is item so can be left out.
        'url' => '/',
    ],
    [
        'title' => 'Teams', // Optional section name
        'type' => 'segment',
    ],
    [
        'title' => 'Team', // Optional section name
        'url' => '/Teams',
    ],
    [
        'title' => 'Test', // Optional section name
        'type' => 'segment',
    ],
    [
        'title' => 'Test 23323', // Optional section name
        'type' => 'item', // Default
        'url' => 'profile/edit',
        'route' => '',
//        'active' => ['dashboard', 'eefrfe/erffreref/efwrfe'],
//        'active' => true,
    ],
    [
        'title' => 'Test', // Optional section name
        'type' => 'segment',
        'role' => 'admin',
    ],
    [
        'title' => 'Sub Menu', // Optional section name
        'type' => 'item', // Default
        'icon' => 'assets/media/icons/duotune/general/gen025.svg',
//        'role' => 'admin',
        'role' => 999,
//        'role' => [
//            'min' => 'admin',
//            'max' => 'admin',
//        ],
        'url' => '',
        'route' => '',
        'sub' => [
            [
                'title' => 'Sub test', // Optional section name
                'type' => 'item', // Default
                'url' => '/test',
//                'route' => 'profile.edit',
                'sub' => [
                    [
                        'title' => 'Test 1', // Optional section name
                        'type' => 'item', // Default
                        'url' => '',
//                        'route' => 'profile.edit',
                    ],
                    [
                        'title' => 'Test 2', // Optional section name
                        'type' => 'item', // Default
                        'role' => 999,
                        'url' => '',
//                        'route' => 'profile.overview',
                    ]
                ]
            ],
            [
                'title' => 'Sub 2', // Optional section name
                'type' => 'item', // Default
                'role' => 999,
                'url' => '',
                'route' => 'profile.overview',
            ]
        ]
    ]
];