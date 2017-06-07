<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ReplayModel
 * @package Nkgo
 */
class ReplayModel extends BaseModel
{
    /**
     * ReplayModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'replay');
    }

    /**
     * @param string $rule
     * @param string $series
     * @param string $episode
     * @param string $part
     *
     * @return array
     */
    public function getReplay($rule = '', $series = '', $episode = '', $part = '')
    {
        $returnValues = array(
            'ruleTitle' => 'UNDEFINED RULE',
            'seriesTitle' => 'UNDEFINED SERIES TITLE',
            'title' => 'UNDEFINED TITLE',
            'menuTitle' => 'UNDEFINED MENU TITLE',
            'pageTitle' => 'UNDEFINED PAGE TITLE',
            'plNames' => array(),
            'gmNames' => array()
        );
        // FIXME: とりあえずコード
        switch ($rule) {
            case 'gror':
                $returnValues['ruleTitle'] = 'ガーデンオーダー';
                $returnValues['plNames'] = array('aneko', 'evi', 'kaeru');
                $returnValues['gmNames'] = array('naki');
                switch ($series) {
                    case '1':
                        $returnValues['seriesTitle'] = '単発';
                        switch ($episode) {
                            case '1':
                                $returnValues['title'] = '「給料日」';
                                switch ($part) {
                                    case '1':
                                        $returnValues['menuTitle'] = '前編';
                                        break;
                                    case '2':
                                        $returnValues['menuTitle'] = '後編';
                                        break;
                                }
                                break;
                        }
                        break;
                    case '2':
                        $returnValues['seriesTitle'] = 'シリーズ「ゼロ特学園生活！」';
                        switch ($episode) {
                            case '1':
                                $returnValues['title'] = 'EP1「燃える校舎」';
                                switch ($part) {
                                    case '1':
                                        $returnValues['menuTitle'] = '前編';
                                        break;
                                    case '2':
                                        $returnValues['menuTitle'] = '中編';
                                        break;
                                    case '3':
                                        $returnValues['menuTitle'] = '後編';
                                        break;
                                }
                                break;
                            case '2':
                                switch ($part) {
                                    case '1':
                                        $returnValues['title'] = 'EP2「栄光のマラソン大会」';
                                        $returnValues['menuTitle'] = '';
                                        break;
                                }
                                break;
                        }
                        break;
                }
                break;
            default:
                // nothing to do
        }
        // 値を補正
        $replayUserModel = new ReplayUserModel($this->app);
        $returnValues['pageTitle'] = $returnValues['ruleTitle'] . 'リプレイ ' . $returnValues['seriesTitle'] . ' ' . $returnValues['title'] . $returnValues['menuTitle'];
        $returnValues['plNames'] = $replayUserModel->getRecordsByNames($returnValues['plNames']);
        $returnValues['gmNames'] = $replayUserModel->getRecordsByNames($returnValues['gmNames']);
        return $returnValues;
    }
}