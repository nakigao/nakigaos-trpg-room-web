DROP TABLE IF EXISTS `shnb_hyakkiyakou`;
CREATE TABLE IF NOT EXISTS `shnb_hyakkiyakou` (
    id         BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name       TEXT   NOT NULL,
    name_kana  TEXT   NOT NULL,
    is_deleted BOOL            DEFAULT FALSE
);
INSERT INTO shnb_hyakkiyakou (name, name_kana) VALUES
    ('夜叉', 'ヤシャ'),
    ('蟲', 'ムシ'),
    ('虎', 'トラ'),
    ('鮫', 'サメ'),
    ('龍', 'タツ'),
    ('蝙蝠', 'コウモリ'),
    ('阿修羅', 'アシュラ'),
    ('猿', 'マシラ'),
    ('獅子', 'シシ'),
    ('狐', 'キツネ'),
    ('蛇', 'ヘビ'),
    ('羅刹', 'ラセツ'),
    ('蜥蜴', 'トカゲ'),
    ('鴉', 'カラス'),
    ('孔雀', 'クジャク'),
    ('蜻蛉', 'トンボ'),
    ('鳳凰', 'ホウオウ'),
    ('蠍', 'サソリ'),
    ('弥勒', 'ミロク'),
    ('蜘蛛', 'クモ'),
    ('明王', 'ミョウオウ')

;
