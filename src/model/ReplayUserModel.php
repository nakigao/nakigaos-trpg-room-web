<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ReplayUserModel
 * @package Nkgo
 */
class ReplayUserModel extends BaseModel
{
    /**
     * ReplayUserModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'replay_user');
    }

    /**
     * @param array $names
     *
     * @return array
     */
    public function getRecordsByNames($names = array())
    {
        if (empty($names)) {
            return array();
        }
        // FIXME: paramsでString上手く使えないので・・・
        $whereStatement = 'WHERE name IN (\'' . implode('\',\'', $names) . '\')';
        $sql = <<<EOM
SELECT *
FROM {$this->table}
{$whereStatement}
ORDER BY name ASC;
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}