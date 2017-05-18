<?php

namespace Nkgo;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class ReplayProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get('/', function () use ($app) {
            return $app['twig']->render('replay/index.html.twig', array(
                'commonVariables' => $app['commonVariables'],
                'pageName' => 'REPLAYS'
            ));
        });
        return $controllers;
    }
}