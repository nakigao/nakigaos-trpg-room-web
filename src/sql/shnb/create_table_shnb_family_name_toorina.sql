DROP TABLE IF EXISTS `shnb_family_name_toorina`;
CREATE TABLE IF NOT EXISTS `shnb_family_name_toorina` (
    id         BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name       TEXT   NOT NULL,
    name_kana  TEXT   NOT NULL,
    is_deleted BOOL            DEFAULT FALSE
);
INSERT INTO shnb_family_name_toorina (name, name_kana) VALUES
    ('神鳴る', 'カミナル'),
    ('地震いの', 'ヂフルイノ'),
    ('野分の', 'ノワキノ'),
    ('村雨の', 'ムラサメノ'),
    ('狭霧の', 'サギリノ'),
    ('埋火の', 'ウズメビノ'),
    ('焔の', 'ホムラノ'),
    ('獅子の', 'シシノ'),
    ('猿の', 'マシラノ'),
    ('狢の', 'ムジナノ'),
    ('虎の', 'トラノ'),
    ('長虫の', 'ナガムシノ'),
    ('蛙の', 'カワズノ'),
    ('梟の', 'フクロウノ'),
    ('水鳥の', 'ミズトリノ'),
    ('阿修羅の', 'アシュラノ'),
    ('菩薩の', 'ボサツノ'),
    ('鵺の', 'ヌエノ'),
    ('火食い鳥の', 'ヒクイドリノ')
;
