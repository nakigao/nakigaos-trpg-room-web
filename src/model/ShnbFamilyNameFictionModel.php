<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbFamilyNameFictionModel
 * @package Nkgo
 */
class ShnbFamilyNameFictionModel extends BaseModel
{
    /**
     * ShnbFamilyNameFictionModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_family_name_fiction');
    }
}