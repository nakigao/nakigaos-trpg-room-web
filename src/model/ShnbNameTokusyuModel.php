<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbNameTokusyuModel
 * @package Nkgo
 */
class ShnbNameTokusyuModel extends BaseModel
{
    /**
     * ShnbNameTokusyuModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_name_tokusyu');
    }
}