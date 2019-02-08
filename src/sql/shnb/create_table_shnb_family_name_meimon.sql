DROP TABLE IF EXISTS `shnb_family_name_meimon`;
CREATE TABLE IF NOT EXISTS `shnb_family_name_meimon` (
    id         BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name       TEXT   NOT NULL,
    name_kana  TEXT   NOT NULL,
    is_deleted BOOL            DEFAULT FALSE
);
INSERT INTO shnb_family_name_meimon (name, name_kana) VALUES
    ('大伴', 'オオトモ'),
    ('源', 'ミナモト'),
    ('伊勢', 'イセ'),
    ('風魔', 'フウマ'),
    ('楠木', 'クスノキ'),
    ('加藤', 'カトウ'),
    ('望月', 'モチヅキ'),
    ('楯岡', 'タテオカ'),
    ('服部', 'ハットリ'),
    ('百地', 'モモチ'),
    ('藤林', 'フジバヤシ'),
    ('城戸', 'キド'),
    ('山岡', 'ヤマオカ'),
    ('多羅尾', 'タラオ'),
    ('角隈', 'ツノクマ'),
    ('石川', 'イシカワ'),
    ('柳生', 'ヤギュウ'),
    ('向坂', 'ムコウザカ'),
    ('諸澄', 'モロヅミ'),
    ('伴', 'バン'),
    ('須賀', 'ハスチカ'),
    ('伊賀崎', 'イガサキ'),
    ('根来', 'ネゴロ'),
    ('松尾', 'マツオ'),
    ('間宮', 'マミヤ'),
    ('九鬼', 'クキ'),
    ('岩畔', 'イワクロ'),
    ('鵜飼', 'ウカイ'),
    ('二曲輪', 'ニノクルワ'),
    ('朝比奈', 'アサヒナ'),
    ('甲賀', 'コウガ'),
    ('芥川', 'アクタガワ'),
    ('雑賀', 'サイガ'),
    ('座頭', 'ザトウ'),
    ('出浦', 'イデウラ'),
    ('曽呂利', 'ソロリ'),
    ('滝川', 'タキガワ'),
    ('魚住', 'ウオズミ'),
    ('天草', 'アマクサ'),
    ('前田', 'マエダ'),
    ('益満', 'マスミツ'),
    ('蜂須賀', 'ハチスカ'),
    ('増満', 'マスミツ'),
    ('伴', 'バン'),
    ('小幡', 'オバタ')
;
