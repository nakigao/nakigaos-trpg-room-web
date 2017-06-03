<?php
require_once __DIR__.'/vendor/autoload.php';

// app
$app = new Silex\Application();
$app['debug'] = true;
$app['config'] = array(
    'base_url' => array(
        'prd' => 'http://nakigao.webcrow.jp',
        'dev' => 'http://nakigao.webcrow.jp'
    ),
);
// twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/src/template',
));
$app['twig']->addGlobal('base_url', $app['config']['base_url']['prd']);
$app['twig']->addGlobal('site_title', 'NAKIGAO TRPG ARCHIVES');
$app['twig']->addGlobal('page_title', 'UNDEFINED');
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