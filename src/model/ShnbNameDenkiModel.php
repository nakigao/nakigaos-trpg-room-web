<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbNameDenkiModel
 * @package Nkgo
 */
class ShnbNameDenkiModel extends BaseModel
{
    /**
     * ShnbNameDenkiModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_name_denki');
    }
}