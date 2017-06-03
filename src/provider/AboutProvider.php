<?php

namespace Nkgo;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class AboutProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get('/', function () use ($app) {
            return $app['twig']->render('about/index.html.twig', array(
                'page_title' => 'ABOUT'
            ));
        });
        return $controllers;
    }
}