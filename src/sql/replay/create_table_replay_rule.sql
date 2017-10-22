-- リプレイのルールブックテーブル
DROP TABLE IF EXISTS `replay_rule`;
CREATE TABLE IF NOT EXISTS `replay_rule` (
    id            BIGINT NOT NULL PRIMARY KEY,
    unique_id     TEXT,
    name          TEXT,
    name_short    TEXT,
    name_en       TEXT,
    name_en_short TEXT,
    url           TEXT,
    memo          TEXT,
    is_deleted    BOOL DEFAULT FALSE
);
INSERT INTO replay_rule (id, unique_id, name, name_short, name_en, name_en_short, url, memo, is_deleted) VALUES
    (1, 'anmh', 'Aの魔法陣NGv4', 'Aマホ', 'MAGIC CIRCLE OF A', 'amaho', 'https://www.famitsu.com/comic_clear/se_amaho/', '', FALSE),
    (2, 'ari2', 'アリアンロッドRPG2E', 'アリアン', 'ARIANRHOD RPG 2E', 'arianrhod2e', 'http://www.fear.co.jp/ari/', '', FALSE),
    (3, 'cloc', 'クトゥルフ神話TRPG', 'CoC', 'CALL OF CTHULHU', 'coc', 'http://www.enterbrain.co.jp/hobby/trpg/list/cthu.html', '', FALSE),
    (4, 'gror', 'ガーデンオーダー', 'GO', 'GARDEN ORDER', 'gardenorder', 'http://www.fear.co.jp/gorder/', '', FALSE),
    (5, 'grcr', 'グランクレスト', 'GC', 'GRANCREST', 'grancrest', 'http://grancrest.jp/', '', FALSE),
    (6, 'insn', 'インセイン', 'インセ', 'INSANE', 'insane', 'http://www.bouken.jp/pd/san/', '', FALSE),
    (7, 'lsry', 'ロストロイヤル', 'ロストロ', 'LOST ROYAL', 'lostroyal', 'http://www.bouken.jp/pd/lr/', '', FALSE),
    (8, 'mkdy', '迷宮デイズ', 'デイズ', 'MAKEYOU DAYS', 'makeyoudays', 'http://www.bouken.jp/product/makeyou/', '', FALSE),
    (9, 'msst', 'マスカレイドスタイル', 'マスカレ', 'MASQUERADE STYLE', 'masqueradestyle', 'http://www.nowriver.net/', '', FALSE),
    (10, 'onwh', '片道勇者TRPG', '片道勇者', 'ONE WAY HERO TRPG', 'onewayherotrpg', 'https://ssl.fujimi-trpg-online.jp/freepage/324', '', FALSE),
    (11, 'ptfi', 'パスファインダー', 'パスファ', 'PATHFINDER', 'pathfinder', 'http://paizo.com/pathfinderRPG/prd/', '', FALSE),
    (12, 'scpn', 'すくぱに♪', 'すくぱに', 'SCHOOL PANIC', 'schoolpanic', 'http://inga.dtiblog.com/', '', FALSE),
    (13, 'sww2', 'ソードワールド2.0', 'SW', 'SWORD WORLD 2.0', 'sw2.0', 'https://ssl.fujimi-trpg-online.jp/contents/sw', '', FALSE),
    (14, 'shnb', 'シノビガミ', 'ビガミ', 'SHINOBIGAMI', 'bigami', 'http://www.bouken.jp/pd/sg/', '', FALSE),
    (15, 'akgn', 'エースキラージーン', 'AKG', 'ACE KILLER GENE', 'akg', 'http://www.fear.co.jp/akg/index.htm', '', FALSE),
    (16, 'nvnv', 'のびのびTRPG', 'のびのび', 'NOVI NOVI TRPG', 'nvnv', 'http://frontierpub.jp/books/novi-trpg/', '', FALSE)
;