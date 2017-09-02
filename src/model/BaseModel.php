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
        $record = $stmt->fetchAll();
        if (!empty($record)) {
            $record = $record[0];
        }
        return $record;
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
     * @return int
     */
    public function getRecordsCount()
    {
        $sql = <<<EOM
SELECT count(*) AS count
FROM {$this->table}
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll();
        if (empty($records[0]['count'])) {
            return 0;
        } else {
            return $records[0]['count'];
        }
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

    /**
     * Update
     *
     * @param int $id
     * @param array $params
     */
    public function update($id = 0, $params = array())
    {
        // override plz
    }

}