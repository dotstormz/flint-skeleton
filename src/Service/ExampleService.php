<?php
namespace FlintExample\Service;

use FlintExample\Service;

class ExampleService
{
    public function __construct()
    {
    }

    public function hello()
    {
        return "Hello, " . $name;
    }

    public function reverse($name)
    {
        return strrev($name);
    }
}
