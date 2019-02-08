<?php

namespace Nkgo\Provider;

use Nkgo\Model\DodontofDiceBotModel;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class GmSupportToolProvider implements ControllerProviderInterface
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
            return $app['twig']->render('gm-support-tool/index.twig', array(
                'page_title' => 'GM SUPPORT TOOL',
                'diceBotList' => $diceBotList->getRecords()
            ));
        });
        return $controllers;
    }
}