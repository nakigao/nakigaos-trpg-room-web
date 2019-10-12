<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class DodontofDiceBotModel
 * @package Nkgo
 */
class DodontofDiceBotModel extends BaseModel
{
    /**
     * DodontofDiceBotModel constructor.
     *
     * @param Application $app
     *
     * @throws \Exception
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'xxxxxx');
    }

    /**
     * @param string $order
     *
     * @return array
     * @note DodontoF/src_bcdice/diceBot/*.rb - v1.48.31
     */
    public function getRecords($order = 'ASC')
    {
        return array(
            array('AceKillerGene', 'AceKillerGene', true),
            array('Airgetlamh', 'Airgetlamh', false),
            array('Alsetto', 'Alsetto', false),
            array('Alshard', 'Alshard', false),
            array('Amadeus', 'Amadeus', false),
            array('Amadeus_Korean', 'Amadeus_Korean', false),
            array('Arianrhod', 'Arianrhod', true),
            array('ArsMagica', 'ArsMagica', false),
            array('Avandner', 'Avandner', false),
            array('BadLife', 'BadLife', false),
            array('BarnaKronika', 'BarnaKronika', false),
            array('BattleTech', 'BattleTech', false),
            array('BeastBindTrinity', 'BeastBindTrinity', false),
            array('BeginningIdol', 'BeginningIdol', false),
            array('BeginningIdol_Korean', 'BeginningIdol_Korean', false),
            array('BladeOfArcana', 'BladeOfArcana', false),
            array('BlindMythos', 'BlindMythos', false),
            array('BloodCrusade', 'BloodCrusade', false),
            array('BloodMoon', 'BloodMoon', false),
            array('CardRanker', 'CardRanker', false),
            array('ChaosFlare', 'ChaosFlare', false),
            array('Chill', 'Chill', false),
            array('Chill3', 'Chill3', false),
            array('CodeLayerd', 'CodeLayerd', false),
            array('ColossalHunter', 'ColossalHunter', false),
            array('CrashWorld', 'CrashWorld', false),
            array('Cthulhu', 'Cthulhu', true),
            array('Cthulhu7th', 'Cthulhu7th', false),
            array('Cthulhu7th_ChineseTraditional', 'Cthulhu7th_ChineseTraditional', false),
            array('Cthulhu7th_Korean', 'Cthulhu7th_Korean', false),
            array('CthulhuTech', 'CthulhuTech', false),
            array('Cthulhu_ChineseTraditional', 'Cthulhu_ChineseTraditional', false),
            array('Cthulhu_Korean', 'Cthulhu_Korean', false),
            array('DarkBlaze', 'DarkBlaze', false),
            array('DarkDaysDrive', 'DarkDaysDrive', false),
            array('DarkSouls', 'DarkSouls', false),
            array('DeadlineHeroes', 'DeadlineHeroes', true),
            array('DemonParasite', 'DemonParasite', false),
            array('DetatokoSaga', 'DetatokoSaga', false),
            array('DetatokoSaga_Korean', 'DetatokoSaga_Korean', false),
            array('DiceBot', 'DiceBot', false),
            array('DiceBotLoader', 'DiceBotLoader', false),
            array('DiceBotLoaderList', 'DiceBotLoaderList', false),
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
            array('EtrianOdysseySRS', 'EtrianOdysseySRS', true),
            array('FilledWith', 'FilledWith', false),
            array('FullMetalPanic', 'FullMetalPanic', false),
            array('Garako', 'Garako', false),
            array('GardenOrder', 'GardenOrder', true),
            array('GehennaAn', 'GehennaAn', false),
            array('GeishaGirlwithKatana', 'GeishaGirlwithKatana', false),
            array('GoldenSkyStories', 'GoldenSkyStories', false),
            array('Gorilla', 'Gorilla', false),
            array('GranCrest', 'GranCrest', true),
            array('Gundog', 'Gundog', false),
            array('GundogRevised', 'GundogRevised', false),
            array('GundogZero', 'GundogZero', false),
            array('Gurps', 'Gurps', false),
            array('GurpsFW', 'GurpsFW', false),
            array('HarnMaster', 'HarnMaster', false),
            array('HatsuneMiku', 'HatsuneMiku', false),
            array('Hieizan', 'Hieizan', false),
            array('HouraiGakuen', 'HouraiGakuen', false),
            array('HuntersMoon', 'HuntersMoon', false),
            array('InfiniteFantasia', 'InfiniteFantasia', false),
            array('Insane', 'Insane', true),
            array('Insane_Korean', 'Insane_Korean', false),
            array('IthaWenUa', 'IthaWenUa', false),
            array('JamesBond', 'JamesBond', false),
            array('Kamigakari', 'Kamigakari', false),
            array('Kamigakari_Korean', 'Kamigakari_Korean', false),
            array('KanColle', 'KanColle', false),
            array('KillDeathBusiness', 'KillDeathBusiness', false),
            array('KillDeathBusiness_Korean', 'KillDeathBusiness_Korean', false),
            array('KurayamiCrying', 'KurayamiCrying', true),
            array('LiveraDoll', 'LiveraDoll', false),
            array('LogHorizon', 'LogHorizon', false),
            array('LogHorizon_Korean', 'LogHorizon_Korean', false),
            array('LostRoyal', 'LostRoyal', true),
            array('MagicaLogia', 'MagicaLogia', false),
            array('MeikyuDays', 'MeikyuDays', true),
            array('MeikyuKingdom', 'MeikyuKingdom', false),
            array('MetalHead', 'MetalHead', false),
            array('MetalHeadExtream', 'MetalHeadExtream', false),
            array('MetallicGuadian', 'MetallicGuadian', false),
            array('MonotoneMusium', 'MonotoneMusium', false),
            array('MonotoneMusium_Korean', 'MonotoneMusium_Korean', false),
            array('Nechronica', 'Nechronica', false),
            array('Nechronica_Korean', 'Nechronica_Korean', false),
            array('NightWizard', 'NightWizard', false),
            array('NightWizard3rd', 'NightWizard3rd', false),
            array('NightmareHunterDeep', 'NightmareHunterDeep', false),
            array('Njslattle', 'Njslattle', false),
            array('Nuekagami', 'Nuekagami', false),
            array('OneWayHeroics', 'OneWayHeroics', true),
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
            array('SevenFortressMobius', 'SevenFortressMobius', false),
            array('ShadowRun', 'ShadowRun', false),
            array('ShadowRun4', 'ShadowRun4', false),
            array('SharedFantasia', 'SharedFantasia', false),
            array('ShinMegamiTenseiKakuseihen', 'ShinMegamiTenseiKakuseihen', false),
            array('ShinkuuGakuen', 'ShinkuuGakuen', false),
            array('ShinobiGami', 'ShinobiGami', true),
            array('ShoujoTenrankai', 'ShoujoTenrankai', false),
            array('Skynauts', 'Skynauts', false),
            array('StrangerOfSwordCity', 'StrangerOfSwordCity', true),
            array('Strave', 'Strave', false),
            array('SwordWorld', 'SwordWorld', false),
            array('SwordWorld2_0', 'SwordWorld2_0', true),
            array('TherapieSein', 'TherapieSein', false),
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
            array('YankeeYogSothoth', 'YankeeYogSothoth', false),
            array('ZettaiReido', 'ZettaiReido', false),
        );
    }
}
