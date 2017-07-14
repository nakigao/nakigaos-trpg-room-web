DROP TABLE IF EXISTS `replay_part`;
CREATE TABLE IF NOT EXISTS `replay_part` (
    id              BIGINT NOT NULL PRIMARY KEY,
    episode_id      BIGINT NOT NULL,
    sequence_number INT  DEFAULT 1,
    name            TEXT,
    is_deleted      BOOL DEFAULT FALSE
);
INSERT INTO replay_part (id, episode_id, sequence_number, name, is_deleted) VALUES
    -- gror/単発/給料日
    (1, 1, 1, 'トレーラー', FALSE),
    (2, 1, 2, 'オープニング', FALSE),
    (3, 1, 3, 'ミドル', FALSE),
    (4, 1, 4, 'クライマックス', FALSE),
    (5, 1, 5, 'エンディング', FALSE),
    -- gror/ゼロ特学園生活！/1話
    (6, 2, 1, 'トレーラー', FALSE),
    (7, 2, 2, 'オープニング', FALSE),
    (8, 2, 3, 'ミドル', FALSE),
    (9, 2, 4, 'クライマックス', FALSE),
    (10, 2, 5, 'エンディング', FALSE),
    -- gror/ゼロ特学園生活！/2話
    (11, 3, 1, 'トレーラー', FALSE),
    (12, 3, 2, 'オープニング', FALSE),
    (13, 3, 3, 'ミドル', FALSE),
    (14, 3, 4, 'クライマックス', FALSE),
    (15, 3, 5, 'エンディング', FALSE),
    -- gror/ゼロ特学園生活！/3話
    (16, 4, 1, 'トレーラー', FALSE),
    (17, 4, 2, 'オープニング', FALSE),
    (18, 4, 3, 'ミドル', FALSE),
    (19, 4, 4, 'クライマックス', FALSE),
    (20, 4, 5, 'エンディング', FALSE),
    -- lsry/単発/戦争屋の誘い
    (21, 5, 1, 'プリプレイ', FALSE),
    (22, 5, 2, '開幕', FALSE),
    (23, 5, 3, '分岐', FALSE),
    (24, 5, 4, '戦闘', FALSE),
    (25, 5, 5, '終幕', FALSE),
    -- lsry/単発/フィギュアイズマイン
    (26, 6, 1, 'プリプレイ', FALSE),
    (27, 6, 2, '開幕', FALSE),
    (28, 6, 3, '分岐', FALSE),
    (29, 6, 4, '戦闘', FALSE),
    (30, 6, 5, '終幕', FALSE),
    -- lsry/アネコのロストロイヤル/小さな心の大きな一歩
    (31, 7, 1, 'プリプレイ', FALSE),
    (32, 7, 2, '開幕', FALSE),
    (33, 7, 3, '分岐', FALSE),
    (34, 7, 4, '戦闘', FALSE),
    (35, 7, 5, '終幕', FALSE),
    -- lsry/アネコのロストロイヤル/王女の決別
    (36, 8, 1, 'プリプレイ', FALSE),
    (37, 8, 2, '開幕', FALSE),
    (38, 8, 3, '分岐', FALSE),
    (39, 8, 4, '戦闘', FALSE),
    (40, 8, 5, '終幕', FALSE),
    -- cloc/単発/ハロー、ヴィータ
    (41, 9, 1, 'プリプレイ', FALSE),
    (42, 9, 2, '導入', FALSE),
    (43, 9, 3, 'Aパート', FALSE),
    (44, 9, 4, 'Bパート', FALSE),
    (45, 9, 5, '結末', FALSE)
;
