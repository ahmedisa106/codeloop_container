<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'branches' => 'c,r,u,d,e',
            'categories' => 'c,r,u,d,e',
            'category-sizes' => 'c,r,u,d,e',
            'rent-types' => 'c,r,u,d,e',
            'job-types' => 'c,r,u,d,e',
            'roles' => 'c,r,u,d,e',
            'apps' => 'c,r,u,d,e',
            'customers' => 'c,r,u,d,e',
            'customer-addresses' => 'c,r,u,d,e',
            'employees' => 'c,r,u,d,e',
            'trucks' => 'c,r,u,d,e',
            'moderators' => 'c,r,u,d,e',
            'containers' => 'c,r,u,d,e',
            'contracts' => 'c,r,u,d,e',
            'container-rentals' => 'c,r,u,d,e',
        ],
        'messenger' => [
            'containers' => 'c,r,u,d,e',
            'contracts' => 'c,r,u,d,e',
            'container-rentals' => 'c,r,u,d,e',
        ],
        'driver' => [

        ],


    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        'e' => 'export',
    ]
];
