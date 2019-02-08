<?php

namespace Nkgo\Model;

use Silex\Application;

/**
 * Class GrorEnemyCharacterSheetModel
 * @package Nkgo
 */
class GrorEnemyCharacterSheetModel extends BaseModel
{
    /**
     * GrorEnemyCharacterSheetModel constructor.
     *
     * @param Application $app
     */
    function __construct(Application $app)
    {
        parent::__construct($app, 'gror_enemy_character_sheet');
    }

    /**
     * @param string $hash
     *
     * @return array
     */
    public function get($hash = '')
    {
        if (empty($hash)) {
            return array();
        }
        $sql = <<<EOM
SELECT *
FROM {$this->table}
WHERE hash = :hash;
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $stmt->bindParam(':hash', $hash);
        $stmt->execute();
        return $stmt->fetch();
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
        try{
            $this->app['db']->beginTransaction();
            if (empty($form['id'])) {
                $entry = $this->insert($form);
            } else {
                $entry = $this->update($form['id'], $form);
            }
        } catch (\Exception $e) {
            $this->app['db']->rollback();
            throw $e;
        }
        $this->app['db']->commit();
        return $entry;
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
        $sql = <<<EOM
INSERT INTO {$this->table}
SET
    hash      = :hash,
    rank      = :rank,
    type      = :type,
    is_mob    = :is_mob,
    name      = :name,
    memo      = :memo,
    sintai    = :sintai,
    kankaku   = :kankaku,
    tiryoku   = :tiryoku,
    isi       = :isi,
    miryoku   = :miryoku,
    koudouti  = :koudouti,
    idouryoku = :idouryoku,
    hirou     = :hirou,
    keishou   = :keishou,
    jyuusyou  = :jyuusyou,
    timeishou = :timeishou,
    sibou     = :sibou,
    setudan   = :setudan,
    jyuugeki  = :jyuugeki,
    shougeki  = :shougeki,
    shakunetu = :shakunetu,
    reiki     = :reiki,
    dengeki   = :dengeki,
    tokusei   = :tokusei,
    atemi     = :atemi,
    kinsetubuki     = :kinsetubuki,
    jyuuki     = :jyuuki,
    tobidougu     = :tobidougu,
    kaihi     = :kaihi,
    tansaku   = :tansaku,
    teikou    = :teikou;
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $hash = hash('sha1', uniqid(rand()));
        // ベース値があるので、指定されていなかった場合は、それを設定
        $form['tokusei'] = ($form['tokusei'] < 30) ? 30 : $form['tokusei'];
        $form['atemi'] = ($form['atemi'] < 50) ? 50 : $form['atemi'];
        $form['kinsetubuki'] = ($form['kinsetubuki'] < 30) ? 30 : $form['kinsetubuki'];
        $form['jyuuki'] = ($form['jyuuki'] < 30) ? 30 : $form['jyuuki'];
        $form['tobidougu'] = ($form['tobidougu'] < 30) ? 30 : $form['tobidougu'];
        $form['kaihi'] = ($form['kaihi'] < 30) ? 30 : $form['kaihi'];
        $form['tansaku'] = ($form['tansaku'] < 30) ? 30 : $form['tansaku'];
        $form['teikou'] = ($form['teikou'] < 40) ? 40 : $form['teikou'];
        //
        $stmt->bindParam(':hash', $hash);
        $stmt->bindParam(':rank', $form['rank']);
        $stmt->bindParam(':type', $form['type']);
        $stmt->bindParam(':is_mob', $form['is_mob']);
        $stmt->bindParam(':name', $form['name']);
        $stmt->bindParam(':memo', $form['memo']);
        $stmt->bindParam(':sintai', $form['sintai']);
        $stmt->bindParam(':kankaku', $form['kankaku']);
        $stmt->bindParam(':tiryoku', $form['tiryoku']);
        $stmt->bindParam(':isi', $form['isi']);
        $stmt->bindParam(':miryoku', $form['miryoku']);
        $stmt->bindParam(':koudouti', $form['koudouti']);
        $stmt->bindParam(':idouryoku', $form['idouryoku']);
        $stmt->bindParam(':hirou', $form['hirou']);
        $stmt->bindParam(':keishou', $form['keishou']);
        $stmt->bindParam(':jyuusyou', $form['jyuusyou']);
        $stmt->bindParam(':timeishou', $form['timeishou']);
        $stmt->bindParam(':sibou', $form['sibou']);
        $stmt->bindParam(':setudan', $form['setudan']);
        $stmt->bindParam(':jyuugeki', $form['jyuugeki']);
        $stmt->bindParam(':shougeki', $form['shougeki']);
        $stmt->bindParam(':shakunetu', $form['shakunetu']);
        $stmt->bindParam(':reiki', $form['reiki']);
        $stmt->bindParam(':dengeki', $form['dengeki']);
        $stmt->bindParam(':tokusei', $form['tokusei']);
        $stmt->bindParam(':atemi', $form['atemi']);
        $stmt->bindParam(':kinsetubuki', $form['kinsetubuki']);
        $stmt->bindParam(':jyuuki', $form['jyuuki']);
        $stmt->bindParam(':tobidougu', $form['tobidougu']);
        $stmt->bindParam(':kaihi', $form['kaihi']);
        $stmt->bindParam(':tansaku', $form['tansaku']);
        $stmt->bindParam(':teikou', $form['teikou']);
        $stmt->execute();
        // get new record
        $newEntry = $this->get($hash);
        return $newEntry;
    }

