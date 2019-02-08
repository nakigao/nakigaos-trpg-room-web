<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class GrorEnemyCharacterSheetSkillModel
 * @package Nkgo
 */
class GrorEnemyCharacterSheetSkillModel extends BaseModel
{
    /**
     * GrorEnemyCharacterSheetSkillModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'gror_enemy_character_sheet_skill');
    }

    /**
     * @param string $hash
     *
     * @return array
     */
    public function gets($hash = '')
    {
        if (empty($hash)) {
            return array();
        }
        $sql = <<<EOM
SELECT *
FROM {$this->table}
WHERE enemy_character_sheet_hash = :hash
ORDER BY priority ASC;
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $stmt->bindParam(':hash', $hash);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * @param string $hash
     * @param array $form
     *
     * @return array
     */
    public function handleEditForm($hash = '', $form = array())
    {
        $maxCount = 10;
        $skills = array();
        for ($i = 0; $i < $maxCount; $i++) {
            $pseudoPriority = $i + 1;
            $skills[] = array(
                'id' => empty($form[$i]['id']) ? null : $form[$i]['id'],
                'enemy_character_sheet_hash' => empty($form[$i]['enemy_character_sheet_hash']) ? $hash : $form[$i]['enemy_character_sheet_hash'],
                'name' => empty($form[$i]['name']) ? null : $form[$i]['name'],
                'memo' => empty($form[$i]['memo']) ? null : $form[$i]['memo'],
                'priority' => empty($form[$i]['priority']) ? $pseudoPriority : $form[$i]['priority'],
                'hantei' => empty($form[$i]['hantei']) ? null : $form[$i]['hantei'],
                'taimingu' => empty($form[$i]['taimingu']) ? null : $form[$i]['taimingu'],
                'taishou' => empty($form[$i]['taishou']) ? null : $form[$i]['taishou'],
                'shatei' => empty($form[$i]['shatei']) ? null : $form[$i]['shatei'],
                'seigen' => empty($form[$i]['seigen']) ? null : $form[$i]['seigen'],
                'kosuto' => empty($form[$i]['kosuto']) ? null : $form[$i]['kosuto'],
                'zokusei' => empty($form[$i]['zokusei']) ? null : $form[$i]['zokusei'],
                'kouka' => empty($form[$i]['kouka']) ? null : $form[$i]['kouka'],
                'tuika' => empty($form[$i]['tuika']) ? null : $form[$i]['tuika']
            );
        }
        return $skills;
    }

    /**
     * @param array $form
     *
     * @return array
     * @throws \Exception
     */
    public function save($form = array())
    {
        if (empty($form)) {
            return array();
        }
        if (empty($form[0]['enemy_character_sheet_hash'])) {
            return array();
        }
        $hash = $form[0]['enemy_character_sheet_hash'];
        try{
            $this->app['db']->beginTransaction();
            // DELETE AND
            $this->delete($hash);
            // INSERT
            foreach ($form as $skill) {
                $this->insert($skill);
            }
        } catch (\Exception $e) {
            $this->app['db']->rollback();
            throw $e;
        }
        $this->app['db']->commit();
        return array();
    }

    /**
     * @param string $hash
     *
     * @return array
     */
    public function delete($hash = '')
    {
        if (empty($hash)) {
            return array();
        }
        $sql = <<<EOM
DELETE FROM {$this->table}
WHERE
    enemy_character_sheet_hash = :enemy_character_sheet_hash
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $stmt->bindParam(':enemy_character_sheet_hash', $hash);
        $stmt->execute();
        return array();
    }

    /**
     * @param array $form
     *
     * @return array
     */
    public function insert($form = array())
    {
        if (empty($form)) {
            return array();
        }
        // nameが空だった場合は、登録しない
        if (empty($form['name'])) {
            return array();
        }
        $sql = <<<EOM
INSERT INTO {$this->table}
SET
    enemy_character_sheet_hash = :enemy_character_sheet_hash,
    name = :name,
    memo = :memo,
    priority = :priority,
    hantei = :hantei,
    taimingu = :taimingu,
    taishou = :taishou,
    shatei = :shatei,
    seigen = :seigen,
    kosuto = :kosuto,
    zokusei = :zokusei,
    kouka = :kouka,
    tuika = :tuika;
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $stmt->bindParam(':enemy_character_sheet_hash', $form['enemy_character_sheet_hash']);
        $stmt->bindParam(':name', $form['name']);
        $stmt->bindParam(':memo', $form['memo']);
        $stmt->bindParam(':priority', $form['priority']);
        $stmt->bindParam(':hantei', $form['hantei']);
        $stmt->bindParam(':taimingu', $form['taimingu']);
        $stmt->bindParam(':taishou', $form['taishou']);
        $stmt->bindParam(':shatei', $form['shatei']);
        $stmt->bindParam(':seigen', $form['seigen']);
        $stmt->bindParam(':kosuto', $form['kosuto']);
        $stmt->bindParam(':zokusei', $form['zokusei']);
        $stmt->bindParam(':kouka', $form['kouka']);
        $stmt->bindParam(':tuika', $form['tuika']);
        $stmt->execute();
        return array();
    }
}