<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class NvnvHorrorDarknessCardModel
 * @package Nkgo
 */
class NvnvHorrorDarknessCardModel extends BaseModel
{
    /**
     * NvnvHorrorDarknessCardModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'nvnv_horror_darkness_card');
    }
}