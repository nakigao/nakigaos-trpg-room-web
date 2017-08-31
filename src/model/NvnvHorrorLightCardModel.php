<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class NvnvHorrorLightCardModel
 * @package Nkgo
 */
class NvnvHorrorLightCardModel extends BaseModel
{
    /**
     * NvnvHorrorLightCardModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'nvnv_horror_light_card');
    }
}