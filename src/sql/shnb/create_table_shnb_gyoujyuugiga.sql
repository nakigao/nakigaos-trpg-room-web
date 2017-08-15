DROP TABLE IF EXISTS `shnb_gyoujyuugiga`;
CREATE TABLE IF NOT EXISTS `shnb_gyoujyuugiga` (
    id         BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name       TEXT   NOT NULL,
    name_kana  TEXT   NOT NULL,
    is_deleted BOOL            DEFAULT FALSE
);
INSERT INTO shnb_gyoujyuugiga (name, name_kana) VALUES
    ('飛び', 'トビ'),
    ('叫び', 'サケビ'),
    ('盗み', 'ヌスミ'),
    ('縫い', 'ヌイ'),
    ('走り', 'ハシリ'),
    ('落とし', 'オトシ'),
    ('隠れ', 'カクレ'),
    ('縛り', 'シバリ'),
    ('斬り', 'キリ'),
    ('殺し', 'コロシ'),
    ('騙し', 'ダマシ'),
    ('語り', 'カタリ'),
    ('撃ち', 'ウチ'),
    ('結び', 'ムスビ'),
    ('踊り', 'オドリ'),
    ('狂い', 'クルイ'),
    ('渡り', 'ワタリ'),
    ('返し', 'カエシ'),
    ('睨み', 'ニラミ'),
    ('封じ', 'フウジ'),
    ('映し', 'ウツシ')

;
