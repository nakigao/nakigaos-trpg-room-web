<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbSinrabansyouModel
 * @package Nkgo
 */
class ShnbSinrabansyouModel extends BaseModel
{
    /**
     * ShnbSinrabansyouModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_sinrabansyou');
    }
}