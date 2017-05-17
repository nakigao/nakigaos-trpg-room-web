<?php
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__ . '/providers/IndexProvider.php';
require_once __DIR__ . '/providers/GmSupportToolProvider.php';
require_once __DIR__ . '/providers/CharacterSheetMeikyudaysProvider.php';
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
// routing
$app->mount('/', new Nkgo\IndexProvider());
$app->mount('/gm-support-tool', new Nkgo\GmSupportToolProvider());
$app->mount('/character-sheet/meikyudays', new Nkgo\CharacterSheetMeikyudaysProvider());
$app->run();