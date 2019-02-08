<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class NvnvHorrorPcCardModel
 * @package Nkgo
 */
class NvnvHorrorPcCardModel extends BaseModel
{
    /**
     * NvnvHorrorPcCardModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'nvnv_horror_pc_card');
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
    role              = :role,
    gender            = :gender,
    power             = :power,
    technic           = :technic,
    skill_name        = :skill_name,
    skill_timing      = :skill_timing,
    skill_description = :skill_description
WHERE id = :id;
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':role', $params['role']);
        $stmt->bindParam(':gender', $params['gender']);
        $stmt->bindParam(':power', $params['power']);
        $stmt->bindParam(':technic', $params['technic']);
        $stmt->bindParam(':skill_name', $params['skill_name']);
        $stmt->bindParam(':skill_timing', $params['skill_timing']);
        $stmt->bindParam(':skill_description', $params['skill_description']);
        return $stmt->execute();
    }
}