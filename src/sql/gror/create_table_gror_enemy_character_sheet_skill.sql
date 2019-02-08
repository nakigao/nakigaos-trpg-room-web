DROP TABLE `gror_enemy_character_sheet_skill`;
CREATE TABLE IF NOT EXISTS `gror_enemy_character_sheet_skill` (
    id                         BIGINT       NOT NULL PRIMARY KEY AUTO_INCREMENT,

    enemy_character_sheet_hash VARCHAR(128) NOT NULL,

    name                       VARCHAR(255),
    memo                       TEXT,
    priority                   INT,

    hantei                     VARCHAR(255),
    taimingu                   VARCHAR(255),
    taishou                    VARCHAR(255),
    shatei                     VARCHAR(255),
    seigen                     VARCHAR(255),
    kosuto                     VARCHAR(255),
    zokusei                    VARCHAR(255),
    kouka                      TEXT,
    tuika                      TEXT
);
INSERT INTO `gror_enemy_character_sheet_skill` (
    `enemy_character_sheet_hash`, `name`, `memo`, `priority`, `hantei`, `taimingu`, `taishou`, `shatei`, `seigen`, `kosuto`, `zokusei`, `kouka`, `tuika`)
VALUES
    ('7795995dd1946c231fa9d55f482f9e0e2ac3452a', 'フロストバリア', NULL, '1', '1', 'BUFF', '単', '自身', NULL, NULL, NULL, '[ダメージ軽減:冷却]のバフを得る', NULL),
    ('7795995dd1946c231fa9d55f482f9e0e2ac3452a', 'アイスフィールド', NULL, '2', '1', 'FREE', '単', '自身', NULL, NULL, NULL, '自身が行う近接攻撃の属性を『冷却』に変更する。メインプロセス終了まで継続する', NULL),
    ('7795995dd1946c231fa9d55f482f9e0e2ac3452a', 'フロストバインド', NULL, '3', '1', 'SETUP', '周', '至近', '1シーン1回', NULL, NULL, '自身の『特性』vs敵の『抵抗』。勝利時、[マヒ][DOT:疲労1]を与える', NULL),
    ('7795995dd1946c231fa9d55f482f9e0e2ac3452a', '爪', NULL, '4', '2', 'MAIN', '単', '至近', NULL, NULL, '1', '2d10+28', NULL),
    ('7795995dd1946c231fa9d55f482f9e0e2ac3452a', '氷の息', NULL, '5', '1', 'MAIN', '周', '近', NULL, NULL, '5', '1d10+20', '[DOT:疲労1]'),
    ('7795995dd1946c231fa9d55f482f9e0e2ac3452a', '氷結領域', NULL, '6', '1', 'MAIN', '範', '∞', '1シーン1回', NULL, '2', '1d10+25', '[マヒ]')
;