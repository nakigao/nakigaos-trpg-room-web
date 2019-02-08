<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbFamilyNameTimeiModel
 * @package Nkgo
 */
class ShnbFamilyNameTimeiModel extends BaseModel
{
    /**
     * ShnbFamilyNameTimeiModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_family_name_timei');
    }
}