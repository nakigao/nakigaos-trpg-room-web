<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbFamilyNameToorinaModel
 * @package Nkgo
 */
class ShnbFamilyNameToorinaModel extends BaseModel
{
    /**
     * ShnbFamilyNameToorinaModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_family_name_toorina');
    }
}