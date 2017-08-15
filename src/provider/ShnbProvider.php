<?php

namespace Nkgo\Provider;

use Nkgo\Model\ShnbFamilyNameDenkiModel;
use Nkgo\Model\ShnbFamilyNameFictionModel;
use Nkgo\Model\ShnbFamilyNameMeimonModel;
use Nkgo\Model\ShnbFamilyNameTimeiModel;
use Nkgo\Model\ShnbFamilyNameToorinaModel;
use Nkgo\Model\ShnbGyoujyuugigaModel;
use Nkgo\Model\ShnbHyakkiyakouModel;
use Nkgo\Model\ShnbIruiikeiModel;
use Nkgo\Model\ShnbItizokuroutouModel;
use Nkgo\Model\ShnbKatyoufuugetuModel;
use Nkgo\Model\ShnbNameDenkiModel;
use Nkgo\Model\ShnbNameIppanModel;
use Nkgo\Model\ShnbNameKiteretuModel;
use Nkgo\Model\ShnbNameSengokuModel;
use Nkgo\Model\ShnbNameTokusyuModel;
use Nkgo\Model\ShnbOmotenokaoModel;
use Nkgo\Model\ShnbSinrabansyouModel;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class ShnbProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get('/', function () use ($app) {
            return $app['twig']->render('shnb/index.twig', array(
                'site_title' => 'シノビガミランダムジェネレーター(β)',
                'page_title' => 'INDEX',
            ));
        });
        $controllers->get('/get-random', function () use ($app) {
            return $app->json(array(
                'status' => true,
                'message' => 'success',
                'full_name' => $this->generateRandomFullName($app, 'all', 'all', 'all'),
                'omotenokao' => $this->generateOmotenokao($app),
                'ketumei' => $this->generateKetumei($app),
                'ougi' => $this->generateOugi($app)
            ));
        });
        $controllers->get('/get-random-full-name', function () use ($app) {
            return $app->json(array(
                'status' => true,
                'message' => 'success',
                'full_name' => $this->generateRandomFullName($app, 'all', 'all', 'all')
            ));
        });
        $controllers->get('/get-random-omotenokao', function () use ($app) {
            return $app->json(array(
                'status' => true,
                'message' => 'success',
                'omotenokao' => $this->generateOmotenokao($app)
            ));
        });
        $controllers->get('/get-random-ketumei', function () use ($app) {
            return $app->json(array(
                'status' => true,
                'message' => 'success',
                'ketumei' => $this->generateKetumei($app)
            ));
        });
        $controllers->get('/get-random-ougi', function () use ($app) {
            return $app->json(array(
                'status' => true,
                'message' => 'success',
                'ougi' => $this->generateOugi($app)
            ));
        });
        return $controllers;
    }

    /**
     * @param Application $app
     * @param string $familyNamedictionary
     * @param string $nameDictionary
     * @param string $sexDictionary
     *
     * @return array
     */
    public function generateRandomFullName(Application $app, $familyNamedictionary = 'all', $nameDictionary = 'all', $sexDictionary = 'all')
    {
        // get family name
        $familyNameSeed = mt_rand(1, 5);
        $familyNameModel = null;
        switch ($familyNameSeed) {
            case 1:
                $familyNameModel = new ShnbFamilyNameDenkiModel($app);
                break;
            case 2:
                $familyNameModel = new ShnbFamilyNameFictionModel($app);
                break;
            case 3:
                $familyNameModel = new ShnbFamilyNameMeimonModel($app);
                break;
            case 4:
                $familyNameModel = new ShnbFamilyNameTimeiModel($app);
                break;
            case 5:
                $familyNameModel = new ShnbFamilyNameToorinaModel($app);
                break;
            default:
                // not reach here
        }
        $familyNameRecordsCount = $familyNameModel->getRecordsCount();
        $familyName = $familyNameModel->getRecordById(mt_rand(1, $familyNameRecordsCount));
        // get name
        $nameSeed = mt_rand(1, 4);
        $nameModel = null;
        switch ($nameSeed) {
            case 1:
                $nameModel = new ShnbNameDenkiModel($app);
                break;
            case 2:
                $nameModel = new ShnbNameIppanModel($app);
                break;
            case 3:
                $nameModel = new ShnbNameKiteretuModel($app);
                break;
            case 4:
                $nameModel = new ShnbNameSengokuModel($app);
                break;
//            case 5:
//                $nameModel = new ShnbNameTokusyuModel($app);
//                break;
            default:
                // not reach here
        }
        $nameRecordsCount = $nameModel->getRecordsCount();
        $name = $nameModel->getRecordById(mt_rand(1, $nameRecordsCount));
        // return values
        return array(
            'family_name' => $familyName[0]['name'],
            'family_name_kana' => $familyName[0]['name_kana'],
            'name' => $name[0]['name'],
            'name_kana' => $name[0]['name_kana'],
            'sex' => $name[0]['sex'],
        );
    }

    /**
     * @param Application $app
     *
     * @return array
     */
    public function generateOmotenokao(Application $app)
    {
        $model = new ShnbOmotenokaoModel($app);
        $recordsCount = $model->getRecordsCount();
        $omotenokao = $model->getRecordById(mt_rand(1, $recordsCount));
        return array(
            'name' => $omotenokao[0]['name']
        );
    }

    /**
     * @param Application $app
     *
     * @return array
     */
    public function generateKetumei(Application $app)
    {
        $generateRule = mt_rand(1, 6);
        $prefixModel = null;
        $postfixModel = null;
        switch ($generateRule) {
            case 1:
                $prefixModel = new ShnbKatyoufuugetuModel($app);
                $postfixModel = new ShnbItizokuroutouModel($app);
                break;
            case 2:
                $prefixModel = new ShnbSinrabansyouModel($app);
                $postfixModel = new ShnbItizokuroutouModel($app);
                break;
            case 3:
                $prefixModel = new ShnbIruiikeiModel($app);
                $postfixModel = new ShnbHyakkiyakouModel($app);
                break;
            case 4:
                $prefixModel = new ShnbIruiikeiModel($app);
                $postfixModel = new ShnbItizokuroutouModel($app);
                break;
            case 5:
                $prefixModel = new ShnbFamilyNameDenkiModel($app);
                $postfixModel = new ShnbItizokuroutouModel($app);
                break;
            case 6:
                $prefixModel = new ShnbSinrabansyouModel($app);
                $postfixModel = new ShnbNameDenkiModel($app);
                break;
            default:
                // not reach here
        }
        $prefixRecordsCount = $prefixModel->getRecordsCount();
        $prefix = $prefixModel->getRecordById(mt_rand(1, $prefixRecordsCount));
        $postfixRecordsCount = $postfixModel->getRecordsCount();
        $postfix = $postfixModel->getRecordById(mt_rand(1, $postfixRecordsCount));
        return array(
            'name' => ($prefix[0]['name'] . $postfix[0]['name']),
            'name_kana' => ($prefix[0]['name_kana'] . $postfix[0]['name_kana']),
        );
    }

    /**
     * @param Application $app
     *
     * @return array
     */
    public function generateOugi(Application $app)
    {
        $generateRule = mt_rand(2, 12);
        $prefixModel = null;
        $postfixModel = null;
        switch ($generateRule) {
            case 2:
                $prefixModel = new ShnbKatyoufuugetuModel($app);
                $postfixModel = new ShnbKatyoufuugetuModel($app);
                break;
            case 3:
                $prefixModel = new ShnbHyakkiyakouModel($app);
                $postfixModel = new ShnbSinrabansyouModel($app);
                break;
            case 4:
                $prefixModel = new ShnbKatyoufuugetuModel($app);
                $postfixModel = new ShnbHyakkiyakouModel($app);
                break;
            case 5:
                $prefixModel = new ShnbSinrabansyouModel($app);
                $postfixModel = new ShnbGyoujyuugigaModel($app);
                break;
            case 6:
                $prefixModel = new ShnbHyakkiyakouModel($app);
                $postfixModel = new ShnbKatyoufuugetuModel($app);
                break;
            case 7:
                $prefixModel = new ShnbSinrabansyouModel($app);
                $postfixModel = new ShnbKatyoufuugetuModel($app);
                break;
            case 8:
                $prefixModel = new ShnbKatyoufuugetuModel($app);
                $postfixModel = new ShnbSinrabansyouModel($app);
                break;
            case 9:
                $prefixModel = new ShnbHyakkiyakouModel($app);
                $postfixModel = new ShnbGyoujyuugigaModel($app);
                break;
            case 10:
                $prefixModel = new ShnbKatyoufuugetuModel($app);
                $postfixModel = new ShnbGyoujyuugigaModel($app);
                break;
            case 11:
                $prefixModel = new ShnbSinrabansyouModel($app);
                $postfixModel = new ShnbHyakkiyakouModel($app);
                break;
            case 12:
                $prefixModel = new ShnbSinrabansyouModel($app);
                $postfixModel = new ShnbSinrabansyouModel($app);
                break;
            default:
                // not reach here
        }
        $prefixRecordsCount = $prefixModel->getRecordsCount();
        $prefix = $prefixModel->getRecordById(mt_rand(1, $prefixRecordsCount));
        $postfixRecordsCount = $postfixModel->getRecordsCount();
        $postfix = $postfixModel->getRecordById(mt_rand(1, $postfixRecordsCount));
        return array(
            'name' => ($prefix[0]['name'] . $postfix[0]['name']),
            'name_kana' => ($prefix[0]['name_kana'] . $postfix[0]['name_kana']),
        );
    }
}