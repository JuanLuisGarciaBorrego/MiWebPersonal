<?php
// Lógica de nuestra aplicación
$app->get('/', function() use($app){
   return  $app['twig']->render('portada.twig');
})->bind('portada');