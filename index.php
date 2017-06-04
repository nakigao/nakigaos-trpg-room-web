<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

// app
$app = new Silex\Application();
$app['debug'] = false;
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
$app['twig']->addGlobal('css_url', $app['config']['base_url']['prd'] . '/assets/css');
$app['twig']->addGlobal('js_url', $app['config']['base_url']['prd'] . '/assets/js');
$app['twig']->addGlobal('img_url', $app['config']['base_url']['prd'] . '/assets/img');
$app['twig']->addGlobal('site_title', 'NAKIGAO TRPG ARCHIVES');
$app['twig']->addGlobal('page_title', 'UNDEFINED');
// doctrine
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(

    )
));
// error handling
$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }
    switch ($code) {
        case 404:
            $pageTitle = '404 NOT FOUND';
            $message = 'The requested page could not be found.';
            break;
        default:
            $pageTitle = '500 SOMETHING ERROR OCCURRED';
            $message = 'We are sorry, but something went terribly wrong.';
    }
    return $app['twig']->render('error.twig', array(
        'page_title' => $pageTitle,
        'error_message' => $message
    ));
//    return new Response($message);
});
// routing
$app->mount('/', new Nkgo\IndexProvider());
$app->mount('/about', new Nkgo\AboutProvider());
$app->mount('/replay', new Nkgo\ReplayProvider());
$app->mount('/gm-support-tool', new Nkgo\GmSupportToolProvider());
$app->mount('/character-sheet/meikyudays', new Nkgo\CharacterSheetMeikyudaysProvider());
$app->run();