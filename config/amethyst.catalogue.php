<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'catalogue' => [
            'table'      => 'amethyst_catalogues',
            'comment'    => 'Catalogue',
            'model'      => Amethyst\Models\Catalogue::class,
            'schema'     => Amethyst\Schemas\CatalogueSchema::class,
            'repository' => Amethyst\Repositories\CatalogueRepository::class,
            'serializer' => Amethyst\Serializers\CatalogueSerializer::class,
            'validator'  => Amethyst\Validators\CatalogueValidator::class,
            'authorizer' => Amethyst\Authorizers\CatalogueAuthorizer::class,
            'faker'      => Amethyst\Fakers\CatalogueFaker::class,
            'manager'    => Amethyst\Managers\CatalogueManager::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'catalogue' => [
                'enabled'    => true,
                'controller' => Amethyst\Http\Controllers\Admin\CataloguesController::class,
                'router'     => [
                    'as'     => 'catalogue.',
                    'prefix' => '/catalogues',
                ],
            ],
        ],
    ],
];
