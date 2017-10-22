<?php

namespace Nkgo\Provider;

use Nkgo\Model\BaseModel;
use Nkgo\Model\NvnvHorrorClimaxCardModel;
use Nkgo\Model\NvnvHorrorDarknessCardModel;
use Nkgo\Model\NvnvHorrorIntroductionCardModel;
use Nkgo\Model\NvnvHorrorLightCardModel;
use Nkgo\Model\NvnvHorrorPcCardModel;
use Nkgo\Model\NvnvHorrorSceneCardModel;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;

class NvnvProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
//        $controllers->get('/', function (Application $app) {
//            $pcCards = $this->getCards($app, 'horror', 'pc');
//            return $app['twig']->render('nvnv/index.twig', array(
//                'site_title' => 'のびのびTRPGサポートツール(β)',
//                'page_title' => 'INDEX',
//                'pc_cards' => $pcCards
//            ));
//        });
//        $controllers->get('/card-list/{supplement}/{type}/', function (Application $app, $supplement, $type) {
//            $cards = $this->getCards($app, $supplement, $type);
//            return $app['twig']->render('nvnv/card-list.twig', array(
//                'site_title' => 'のびのびTRPGサポートツール(β)',
//                'page_title' => strtoupper($supplement . ' ' . $type . ' ' . 'CARD LIST'),
//                'cards' => $cards
//            ));
//        });
//        $controllers->get('/card-edit/{supplement}/{type}/{id}', function (Application $app, $supplement, $type, $id) {
//            $card = $this->getCard($app, $supplement, $type, $id);
//            return $app['twig']->render('nvnv/card-edit.twig', array(
//                'site_title' => 'のびのびTRPGサポートツール(β)',
//                'page_title' => strtoupper($supplement . ' ' . $type . ' ' . 'CARD EDIT'),
//                'card' => $card
//            ));
//        });
//        $controllers->post('/card-save/', function (Application $app, Request $request) {
//            $params = array(
//                'supplement' => $request->get('supplement'),
//                'type' => $request->get('type'),
//                'id' => $request->get('id'),
//                'role' => $request->get('role'),
//                'gender' => $request->get('gender'),
//                'power' => $request->get('power'),
//                'technic' => $request->get('technic'),
//                'skill_name' => $request->get('skill_name'),
//                'skill_timing' => $request->get('skill_timing'),
//                'skill_description' => $request->get('skill_description'),
//                'title' => $request->get('title'),
//                'description' => $request->get('description'),
//                'judgement_type' => $request->get('judgement_type'),
//                'judgement_description' => $request->get('judgement_description'),
//                'effect_type' => $request->get('effect_type'),
//                'effect_description' => $request->get('effect_description'),
//                'judgement' => $request->get('judgement'),
//            );
//            try{
//                $model = $this->__getCardModel($app, $params['supplement'], $params['type']);
//                $model->update($params['id'], $params);
//            } catch (\Exception $e) {
//                return $app->json(array(
//                    'status' => false,
//                    'message' => 'something wrong!'
//                ));
//            }
//            return $app->json(array(
//                'status' => true,
//                'message' => 'success'
//            ));
//        });
//        $controllers->get('/get-card/{supplement}/{type}/{id}', function (Application $app, $supplement, $type, $id) {
//            return $app->json(array(
//                'status' => true,
//                'message' => 'success',
//                'card' => $this->getCard($app, $supplement, $type, $id)
//            ));
//        });
//        $controllers->get('/get-random-card/{supplement}/{type}', function (Application $app, $supplement, $type) {
//            return $app->json(array(
//                'status' => true,
//                'message' => 'success',
//                'card' => $this->getRandomCard($app, $supplement, $type)
//            ));
//        });
        return $controllers;
    }

    /**
     * @param Application $app
     * @param string $supplement
     * @param string $type
     *
     * @return BaseModel|null
     * @throws \Exception
     */
    private function __getCardModel(Application $app, $supplement = '', $type = '')
    {
        $model = null;
        switch ($supplement) {
            case 'original':
                switch ($type) {
                    case 'pc':
                        $model = new NvnvOriginalPcCardModel($app);
                        break;
                    case 'introduction':
                        $model = new NvnvOriginalIntroductionCardModel($app);
                        break;
                    case 'scene':
                        $model = new NvnvOriginalSceneCardModel($app);
                        break;
                    case 'light':
                        $model = new NvnvOriginalLightCardModel($app);
                        break;
                    case 'darkness':
                        $model = new NvnvOriginalDarknessCardModel($app);
                        break;
                    case 'climax':
                        $model = new NvnvOriginalClimaxCardModel($app);
                        break;
                    default:
                        throw new \Exception('undefined type');
                }
                break;
            case 'horror':
                switch ($type) {
                    case 'pc':
                        $model = new NvnvHorrorPcCardModel($app);
                        break;
                    case 'introduction':
                        $model = new NvnvHorrorIntroductionCardModel($app);
                        break;
                    case 'scene':
                        $model = new NvnvHorrorSceneCardModel($app);
                        break;
                    case 'light':
                        $model = new NvnvHorrorLightCardModel($app);
                        break;
                    case 'darkness':
                        $model = new NvnvHorrorDarknessCardModel($app);
                        break;
                    case 'climax':
                        $model = new NvnvHorrorClimaxCardModel($app);
                        break;
                    default:
                        throw new \Exception('undefined type');
                }
                break;
            default:
                throw new \Exception('undefined supplement');
        }
        return $model;
    }

    /**
     * @param Application $app
     * @param string $supplement
     * @param string $type
     * @param int $id
     *
     * @return array|mixed
     * @throws \Exception
     */
    public function getCard(Application $app, $supplement = '', $type = '', $id = 0)
    {
        if (empty($id)) {
            return array();
        }
        // get model
        $model = $this->__getCardModel($app, $supplement, $type);
        // get data
        $card = $model->getRecordById($id);
        return $card;
    }

    /**
     * @param Application $app
     * @param string $supplement
     * @param string $type
     *
     * @return mixed
     * @throws \Exception
     */
    public function getCards(Application $app, $supplement = '', $type = '')
    {
        // get model
        $model = $this->__getCardModel($app, $supplement, $type);
        // get data
        $cards = $model->getRecords();
        return $cards;
    }

    /**
     * @param Application $app
     * @param string $supplement
     * @param string $type
     *
     * @return array|mixed
     * @throws \Exception
     */
    public function getRandomCard(Application $app, $supplement = '', $type = '')
    {
        // get model
        $model = $this->__getCardModel($app, $supplement, $type);
        // get data
        $count = $model->getRecordsCount();
        $card = $model->getRecordById(mt_rand(1, $count));
        return $card;
    }

}