<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbNameKiteretuModel
 * @package Nkgo
 */
class ShnbNameKiteretuModel extends BaseModel
{
    /**
     * ShnbNameKiteretuModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_name_kiteretu');
    }
}