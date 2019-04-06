<?php

return [
    'name' => 'Catalogue',
    'description' => 'Catalogue',
    'attributes' => [
        'starts_at' => [
            'label' => 'Starts At',
            'description' => 'The catalogue will be valid from this date'
        ],
        'ends_at' => [
            'label' => 'Ends At',
            'description' => 'The catalogue won't be valid anymore from this date'
        ]
    ],
    'tabs' => [
        'products' => 'Products'
    ]
]