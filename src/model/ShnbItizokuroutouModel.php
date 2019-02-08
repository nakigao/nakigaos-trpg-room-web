<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbItizokuroutouModel
 * @package Nkgo
 */
class ShnbItizokuroutouModel extends BaseModel
{
    /**
     * ShnbItizokuroutouModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_itizokuroutou');
    }
}