DROP TABLE IF EXISTS `shnb_name_tokusyu`;
CREATE TABLE IF NOT EXISTS `shnb_name_tokusyu` (
    id         BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name       TEXT   NOT NULL,
    name_kana  TEXT   NOT NULL,
    sex        INT    NOT NULL DEFAULT 1, # 1 = common, 2 = male, 3 = female, 4 = unknown
    is_deleted BOOL            DEFAULT FALSE
);
INSERT INTO shnb_name_tokusyu (name, name_kana, sex) VALUES
    ('-', '※名前を持たず、苗字だけで呼ばれている', 1),
    ('-', '※神道用語を含んだ名前', 1),
    ('-', '※数字を含む名前', 1),
    ('-', '※妖怪の名前', 1),
    ('-', '※動物を含んだ名前', 1),
    ('-', '※好物を含んだ名前', 1),
    ('-', '※色を含んだ名前', 1),
    ('-', '※ネクロ系の単語を含む名前', 1),
    ('-', '※夜や影を連想させる単語を含んだ名前', 1),
    ('-', '※歴史上の偉人の名前', 1),
    ('-', '※武具を含んだ名前', 1),
    ('-', '※ギリシア文字', 1),
    ('-', '※季節を含んだ名前', 1),
    ('-', '※地名', 1),
    ('-', '※天候を含んだ名前', 1),
    ('-', '※日本酒や焼酎の名前', 1),
    ('-', '※身体部位を含んだ名前', 1),
    ('-', '※西洋のモンスターの名前', 1),
    ('-', '※植物を含む名前', 1),
    ('-', '※仏教用語を含んだ名前', 1),
    ('-', '※名前を持たず、二つ名だけで呼ばれている', 1)

;
