<?php

return [
    '/' => [ 'get', 'example.controller:indexAction' ],
    '/example' => [
        '/'     => [ 'get', 'example.controller:nestedAction' ],
    ]
];
