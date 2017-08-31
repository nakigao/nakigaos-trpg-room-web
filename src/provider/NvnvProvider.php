<?php

namespace Nkgo\Provider;

use Nkgo\Model\NvnvHorrorClimaxCardModel;
use Nkgo\Model\NvnvHorrorDarknessCardModel;
use Nkgo\Model\NvnvHorrorIntroductionCardModel;
use Nkgo\Model\NvnvHorrorLightCardModel;
use Nkgo\Model\NvnvHorrorPcCardModel;
use Nkgo\Model\NvnvHorrorSceneCardModel;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class NvnvProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get('/', function (Application $app) {
            $pcCards = $this->getPcCards($app);
            return $app['twig']->render('nvnv/index.twig', array(
                'site_title' => 'のびのびTRPGサポートツール(β)',
                'page_title' => 'INDEX',
                'pc_cards' => $pcCards
            ));
        });
        $controllers->get('/get-pc-card/{id}', function (Application $app, $id) {
            return $app->json(array(
                'status' => true,
                'message' => 'success',
                'pc_card' => $this->getPcCard($app, $id)
            ));
        });
        $controllers->get('/get-random-introduction-card', function (Application $app) {
            return $app->json(array(
                'status' => true,
                'message' => 'success',
                'introduction_card' => $this->getRandomIntroductionCard($app)
            ));
        });
        $controllers->get('/get-random-scene-card', function (Application $app) {
            return $app->json(array(
                'status' => true,
                'message' => 'success',
                'scene_card' => $this->getRandomSceneCard($app)
            ));
        });
        $controllers->get('/get-random-light-card', function (Application $app) {
            return $app->json(array(
                'status' => true,
                'message' => 'success',
                'light_card' => $this->getRandomLightCard($app)
            ));
        });
        $controllers->get('/get-random-darkness-card', function (Application $app) {
            return $app->json(array(
                'status' => true,
                'message' => 'success',
                'darkness_card' => $this->getRandomDarknessCard($app)
            ));
        });
        $controllers->get('/get-random-climax-card', function (Application $app) {
            return $app->json(array(
                'status' => true,
                'message' => 'success',
                'climax_card' => $this->getRandomClimaxCard($app)
            ));
        });
        return $controllers;
    }

    /**
     * @param Application $app
     * @param int $id
     *
     * @return mixed
     */
    public function getPcCard(Application $app, $id = 0)
    {
        if (empty($id)) {
            return array();
        }
        $model = new NvnvHorrorPcCardModel($app);
        $card = $model->getRecordById($id);
        return $card;
    }

    /**
     * @param Application $app
     *
     * @return mixed
     */
    public function getPcCards(Application $app)
    {
        $model = new NvnvHorrorPcCardModel($app);
        $cards = $model->getRecords();
        return $cards;
    }

    /**
     * @param Application $app
     *
     * @return mixed
     */
    public function getRandomIntroductionCard(Application $app)
    {
        $model = new NvnvHorrorIntroductionCardModel($app);
        $count = $model->getRecordsCount();
        $card = $model->getRecordById(mt_rand(1, $count));
        return $card;
    }


    /**
     * @param Application $app
     *
     * @return mixed
     */
    public function getRandomSceneCard(Application $app)
    {
        $model = new NvnvHorrorSceneCardModel($app);
        $count = $model->getRecordsCount();
        $card = $model->getRecordById(mt_rand(1, $count));
        return $card;
    }

    /**
     * @param Application $app
     *
     * @return mixed
     */
    public function getRandomLightCard(Application $app)
    {
        $model = new NvnvHorrorLightCardModel($app);
        $count = $model->getRecordsCount();
        $card = $model->getRecordById(mt_rand(1, $count));
        return $card;
    }

    /**
     * @param Application $app
     *
     * @return mixed
     */
    public function getRandomDarknessCard(Application $app)
    {
        $model = new NvnvHorrorDarknessCardModel($app);
        $count = $model->getRecordsCount();
        $card = $model->getRecordById(mt_rand(1, $count));
        return $card;
    }

    /**
     * @param Application $app
     *
     * @return mixed
     */
    public function getRandomClimaxCard(Application $app)
    {
        $model = new NvnvHorrorClimaxCardModel($app);
        $count = $model->getRecordsCount();
        $card = $model->getRecordById(mt_rand(1, $count));
        return $card;
    }
}