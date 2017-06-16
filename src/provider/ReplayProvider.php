<?php

namespace Nkgo\Provider;

use Nkgo\Model\VReplayModel;
use Nkgo\Model\ReplayPartGmPlModel;
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
            $replayModel = new VReplayModel($app);
            $replay = $replayModel->getReplay($rule, $series, $episode, $part);
            $partList = $replayModel->getPartList($rule, $series, $episode, $part);
            $nextPart = $replayModel->getNextPart($rule, $series, $episode, $part);
            $partGmPlModel = new ReplayPartGmPlModel($app);
            $gmList = $partGmPlModel->getGmList($rule, $series, $episode, $part);
            $plList = $partGmPlModel->getPlList($rule, $series, $episode, $part);
            return $app['twig']->render($replay['render_twig_path'], array(
                'rule' => $rule,
                'series' => $series,
                'episode' => $episode,
                'part' => $part,
                'page_title' => $replay['page_name'],
                'rule_title' => $replay['rule_name'],
                'series_title' => $replay['series_name'],
                'episode_prefix' => $replay['episode_prefix'],
                'episode_title' => $replay['episode_name'],
                'part_title' => $replay['part_name'],
                'pl_list' => $plList,
                'gm_list' => $gmList,
                'part_list' => $partList,
                'next_part' => $nextPart
            ));
        });
        return $controllers;
    }
}