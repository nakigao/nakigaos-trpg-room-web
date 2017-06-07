<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class BaseModel
 * @package Nkgo
 */
class BaseModel
{
    protected $app = null;
    protected $table = null;

    /**
     * BaseModel constructor.
     *
     * @param Application $app
     * @param string $tableName
     *
     * @throws \Exception
     */
    function __construct(Application $app, $tableName = '')
    {
        if (empty($app) || empty($tableName)) {
            throw new \Exception('Class construction failure.');
        }
        $this->app = $app;
        $this->table = $tableName;
    }

    /**
     * @param int $id
     *
     * @return array
     */
    public function getRecordById($id = 0)
    {
        if (empty($id)) {
            return array();
        }
        $sql = <<<EOM
SELECT *
FROM {$this->table}
WHERE id = :id
ORDER BY id ASC;
EOM;
        $params = array(
            'id' => $id
        );
        $stmt = $this->app['db']->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    /**
     * @param string $order
     *
     * @return mixed
     */
    public function getRecords($order = 'ASC')
    {
        $sql = <<<EOM
SELECT *
FROM {$this->table}
ORDER BY id {$order};
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * @param array $ids
     * @param string $order
     *
     * @return array
     */
    public function getRecordsByIds($ids = array(), $order = 'ASC')
    {
        if (empty($ids)) {
            return array();
        }
        $sql = <<<EOM
SELECT *
FROM {$this->table}
WHERE id IN (:ids)
ORDER BY id {$order};
EOM;
        $params = array(
            'ids' => implode(',', $ids)
        );
        $stmt = $this->app['db']->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

}