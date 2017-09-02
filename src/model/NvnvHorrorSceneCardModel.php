<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class NvnvHorrorSceneCardModel
 * @package Nkgo
 */
class NvnvHorrorSceneCardModel extends BaseModel
{
    /**
     * NvnvHorrorSceneCardModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'nvnv_horror_scene_card');
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
    judgement_type             = :judgement_type,
    judgement_description           = :judgement_description
WHERE id = :id;
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $params['title']);
        $stmt->bindParam(':description', $params['description']);
        $stmt->bindParam(':judgement_type', $params['judgement_type']);
        $stmt->bindParam(':judgement_description', $params['judgement_description']);
        return $stmt->execute();
    }
}