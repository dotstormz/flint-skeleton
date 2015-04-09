<?php
namespace FlintExample\Controller;

use Symfony\Component\HttpFoundation\Response;

class ExampleController
{
    /**
     * This action shows how the routes.php configuration file binds a 
     * controller service to a route directly
     */
    public function indexAction()
    {
        return new Response("<h1>Flint</h1><p>Hello, Flint! This is the indexAction.</p>");
    }

    /**
     * This action shows how the routes.php configuration file can place 
     * controllers under "groups", with a defined prefix
     */
    public function nestedAction()
    {
        return new Response("<h1>Flint</h1><p>Hello, Flint! This is the nestedAction.</p>");
    }
}
