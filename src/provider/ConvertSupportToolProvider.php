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
                // 成形2: 文末の『。」』を『」』に変更
                $serif = preg_replace("/(。」)/", "」", $serif);
                // 成形3: 『ダッシュ(―)』の繰り返しを『ダッシュx2(――)』に変更
                $serif = preg_replace("/(―){1,}/", "――", $serif);
                // 成形4-1: 『三点リーダー(…)』の繰り返しを『三点リーダーx2(……)』に変更
                $serif = preg_replace("/(…){1,}/", "……", $serif);
                // 成形4-2: 『・』の1回以上の繰り返しを『三点リーダーx2(……)』に変更
                $serif = preg_replace("/(・){2,}/", "……", $serif);
                // 成形4-3: 『.』の1回以上の繰り返しを『三点リーダーx2(……)』に変更
                $serif = preg_replace("/(\.){2,}/", "……", $serif);
                // 格納
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