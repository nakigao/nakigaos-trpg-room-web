<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbFamilyNameDenkiModel
 * @package Nkgo
 */
class ShnbFamilyNameDenkiModel extends BaseModel
{
    /**
     * ShnbFamilyNameDenkiModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_family_name_denki');
    }
}