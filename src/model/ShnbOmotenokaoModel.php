<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbOmotenokaoModel
 * @package Nkgo
 */
class ShnbOmotenokaoModel extends BaseModel
{
    /**
     * ShnbOmotenokaoModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_omotenokao');
    }
}