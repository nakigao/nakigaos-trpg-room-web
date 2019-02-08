<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class NvnvHorrorLightCardModel
 * @package Nkgo
 */
class NvnvHorrorLightCardModel extends BaseModel
{
    /**
     * NvnvHorrorLightCardModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'nvnv_horror_light_card');
    }

    /**
     * Save
     *
     * @param int $id
     * @param array $params
     *
     * @return bool
     */
    public function update($id = 0, $params = array())
    {
        if (empty($id)) {
            return false;
        }
        $sql = <<<EOM
UPDATE {$this->table}
SET
    title              = :title,
    description            = :description,
    effect_type             = :effect_type,
    effect_description           = :effect_description
WHERE id = :id;
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $params['title']);
        $stmt->bindParam(':description', $params['description']);
        $stmt->bindParam(':effect_type', $params['effect_type']);
        $stmt->bindParam(':effect_description', $params['effect_description']);
        return $stmt->execute();
    }
}