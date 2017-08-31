<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class NvnvHorrorSceneCardModel
 * @package Nkgo
 */
class NvnvHorrorSceneCardModel extends BaseModel
{
    /**
     * NvnvHorrorSceneCardModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'nvnv_horror_scene_card');
    }
}