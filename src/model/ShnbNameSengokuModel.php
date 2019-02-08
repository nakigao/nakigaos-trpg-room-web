<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbNameSengokuModel
 * @package Nkgo
 */
class ShnbNameSengokuModel extends BaseModel
{
    /**
     * ShnbNameSengokuModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_name_sengoku');
    }
}