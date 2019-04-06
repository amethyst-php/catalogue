<?php

return [
    'name' => 'Catalogo',
    'description' => 'Catalogo',
    'attributes' => [
        'starts_at' => [
            'label' => 'Valido dal',
            'description' => 'Il catalogo sarà valido a partire da questa data'
        ],
        'ends_at' => [
            'label' => 'Termina il',
            'description' => 'Il catalogo non sarà più valido a partire da questa data'
        ]
    ],
    'tabs' => [
        'products' => 'Prodotti'
    ]
];