<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ReplaySeriesModel
 * @package Nkgo
 */
class ReplaySeriesModel extends BaseModel
{
    /**
     * ReplaySeriesModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'replay_series');
    }
}