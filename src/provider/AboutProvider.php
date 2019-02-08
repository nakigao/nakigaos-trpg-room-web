<?php

namespace Nkgo\Provider;

use Nkgo\Model\ReplayRuleModel;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class AboutProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get('/', function () use ($app) {
            $replayRuleModel = new ReplayRuleModel($app);
            return $app['twig']->render('about/index.twig', array(
                'page_title' => 'ABOUT',
                'rule_list' => $replayRuleModel->getRecords()
            ));
        });
        return $controllers;
    }
}