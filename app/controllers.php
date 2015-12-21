<?php

return [
    'example.controller' => [
        'class' => 'FlintExample\Controller\ExampleController',
        'arguments' => ['@example.service', '@validator'],
    ]
];
