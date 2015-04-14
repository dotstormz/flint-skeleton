<?php

return [
    '/' => [ 'get', 'example.controller:indexAction' ],
    '/example' => [
        '/'     => [ 'get', 'example.controller:nestedAction' ],
    ],
    '/hello/{name}' => [
        'get',
        'example.controller:helloAction',
        null,
        [
            'name',
            'ExampleService:reverse'
        ]
    ]
];
