<?php

namespace Nkgo\Provider;

use Nkgo\Model\ReplayModel;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;

class ReplayProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get('/', function () use ($app) {
            return $app['twig']->render('replay/index.twig', array(
                'page_title' => 'REPLAYS'
            ));
        });
        /**
         * {rule}
         */
        $controllers->get('{rule}/', function (Request $request) use ($app) {
            $rule = $request->get('rule');
            $series = 1;
            $episode = 1;
            $part = 1;
            return $app->redirect("/replay/{$rule}/{$series}/{$episode}/{$part}");
        });
        /**
         * {rule}/{series}
         */
        $controllers->get('{rule}/{series}/', function (Request $request) use ($app) {
            $rule = $request->get('rule');
            $series = $request->get('series');
            $episode = 1;
            $part = 1;
            return $app->redirect("/replay/{$rule}/{$series}/{$episode}/{$part}");
        });
        /**
         * {rule}/{series}/{episode}
         */
        $controllers->get('{rule}/{series}/{episode}/', function (Request $request) use ($app) {
            $rule = $request->get('rule');
            $series = $request->get('series');
            $episode = $request->get('episode');
            $part = 1;
            return $app->redirect("/replay/{$rule}/{$series}/{$episode}/{$part}");
        });
        /**
         * {rule}/{series}/{episode}/{part}
         */
        $controllers->get('{rule}/{series}/{episode}/{part}/', function (Request $request) use ($app) {
            $rule = $request->get('rule');
            $series = $request->get('series');
            $episode = $request->get('episode');
            $part = $request->get('part');
            $renderTwigPath = 'replay' . '/' . $rule . '/' . $series . '/' . $episode . '/' . $part . '.twig';
            $replayModel = new ReplayModel($app);
            $replay = $replayModel->getReplay($rule, $series, $episode, $part);
            return $app['twig']->render($renderTwigPath, array(
                'page_title' => $replay['pageTitle'],
                'replay_rule' => $replay['ruleTitle'],
                'replay_series_title' => $replay['seriesTitle'],
                'replay_title' => $replay['title'],
                'replay_menu_title' => $replay['menuTitle'],
                'pl_list' => $replay['plNames'],
                'gm_list' => $replay['gmNames']
            ));
        });
        return $controllers;
    }
}