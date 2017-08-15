DROP TABLE IF EXISTS `shnb_sinrabansyou`;
CREATE TABLE IF NOT EXISTS `shnb_sinrabansyou` (
    id         BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name       TEXT   NOT NULL,
    name_kana  TEXT   NOT NULL,
    is_deleted BOOL            DEFAULT FALSE
);
INSERT INTO shnb_sinrabansyou (name, name_kana) VALUES
    ('録', 'シルシ'),
    ('神', 'カミ'),
    ('時', 'トキ'),
    ('夢', 'ユメ'),
    ('霊', 'タマ'),
    ('牙', 'キバ'),
    ('傷', 'キズ'),
    ('屍', 'シカバネ'),
    ('黄金', 'コガネ'),
    ('鍵', 'カギ'),
    ('華', 'ハナ'),
    ('針', 'ハリ'),
    ('剣', 'ツルギ'),
    ('拳', 'コブシ'),
    ('音', 'オト'),
    ('血', 'チ'),
    ('柩', 'ヒツギ'),
    ('車', 'クルマ'),
    ('界', 'サカイ'),
    ('眼', 'メ'),
    ('陣', 'ジンダテ')

;
