DROP TABLE `gror_enemy_character_sheet`;
CREATE TABLE IF NOT EXISTS `gror_enemy_character_sheet` (
    id          BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,

    hash        VARCHAR(128) UNIQUE,

    rank        INT,
    type        VARCHAR(255),
    is_mob      BOOLEAN,
    name        VARCHAR(255),
    memo        TEXT,

    sintai      INT,
    kankaku     INT,
    tiryoku     INT,
    isi         INT,
    miryoku     INT,
    koudouti    INT,
    idouryoku   INT,

    hirou       INT,
    keishou     INT,
    jyuusyou    INT,
    timeishou   INT,
    sibou       INT,

    setudan     INT,
    jyuugeki    INT,
    shougeki    INT,
    shakunetu   INT,
    reiki       INT,
    dengeki     INT,

    tokusei     INT,
    atemi       INT,
    kinsetubuki INT,
    jyuuki      INT,
    tobidougu   INT,
    kaihi       INT,
    tansaku     INT,
    teikou      INT
);
INSERT INTO `gror_enemy_character_sheet` (
    `hash`, `rank`, `type`, `is_mob`, `name`, `memo`, `sintai`, `kankaku`, `tiryoku`, `isi`, `miryoku`, `koudouti`, `idouryoku`, `hirou`, `keishou`, `jyuusyou`, `timeishou`, `sibou`, `setudan`, `jyuugeki`, `shougeki`, `shakunetu`, `reiki`, `dengeki`, `tokusei`, `atemi`, `kinsetubuki`, `jyuuki`, `tobidougu`, `kaihi`, `tansaku`, `teikou`)
VALUES (
    '7795995dd1946c231fa9d55f482f9e0e2ac3452a', '7', '融合兵', '1', 'アイスタイガー', '虎にネフィリムの細胞を埋め込んだ融合兵。
周囲の水分を氷へと変える特性能力を持つ。
この冷気によって敵の体力を奪い、動けなくなったところに襲いかかる。
また、虎としての戦闘能力も強化されており、その爪は重武装の兵士を容易く切り裂く。
(上級P84)
', '15', '17', '9', '12', '8', '16', '1', '6', '7', '5', '3', '1', '9', '5', '9', '0', '8', '8', '90', '140', '0', '0', '0', '40', '30', '40'
);
