<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class ReplayPartGmPlModel
 * @package Nkgo
 */
class ReplayPartGmPlModel extends BaseModel
{
    /**
     * ReplayPartGmPlModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'replay_part_gm_pl');
    }

    /**
     * @param string $rule
     * @param int $series
     * @param int $episode
     * @param int $part
     *
     * @return array
     */
    public function getGmList($rule = '', $series = 0, $episode = 0, $part = 0)
    {
        if (empty($rule) || empty($series) || empty($episode) || empty($part)) {
            return array();
        }
        $sql = <<<EOM
SELECT *
FROM {$this->table}
LEFT JOIN replay_user ON {$this->table}.user_id = replay_user.id
WHERE 
    rule_unique_id = :rule
    AND series_id = :series
    AND episode_sequence_number = :episode
    AND part_sequence_number = :part
    AND is_gm = TRUE
EOM;
        $params = array(
            'rule' => $rule,
            'series' => $series,
            'episode' => $episode,
            'part' => $part
        );
        $stmt = $this->app['db']->prepare($sql);
        $stmt->execute($params);
        $records = $stmt->fetchAll();
        if (empty($records)) {
            return array();
        }
        return $records;
    }

    /**
     * @param string $rule
     * @param int $series
     * @param int $episode
     * @param int $part
     *
     * @return array
     */
    public function getPlList($rule = '', $series = 0, $episode = 0, $part = 0)
    {
        if (empty($rule) || empty($series) || empty($episode) || empty($part)) {
            return array();
        }
        $sql = <<<EOM
SELECT *
FROM {$this->table}
LEFT JOIN replay_user ON {$this->table}.user_id = replay_user.id
WHERE 
    rule_unique_id = :rule
    AND series_id = :series
    AND episode_sequence_number = :episode
    AND part_sequence_number = :part
    AND is_gm = FALSE
EOM;
        $params = array(
            'rule' => $rule,
            'series' => $series,
            'episode' => $episode,
            'part' => $part
        );
        $stmt = $this->app['db']->prepare($sql);
        $stmt->execute($params);
        $records = $stmt->fetchAll();
        if (empty($records)) {
            return array();
        }
        return $records;
    }

}