<?php

namespace Nkgo\Provider;

use Nkgo\Model\ReplayRuleModel;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class RuleSummaryProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get('/', function () use ($app) {
            return $app['twig']->render('rule-summary/s2.twig', array(
                'page_title' => 'ルールサマリー',
            ));
        });
        return $controllers;
    }
}
