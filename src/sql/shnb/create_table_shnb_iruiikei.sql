DROP TABLE IF EXISTS `shnb_iruiikei`;
CREATE TABLE IF NOT EXISTS `shnb_iruiikei` (
    id         BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name       TEXT   NOT NULL,
    name_kana  TEXT   NOT NULL,
    is_deleted BOOL            DEFAULT FALSE
);
INSERT INTO shnb_iruiikei (name, name_kana) VALUES
    ('赤目', 'アカメ'),
    ('八目', 'ヤツメ'),
    ('継接', 'ツギハギ'),
    ('福耳', 'フクミミ'),
    ('口裂', 'クチサケ'),
    ('球節', 'タマブシ'),
    ('双首', 'フタコベ'),
    ('大嘴', 'オオハシ'),
    ('八頭', 'ヤガシラ'),
    ('逆面', 'サカヅラ'),
    ('腐肉', 'フニク'),
    ('蜘蛛脚', 'クモアシ'),
    ('首長', 'クビナガ'),
    ('鉤爪', 'カギヅメ'),
    ('断面', 'ダンメン'),
    ('九尾', 'キュウビ'),
    ('濡羽', 'ヌレバネ'),
    ('触手', 'ショクシュ'),
    ('長脛', 'ナガスネ'),
    ('蒼血', 'ソウケツ'),
    ('露腸', 'アラワタ')

;
