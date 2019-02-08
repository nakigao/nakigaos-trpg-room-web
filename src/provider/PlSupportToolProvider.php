<?php

namespace Nkgo\Provider;

use Nkgo\Model\DodontofDiceBotModel;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class PlSupportToolProvider implements ControllerProviderInterface
{
    /**
     * @param Application $app
     *
     * @return mixed
     */
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        /**
         *
         */
        $controllers->get('/', function () use ($app) {
            $diceBotList = new DodontofDiceBotModel($app);
            return $app['twig']->render('pl-support-tool/index.twig', array(
                'page_title' => 'PL SUPPORT TOOL',
                'diceBotList' => $diceBotList->getRecords()
            ));
        });
        return $controllers;
    }
}