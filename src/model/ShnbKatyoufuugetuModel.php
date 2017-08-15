<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbKatyoufuugetuModel
 * @package Nkgo
 */
class ShnbKatyoufuugetuModel extends BaseModel
{
    /**
     * ShnbKatyoufuugetuModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_katyoufuugetu');
    }
}