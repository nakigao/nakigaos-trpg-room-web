<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ReplayPartModel
 * @package Nkgo
 */
class ReplayPartModel extends BaseModel
{
    /**
     * ReplayPartModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'replay_part');
    }
}