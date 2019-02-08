DROP TABLE IF EXISTS `shnb_family_name_timei`;
CREATE TABLE IF NOT EXISTS `shnb_family_name_timei` (
    id         BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name       TEXT   NOT NULL,
    name_kana  TEXT   NOT NULL,
    is_deleted BOOL            DEFAULT FALSE
);
INSERT INTO shnb_family_name_timei (name, name_kana) VALUES
    ('琉球', 'リュウキュウ'),
    ('隠岐', 'オキ'),
    ('出雲', 'イズモ'),
    ('伊勢', 'イセ'),
    ('飛騨', 'ヒダ'),
    ('久慈', 'クジ'),
    ('耶麻', 'ヤマ'),
    ('櫛引', 'クシビキ'),
    ('天羽', 'アマハ'),
    ('那須', 'ナス'),
    ('加茂', 'カモ'),
    ('比企', 'ヒキ'),
    ('富士', 'フジ'),
    ('設楽', 'シタラ'),
    ('不破', 'フワ'),
    ('鈴鹿', 'スズカ'),
    ('射水', 'イミズ'),
    ('名張', 'ナバリ'),
    ('明石', 'アカシ'),
    ('育波', 'イクハ'),
    ('石狩', 'イシカリ')
;
