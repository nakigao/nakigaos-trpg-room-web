<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbNameIppanModel
 * @package Nkgo
 */
class ShnbNameIppanModel extends BaseModel
{
    /**
     * ShnbNameIppanModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_name_ippan');
    }
}