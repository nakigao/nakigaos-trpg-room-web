<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class NvnvHorrorClimaxCardModel
 * @package Nkgo
 */
class NvnvHorrorClimaxCardModel extends BaseModel
{
    /**
     * NvnvHorrorClimaxCardModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'nvnv_horror_climax_card');
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
    judgement             = :judgement
WHERE id = :id;
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $params['title']);
        $stmt->bindParam(':description', $params['description']);
        $stmt->bindParam(':judgement', $params['judgement']);
        return $stmt->execute();
    }
}