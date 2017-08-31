<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class NvnvHorrorIntroductionCardModel
 * @package Nkgo
 */
class NvnvHorrorIntroductionCardModel extends BaseModel
{
    /**
     * NvnvHorrorIntroductionCardModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'nvnv_horror_introduction_card');
    }
}