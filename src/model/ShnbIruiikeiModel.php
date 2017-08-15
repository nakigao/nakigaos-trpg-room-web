<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ShnbIruiikeiModel
 * @package Nkgo
 */
class ShnbIruiikeiModel extends BaseModel
{
    /**
     * ShnbIruiikeiModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'shnb_iruiikei');
    }
}