<?php


return [
    /*
    |--------------------------------------------------------------------------
    | SSO Configuration
    |--------------------------------------------------------------------------
    |
    | This file is for storing the configuration for use by sso manager
    |
    */

    'sso' => [
        'client_id' => env('SSO_CLIENT_ID'),
        'client_secret' => env('SSO_CLIENT_SECRET'),
        'redirect' => env('SSO_REDIRECT_URL'),
        'authorize' => env('SSO_DOMAIN') . '/oauth/authorize',
        'token' => env('SSO_DOMAIN') . '/oauth/token',
        'user' => env('SSO_DOMAIN') . '/api/user',
        'logout' => env('SSO_DOMAIN') . '/api/logout',
        'grant_access' => env('SSO_DOMAIN') . '/api/grant_access',
        'revoke_access' => env('SSO_DOMAIN') . '/api/revoke_access',
        'sync_users' => env('SSO_DOMAIN') . '/api/sync_users',
    ],
];
