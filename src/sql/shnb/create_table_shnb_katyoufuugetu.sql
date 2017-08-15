DROP TABLE IF EXISTS `shnb_katyoufuugetu`;
CREATE TABLE IF NOT EXISTS `shnb_katyoufuugetu` (
    id         BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name       TEXT   NOT NULL,
    name_kana  TEXT   NOT NULL,
    is_deleted BOOL            DEFAULT FALSE
);
INSERT INTO shnb_katyoufuugetu (name, name_kana) VALUES
    ('星', 'ホシ'),
    ('月', 'ツキ'),
    ('暗黒', 'アンコク'),
    ('影', 'カゲ'),
    ('雷', 'カミナリ'),
    ('火炎', 'カエン'),
    ('霞', 'カスミ'),
    ('虚空', 'コクウ'),
    ('旋風', 'センプウ'),
    ('立花', 'リッカ'),
    ('雪崩', 'ナダレ'),
    ('空蝉', 'ウツセミ'),
    ('吹雪', 'フブキ'),
    ('鬼火', 'オニビ'),
    ('村雲', 'ムラクモ'),
    ('飛沫', 'シブキ'),
    ('嵐', 'アラシ'),
    ('朧', 'オボロ'),
    ('接吻', 'セップン'),
    ('虹', 'ニジ'),
    ('紅', 'クレナイ')

;
