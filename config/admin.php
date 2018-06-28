<?php

return [

    /*
     * Procurement-Admin name.
     */
    'name' => 'Procurement Admin',

    /*
     * Logo in admin panel header.
     */
    'logo' => '<b>Procurement</b> Circle',

    /*
     * Mini-logo in admin panel header.
     */
    'logo-mini' => '<b>PC</b>',

    /*
     * Route configuration.
     */
    'route' => [

        'prefix' => 'admin',

        'namespace' => 'App\\Admin\\Controllers',

        'middleware' => ['web', 'admin'],
    ],

    /*
     * Procurement-Admin install directory.
     */
    'directory' => app_path('Admin'),

    /*
     * Procurement-Admin html title.
     */
    'title' => 'Admin',

    /*
     * Use `https`.
     */
    'secure' => false,

    /*
     * Procurement-Admin auth setting.
     */
    'auth' => [
        'guards' => [
            'admin' => [
                'driver'   => 'session',
                'provider' => 'admin',
            ],
        ],

        'providers' => [
            'admin' => [
                'driver' => 'eloquent',
                'model'  => Encore\Admin\Auth\Database\Administrator::class,
            ],
        ],
    ],

    /*
     * Procurement-Admin upload setting.
     */
    'upload' => [

        'disk' => 'admin',

        'directory' => [
            'image' => 'images',
            'file'  => 'files',
        ],
    ],

    /*
     * Procurement-Admin database setting.
     */
    'database' => [

        // Database connection for following tables.
        'connection' => env('DB_CONNECTION', 'mysql'),

        // User tables and model.
        'users_table' => 'users',
        'users_model' => Encore\Admin\Auth\Database\Administrator::class,

        // Role table and model.
        'roles_table' => 'roles',
        'roles_model' => Encore\Admin\Auth\Database\Role::class,

        // Permission table and model.
        'permissions_table' => 'permissions',
        'permissions_model' => Encore\Admin\Auth\Database\Permission::class,

        // Menu table and model.
        'menu_table' => 'menu',
        'menu_model' => Encore\Admin\Auth\Database\Menu::class,

        // Pivot table for table above.
//        'operation_log_table'    => 'operation_log',
        'user_permissions_table' => 'user_permissions',
        'role_users_table'       => 'role_users',
        'role_permissions_table' => 'role_permissions',
        'role_menu_table'        => 'role_menu',
    ],

    /*
     * By setting this option to open or close operation log in Procurement-Admin.
     */
    'operation_log' => [

        'enable' => false,

        /*
         * Routes that will not log to database.
         *
         * All method to path like: admin/auth/logs
         * or specific method to path like: get:admin/auth/logs
         */
        'except' => [
            'admin/auth/logs*',
        ],
    ],

    /*
     * @see https://adminlte.io/docs/2.4/layout
     */
    'skin' => 'skin-blue-light',

    /*
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
     */
    'layout' => ['sidebar-collapse','sidebar-mini'],

    /*
     * Background image in login page
     */
    'login_background_image' => '',

    /*
     * Version displayed in footer.
     */
    'version' => '1.0-dev',

    /*
     * Settings for extensions.
     */
    'extensions' => [

    ],
];
