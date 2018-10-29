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
            'model'      => Railken\Amethyst\Models\Catalogue::class,
            'schema'     => Railken\Amethyst\Schemas\CatalogueSchema::class,
            'repository' => Railken\Amethyst\Repositories\CatalogueRepository::class,
            'serializer' => Railken\Amethyst\Serializers\CatalogueSerializer::class,
            'validator'  => Railken\Amethyst\Validators\CatalogueValidator::class,
            'authorizer' => Railken\Amethyst\Authorizers\CatalogueAuthorizer::class,
            'faker'      => Railken\Amethyst\Fakers\CatalogueFaker::class,
            'manager'    => Railken\Amethyst\Managers\CatalogueManager::class,
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
                'enabled'     => true,
                'controller'  => Railken\Amethyst\Http\Controllers\Admin\CataloguesController::class,
                'router'      => [
                    'as'        => 'catalogue.',
                    'prefix'    => '/catalogues',
                ],
            ],
        ],
    ],
];
