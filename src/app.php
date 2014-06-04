<?php
//Registro de todos los servicios y configuración de nuestra aplicación
use Silex\Application;
use Silex\Provider\TwigServiceProvider;

$app = new Application();
//$app['debug'] = true;

$app->register(new TwigServiceProvider(), array(
    'twig.path' => array(__DIR__.'/../views'),
));

return $app;