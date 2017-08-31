<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class NvnvHorrorPcCardModel
 * @package Nkgo
 */
class NvnvHorrorPcCardModel extends BaseModel
{
    /**
     * NvnvHorrorPcCardModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'nvnv_horror_pc_card');
    }
}