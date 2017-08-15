<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbFamilyNameMeimonModel
 * @package Nkgo
 */
class ShnbFamilyNameMeimonModel extends BaseModel
{
    /**
     * ShnbFamilyNameMeimonModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_family_name_meimon');
    }
}