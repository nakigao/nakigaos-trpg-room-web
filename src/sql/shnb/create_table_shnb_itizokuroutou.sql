DROP TABLE IF EXISTS `shnb_itizokuroutou`;
CREATE TABLE IF NOT EXISTS `shnb_itizokuroutou` (
    id         BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name       TEXT   NOT NULL,
    name_kana  TEXT   NOT NULL,
    is_deleted BOOL            DEFAULT FALSE
);
INSERT INTO shnb_itizokuroutou (name, name_kana) VALUES
    ('師団', 'シダン'),
    ('一族', 'イチゾク'),
    ('兄弟', 'キョウダイ'),
    ('姉妹', 'シマイ'),
    ('屋敷', 'ヤシキ'),
    ('舞台', 'ブタイ'),
    ('道中', 'ドウチュウ'),
    ('組', 'クミ'),
    ('領域', 'リョウイキ'),
    ('商会', 'ショウカイ'),
    ('山', 'サン'),
    ('文庫', 'ブンコ'),
    ('機関', 'キカン'),
    ('結社', 'ケッシャ'),
    ('教室', 'キョウシツ'),
    ('劇場', 'ゲキジョウ'),
    ('衆', 'シュウ'),
    ('党', 'トウ'),
    ('一味', 'イチミ'),
    ('小隊', 'ショウタイ'),
    ('軍団', 'グンダン')

;
