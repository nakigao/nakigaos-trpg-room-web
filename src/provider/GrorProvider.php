<?php

namespace Nkgo\Provider;

use Nkgo\Model\GrorEnemyCharacterSheetModel;
use Nkgo\Model\GrorEnemyCharacterSheetSkillModel;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class GrorProvider implements ControllerProviderInterface
{
    const DEFAULT_SITE_TITLE = 'ガーデンオーダーキャラクターDB(β)';

    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        /**
         *
         */
        $controllers->get('/', function () use ($app) {
            return $app['twig']->render('gror/index.twig', array(
                'site_title' => GrorProvider::DEFAULT_SITE_TITLE,
                'page_title' => 'INDEX',
            ));
        });
        /**
         *
         */
        $controllers->get('/enemy-character-sheet/show/{hash}', function () use ($app) {
            $currentRequest = $app['request_stack']->getCurrentRequest();
            $hash = $currentRequest->attributes->get('hash');
            //
            $grorEnemyCharacterSheetModel = new GrorEnemyCharacterSheetModel($app);
            $sheet = $grorEnemyCharacterSheetModel->handleEditForm($grorEnemyCharacterSheetModel->get($hash));
            if (empty($sheet)) {
                $pageTitle = 'UNKNOWN';
            } else {
                $pageTitle = "ランク{$sheet['rank']}{$sheet['type']}";
                if ($sheet['is_mob']) {
                    $pageTitle .= '(MOB)';
                }
                $pageTitle .= $sheet['name'];
            }
            //
            $grorEnemyCharacterSheetSkillModel = new GrorEnemyCharacterSheetSkillModel($app);
            $skills = $grorEnemyCharacterSheetSkillModel->handleEditForm($hash, $grorEnemyCharacterSheetSkillModel->gets($hash));
            //
            return $app['twig']->render('gror/enemy-character-sheet/show.twig', array(
                'site_title' => GrorProvider::DEFAULT_SITE_TITLE,
                'page_title' => $pageTitle,
                'sheet' => $sheet,
                'skills' => $skills
            ));

        });
        /**
         *
         */
        $controllers->get('/enemy-character-sheet/create', function () use ($app) {
            $grorEnemyCharacterSheetModel = new GrorEnemyCharacterSheetModel($app);
            $sheet = $grorEnemyCharacterSheetModel->handleEditForm(array());
            $grorEnemyCharacterSheetSkillModel = new GrorEnemyCharacterSheetSkillModel($app);
            $skills = $grorEnemyCharacterSheetSkillModel->handleEditForm(null, array());
            return $app['twig']->render('gror/enemy-character-sheet/create.twig', array(
                'site_title' => GrorProvider::DEFAULT_SITE_TITLE,
                'page_title' => 'CREATE',
                'sheet' => $sheet,
                'skills' => $skills
            ));
        });
        /**
         *
         */
        $controllers->post('/enemy-character-sheet/create', function () use ($app) {
            $currentRequest = $app['request_stack']->getCurrentRequest();
            $sheet = $currentRequest->get('sheet');
            $skills = $currentRequest->get('skills');
            // ログイン作るのメンドクサイです・・・
            $url = $currentRequest->getSchemeAndHttpHost() . $currentRequest->getBasePath() . '/gror/enemy-character-sheet/create';
            return $app->redirect($url);
            //
            $grorEnemyCharacterSheetModel = new GrorEnemyCharacterSheetModel($app);
            $sheet = $grorEnemyCharacterSheetModel->handleEditForm($sheet);
            $newEntry = $grorEnemyCharacterSheetModel->save($sheet);
            $grorEnemyCharacterSheetSkillModel = new GrorEnemyCharacterSheetSkillModel($app);
            $skills = $grorEnemyCharacterSheetSkillModel->handleEditForm($newEntry['hash'], $skills);
            $grorEnemyCharacterSheetSkillModel->save($skills);
            // redirect
            $url = $currentRequest->getSchemeAndHttpHost() . $currentRequest->getBasePath() . '/gror/enemy-character-sheet/show/' . $newEntry['hash'];
            return $app->redirect($url);
        });
        /**
         *
         */
        $controllers->get('/enemy-character-sheet/edit/{hash}', function () use ($app) {
            $currentRequest = $app['request_stack']->getCurrentRequest();
            $hash = $currentRequest->attributes->get('hash');
//            // ログイン作るのメンドクサイです・・・
//            $url = $currentRequest->getSchemeAndHttpHost() . $currentRequest->getBasePath() . '/gror/enemy-character-sheet/show/' . $hash;
//            return $app->redirect($url);
            //
            $grorEnemyCharacterSheetModel = new GrorEnemyCharacterSheetModel($app);
            $sheet = $grorEnemyCharacterSheetModel->handleEditForm($grorEnemyCharacterSheetModel->get($hash));
            //
            $grorEnemyCharacterSheetSkillModel = new GrorEnemyCharacterSheetSkillModel($app);
            $skills = $grorEnemyCharacterSheetSkillModel->handleEditForm($hash, $grorEnemyCharacterSheetSkillModel->gets($hash));
            //
            return $app['twig']->render('gror/enemy-character-sheet/edit.twig', array(
                'site_title' => GrorProvider::DEFAULT_SITE_TITLE,
                'page_title' => 'EDIT',
                'sheet' => $sheet,
                'skills' => $skills
            ));
        });
        /**
         *
         */
        $controllers->post('/enemy-character-sheet/edit/{hash}', function () use ($app) {
            $currentRequest = $app['request_stack']->getCurrentRequest();
            $hash = $currentRequest->get('hash');
            $sheet = $currentRequest->get('sheet');
            $skills = $currentRequest->get('skills');
//            // ログイン作るのメンドクサイです・・・
//            $url = $currentRequest->getSchemeAndHttpHost() . $currentRequest->getBasePath() . '/gror/enemy-character-sheet/show/' . $hash;
//            return $app->redirect($url);
            //
            $grorEnemyCharacterSheetModel = new GrorEnemyCharacterSheetModel($app);
            $sheet = $grorEnemyCharacterSheetModel->handleEditForm($sheet);
            $grorEnemyCharacterSheetModel->save($sheet);
            $grorEnemyCharacterSheetSkillModel = new GrorEnemyCharacterSheetSkillModel($app);
            $skills = $grorEnemyCharacterSheetSkillModel->handleEditForm($hash, $skills);
            $grorEnemyCharacterSheetSkillModel->save($skills);
            // redirect
            $url = $currentRequest->getSchemeAndHttpHost() . $currentRequest->getBasePath() . '/gror/enemy-character-sheet/edit/' . $hash;
            return $app->redirect($url);
        });
        /**
         *
         */
        return $controllers;
    }

}
