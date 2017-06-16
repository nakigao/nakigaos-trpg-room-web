<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class VReplayModel
 * @package Nkgo
 */
class VReplayModel extends BaseModel
{
    /**
     * VReplayModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'v_replay');
    }

    /**
     * @param string $rule
     * @param string $series
     * @param string $episode
     * @param string $part
     *
     * @return array
     */
    public function getReplay($rule = '', $series = '', $episode = '', $part = '')
    {
        $sql = <<<EOM
SELECT *
FROM {$this->table}
WHERE
    rule_unique_id = :rule
    AND series_id = :series
    AND episode_sequence_number = :episode
    AND part_sequence_number = :part
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
        // 成形
        $data = $this->setAdditionalData($records);
        return $data[0];
    }

    /**
     * @return array
     */
    public function getReplayList()
    {
        $sql = <<<EOM
SELECT *
FROM {$this->table}
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll();
        if (empty($records)) {
            return array();
        }
        // 成形
        $data = $this->setAdditionalData($records);
        return $data;
    }

    /**
     * @param array $originalRecords
     *
     * @return array
     */
    private function setAdditionalData($originalRecords = array())
    {
        if (empty($originalRecords)) {
            return $originalRecords;
        }
        $newRecords = array();
        foreach ($originalRecords as $record) {
            $record['render_twig_path'] = 'replay' . '/' . $record['rule_unique_id'] . '/' . $record['series_id'] . '/' . $record['episode_sequence_number'] . '/' . $record['part_sequence_number'] . '.twig';
            $record['url'] = $this->getUrl($record);
            $record['page_name'] = $record['rule_name'] . 'リプレイ ' . $record['series_name'] . $record['episode_prefix'] . '「' . $record['episode_name'] . '」' . $record['part_name'];
            $newRecords[] = $record;
        }
        return $newRecords;
    }

    /**
     * @param array $record
     *
     * @return string
     */
    private function getUrl($record = array())
    {
        if (empty($record)) {
            return '';
        }
        return ('/replay/' . $record['rule_unique_id'] . '/' . $record['series_id'] . '/' . $record['episode_sequence_number'] . '/' . $record['part_sequence_number']);
    }

    /**
     * @param string $rule
     * @param string $series
     * @param string $episode
     * @param string $part
     *
     * @return array
     */
    public function getPartList($rule = '', $series = '', $episode = '', $part = '')
    {
        $sql = <<<EOM
SELECT *
FROM {$this->table}
WHERE
    rule_unique_id = :rule
    AND series_id = :series
    AND episode_sequence_number = :episode
GROUP BY rule_unique_id, part_sequence_number
EOM;
        $params = array(
            'rule' => $rule,
            'series' => $series,
            'episode' => $episode
        );
        $stmt = $this->app['db']->prepare($sql);
        $stmt->execute($params);
        $records = $stmt->fetchAll();
        if (empty($records)) {
            return array();
        }
        // 成形
        $data = array();
        foreach ($records as $record) {
            $temp = array();
            $temp['part_name'] = $record['part_name'];
            $temp['url'] = $this->getUrl($record);
            if ($record['rule_unique_id'] == $rule && $record['series_id'] == $series && $record['episode_sequence_number'] == $episode && $record['part_sequence_number'] == $part) {
                $temp['is_active'] = true;
            } else {
                $temp['is_active'] = false;
            }
            $data[] = $temp;
        }
        return $data;
    }

    /**
     * @param string $rule
     * @param string $series
     * @param string $episode
     * @param string $part
     *
     * @return array
     */
    public function getNextPart($rule = '', $series = '', $episode = '', $part = '')
    {
        $partList = $this->getPartList($rule, $series, $episode, $part);
        if (empty($partList)) {
            return array();
        }
        // ラストパートかどうか
        $partTotalCount = count($partList);
        if ($partTotalCount == $part) {
            return array();
        }
        // index が 0 から始まってるので、$partをそのまま返せば次のエピソードになる
        return $partList[$part];
    }

    /**
     * @param string $rule
     * @param string $series
     * @param string $episode
     *
     * @return array
     */
    public function getEpisodeList($rule = '', $series = '', $episode = '')
    {
        $sql = <<<EOM
SELECT *
FROM {$this->table}
WHERE
    rule_unique_id = :rule
    AND series_id = :series
GROUP BY rule_unique_id, episode_sequence_number
EOM;
        $params = array(
            'rule' => $rule,
            'series' => $series
        );
        $stmt = $this->app['db']->prepare($sql);
        $stmt->execute($params);
        $records = $stmt->fetchAll();
        if (empty($records)) {
            return array();
        }
        // 成形
        $data = array();
        foreach ($records as $record) {
            $temp = array();
            $temp['episode_name'] = $record['episode_name'];
            $temp['url'] = $this->getUrl($record);
            if ($record['rule_unique_id'] == $rule && $record['series_id'] == $series && $record['episode_sequence_number'] == $episode) {
                $temp['is_active'] = true;
            } else {
                $temp['is_active'] = false;
            }
            $data[] = $temp;
        }
        return $data;
    }

    /**
     * @param string $rule
     * @param string $series
     *
     * @return array
     */
    public function getSeriesList($rule = '', $series = '')
    {
        $sql = <<<EOM
SELECT *
FROM {$this->table}
WHERE
    rule_unique_id = :rule
GROUP BY rule_unique_id, series_id
EOM;
        $params = array(
            'rule' => $rule
        );
        $stmt = $this->app['db']->prepare($sql);
        $stmt->execute($params);
        $records = $stmt->fetchAll();
        if (empty($records)) {
            return array();
        }
        // 成形
        $data = array();
        foreach ($records as $record) {
            $temp = array();
            $temp['series_name'] = $record['series_name'];
            $temp['url'] = $this->getUrl($record);
            if ($record['rule_unique_id'] == $rule && $record['series_id'] == $series) {
                $temp['is_active'] = true;
            } else {
                $temp['is_active'] = false;
            }
            $data[] = $temp;
        }
        return $data;
    }

}