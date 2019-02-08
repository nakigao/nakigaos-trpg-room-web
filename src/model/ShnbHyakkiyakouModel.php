<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbHyakkiyakouModel
 * @package Nkgo
 */
class ShnbHyakkiyakouModel extends BaseModel
{
    /**
     * ShnbHyakkiyakouModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_hyakkiyakou');
    }
}