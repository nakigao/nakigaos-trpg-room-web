<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ReplayRuleModel
 * @package Nkgo
 */
class ReplayRuleModel extends BaseModel
{
    /**
     * ReplayRuleModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'replay_rule');
    }
}