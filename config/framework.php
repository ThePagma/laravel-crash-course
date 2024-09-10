<?php

return [
    /*
     * Profile settings
     */
    'profile' => [
        'level' => [
            // role level to allow edit of another role
            'edit' => 999,

            // todo: maybe implement
            // role level to allow edit of user roles,
            // false defaults to framework.profile.level.edit
            'role' => 20,

            // role level to allow edit of user roles to roles with a level lower than their own,
            // false defaults to framework.profile.level.edit
            'role_lower' => false,
        ]
    ],

    'user' => [
        'level' => [
            'edit' => 999
        ],
    ],

    /*
     * Image settings
     */
    'images' => [
        'logo' => 'images/logo.svg',
        'logo_sidebar' => 'images/logo.svg',
        'auth' => [
            'images/auth/bg-1.jpg',
            'images/auth/bg-2.jpg'
        ]
    ],

    /*
     * Show login credentials
     */
    'show_login_credentials' => env('SHOW_LOGIN_CREDENTIALS', false),

    /*
     * Show login credentials
     * Any algorithm from https://www.php.net/manual/en/function.hash.php or use "uuid" for a uuid like 00000000-0000-0000-0000-000000000000
     */
    'user_hash_algorithm' => 'sha256',

    /*
     * The home url of the dashboard, if needed to change to for example /dashboard
     */
    'dashboard_url' => '/',
];