    /**
     * @param int $id
     * @param array $params
     *
     * @return array
     */
    public function update($id = 0, $params = array())
    {
        if (empty($params)) {
            return array();
        }
        $form = $params;
        // ベース値があるので、指定されていなかった場合は、それを設定
        $form['tokusei'] = ($form['tokusei'] < 30) ? 30 : $form['tokusei'];
        $form['atemi'] = ($form['atemi'] < 50) ? 50 : $form['atemi'];
        $form['kinsetubuki'] = ($form['kinsetubuki'] < 30) ? 30 : $form['kinsetubuki'];
        $form['jyuuki'] = ($form['jyuuki'] < 30) ? 30 : $form['jyuuki'];
        $form['tobidougu'] = ($form['tobidougu'] < 30) ? 30 : $form['tobidougu'];
        $form['kaihi'] = ($form['kaihi'] < 30) ? 30 : $form['kaihi'];
        $form['tansaku'] = ($form['tansaku'] < 30) ? 30 : $form['tansaku'];
        $form['teikou'] = ($form['teikou'] < 40) ? 40 : $form['teikou'];
        $sql = <<<EOM
UPDATE {$this->table}
SET
    rank      = :rank,
    type      = :type,
    is_mob    = :is_mob,
    name      = :name,
    memo      = :memo,
    sintai    = :sintai,
    kankaku   = :kankaku,
    tiryoku   = :tiryoku,
    isi       = :isi,
    miryoku   = :miryoku,
    koudouti  = :koudouti,
    idouryoku = :idouryoku,
    hirou     = :hirou,
    keishou   = :keishou,
    jyuusyou  = :jyuusyou,
    timeishou = :timeishou,
    sibou     = :sibou,
    setudan   = :setudan,
    jyuugeki  = :jyuugeki,
    shougeki  = :shougeki,
    shakunetu = :shakunetu,
    reiki     = :reiki,
    dengeki   = :dengeki,
    tokusei   = :tokusei,
    atemi     = :atemi,
    kinsetubuki     = :kinsetubuki,
    jyuuki     = :jyuuki,
    tobidougu     = :tobidougu,
    kaihi     = :kaihi,
    tansaku   = :tansaku,
    teikou    = :teikou
WHERE
    id = :id
    AND hash = :hash
EOM;
        $stmt = $this->app['db']->prepare($sql);
        $stmt->bindParam(':id', $form['id']);
        $stmt->bindParam(':hash', $form['hash']);
        $stmt->bindParam(':rank', $form['rank']);
        $stmt->bindParam(':type', $form['type']);
        $stmt->bindParam(':is_mob', $form['is_mob']);
        $stmt->bindParam(':name', $form['name']);
        $stmt->bindParam(':memo', $form['memo']);
        $stmt->bindParam(':sintai', $form['sintai']);
        $stmt->bindParam(':kankaku', $form['kankaku']);
        $stmt->bindParam(':tiryoku', $form['tiryoku']);
        $stmt->bindParam(':isi', $form['isi']);
        $stmt->bindParam(':miryoku', $form['miryoku']);
        $stmt->bindParam(':koudouti', $form['koudouti']);
        $stmt->bindParam(':idouryoku', $form['idouryoku']);
        $stmt->bindParam(':hirou', $form['hirou']);
        $stmt->bindParam(':keishou', $form['keishou']);
        $stmt->bindParam(':jyuusyou', $form['jyuusyou']);
        $stmt->bindParam(':timeishou', $form['timeishou']);
        $stmt->bindParam(':sibou', $form['sibou']);
        $stmt->bindParam(':setudan', $form['setudan']);
        $stmt->bindParam(':jyuugeki', $form['jyuugeki']);
        $stmt->bindParam(':shougeki', $form['shougeki']);
        $stmt->bindParam(':shakunetu', $form['shakunetu']);
        $stmt->bindParam(':reiki', $form['reiki']);
        $stmt->bindParam(':dengeki', $form['dengeki']);
        $stmt->bindParam(':tokusei', $form['tokusei']);
        $stmt->bindParam(':atemi', $form['atemi']);
        $stmt->bindParam(':kinsetubuki', $form['kinsetubuki']);
        $stmt->bindParam(':jyuuki', $form['jyuuki']);
        $stmt->bindParam(':tobidougu', $form['tobidougu']);
        $stmt->bindParam(':kaihi', $form['kaihi']);
        $stmt->bindParam(':tansaku', $form['tansaku']);
        $stmt->bindParam(':teikou', $form['teikou']);
        $stmt->execute();
        return array();
    }

