<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class MakeyoudaysCharacterSheetModel
 * @package Nkgo
 */
class MakeyoudaysCharacterSheetModel extends BaseModel
{
    /**
     * MakeyoudaysCharacterSheetModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'makeyoudays_character_sheet');
    }
}