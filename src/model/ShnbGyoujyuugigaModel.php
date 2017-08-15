<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbGyoujyuugigaModel
 * @package Nkgo
 */
class ShnbGyoujyuugigaModel extends BaseModel
{
    /**
     * ShnbGyoujyuugigaModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_gyoujyuugiga');
    }
}