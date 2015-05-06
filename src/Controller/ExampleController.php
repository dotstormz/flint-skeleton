<?php
namespace FlintExample\Controller;

use FlintExample\ExampleApp,
    Symfony\Component\HttpFoundation\Response,
    Symfony\Component\Validator\Constraints as Assert;

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

    public function helloAction($name)
    {
        return new Response("<h1>Flint</h1><p>Hello, " . $name . "!</p>");
    }

    /**
     * This action shows how to use the Symfony validator for a higher-level, more powerful version
     * of route parameter assertions.
     */
    public function validateAction($name)
    {
        $app = ExampleApp::getInstance();

        $errors = $app['validator']->validateValue($name, new Assert\Type([
            'type' => 'numeric',
            'message' => 'Error, {{ value }} is not a valid {{ type }}'
        ]));

        if (count($errors) > 0) {
            return new Response((string) $errors);
        }

        return new Response("Hello, " . $name);
    }
}
