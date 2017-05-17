<?php
require __DIR__ . '/vendor/autoload.php';

// app
$app = new Silex\Application();
$app['debug'] = true;
$app['commonVariables'] = [
    'siteName' => '迷宮デイズキャラクター保管庫(β)'
];

// twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/views',
));

// doctrine
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
    )
));

/**
 * Page for index
 */
$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig', array(
        'siteName' => 'nakigao\'s TRPG Room',
        'pageName' => 'INDEX'
    ));
});

/**
 * Page for gmsupport
 */
$app->get('/gmsupport/', function () use ($app) {
    // DodontoF/src_bcdice/diceBot/*.rb - v1.48.19
    $diceBotList = array(
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
    return $app['twig']->render('gmsupport/index.html.twig', array(
        'siteName' => 'nakigao\'s TRPG Room',
        'pageName' => 'INDEX',
        'diceBotList' => $diceBotList
    ));
});

/**
 * Page for charactersheets/meikyudays
 */
$app->get('/charactersheets/meikyudays/', function () use ($app) {
    // get sheets
    $getSheetsSql = <<<EOM
SELECT
  hash,
  player_name,
  character_name,
  level,
  gender,
  age,
  class
FROM sheet
ORDER BY id DESC;
EOM;
    $stmt = $app['db']->prepare($getSheetsSql);
    $stmt->execute();
    $sheets = $stmt->fetchAll();
    return $app['twig']->render('charactersheets/meikyudays/index.html.twig', array(
        'commonVariables' => $app['commonVariables'],
        'pageName' => 'INDEX',
        'sheets' => $sheets
    ));
});

/**
 * Page for data
 */
$app->get('/charactersheets/meikyudays/show/{hash}', function () use ($app) {
    $request = app['request$'];
    $hash = $request->attributes->get('hash');
    // get sheets
    $getSheetsSql = <<<EOM
SELECT *
FROM sheet
WHERE hash = :hash;
EOM;
    $stmt = $app['db']->prepare($getSheetsSql);
    $stmt->bindParam(':hash', $hash);
    $stmt->execute();
    $sheet = $stmt->fetch();
    return $app['twig']->render('charactersheets/meikyudays/show.html.twig', array(
        'commonVariables' => $app['commonVariables'],
        'pageName' => '閲覧',
        'sheet' => $sheet
    ));
});

/**
 * Page for data insert
 */
$app->get('/charactersheets/meikyudays/create', function () use ($app) {
    return $app['twig']->render('charactersheets/meikyudays/edit.html.twig', array(
        'commonVariables' => $app['commonVariables'],
        'pageName' => '作成',
        'nextAction' => 'create',
        'sheet' => array()
    ));
});

/**
 * Insert
 */
$app->post('/charactersheets/meikyudays/create', function () use ($app) {
    $request = $app['request_stack']->getCurrentRequest();
    $sheet = $request->get('sheet');
    $insertSql = <<<EOM
INSERT INTO sheet
SET
  password             = :password,
  hash                 = :hash,
  player_name          = :player_name,

  character_name       = :character_name,
  gender               = :gender,
  age                  = :age,

  like1                = :like1,
  like2                = :like2,
  like3                = :like3,

  hate1                = :hate1,
  hate2                = :hate2,
  hate3                = :hate3,

  level                = :level,
  class                = :class,
  used_exp             = :used_exp,
  total_exp            = :total_exp,

  deposit              = :deposit,

  intelligence         = :intelligence,
  intelligence_i       = :intelligence_i,
  intelligence_b       = :intelligence_b,
  intelligence_g       = :intelligence_g,
  charisma             = :charisma,
  charisma_i           = :charisma_i,
  charisma_b           = :charisma_b,
  charisma_g           = :charisma_g,
  survival             = :survival,
  survival_i           = :survival_i,
  survival_b           = :survival_b,
  survival_g           = :survival_g,
  strength             = :strength,
  strength_i           = :strength_i,
  strength_b           = :strength_b,
  strength_g           = :strength_g,

  hitpoint             = :hitpoint,
  hitpoint_i           = :hitpoint_i,
  hitpoint_b           = :hitpoint_b,
  capacity             = :capacity,
  capacity_i           = :capacity_i,
  capacity_b           = :capacity_b,
  dexterity            = :dexterity,
  dexterity_i          = :dexterity_i,
  dexterity_b          = :dexterity_b,
  followers            = :followers,
  followers_i          = :followers_i,
  followers_b          = :followers_b,

  skill1               = :skill1,
  skill1_description   = :skill1_description,
  skill2               = :skill2,
  skill2_description   = :skill2_description,
  skill3               = :skill3,
  skill3_description   = :skill3_description,
  skill4               = :skill4,
  skill4_description   = :skill4_description,
  skill5               = :skill5,
  skill5_description   = :skill5_description,
  skill6               = :skill6,
  skill6_description   = :skill6_description,
  skill7               = :skill7,
  skill7_description   = :skill7_description,
  skill8               = :skill8,
  skill8_description   = :skill8_description,
  skill9               = :skill9,
  skill9_description   = :skill9_description,
  skill10              = :skill10,
  skill10_description  = :skill10_description,
  skill11              = :skill11,
  skill11_description  = :skill11_description,
  skill12              = :skill12,
  skill12_description  = :skill12_description,

  item1                = :item1,
  item1_count          = :item1_count,
  item1_description    = :item1_description,
  item2                = :item2,
  item2_count          = :item2_count,
  item2_description    = :item2_description,
  item3                = :item3,
  item3_count          = :item3_count,
  item3_description    = :item3_description,
  item4                = :item4,
  item4_count          = :item4_count,
  item4_description    = :item4_description,
  item5                = :item5,
  item5_count          = :item5_count,
  item5_description    = :item5_description,
  item6                = :item6,
  item6_count          = :item6_count,
  item6_description    = :item6_description,

  material3            = :material3,
  material4            = :material4,
  material5            = :material5,
  material6            = :material6,
  material7            = :material7,
  material8            = :material8,
  material9            = :material9,
  material10           = :material10,
  material11           = :material11,
  material12           = :material12,

  feeling1_name        = :feeling1_name,
  feeling1_loyalty     = :feeling1_loyalty,
  feeling1_friendship  = :feeling1_friendship,
  feeling1_love        = :feeling1_love,
  feeling1_rage        = :feeling1_rage,
  feeling1_distrust    = :feeling1_distrust,
  feeling1_hostility   = :feeling1_hostility,
  feeling2_name        = :feeling2_name,
  feeling2_loyalty     = :feeling2_loyalty,
  feeling2_friendship  = :feeling2_friendship,
  feeling2_love        = :feeling2_love,
  feeling2_rage        = :feeling2_rage,
  feeling2_distrust    = :feeling2_distrust,
  feeling2_hostility   = :feeling2_hostility,
  feeling3_name        = :feeling3_name,
  feeling3_loyalty     = :feeling3_loyalty,
  feeling3_friendship  = :feeling3_friendship,
  feeling3_love        = :feeling3_love,
  feeling3_rage        = :feeling3_rage,
  feeling3_distrust    = :feeling3_distrust,
  feeling3_hostility   = :feeling3_hostility,
  feeling4_name        = :feeling4_name,
  feeling4_loyalty     = :feeling4_loyalty,
  feeling4_friendship  = :feeling4_friendship,
  feeling4_love        = :feeling4_love,
  feeling4_rage        = :feeling4_rage,
  feeling4_distrust    = :feeling4_distrust,
  feeling4_hostility   = :feeling4_hostility,
  feeling5_name        = :feeling5_name,
  feeling5_loyalty     = :feeling5_loyalty,
  feeling5_friendship  = :feeling5_friendship,
  feeling5_love        = :feeling5_love,
  feeling5_rage        = :feeling5_rage,
  feeling5_distrust    = :feeling5_distrust,
  feeling5_hostility   = :feeling5_hostility,
  feeling6_name        = :feeling6_name,
  feeling6_loyalty     = :feeling6_loyalty,
  feeling6_friendship  = :feeling6_friendship,
  feeling6_love        = :feeling6_love,
  feeling6_rage        = :feeling6_rage,
  feeling6_distrust    = :feeling6_distrust,
  feeling6_hostility   = :feeling6_hostility,
  feeling7_name        = :feeling7_name,
  feeling7_loyalty     = :feeling7_loyalty,
  feeling7_friendship  = :feeling7_friendship,
  feeling7_love        = :feeling7_love,
  feeling7_rage        = :feeling7_rage,
  feeling7_distrust    = :feeling7_distrust,
  feeling7_hostility   = :feeling7_hostility,
  feeling8_name        = :feeling8_name,
  feeling8_loyalty     = :feeling8_loyalty,
  feeling8_friendship  = :feeling8_friendship,
  feeling8_love        = :feeling8_love,
  feeling8_rage        = :feeling8_rage,
  feeling8_distrust    = :feeling8_distrust,
  feeling8_hostility   = :feeling8_hostility,
  feeling9_name        = :feeling9_name,
  feeling9_loyalty     = :feeling9_loyalty,
  feeling9_friendship  = :feeling9_friendship,
  feeling9_love        = :feeling9_love,
  feeling9_rage        = :feeling9_rage,
  feeling9_distrust    = :feeling9_distrust,
  feeling9_hostility   = :feeling9_hostility,
  feeling10_name       = :feeling10_name,
  feeling10_loyalty    = :feeling10_loyalty,
  feeling10_friendship = :feeling10_friendship,
  feeling10_love       = :feeling10_love,
  feeling10_rage       = :feeling10_rage,
  feeling10_distrust   = :feeling10_distrust,
  feeling10_hostility  = :feeling10_hostility,

  onesided1            = :onesided1,
  onesided2            = :onesided2,
  onesided3            = :onesided3,
  sweetheart1          = :sweetheart1,
  sweetheart2          = :sweetheart2,
  sweetheart3          = :sweetheart3,
  bestfriend1          = :bestfriend1,
  bestfriend2          = :bestfriend2,
  bestfriend3          = :bestfriend3,
  monarch1             = :monarch1,
  monarch2             = :monarch2,
  monarch3             = :monarch3,
  rival1               = :rival1,
  rival2               = :rival2,
  rival3               = :rival3,

  consumption          = :consumption,

  memo                 = :memo
EOM;
    $stmt = $app['db']->prepare($insertSql);

    // data-binding
//    $stmt->bindParam(':id', $sheet['id']);
    $stmt->bindParam(':password', $sheet['password']);
    $hash = md5(uniqid(rand(), 1));
    $stmt->bindParam(':hash', $hash);
    $stmt->bindParam(':player_name', $sheet['player_name']);

    $stmt->bindParam(':character_name', $sheet['character_name']);
    $stmt->bindParam(':gender', $sheet['gender']);
    $stmt->bindParam(':age', $sheet['age']);

    $stmt->bindParam(':like1', $sheet['like1']);
    $stmt->bindParam(':like2', $sheet['like2']);
    $stmt->bindParam(':like3', $sheet['like3']);

    $stmt->bindParam(':hate1', $sheet['hate1']);
    $stmt->bindParam(':hate2', $sheet['hate2']);
    $stmt->bindParam(':hate3', $sheet['hate3']);

    $stmt->bindParam(':level', $sheet['level']);
    $stmt->bindParam(':class', $sheet['class']);
    $stmt->bindParam(':used_exp', $sheet['used_exp']);
    $stmt->bindParam(':total_exp', $sheet['total_exp']);

    $stmt->bindParam(':deposit', $sheet['deposit']);

    $stmt->bindParam(':intelligence', $sheet['intelligence']);
    $stmt->bindParam(':intelligence_i', $sheet['intelligence_i']);
    $stmt->bindParam(':intelligence_b', $sheet['intelligence_b']);
    $stmt->bindParam(':intelligence_g', $sheet['intelligence_g']);
    $stmt->bindParam(':charisma', $sheet['charisma']);
    $stmt->bindParam(':charisma_i', $sheet['charisma_i']);
    $stmt->bindParam(':charisma_b', $sheet['charisma_b']);
    $stmt->bindParam(':charisma_g', $sheet['charisma_g']);
    $stmt->bindParam(':survival', $sheet['survival']);
    $stmt->bindParam(':survival_i', $sheet['survival_i']);
    $stmt->bindParam(':survival_b', $sheet['survival_b']);
    $stmt->bindParam(':survival_g', $sheet['survival_g']);
    $stmt->bindParam(':strength', $sheet['strength']);
    $stmt->bindParam(':strength_i', $sheet['strength_i']);
    $stmt->bindParam(':strength_b', $sheet['strength_b']);
    $stmt->bindParam(':strength_g', $sheet['strength_g']);

    $stmt->bindParam(':hitpoint', $sheet['hitpoint']);
    $stmt->bindParam(':hitpoint_i', $sheet['hitpoint_i']);
    $stmt->bindParam(':hitpoint_b', $sheet['hitpoint_b']);
    $stmt->bindParam(':capacity', $sheet['capacity']);
    $stmt->bindParam(':capacity_i', $sheet['capacity_i']);
    $stmt->bindParam(':capacity_b', $sheet['capacity_b']);
    $stmt->bindParam(':dexterity', $sheet['dexterity']);
    $stmt->bindParam(':dexterity_i', $sheet['dexterity_i']);
    $stmt->bindParam(':dexterity_b', $sheet['dexterity_b']);
    $stmt->bindParam(':followers', $sheet['followers']);
    $stmt->bindParam(':followers_i', $sheet['followers_i']);
    $stmt->bindParam(':followers_b', $sheet['followers_b']);

    $stmt->bindParam(':skill1', $sheet['skill1']);
    $stmt->bindParam(':skill1_description', $sheet['skill1_description']);
    $stmt->bindParam(':skill2', $sheet['skill2']);
    $stmt->bindParam(':skill2_description', $sheet['skill2_description']);
    $stmt->bindParam(':skill3', $sheet['skill3']);
    $stmt->bindParam(':skill3_description', $sheet['skill3_description']);
    $stmt->bindParam(':skill4', $sheet['skill4']);
    $stmt->bindParam(':skill4_description', $sheet['skill4_description']);
    $stmt->bindParam(':skill5', $sheet['skill5']);
    $stmt->bindParam(':skill5_description', $sheet['skill5_description']);
    $stmt->bindParam(':skill6', $sheet['skill6']);
    $stmt->bindParam(':skill6_description', $sheet['skill6_description']);
    $stmt->bindParam(':skill7', $sheet['skill7']);
    $stmt->bindParam(':skill7_description', $sheet['skill7_description']);
    $stmt->bindParam(':skill8', $sheet['skill8']);
    $stmt->bindParam(':skill8_description', $sheet['skill8_description']);
    $stmt->bindParam(':skill9', $sheet['skill9']);
    $stmt->bindParam(':skill9_description', $sheet['skill9_description']);
    $stmt->bindParam(':skill10', $sheet['skill10']);
    $stmt->bindParam(':skill10_description', $sheet['skill10_description']);
    $stmt->bindParam(':skill11', $sheet['skill11']);
    $stmt->bindParam(':skill11_description', $sheet['skill11_description']);
    $stmt->bindParam(':skill12', $sheet['skill12']);
    $stmt->bindParam(':skill12_description', $sheet['skill12_description']);

    $stmt->bindParam(':item1', $sheet['item1']);
    $stmt->bindParam(':item1_count', $sheet['item1_count']);
    $stmt->bindParam(':item1_description', $sheet['item1_description']);
    $stmt->bindParam(':item2', $sheet['item2']);
    $stmt->bindParam(':item2_count', $sheet['item2_count']);
    $stmt->bindParam(':item2_description', $sheet['item2_description']);
    $stmt->bindParam(':item3', $sheet['item3']);
    $stmt->bindParam(':item3_count', $sheet['item3_count']);
    $stmt->bindParam(':item3_description', $sheet['item3_description']);
    $stmt->bindParam(':item4', $sheet['item4']);
    $stmt->bindParam(':item4_count', $sheet['item4_count']);
    $stmt->bindParam(':item4_description', $sheet['item4_description']);
    $stmt->bindParam(':item5', $sheet['item5']);
    $stmt->bindParam(':item5_count', $sheet['item5_count']);
    $stmt->bindParam(':item5_description', $sheet['item5_description']);
    $stmt->bindParam(':item6', $sheet['item6']);
    $stmt->bindParam(':item6_count', $sheet['item6_count']);
    $stmt->bindParam(':item6_description', $sheet['item6_description']);

    $stmt->bindParam(':material3', $sheet['material3']);
    $stmt->bindParam(':material4', $sheet['material4']);
    $stmt->bindParam(':material5', $sheet['material5']);
    $stmt->bindParam(':material6', $sheet['material6']);
    $stmt->bindParam(':material7', $sheet['material7']);
    $stmt->bindParam(':material8', $sheet['material8']);
    $stmt->bindParam(':material9', $sheet['material9']);
    $stmt->bindParam(':material10', $sheet['material10']);
    $stmt->bindParam(':material11', $sheet['material11']);
    $stmt->bindParam(':material12', $sheet['material12']);

    $stmt->bindParam(':feeling1_name', $sheet['feeling1_name']);
    $stmt->bindParam(':feeling1_loyalty', $sheet['feeling1_loyalty']);
    $stmt->bindParam(':feeling1_friendship', $sheet['feeling1_friendship']);
    $stmt->bindParam(':feeling1_love', $sheet['feeling1_love']);
    $stmt->bindParam(':feeling1_rage', $sheet['feeling1_rage']);
    $stmt->bindParam(':feeling1_distrust', $sheet['feeling1_distrust']);
    $stmt->bindParam(':feeling1_hostility', $sheet['feeling1_hostility']);
    $stmt->bindParam(':feeling2_name', $sheet['feeling2_name']);
    $stmt->bindParam(':feeling2_loyalty', $sheet['feeling2_loyalty']);
    $stmt->bindParam(':feeling2_friendship', $sheet['feeling2_friendship']);
    $stmt->bindParam(':feeling2_love', $sheet['feeling2_love']);
    $stmt->bindParam(':feeling2_rage', $sheet['feeling2_rage']);
    $stmt->bindParam(':feeling2_distrust', $sheet['feeling2_distrust']);
    $stmt->bindParam(':feeling2_hostility', $sheet['feeling2_hostility']);
    $stmt->bindParam(':feeling3_name', $sheet['feeling3_name']);
    $stmt->bindParam(':feeling3_loyalty', $sheet['feeling3_loyalty']);
    $stmt->bindParam(':feeling3_friendship', $sheet['feeling3_friendship']);
    $stmt->bindParam(':feeling3_love', $sheet['feeling3_love']);
    $stmt->bindParam(':feeling3_rage', $sheet['feeling3_rage']);
    $stmt->bindParam(':feeling3_distrust', $sheet['feeling3_distrust']);
    $stmt->bindParam(':feeling3_hostility', $sheet['feeling3_hostility']);
    $stmt->bindParam(':feeling4_name', $sheet['feeling4_name']);
    $stmt->bindParam(':feeling4_loyalty', $sheet['feeling4_loyalty']);
    $stmt->bindParam(':feeling4_friendship', $sheet['feeling4_friendship']);
    $stmt->bindParam(':feeling4_love', $sheet['feeling4_love']);
    $stmt->bindParam(':feeling4_rage', $sheet['feeling4_rage']);
    $stmt->bindParam(':feeling4_distrust', $sheet['feeling4_distrust']);
    $stmt->bindParam(':feeling4_hostility', $sheet['feeling4_hostility']);
    $stmt->bindParam(':feeling5_name', $sheet['feeling5_name']);
    $stmt->bindParam(':feeling5_loyalty', $sheet['feeling5_loyalty']);
    $stmt->bindParam(':feeling5_friendship', $sheet['feeling5_friendship']);
    $stmt->bindParam(':feeling5_love', $sheet['feeling5_love']);
    $stmt->bindParam(':feeling5_rage', $sheet['feeling5_rage']);
    $stmt->bindParam(':feeling5_distrust', $sheet['feeling5_distrust']);
    $stmt->bindParam(':feeling5_hostility', $sheet['feeling5_hostility']);
    $stmt->bindParam(':feeling6_name', $sheet['feeling6_name']);
    $stmt->bindParam(':feeling6_loyalty', $sheet['feeling6_loyalty']);
    $stmt->bindParam(':feeling6_friendship', $sheet['feeling6_friendship']);
    $stmt->bindParam(':feeling6_love', $sheet['feeling6_love']);
    $stmt->bindParam(':feeling6_rage', $sheet['feeling6_rage']);
    $stmt->bindParam(':feeling6_distrust', $sheet['feeling6_distrust']);
    $stmt->bindParam(':feeling6_hostility', $sheet['feeling6_hostility']);
    $stmt->bindParam(':feeling7_name', $sheet['feeling7_name']);
    $stmt->bindParam(':feeling7_loyalty', $sheet['feeling7_loyalty']);
    $stmt->bindParam(':feeling7_friendship', $sheet['feeling7_friendship']);
    $stmt->bindParam(':feeling7_love', $sheet['feeling7_love']);
    $stmt->bindParam(':feeling7_rage', $sheet['feeling7_rage']);
    $stmt->bindParam(':feeling7_distrust', $sheet['feeling7_distrust']);
    $stmt->bindParam(':feeling7_hostility', $sheet['feeling7_hostility']);
    $stmt->bindParam(':feeling8_name', $sheet['feeling8_name']);
    $stmt->bindParam(':feeling8_loyalty', $sheet['feeling8_loyalty']);
    $stmt->bindParam(':feeling8_friendship', $sheet['feeling8_friendship']);
    $stmt->bindParam(':feeling8_love', $sheet['feeling8_love']);
    $stmt->bindParam(':feeling8_rage', $sheet['feeling8_rage']);
    $stmt->bindParam(':feeling8_distrust', $sheet['feeling8_distrust']);
    $stmt->bindParam(':feeling8_hostility', $sheet['feeling8_hostility']);
    $stmt->bindParam(':feeling9_name', $sheet['feeling9_name']);
    $stmt->bindParam(':feeling9_loyalty', $sheet['feeling9_loyalty']);
    $stmt->bindParam(':feeling9_friendship', $sheet['feeling9_friendship']);
    $stmt->bindParam(':feeling9_love', $sheet['feeling9_love']);
    $stmt->bindParam(':feeling9_rage', $sheet['feeling9_rage']);
    $stmt->bindParam(':feeling9_distrust', $sheet['feeling9_distrust']);
    $stmt->bindParam(':feeling9_hostility', $sheet['feeling9_hostility']);
    $stmt->bindParam(':feeling10_name', $sheet['feeling10_name']);
    $stmt->bindParam(':feeling10_loyalty', $sheet['feeling10_loyalty']);
    $stmt->bindParam(':feeling10_friendship', $sheet['feeling10_friendship']);
    $stmt->bindParam(':feeling10_love', $sheet['feeling10_love']);
    $stmt->bindParam(':feeling10_rage', $sheet['feeling10_rage']);
    $stmt->bindParam(':feeling10_distrust', $sheet['feeling10_distrust']);
    $stmt->bindParam(':feeling10_hostility', $sheet['feeling10_hostility']);

    $stmt->bindParam(':onesided1', $sheet['onesided1']);
    $stmt->bindParam(':onesided2', $sheet['onesided2']);
    $stmt->bindParam(':onesided3', $sheet['onesided3']);
    $stmt->bindParam(':sweetheart1', $sheet['sweetheart1']);
    $stmt->bindParam(':sweetheart2', $sheet['sweetheart2']);
    $stmt->bindParam(':sweetheart3', $sheet['sweetheart3']);
    $stmt->bindParam(':bestfriend1', $sheet['bestfriend1']);
    $stmt->bindParam(':bestfriend2', $sheet['bestfriend2']);
    $stmt->bindParam(':bestfriend3', $sheet['bestfriend3']);
    $stmt->bindParam(':monarch1', $sheet['monarch1']);
    $stmt->bindParam(':monarch2', $sheet['monarch2']);
    $stmt->bindParam(':monarch3', $sheet['monarch3']);
    $stmt->bindParam(':rival1', $sheet['rival1']);
    $stmt->bindParam(':rival2', $sheet['rival2']);
    $stmt->bindParam(':rival3', $sheet['rival3']);

    $stmt->bindParam(':consumption', $sheet['consumption']);

//    $stmt->bindParam(':peace2', $sheet['peace2']);
//    $stmt->bindParam(':peace3', $sheet['peace3']);
//    $stmt->bindParam(':peace4', $sheet['peace4']);
//    $stmt->bindParam(':peace5', $sheet['peace5']);
//    $stmt->bindParam(':peace6', $sheet['peace6']);
//    $stmt->bindParam(':peace7', $sheet['peace7']);
//    $stmt->bindParam(':peace8', $sheet['peace8']);
//    $stmt->bindParam(':peace9', $sheet['peace9']);
//    $stmt->bindParam(':peace10', $sheet['peace10']);
//    $stmt->bindParam(':peace11', $sheet['peace11']);
//    $stmt->bindParam(':peace12', $sheet['peace12']);
//    $stmt->bindParam(':peace13', $sheet['peace13']);
//    $stmt->bindParam(':peace14', $sheet['peace14']);
//    $stmt->bindParam(':peace15', $sheet['peace15']);
//    $stmt->bindParam(':peace16', $sheet['peace16']);
//    $stmt->bindParam(':peace17', $sheet['peace17']);
//    $stmt->bindParam(':peace18', $sheet['peace18']);
//    $stmt->bindParam(':peace19', $sheet['peace19']);
//    $stmt->bindParam(':peace20', $sheet['peace20']);
//    $stmt->bindParam(':peace21', $sheet['peace21']);
//    $stmt->bindParam(':cure2', $sheet['cure2']);
//    $stmt->bindParam(':cure3', $sheet['cure3']);
//    $stmt->bindParam(':cure4', $sheet['cure4']);
//    $stmt->bindParam(':cure5', $sheet['cure5']);
//    $stmt->bindParam(':cure6', $sheet['cure6']);
//    $stmt->bindParam(':cure7', $sheet['cure7']);
//    $stmt->bindParam(':cure8', $sheet['cure8']);
//    $stmt->bindParam(':cure9', $sheet['cure9']);
//    $stmt->bindParam(':cure10', $sheet['cure10']);
//    $stmt->bindParam(':cure11', $sheet['cure11']);
//    $stmt->bindParam(':cure12', $sheet['cure12']);
//    $stmt->bindParam(':cure13', $sheet['cure13']);
//    $stmt->bindParam(':cure14', $sheet['cure14']);
//    $stmt->bindParam(':cure15', $sheet['cure15']);
//    $stmt->bindParam(':cure16', $sheet['cure16']);
//    $stmt->bindParam(':cure17', $sheet['cure17']);
//    $stmt->bindParam(':cure18', $sheet['cure18']);
//    $stmt->bindParam(':cure19', $sheet['cure19']);
//    $stmt->bindParam(':cure20', $sheet['cure20']);
//    $stmt->bindParam(':cure21', $sheet['cure21']);
//    $stmt->bindParam(':destroy2', $sheet['destroy2']);
//    $stmt->bindParam(':destroy3', $sheet['destroy3']);
//    $stmt->bindParam(':destroy4', $sheet['destroy4']);
//    $stmt->bindParam(':destroy5', $sheet['destroy5']);
//    $stmt->bindParam(':destroy6', $sheet['destroy6']);
//    $stmt->bindParam(':destroy7', $sheet['destroy7']);
//    $stmt->bindParam(':destroy8', $sheet['destroy8']);
//    $stmt->bindParam(':destroy9', $sheet['destroy9']);
//    $stmt->bindParam(':destroy10', $sheet['destroy10']);
//    $stmt->bindParam(':destroy11', $sheet['destroy11']);
//    $stmt->bindParam(':destroy12', $sheet['destroy12']);
//    $stmt->bindParam(':destroy13', $sheet['destroy13']);
//    $stmt->bindParam(':destroy14', $sheet['destroy14']);
//    $stmt->bindParam(':destroy15', $sheet['destroy15']);
//    $stmt->bindParam(':destroy16', $sheet['destroy16']);
//    $stmt->bindParam(':destroy17', $sheet['destroy17']);
//    $stmt->bindParam(':destroy18', $sheet['destroy18']);
//    $stmt->bindParam(':destroy19', $sheet['destroy19']);
//    $stmt->bindParam(':destroy20', $sheet['destroy20']);
//    $stmt->bindParam(':destroy21', $sheet['destroy21']);
//    $stmt->bindParam(':growth2', $sheet['growth2']);
//    $stmt->bindParam(':growth3', $sheet['growth3']);
//    $stmt->bindParam(':growth4', $sheet['growth4']);
//    $stmt->bindParam(':growth5', $sheet['growth5']);
//    $stmt->bindParam(':growth6', $sheet['growth6']);
//    $stmt->bindParam(':growth7', $sheet['growth7']);
//    $stmt->bindParam(':growth8', $sheet['growth8']);
//    $stmt->bindParam(':growth9', $sheet['growth9']);
//    $stmt->bindParam(':growth10', $sheet['growth10']);
//    $stmt->bindParam(':growth11', $sheet['growth11']);
//    $stmt->bindParam(':growth12', $sheet['growth12']);
//    $stmt->bindParam(':growth13', $sheet['growth13']);
//    $stmt->bindParam(':growth14', $sheet['growth14']);
//    $stmt->bindParam(':growth15', $sheet['growth15']);
//    $stmt->bindParam(':growth16', $sheet['growth16']);
//    $stmt->bindParam(':growth17', $sheet['growth17']);
//    $stmt->bindParam(':growth18', $sheet['growth18']);
//    $stmt->bindParam(':growth19', $sheet['growth19']);
//    $stmt->bindParam(':growth20', $sheet['growth20']);
//    $stmt->bindParam(':growth21', $sheet['growth21']);
//    $stmt->bindParam(':revolution2', $sheet['revolution2']);
//    $stmt->bindParam(':revolution3', $sheet['revolution3']);
//    $stmt->bindParam(':revolution4', $sheet['revolution4']);
//    $stmt->bindParam(':revolution5', $sheet['revolution5']);
//    $stmt->bindParam(':revolution6', $sheet['revolution6']);
//    $stmt->bindParam(':revolution7', $sheet['revolution7']);
//    $stmt->bindParam(':revolution8', $sheet['revolution8']);
//    $stmt->bindParam(':revolution9', $sheet['revolution9']);
//    $stmt->bindParam(':revolution10', $sheet['revolution10']);
//    $stmt->bindParam(':revolution11', $sheet['revolution11']);
//    $stmt->bindParam(':revolution12', $sheet['revolution12']);
//    $stmt->bindParam(':revolution13', $sheet['revolution13']);
//    $stmt->bindParam(':revolution14', $sheet['revolution14']);
//    $stmt->bindParam(':revolution15', $sheet['revolution15']);
//    $stmt->bindParam(':revolution16', $sheet['revolution16']);
//    $stmt->bindParam(':revolution17', $sheet['revolution17']);
//    $stmt->bindParam(':revolution18', $sheet['revolution18']);
//    $stmt->bindParam(':revolution19', $sheet['revolution19']);
//    $stmt->bindParam(':revolution20', $sheet['revolution20']);
//    $stmt->bindParam(':revolution21', $sheet['revolution21']);
//    $stmt->bindParam(':preserve2', $sheet['preserve2']);
//    $stmt->bindParam(':preserve3', $sheet['preserve3']);
//    $stmt->bindParam(':preserve4', $sheet['preserve4']);
//    $stmt->bindParam(':preserve5', $sheet['preserve5']);
//    $stmt->bindParam(':preserve6', $sheet['preserve6']);
//    $stmt->bindParam(':preserve7', $sheet['preserve7']);
//    $stmt->bindParam(':preserve8', $sheet['preserve8']);
//    $stmt->bindParam(':preserve9', $sheet['preserve9']);
//    $stmt->bindParam(':preserve10', $sheet['preserve10']);
//    $stmt->bindParam(':preserve11', $sheet['preserve11']);
//    $stmt->bindParam(':preserve12', $sheet['preserve12']);
//    $stmt->bindParam(':preserve13', $sheet['preserve13']);
//    $stmt->bindParam(':preserve14', $sheet['preserve14']);
//    $stmt->bindParam(':preserve15', $sheet['preserve15']);
//    $stmt->bindParam(':preserve16', $sheet['preserve16']);
//    $stmt->bindParam(':preserve17', $sheet['preserve17']);
//    $stmt->bindParam(':preserve18', $sheet['preserve18']);
//    $stmt->bindParam(':preserve19', $sheet['preserve19']);
//    $stmt->bindParam(':preserve20', $sheet['preserve20']);
//    $stmt->bindParam(':preserve21', $sheet['preserve21']);
//    $stmt->bindParam(':luxury2', $sheet['luxury2']);
//    $stmt->bindParam(':luxury3', $sheet['luxury3']);
//    $stmt->bindParam(':luxury4', $sheet['luxury4']);
//    $stmt->bindParam(':luxury5', $sheet['luxury5']);
//    $stmt->bindParam(':luxury6', $sheet['luxury6']);
//    $stmt->bindParam(':luxury7', $sheet['luxury7']);
//    $stmt->bindParam(':luxury8', $sheet['luxury8']);
//    $stmt->bindParam(':luxury9', $sheet['luxury9']);
//    $stmt->bindParam(':luxury10', $sheet['luxury10']);
//    $stmt->bindParam(':luxury11', $sheet['luxury11']);
//    $stmt->bindParam(':luxury12', $sheet['luxury12']);
//    $stmt->bindParam(':luxury13', $sheet['luxury13']);
//    $stmt->bindParam(':luxury14', $sheet['luxury14']);
//    $stmt->bindParam(':luxury15', $sheet['luxury15']);
//    $stmt->bindParam(':luxury16', $sheet['luxury16']);
//    $stmt->bindParam(':luxury17', $sheet['luxury17']);
//    $stmt->bindParam(':luxury18', $sheet['luxury18']);
//    $stmt->bindParam(':luxury19', $sheet['luxury19']);
//    $stmt->bindParam(':luxury20', $sheet['luxury20']);
//    $stmt->bindParam(':luxury21', $sheet['luxury21']);
//    $stmt->bindParam(':other2', $sheet['other2']);
//    $stmt->bindParam(':other3', $sheet['other3']);
//    $stmt->bindParam(':other4', $sheet['other4']);
//    $stmt->bindParam(':other5', $sheet['other5']);
//    $stmt->bindParam(':other6', $sheet['other6']);
//    $stmt->bindParam(':other7', $sheet['other7']);
//    $stmt->bindParam(':other8', $sheet['other8']);
//    $stmt->bindParam(':other9', $sheet['other9']);
//    $stmt->bindParam(':other10', $sheet['other10']);
//    $stmt->bindParam(':other11', $sheet['other11']);
//    $stmt->bindParam(':other12', $sheet['other12']);
//    $stmt->bindParam(':other13', $sheet['other13']);
//    $stmt->bindParam(':other14', $sheet['other14']);
//    $stmt->bindParam(':other15', $sheet['other15']);
//    $stmt->bindParam(':other16', $sheet['other16']);
//    $stmt->bindParam(':other17', $sheet['other17']);
//    $stmt->bindParam(':other18', $sheet['other18']);
//    $stmt->bindParam(':other19', $sheet['other19']);
//    $stmt->bindParam(':other20', $sheet['other20']);
//    $stmt->bindParam(':other21', $sheet['other21']);

    $stmt->bindParam(':memo', $sheet['memo']);

    // save
    $stmt->execute();

    // redirect
    $url = $request->getSchemeAndHttpHost() . $request->getBasePath() . '/charactersheets/meikyudays/';
    return $app->redirect($url);
});

/**
 * Page for data update
 */
$app->get('/charactersheets/meikyudays/update/{hash}', function () use ($app) {
    $request = $app['request_stack']->getCurrentRequest();
    $hash = $request->attributes->get('hash');
    // get sheets
    $getSheetsSql = <<<EOM
SELECT *
FROM sheet
WHERE hash = :hash;
EOM;
    $stmt = $app['db']->prepare($getSheetsSql);
    $stmt->bindParam(':hash', $hash);
    $stmt->execute();
    $sheet = $stmt->fetch();
    return $app['twig']->render('charactersheets/meikyudays/edit.html.twig', array(
        'commonVariables' => $app['commonVariables'],
        'pageName' => '更新',
        'nextAction' => 'update',
        'sheet' => $sheet
    ));
});

/**
 * Update
 */
$app->post('/charactersheets/meikyudays/update', function () use ($app) {
    $request = $app['request_stack']->getCurrentRequest();
    $sheet = $request->get('sheet');

    $updateSql = <<<EOM
UPDATE sheet
SET
  player_name          = :player_name,

  character_name       = :character_name,
  gender               = :gender,
  age                  = :age,

  like1                = :like1,
  like2                = :like2,
  like3                = :like3,

  hate1                = :hate1,
  hate2                = :hate2,
  hate3                = :hate3,

  level                = :level,
  class                = :class,
  used_exp             = :used_exp,
  total_exp            = :total_exp,

  deposit              = :deposit,

  intelligence         = :intelligence,
  intelligence_i       = :intelligence_i,
  intelligence_b       = :intelligence_b,
  intelligence_g       = :intelligence_g,
  charisma             = :charisma,
  charisma_i           = :charisma_i,
  charisma_b           = :charisma_b,
  charisma_g           = :charisma_g,
  survival             = :survival,
  survival_i           = :survival_i,
  survival_b           = :survival_b,
  survival_g           = :survival_g,
  strength             = :strength,
  strength_i           = :strength_i,
  strength_b           = :strength_b,
  strength_g           = :strength_g,

  hitpoint             = :hitpoint,
  hitpoint_i           = :hitpoint_i,
  hitpoint_b           = :hitpoint_b,
  capacity             = :capacity,
  capacity_i           = :capacity_i,
  capacity_b           = :capacity_b,
  dexterity            = :dexterity,
  dexterity_i          = :dexterity_i,
  dexterity_b          = :dexterity_b,
  followers            = :followers,
  followers_i          = :followers_i,
  followers_b          = :followers_b,

  skill1               = :skill1,
  skill1_description   = :skill1_description,
  skill2               = :skill2,
  skill2_description   = :skill2_description,
  skill3               = :skill3,
  skill3_description   = :skill3_description,
  skill4               = :skill4,
  skill4_description   = :skill4_description,
  skill5               = :skill5,
  skill5_description   = :skill5_description,
  skill6               = :skill6,
  skill6_description   = :skill6_description,
  skill7               = :skill7,
  skill7_description   = :skill7_description,
  skill8               = :skill8,
  skill8_description   = :skill8_description,
  skill9               = :skill9,
  skill9_description   = :skill9_description,
  skill10              = :skill10,
  skill10_description  = :skill10_description,
  skill11              = :skill11,
  skill11_description  = :skill11_description,
  skill12              = :skill12,
  skill12_description  = :skill12_description,

  item1                = :item1,
  item1_count          = :item1_count,
  item1_description    = :item1_description,
  item2                = :item2,
  item2_count          = :item2_count,
  item2_description    = :item2_description,
  item3                = :item3,
  item3_count          = :item3_count,
  item3_description    = :item3_description,
  item4                = :item4,
  item4_count          = :item4_count,
  item4_description    = :item4_description,
  item5                = :item5,
  item5_count          = :item5_count,
  item5_description    = :item5_description,
  item6                = :item6,
  item6_count          = :item6_count,
  item6_description    = :item6_description,

  material3            = :material3,
  material4            = :material4,
  material5            = :material5,
  material6            = :material6,
  material7            = :material7,
  material8            = :material8,
  material9            = :material9,
  material10           = :material10,
  material11           = :material11,
  material12           = :material12,

  feeling1_name        = :feeling1_name,
  feeling1_loyalty     = :feeling1_loyalty,
  feeling1_friendship  = :feeling1_friendship,
  feeling1_love        = :feeling1_love,
  feeling1_rage        = :feeling1_rage,
  feeling1_distrust    = :feeling1_distrust,
  feeling1_hostility   = :feeling1_hostility,
  feeling2_name        = :feeling2_name,
  feeling2_loyalty     = :feeling2_loyalty,
  feeling2_friendship  = :feeling2_friendship,
  feeling2_love        = :feeling2_love,
  feeling2_rage        = :feeling2_rage,
  feeling2_distrust    = :feeling2_distrust,
  feeling2_hostility   = :feeling2_hostility,
  feeling3_name        = :feeling3_name,
  feeling3_loyalty     = :feeling3_loyalty,
  feeling3_friendship  = :feeling3_friendship,
  feeling3_love        = :feeling3_love,
  feeling3_rage        = :feeling3_rage,
  feeling3_distrust    = :feeling3_distrust,
  feeling3_hostility   = :feeling3_hostility,
  feeling4_name        = :feeling4_name,
  feeling4_loyalty     = :feeling4_loyalty,
  feeling4_friendship  = :feeling4_friendship,
  feeling4_love        = :feeling4_love,
  feeling4_rage        = :feeling4_rage,
  feeling4_distrust    = :feeling4_distrust,
  feeling4_hostility   = :feeling4_hostility,
  feeling5_name        = :feeling5_name,
  feeling5_loyalty     = :feeling5_loyalty,
  feeling5_friendship  = :feeling5_friendship,
  feeling5_love        = :feeling5_love,
  feeling5_rage        = :feeling5_rage,
  feeling5_distrust    = :feeling5_distrust,
  feeling5_hostility   = :feeling5_hostility,
  feeling6_name        = :feeling6_name,
  feeling6_loyalty     = :feeling6_loyalty,
  feeling6_friendship  = :feeling6_friendship,
  feeling6_love        = :feeling6_love,
  feeling6_rage        = :feeling6_rage,
  feeling6_distrust    = :feeling6_distrust,
  feeling6_hostility   = :feeling6_hostility,
  feeling7_name        = :feeling7_name,
  feeling7_loyalty     = :feeling7_loyalty,
  feeling7_friendship  = :feeling7_friendship,
  feeling7_love        = :feeling7_love,
  feeling7_rage        = :feeling7_rage,
  feeling7_distrust    = :feeling7_distrust,
  feeling7_hostility   = :feeling7_hostility,
  feeling8_name        = :feeling8_name,
  feeling8_loyalty     = :feeling8_loyalty,
  feeling8_friendship  = :feeling8_friendship,
  feeling8_love        = :feeling8_love,
  feeling8_rage        = :feeling8_rage,
  feeling8_distrust    = :feeling8_distrust,
  feeling8_hostility   = :feeling8_hostility,
  feeling9_name        = :feeling9_name,
  feeling9_loyalty     = :feeling9_loyalty,
  feeling9_friendship  = :feeling9_friendship,
  feeling9_love        = :feeling9_love,
  feeling9_rage        = :feeling9_rage,
  feeling9_distrust    = :feeling9_distrust,
  feeling9_hostility   = :feeling9_hostility,
  feeling10_name       = :feeling10_name,
  feeling10_loyalty    = :feeling10_loyalty,
  feeling10_friendship = :feeling10_friendship,
  feeling10_love       = :feeling10_love,
  feeling10_rage       = :feeling10_rage,
  feeling10_distrust   = :feeling10_distrust,
  feeling10_hostility  = :feeling10_hostility,

  onesided1            = :onesided1,
  onesided2            = :onesided2,
  onesided3            = :onesided3,
  sweetheart1          = :sweetheart1,
  sweetheart2          = :sweetheart2,
  sweetheart3          = :sweetheart3,
  bestfriend1          = :bestfriend1,
  bestfriend2          = :bestfriend2,
  bestfriend3          = :bestfriend3,
  monarch1             = :monarch1,
  monarch2             = :monarch2,
  monarch3             = :monarch3,
  rival1               = :rival1,
  rival2               = :rival2,
  rival3               = :rival3,

  consumption          = :consumption,

  memo                 = :memo
WHERE hash = :hash
EOM;
    $stmt = $app['db']->prepare($updateSql);

    // data-binding
    $stmt->bindParam(':player_name', $sheet['player_name']);

    $stmt->bindParam(':character_name', $sheet['character_name']);
    $stmt->bindParam(':gender', $sheet['gender']);
    $stmt->bindParam(':age', $sheet['age']);

    $stmt->bindParam(':like1', $sheet['like1']);
    $stmt->bindParam(':like2', $sheet['like2']);
    $stmt->bindParam(':like3', $sheet['like3']);

    $stmt->bindParam(':hate1', $sheet['hate1']);
    $stmt->bindParam(':hate2', $sheet['hate2']);
    $stmt->bindParam(':hate3', $sheet['hate3']);

    $stmt->bindParam(':level', $sheet['level']);
    $stmt->bindParam(':class', $sheet['class']);
    $stmt->bindParam(':used_exp', $sheet['used_exp']);
    $stmt->bindParam(':total_exp', $sheet['total_exp']);

    $stmt->bindParam(':deposit', $sheet['deposit']);

    $stmt->bindParam(':intelligence', $sheet['intelligence']);
    $stmt->bindParam(':intelligence_i', $sheet['intelligence_i']);
    $stmt->bindParam(':intelligence_b', $sheet['intelligence_b']);
    $stmt->bindParam(':intelligence_g', $sheet['intelligence_g']);
    $stmt->bindParam(':charisma', $sheet['charisma']);
    $stmt->bindParam(':charisma_i', $sheet['charisma_i']);
    $stmt->bindParam(':charisma_b', $sheet['charisma_b']);
    $stmt->bindParam(':charisma_g', $sheet['charisma_g']);
    $stmt->bindParam(':survival', $sheet['survival']);
    $stmt->bindParam(':survival_i', $sheet['survival_i']);
    $stmt->bindParam(':survival_b', $sheet['survival_b']);
    $stmt->bindParam(':survival_g', $sheet['survival_g']);
    $stmt->bindParam(':strength', $sheet['strength']);
    $stmt->bindParam(':strength_i', $sheet['strength_i']);
    $stmt->bindParam(':strength_b', $sheet['strength_b']);
    $stmt->bindParam(':strength_g', $sheet['strength_g']);

    $stmt->bindParam(':hitpoint', $sheet['hitpoint']);
    $stmt->bindParam(':hitpoint_i', $sheet['hitpoint_i']);
    $stmt->bindParam(':hitpoint_b', $sheet['hitpoint_b']);
    $stmt->bindParam(':capacity', $sheet['capacity']);
    $stmt->bindParam(':capacity_i', $sheet['capacity_i']);
    $stmt->bindParam(':capacity_b', $sheet['capacity_b']);
    $stmt->bindParam(':dexterity', $sheet['dexterity']);
    $stmt->bindParam(':dexterity_i', $sheet['dexterity_i']);
    $stmt->bindParam(':dexterity_b', $sheet['dexterity_b']);
    $stmt->bindParam(':followers', $sheet['followers']);
    $stmt->bindParam(':followers_i', $sheet['followers_i']);
    $stmt->bindParam(':followers_b', $sheet['followers_b']);

    $stmt->bindParam(':skill1', $sheet['skill1']);
    $stmt->bindParam(':skill1_description', $sheet['skill1_description']);
    $stmt->bindParam(':skill2', $sheet['skill2']);
    $stmt->bindParam(':skill2_description', $sheet['skill2_description']);
    $stmt->bindParam(':skill3', $sheet['skill3']);
    $stmt->bindParam(':skill3_description', $sheet['skill3_description']);
    $stmt->bindParam(':skill4', $sheet['skill4']);
    $stmt->bindParam(':skill4_description', $sheet['skill4_description']);
    $stmt->bindParam(':skill5', $sheet['skill5']);
    $stmt->bindParam(':skill5_description', $sheet['skill5_description']);
    $stmt->bindParam(':skill6', $sheet['skill6']);
    $stmt->bindParam(':skill6_description', $sheet['skill6_description']);
    $stmt->bindParam(':skill7', $sheet['skill7']);
    $stmt->bindParam(':skill7_description', $sheet['skill7_description']);
    $stmt->bindParam(':skill8', $sheet['skill8']);
    $stmt->bindParam(':skill8_description', $sheet['skill8_description']);
    $stmt->bindParam(':skill9', $sheet['skill9']);
    $stmt->bindParam(':skill9_description', $sheet['skill9_description']);
    $stmt->bindParam(':skill10', $sheet['skill10']);
    $stmt->bindParam(':skill10_description', $sheet['skill10_description']);
    $stmt->bindParam(':skill11', $sheet['skill11']);
    $stmt->bindParam(':skill11_description', $sheet['skill11_description']);
    $stmt->bindParam(':skill12', $sheet['skill12']);
    $stmt->bindParam(':skill12_description', $sheet['skill12_description']);

    $stmt->bindParam(':item1', $sheet['item1']);
    $stmt->bindParam(':item1_count', $sheet['item1_count']);
    $stmt->bindParam(':item1_description', $sheet['item1_description']);
    $stmt->bindParam(':item2', $sheet['item2']);
    $stmt->bindParam(':item2_count', $sheet['item2_count']);
    $stmt->bindParam(':item2_description', $sheet['item2_description']);
    $stmt->bindParam(':item3', $sheet['item3']);
    $stmt->bindParam(':item3_count', $sheet['item3_count']);
    $stmt->bindParam(':item3_description', $sheet['item3_description']);
    $stmt->bindParam(':item4', $sheet['item4']);
    $stmt->bindParam(':item4_count', $sheet['item4_count']);
    $stmt->bindParam(':item4_description', $sheet['item4_description']);
    $stmt->bindParam(':item5', $sheet['item5']);
    $stmt->bindParam(':item5_count', $sheet['item5_count']);
    $stmt->bindParam(':item5_description', $sheet['item5_description']);
    $stmt->bindParam(':item6', $sheet['item6']);
    $stmt->bindParam(':item6_count', $sheet['item6_count']);
    $stmt->bindParam(':item6_description', $sheet['item6_description']);

    $stmt->bindParam(':material3', $sheet['material3']);
    $stmt->bindParam(':material4', $sheet['material4']);
    $stmt->bindParam(':material5', $sheet['material5']);
    $stmt->bindParam(':material6', $sheet['material6']);
    $stmt->bindParam(':material7', $sheet['material7']);
    $stmt->bindParam(':material8', $sheet['material8']);
    $stmt->bindParam(':material9', $sheet['material9']);
    $stmt->bindParam(':material10', $sheet['material10']);
    $stmt->bindParam(':material11', $sheet['material11']);
    $stmt->bindParam(':material12', $sheet['material12']);

    $stmt->bindParam(':feeling1_name', $sheet['feeling1_name']);
    $stmt->bindParam(':feeling1_loyalty', $sheet['feeling1_loyalty']);
    $stmt->bindParam(':feeling1_friendship', $sheet['feeling1_friendship']);
    $stmt->bindParam(':feeling1_love', $sheet['feeling1_love']);
    $stmt->bindParam(':feeling1_rage', $sheet['feeling1_rage']);
    $stmt->bindParam(':feeling1_distrust', $sheet['feeling1_distrust']);
    $stmt->bindParam(':feeling1_hostility', $sheet['feeling1_hostility']);
    $stmt->bindParam(':feeling2_name', $sheet['feeling2_name']);
    $stmt->bindParam(':feeling2_loyalty', $sheet['feeling2_loyalty']);
    $stmt->bindParam(':feeling2_friendship', $sheet['feeling2_friendship']);
    $stmt->bindParam(':feeling2_love', $sheet['feeling2_love']);
    $stmt->bindParam(':feeling2_rage', $sheet['feeling2_rage']);
    $stmt->bindParam(':feeling2_distrust', $sheet['feeling2_distrust']);
    $stmt->bindParam(':feeling2_hostility', $sheet['feeling2_hostility']);
    $stmt->bindParam(':feeling3_name', $sheet['feeling3_name']);
    $stmt->bindParam(':feeling3_loyalty', $sheet['feeling3_loyalty']);
    $stmt->bindParam(':feeling3_friendship', $sheet['feeling3_friendship']);
    $stmt->bindParam(':feeling3_love', $sheet['feeling3_love']);
    $stmt->bindParam(':feeling3_rage', $sheet['feeling3_rage']);
    $stmt->bindParam(':feeling3_distrust', $sheet['feeling3_distrust']);
    $stmt->bindParam(':feeling3_hostility', $sheet['feeling3_hostility']);
    $stmt->bindParam(':feeling4_name', $sheet['feeling4_name']);
    $stmt->bindParam(':feeling4_loyalty', $sheet['feeling4_loyalty']);
    $stmt->bindParam(':feeling4_friendship', $sheet['feeling4_friendship']);
    $stmt->bindParam(':feeling4_love', $sheet['feeling4_love']);
    $stmt->bindParam(':feeling4_rage', $sheet['feeling4_rage']);
    $stmt->bindParam(':feeling4_distrust', $sheet['feeling4_distrust']);
    $stmt->bindParam(':feeling4_hostility', $sheet['feeling4_hostility']);
    $stmt->bindParam(':feeling5_name', $sheet['feeling5_name']);
    $stmt->bindParam(':feeling5_loyalty', $sheet['feeling5_loyalty']);
    $stmt->bindParam(':feeling5_friendship', $sheet['feeling5_friendship']);
    $stmt->bindParam(':feeling5_love', $sheet['feeling5_love']);
    $stmt->bindParam(':feeling5_rage', $sheet['feeling5_rage']);
    $stmt->bindParam(':feeling5_distrust', $sheet['feeling5_distrust']);
    $stmt->bindParam(':feeling5_hostility', $sheet['feeling5_hostility']);
    $stmt->bindParam(':feeling6_name', $sheet['feeling6_name']);
    $stmt->bindParam(':feeling6_loyalty', $sheet['feeling6_loyalty']);
    $stmt->bindParam(':feeling6_friendship', $sheet['feeling6_friendship']);
    $stmt->bindParam(':feeling6_love', $sheet['feeling6_love']);
    $stmt->bindParam(':feeling6_rage', $sheet['feeling6_rage']);
    $stmt->bindParam(':feeling6_distrust', $sheet['feeling6_distrust']);
    $stmt->bindParam(':feeling6_hostility', $sheet['feeling6_hostility']);
    $stmt->bindParam(':feeling7_name', $sheet['feeling7_name']);
    $stmt->bindParam(':feeling7_loyalty', $sheet['feeling7_loyalty']);
    $stmt->bindParam(':feeling7_friendship', $sheet['feeling7_friendship']);
    $stmt->bindParam(':feeling7_love', $sheet['feeling7_love']);
    $stmt->bindParam(':feeling7_rage', $sheet['feeling7_rage']);
    $stmt->bindParam(':feeling7_distrust', $sheet['feeling7_distrust']);
    $stmt->bindParam(':feeling7_hostility', $sheet['feeling7_hostility']);
    $stmt->bindParam(':feeling8_name', $sheet['feeling8_name']);
    $stmt->bindParam(':feeling8_loyalty', $sheet['feeling8_loyalty']);
    $stmt->bindParam(':feeling8_friendship', $sheet['feeling8_friendship']);
    $stmt->bindParam(':feeling8_love', $sheet['feeling8_love']);
    $stmt->bindParam(':feeling8_rage', $sheet['feeling8_rage']);
    $stmt->bindParam(':feeling8_distrust', $sheet['feeling8_distrust']);
    $stmt->bindParam(':feeling8_hostility', $sheet['feeling8_hostility']);
    $stmt->bindParam(':feeling9_name', $sheet['feeling9_name']);
    $stmt->bindParam(':feeling9_loyalty', $sheet['feeling9_loyalty']);
    $stmt->bindParam(':feeling9_friendship', $sheet['feeling9_friendship']);
    $stmt->bindParam(':feeling9_love', $sheet['feeling9_love']);
    $stmt->bindParam(':feeling9_rage', $sheet['feeling9_rage']);
    $stmt->bindParam(':feeling9_distrust', $sheet['feeling9_distrust']);
    $stmt->bindParam(':feeling9_hostility', $sheet['feeling9_hostility']);
    $stmt->bindParam(':feeling10_name', $sheet['feeling10_name']);
    $stmt->bindParam(':feeling10_loyalty', $sheet['feeling10_loyalty']);
    $stmt->bindParam(':feeling10_friendship', $sheet['feeling10_friendship']);
    $stmt->bindParam(':feeling10_love', $sheet['feeling10_love']);
    $stmt->bindParam(':feeling10_rage', $sheet['feeling10_rage']);
    $stmt->bindParam(':feeling10_distrust', $sheet['feeling10_distrust']);
    $stmt->bindParam(':feeling10_hostility', $sheet['feeling10_hostility']);

    $stmt->bindParam(':onesided1', $sheet['onesided1']);
    $stmt->bindParam(':onesided2', $sheet['onesided2']);
    $stmt->bindParam(':onesided3', $sheet['onesided3']);
    $stmt->bindParam(':sweetheart1', $sheet['sweetheart1']);
    $stmt->bindParam(':sweetheart2', $sheet['sweetheart2']);
    $stmt->bindParam(':sweetheart3', $sheet['sweetheart3']);
    $stmt->bindParam(':bestfriend1', $sheet['bestfriend1']);
    $stmt->bindParam(':bestfriend2', $sheet['bestfriend2']);
    $stmt->bindParam(':bestfriend3', $sheet['bestfriend3']);
    $stmt->bindParam(':monarch1', $sheet['monarch1']);
    $stmt->bindParam(':monarch2', $sheet['monarch2']);
    $stmt->bindParam(':monarch3', $sheet['monarch3']);
    $stmt->bindParam(':rival1', $sheet['rival1']);
    $stmt->bindParam(':rival2', $sheet['rival2']);
    $stmt->bindParam(':rival3', $sheet['rival3']);

    $stmt->bindParam(':consumption', $sheet['consumption']);

//    $stmt->bindParam(':peace2', $sheet['peace2']);
//    $stmt->bindParam(':peace3', $sheet['peace3']);
//    $stmt->bindParam(':peace4', $sheet['peace4']);
//    $stmt->bindParam(':peace5', $sheet['peace5']);
//    $stmt->bindParam(':peace6', $sheet['peace6']);
//    $stmt->bindParam(':peace7', $sheet['peace7']);
//    $stmt->bindParam(':peace8', $sheet['peace8']);
//    $stmt->bindParam(':peace9', $sheet['peace9']);
//    $stmt->bindParam(':peace10', $sheet['peace10']);
//    $stmt->bindParam(':peace11', $sheet['peace11']);
//    $stmt->bindParam(':peace12', $sheet['peace12']);
//    $stmt->bindParam(':peace13', $sheet['peace13']);
//    $stmt->bindParam(':peace14', $sheet['peace14']);
//    $stmt->bindParam(':peace15', $sheet['peace15']);
//    $stmt->bindParam(':peace16', $sheet['peace16']);
//    $stmt->bindParam(':peace17', $sheet['peace17']);
//    $stmt->bindParam(':peace18', $sheet['peace18']);
//    $stmt->bindParam(':peace19', $sheet['peace19']);
//    $stmt->bindParam(':peace20', $sheet['peace20']);
//    $stmt->bindParam(':peace21', $sheet['peace21']);
//    $stmt->bindParam(':cure2', $sheet['cure2']);
//    $stmt->bindParam(':cure3', $sheet['cure3']);
//    $stmt->bindParam(':cure4', $sheet['cure4']);
//    $stmt->bindParam(':cure5', $sheet['cure5']);
//    $stmt->bindParam(':cure6', $sheet['cure6']);
//    $stmt->bindParam(':cure7', $sheet['cure7']);
//    $stmt->bindParam(':cure8', $sheet['cure8']);
//    $stmt->bindParam(':cure9', $sheet['cure9']);
//    $stmt->bindParam(':cure10', $sheet['cure10']);
//    $stmt->bindParam(':cure11', $sheet['cure11']);
//    $stmt->bindParam(':cure12', $sheet['cure12']);
//    $stmt->bindParam(':cure13', $sheet['cure13']);
//    $stmt->bindParam(':cure14', $sheet['cure14']);
//    $stmt->bindParam(':cure15', $sheet['cure15']);
//    $stmt->bindParam(':cure16', $sheet['cure16']);
//    $stmt->bindParam(':cure17', $sheet['cure17']);
//    $stmt->bindParam(':cure18', $sheet['cure18']);
//    $stmt->bindParam(':cure19', $sheet['cure19']);
//    $stmt->bindParam(':cure20', $sheet['cure20']);
//    $stmt->bindParam(':cure21', $sheet['cure21']);
//    $stmt->bindParam(':destroy2', $sheet['destroy2']);
//    $stmt->bindParam(':destroy3', $sheet['destroy3']);
//    $stmt->bindParam(':destroy4', $sheet['destroy4']);
//    $stmt->bindParam(':destroy5', $sheet['destroy5']);
//    $stmt->bindParam(':destroy6', $sheet['destroy6']);
//    $stmt->bindParam(':destroy7', $sheet['destroy7']);
//    $stmt->bindParam(':destroy8', $sheet['destroy8']);
//    $stmt->bindParam(':destroy9', $sheet['destroy9']);
//    $stmt->bindParam(':destroy10', $sheet['destroy10']);
//    $stmt->bindParam(':destroy11', $sheet['destroy11']);
//    $stmt->bindParam(':destroy12', $sheet['destroy12']);
//    $stmt->bindParam(':destroy13', $sheet['destroy13']);
//    $stmt->bindParam(':destroy14', $sheet['destroy14']);
//    $stmt->bindParam(':destroy15', $sheet['destroy15']);
//    $stmt->bindParam(':destroy16', $sheet['destroy16']);
//    $stmt->bindParam(':destroy17', $sheet['destroy17']);
//    $stmt->bindParam(':destroy18', $sheet['destroy18']);
//    $stmt->bindParam(':destroy19', $sheet['destroy19']);
//    $stmt->bindParam(':destroy20', $sheet['destroy20']);
//    $stmt->bindParam(':destroy21', $sheet['destroy21']);
//    $stmt->bindParam(':growth2', $sheet['growth2']);
//    $stmt->bindParam(':growth3', $sheet['growth3']);
//    $stmt->bindParam(':growth4', $sheet['growth4']);
//    $stmt->bindParam(':growth5', $sheet['growth5']);
//    $stmt->bindParam(':growth6', $sheet['growth6']);
//    $stmt->bindParam(':growth7', $sheet['growth7']);
//    $stmt->bindParam(':growth8', $sheet['growth8']);
//    $stmt->bindParam(':growth9', $sheet['growth9']);
//    $stmt->bindParam(':growth10', $sheet['growth10']);
//    $stmt->bindParam(':growth11', $sheet['growth11']);
//    $stmt->bindParam(':growth12', $sheet['growth12']);
//    $stmt->bindParam(':growth13', $sheet['growth13']);
//    $stmt->bindParam(':growth14', $sheet['growth14']);
//    $stmt->bindParam(':growth15', $sheet['growth15']);
//    $stmt->bindParam(':growth16', $sheet['growth16']);
//    $stmt->bindParam(':growth17', $sheet['growth17']);
//    $stmt->bindParam(':growth18', $sheet['growth18']);
//    $stmt->bindParam(':growth19', $sheet['growth19']);
//    $stmt->bindParam(':growth20', $sheet['growth20']);
//    $stmt->bindParam(':growth21', $sheet['growth21']);
//    $stmt->bindParam(':revolution2', $sheet['revolution2']);
//    $stmt->bindParam(':revolution3', $sheet['revolution3']);
//    $stmt->bindParam(':revolution4', $sheet['revolution4']);
//    $stmt->bindParam(':revolution5', $sheet['revolution5']);
//    $stmt->bindParam(':revolution6', $sheet['revolution6']);
//    $stmt->bindParam(':revolution7', $sheet['revolution7']);
//    $stmt->bindParam(':revolution8', $sheet['revolution8']);
//    $stmt->bindParam(':revolution9', $sheet['revolution9']);
//    $stmt->bindParam(':revolution10', $sheet['revolution10']);
//    $stmt->bindParam(':revolution11', $sheet['revolution11']);
//    $stmt->bindParam(':revolution12', $sheet['revolution12']);
//    $stmt->bindParam(':revolution13', $sheet['revolution13']);
//    $stmt->bindParam(':revolution14', $sheet['revolution14']);
//    $stmt->bindParam(':revolution15', $sheet['revolution15']);
//    $stmt->bindParam(':revolution16', $sheet['revolution16']);
//    $stmt->bindParam(':revolution17', $sheet['revolution17']);
//    $stmt->bindParam(':revolution18', $sheet['revolution18']);
//    $stmt->bindParam(':revolution19', $sheet['revolution19']);
//    $stmt->bindParam(':revolution20', $sheet['revolution20']);
//    $stmt->bindParam(':revolution21', $sheet['revolution21']);
//    $stmt->bindParam(':preserve2', $sheet['preserve2']);
//    $stmt->bindParam(':preserve3', $sheet['preserve3']);
//    $stmt->bindParam(':preserve4', $sheet['preserve4']);
//    $stmt->bindParam(':preserve5', $sheet['preserve5']);
//    $stmt->bindParam(':preserve6', $sheet['preserve6']);
//    $stmt->bindParam(':preserve7', $sheet['preserve7']);
//    $stmt->bindParam(':preserve8', $sheet['preserve8']);
//    $stmt->bindParam(':preserve9', $sheet['preserve9']);
//    $stmt->bindParam(':preserve10', $sheet['preserve10']);
//    $stmt->bindParam(':preserve11', $sheet['preserve11']);
//    $stmt->bindParam(':preserve12', $sheet['preserve12']);
//    $stmt->bindParam(':preserve13', $sheet['preserve13']);
//    $stmt->bindParam(':preserve14', $sheet['preserve14']);
//    $stmt->bindParam(':preserve15', $sheet['preserve15']);
//    $stmt->bindParam(':preserve16', $sheet['preserve16']);
//    $stmt->bindParam(':preserve17', $sheet['preserve17']);
//    $stmt->bindParam(':preserve18', $sheet['preserve18']);
//    $stmt->bindParam(':preserve19', $sheet['preserve19']);
//    $stmt->bindParam(':preserve20', $sheet['preserve20']);
//    $stmt->bindParam(':preserve21', $sheet['preserve21']);
//    $stmt->bindParam(':luxury2', $sheet['luxury2']);
//    $stmt->bindParam(':luxury3', $sheet['luxury3']);
//    $stmt->bindParam(':luxury4', $sheet['luxury4']);
//    $stmt->bindParam(':luxury5', $sheet['luxury5']);
//    $stmt->bindParam(':luxury6', $sheet['luxury6']);
//    $stmt->bindParam(':luxury7', $sheet['luxury7']);
//    $stmt->bindParam(':luxury8', $sheet['luxury8']);
//    $stmt->bindParam(':luxury9', $sheet['luxury9']);
//    $stmt->bindParam(':luxury10', $sheet['luxury10']);
//    $stmt->bindParam(':luxury11', $sheet['luxury11']);
//    $stmt->bindParam(':luxury12', $sheet['luxury12']);
//    $stmt->bindParam(':luxury13', $sheet['luxury13']);
//    $stmt->bindParam(':luxury14', $sheet['luxury14']);
//    $stmt->bindParam(':luxury15', $sheet['luxury15']);
//    $stmt->bindParam(':luxury16', $sheet['luxury16']);
//    $stmt->bindParam(':luxury17', $sheet['luxury17']);
//    $stmt->bindParam(':luxury18', $sheet['luxury18']);
//    $stmt->bindParam(':luxury19', $sheet['luxury19']);
//    $stmt->bindParam(':luxury20', $sheet['luxury20']);
//    $stmt->bindParam(':luxury21', $sheet['luxury21']);
//    $stmt->bindParam(':other2', $sheet['other2']);
//    $stmt->bindParam(':other3', $sheet['other3']);
//    $stmt->bindParam(':other4', $sheet['other4']);
//    $stmt->bindParam(':other5', $sheet['other5']);
//    $stmt->bindParam(':other6', $sheet['other6']);
//    $stmt->bindParam(':other7', $sheet['other7']);
//    $stmt->bindParam(':other8', $sheet['other8']);
//    $stmt->bindParam(':other9', $sheet['other9']);
//    $stmt->bindParam(':other10', $sheet['other10']);
//    $stmt->bindParam(':other11', $sheet['other11']);
//    $stmt->bindParam(':other12', $sheet['other12']);
//    $stmt->bindParam(':other13', $sheet['other13']);
//    $stmt->bindParam(':other14', $sheet['other14']);
//    $stmt->bindParam(':other15', $sheet['other15']);
//    $stmt->bindParam(':other16', $sheet['other16']);
//    $stmt->bindParam(':other17', $sheet['other17']);
//    $stmt->bindParam(':other18', $sheet['other18']);
//    $stmt->bindParam(':other19', $sheet['other19']);
//    $stmt->bindParam(':other20', $sheet['other20']);
//    $stmt->bindParam(':other21', $sheet['other21']);

    $stmt->bindParam(':memo', $sheet['memo']);

//    $stmt->bindParam(':id', $sheet['id']);
    $stmt->bindParam(':hash', $sheet['hash']);

    // update
    $stmt->execute();

    // redirect
    $url = $request->getSchemeAndHttpHost() . $request->getBasePath() . '/charactersheets/meikyudays/';
    return $app->redirect($url);
});

$app->run();