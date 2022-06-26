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
            'branches' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'category-sizes' => 'c,r,u,d',
            'rent-types' => 'c,r,u,d',
            // 'job-types' => 'c,r,u,d',
            'roles' => 'c,r,u,d',
            //'apps' => 'c,r,u,d',
            'customers' => 'c,r,u,d',
            // 'customer-addresses' => 'c,r,u,d',
            'employees' => 'c,r,u,d',
            'trucks' => 'c,r,u,d',
            'moderators' => 'c,r,u,d',
            'containers' => 'c,r,u,d',
            'contracts' => 'c,r,u,d',
            'container-rentals' => 'c,r,u,d',
            'company-settings' => 'c,r,u,d',
            'company-clauses' => 'c,r,u,d',

        ],
        'messenger' => [
            'containers' => 'c,r,u,d',
            'container-rentals' => 'c,r,u,d',
            'customers' => 'c,r,u,d',

        ],
        'driver' => [
            'driver-requests' => 'c,r,u,d'
        ],


    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        //'e' => 'export',
    ]
];
