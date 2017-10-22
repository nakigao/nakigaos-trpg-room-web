<?php

namespace Nkgo\Provider;

use Nkgo\Model\VReplayModel;
use Nkgo\Model\ReplayPartGmPlModel;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ConvertSupportToolProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        $controllers->get('/', function () use ($app) {
            return $app['twig']->render('convert-support-tool/index.twig', array(
                'page_title' => 'CONVERT SUPPORT',
                'lines' => array()
            ));
        });

        $controllers->post('/upload', function () use ($app) {
            // 飛んできたファイルを元に変換
            $paramName = 'file-form-file';
            $filename = $_FILES[$paramName]["name"];
            $fileTmpName = $_FILES[$paramName]["tmp_name"];
            // validation
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $extWhiteList = array('text', 'TEXT', 'txt', 'TXT');
            if (!in_array($ext, $extWhiteList)) {
                return $app['twig']->render('convert-support-tool/converted.twig', array(
                    'lines' => array()
                ));
            }
            if (empty($fileTmpName)) {
                return $app['twig']->render('convert-support-tool/converted.twig', array(
                    'lines' => array()
                ));
            }
            if ($this->is_binary($fileTmpName)) {
                return $app['twig']->render('convert-support-tool/converted.twig', array(
                    'lines' => array()
                ));
            }
            // convert
            $filename = $fileTmpName;
            $lines = file($filename);
            $convertedLines = array();
            $previousName = '';
            foreach ($lines as $line) {
                $exploded = explode('：', $line, 2);
                $name = $exploded[0];
                $serif = $exploded[1];
                if (empty($serif)) {
                    // 複数行っぽいので
                    $name = $previousName;
                    $serif = $exploded[0];
                } else {
                    $previousName = $name;
                }
                // 成形1: 全角 -> 半角
                $name = mb_convert_kana($name, 'as', 'UTF-8');
                $serif = mb_convert_kana($serif, 'as', 'UTF-8');
                $convertedLines[] = array(
                    'name' => $name,
                    'serif' => $serif
                );
            }
            return $app['twig']->render('convert-support-tool/converted.twig', array(
                'lines' => $convertedLines
            ));
        });
        return $controllers;
    }

    public function is_binary($file) {
        $fp = fopen($file, 'r');
        while ($line = fgets($fp)) {
            if (strpos($line, '\0') !== false) {
                fclose($fp);
                return true;
            }
        }
        fclose($fp);
        return false;
    }
}