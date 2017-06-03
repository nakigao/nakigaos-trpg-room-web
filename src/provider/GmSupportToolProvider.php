<?php

namespace Nkgo;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class GmSupportToolProvider implements ControllerProviderInterface
{
    /**
     * @var array
     * @note DodontoF/src_bcdice/diceBot/*.rb - v1.48.19
     */
    protected $_diceBotList = array(
        array('AceKillerGene', 'エースキラージーン', true),
        array('Airgetlamh', 'Airgetlamh', false),
        array('Alsetto', 'Alsetto', false),
        array('Alshard', 'Alshard', false),
        array('Amadeus', 'Amadeus', false),
        array('Amadeus_Korean', 'Amadeus_Korean', false),
        array('Arianrhod', 'アリアンロッド', true),
        array('ArsMagica', 'ArsMagica', false),
        array('Avandner', 'アヴァンドナー', true),
        array('BarnaKronika', 'BarnaKronika', false),
        array('BattleTech', 'BattleTech', false),
        array('BeastBindTrinity', 'BeastBindTrinity', false),
        array('BeginningIdol', 'BeginningIdol', false),
        array('BeginningIdol_Korean', 'BeginningIdol_Korean', false),
        array('BladeOfArcana', 'BladeOfArcana', false),
        array('BloodCrusade', 'BloodCrusade', false),
        array('BloodMoon', 'BloodMoon', false),
        array('CardRanker', 'CardRanker', false),
        array('ChaosFlare', 'ChaosFlare', false),
        array('Chill', 'Chill', false),
        array('Chill3', 'Chill3', false),
        array('CodeLayerd', 'CodeLayerd', false),
        array('CrashWorld', 'CrashWorld', false),
        array('Cthulhu', 'クトゥルフ', true),
        array('Cthulhu7th', 'Cthulhu7th', false),
        array('Cthulhu7th_Korean', 'Cthulhu7th_Korean', false),
        array('CthulhuTech', 'CthulhuTech', false),
        array('Cthulhu_Korean', 'Cthulhu_Korean', false),
        array('DarkBlaze', 'DarkBlaze', false),
        array('DemonParasite', 'DemonParasite', false),
        array('DetatokoSaga', 'DetatokoSaga', false),
        array('DetatokoSaga_Korean', 'DetatokoSaga_Korean', false),
        array('DiceBot', 'DiceBot', false),
        array('DiceBotLoader', 'DiceBotLoader', false),
        array('DiceOfTheDead', 'DiceOfTheDead', false),
        array('DoubleCross', 'DoubleCross', false),
        array('Dracurouge', 'Dracurouge', false),
        array('Dracurouge_Korean', 'Dracurouge_Korean', false),
        array('DungeonsAndDoragons', 'DungeonsAndDoragons', false),
        array('EarthDawn', 'EarthDawn', false),
        array('EarthDawn3', 'EarthDawn3', false),
        array('EarthDawn4', 'EarthDawn4', false),
        array('EclipsePhase', 'EclipsePhase', false),
        array('Elric', 'Elric', false),
        array('Elysion', 'Elysion', false),
        array('EmbryoMachine', 'EmbryoMachine', false),
        array('EndBreaker', 'EndBreaker', false),
        array('EtrianOdysseySRS', 'EtrianOdysseySRS', false),
        array('FilledWith', 'FilledWith', false),
        array('FullMetalPanic', 'FullMetalPanic', false),
        array('Garako', 'Garako', false),
        array('GardenOrder', 'ガーデンオーダー', true),
        array('GehennaAn', 'マスカレイドスタイル', true),
        array('GeishaGirlwithKatana', 'GeishaGirlwithKatana', false),
        array('GoldenSkyStories', 'GoldenSkyStories', false),
        array('Gorilla', 'Gorilla', false),
        array('GranCrest', 'グランクレスト', true),
        array('Gundog', 'Gundog', false),
        array('GundogZero', 'GundogZero', false),
        array('Gurps', 'Gurps', false),
        array('GurpsFW', 'GurpsFW', false),
        array('HarnMaster', 'HarnMaster', false),
        array('Hieizan', 'Hieizan', false),
        array('HouraiGakuen', 'HouraiGakuen', false),
        array('HuntersMoon', 'HuntersMoon', false),
        array('InfiniteFantasia', 'InfiniteFantasia', false),
        array('Insane', 'インセイン', true),
        array('Insane_Korean', 'Insane_Korean', false),
        array('IthaWenUa', 'IthaWenUa', false),
        array('JamesBond', 'JamesBond', false),
        array('Kamigakari', 'Kamigakari', false),
        array('Kamigakari_Korean', 'Kamigakari_Korean', false),
        array('KanColle', 'KanColle', false),
        array('KillDeathBusiness', 'KillDeathBusiness', false),
        array('KillDeathBusiness_Korean', 'KillDeathBusiness_Korean', false),
        array('LiveraDoll', 'LiveraDoll', false),
        array('LogHorizon', 'LogHorizon', false),
        array('LogHorizon_Korean', 'LogHorizon_Korean', false),
        array('LostRoyal', 'ロストロイヤル', true),
        array('MagicaLogia', 'MagicaLogia', false),
        array('MeikyuDays', '迷宮デイズ', true),
        array('MeikyuKingdom', '迷宮キングダム', true),
        array('MetalHead', 'MetalHead', false),
        array('MetallicGuadian', 'MetallicGuadian', false),
        array('MonotoneMusium', 'MonotoneMusium', false),
        array('MonotoneMusium_Korean', 'MonotoneMusium_Korean', false),
        array('Nechronica', 'Nechronica', false),
        array('Nechronica_Korean', 'Nechronica_Korean', false),
        array('NightWizard', 'NightWizard', false),
        array('NightmareHunterDeep', 'NightmareHunterDeep', false),
        array('NjslyrBattle', 'NjslyrBattle', false),
        array('Nuekagami', 'Nuekagami', false),
        array('OneWayHeroics', '片道勇者TRPG', true),
        array('Oukahoushin3rd', 'Oukahoushin3rd', false),
        array('Paranoia', 'Paranoia', false),
        array('ParasiteBlood', 'ParasiteBlood', false),
        array('Pathfinder', 'Pathfinder', true),
        array('Peekaboo', 'Peekaboo', false),
        array('Pendragon', 'Pendragon', false),
        array('PhantasmAdventure', 'PhantasmAdventure', false),
        array('RecordOfSteam', 'RecordOfSteam', false),
        array('RokumonSekai2', 'RokumonSekai2', false),
        array('RoleMaster', 'RoleMaster', false),
        array('RuneQuest', 'RuneQuest', false),
        array('Ryutama', 'Ryutama', false),
        array('SRS', 'SRS', false),
        array('Satasupe', 'Satasupe', false),
        array('ShadowRun', 'ShadowRun', false),
        array('ShadowRun4', 'ShadowRun4', false),
        array('SharedFantasia', 'SharedFantasia', false),
        array('ShinMegamiTenseiKakuseihen', 'ShinMegamiTenseiKakuseihen', false),
        array('ShinkuuGakuen', 'ShinkuuGakuen', false),
        array('ShinobiGami', 'ShinobiGami', false),
        array('ShoujoTenrankai', 'ShoujoTenrankai', false),
        array('Skynauts', 'Skynauts', false),
        array('StrangerOfSwordCity', 'StrangerOfSwordCity', false),
        array('SwordWorld', 'SwordWorld', false),
        array('SwordWorld2_0', 'ソードワールド2.0', true),
        array('TokumeiTenkousei', 'TokumeiTenkousei', false),
        array('TokyoNova', 'TokyoNova', false),
        array('Torg', 'Torg', false),
        array('Torg1_5', 'Torg1_5', false),
        array('TunnelsAndTrolls', 'TunnelsAndTrolls', false),
        array('TwilightGunsmoke', 'TwilightGunsmoke', false),
        array('Utakaze', 'Utakaze', false),
        array('WARPS', 'WARPS', false),
        array('WaresBlade', 'WaresBlade', false),
        array('Warhammer', 'Warhammer', false),
        array('WitchQuest', 'WitchQuest', false),
        array('ZettaiReido', 'ZettaiReido', false),
    );

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
            return $app['twig']->render('gm-support-tool/index.html.twig', array(

                'page_title' => 'GM SUPPORT TOOL',
                'diceBotList' => $this->_diceBotList
            ));
        });
        return $controllers;
    }
}