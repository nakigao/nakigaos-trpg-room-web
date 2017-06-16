<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ReplayEpisodeModel
 * @package Nkgo
 */
class ReplayEpisodeModel extends BaseModel
{
    /**
     * ReplayEpisodeModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'replay_episode');
    }
}