    /**
     * @param array $form
     *
     * @return array
     */
    public function handleEditForm($form = array())
    {
        return array(
            'id' => empty($form['id']) ? null : $form['id'],
            'hash' => empty($form['hash']) ? null : $form['hash'],
            'rank' => empty($form['rank']) ? null : $form['rank'],
            'type' => empty($form['type']) ? null : $form['type'],
            'is_mob' => empty($form['is_mob']) ? null : $form['is_mob'],
            'name' => empty($form['name']) ? null : $form['name'],
            'memo' => empty($form['memo']) ? null : $form['memo'],
            'sintai' => empty($form['sintai']) ? null : $form['sintai'],
            'kankaku' => empty($form['kankaku']) ? null : $form['kankaku'],
            'tiryoku' => empty($form['tiryoku']) ? null : $form['tiryoku'],
            'isi' => empty($form['isi']) ? null : $form['isi'],
            'miryoku' => empty($form['miryoku']) ? null : $form['miryoku'],
            'koudouti' => empty($form['koudouti']) ? null : $form['koudouti'],
            'idouryoku' => empty($form['idouryoku']) ? null : $form['idouryoku'],
            'hirou' => empty($form['hirou']) ? null : $form['hirou'],
            'keishou' => empty($form['keishou']) ? null : $form['keishou'],
            'jyuusyou' => empty($form['jyuusyou']) ? null : $form['jyuusyou'],
            'timeishou' => empty($form['timeishou']) ? null : $form['timeishou'],
            'sibou' => empty($form['sibou']) ? null : $form['sibou'],
            'setudan' => empty($form['setudan']) ? null : $form['setudan'],
            'jyuugeki' => empty($form['jyuugeki']) ? null : $form['jyuugeki'],
            'shougeki' => empty($form['shougeki']) ? null : $form['shougeki'],
            'shakunetu' => empty($form['shakunetu']) ? null : $form['shakunetu'],
            'reiki' => empty($form['reiki']) ? null : $form['reiki'],
            'dengeki' => empty($form['dengeki']) ? null : $form['dengeki'],
            'tokusei' => empty($form['tokusei']) ? null : $form['tokusei'],
            'atemi' => empty($form['atemi']) ? null : $form['atemi'],
            'kinsetubuki' => empty($form['kinsetubuki']) ? null : $form['kinsetubuki'],
            'jyuuki' => empty($form['jyuuki']) ? null : $form['jyuuki'],
            'tobidougu' => empty($form['tobidougu']) ? null : $form['tobidougu'],
            'kaihi' => empty($form['kaihi']) ? null : $form['kaihi'],
            'tansaku' => empty($form['tansaku']) ? null : $form['tansaku'],
            'teikou' => empty($form['teikou']) ? null : $form['teikou'],
        );
    }
}