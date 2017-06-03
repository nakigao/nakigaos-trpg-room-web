<?php

namespace Nkgo;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class IndexProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get('/', function () use ($app) {
            return $app['twig']->render('index.html.twig', array(
                'page_title' => 'HOME'
            ));
        });
        return $controllers;
    }
}