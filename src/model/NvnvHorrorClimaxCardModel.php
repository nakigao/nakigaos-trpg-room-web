<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class NvnvHorrorClimaxCardModel
 * @package Nkgo
 */
class NvnvHorrorClimaxCardModel extends BaseModel
{
    /**
     * NvnvHorrorClimaxCardModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'nvnv_horror_climax_card');
    }
}