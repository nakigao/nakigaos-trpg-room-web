<?php
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__ . '/providers/IndexProvider.php';
require_once __DIR__ . '/providers/AboutProvider.php';
require_once __DIR__ . '/providers/ReplayProvider.php';
require_once __DIR__ . '/providers/GmSupportToolProvider.php';
require_once __DIR__ . '/providers/CharacterSheetMeikyudaysProvider.php';
// app
$app = new Silex\Application();
$app['debug'] = true;
$app['commonVariables'] = [
    'siteName' => 'nakigao\'s TRPG room'
];
// twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/templates',
));
// doctrine
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(

    )
));
// routing
$app->mount('/', new Nkgo\IndexProvider());
$app->mount('/about', new Nkgo\AboutProvider());
$app->mount('/replay', new Nkgo\ReplayProvider());
$app->mount('/gm-support-tool', new Nkgo\GmSupportToolProvider());
$app->mount('/character-sheet/meikyudays', new Nkgo\CharacterSheetMeikyudaysProvider());
$app->run();