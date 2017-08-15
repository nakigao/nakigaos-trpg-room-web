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
    -- cloc/単発/美味しいワインの造り方
    (41, 9, 1, 'プリプレイ', FALSE),
    (42, 9, 2, '導入', FALSE),
    (43, 9, 3, 'Aパート', FALSE),
    (44, 9, 4, 'Bパート', FALSE),
    (45, 9, 5, '結末', FALSE),
    -- cloc/単発/都近一族殺人事件
    (46, 10, 1, 'プリプレイ', FALSE),
    (47, 10, 2, '導入', FALSE),
    (48, 10, 3, 'Aパート', FALSE),
    (49, 10, 4, 'Bパート', FALSE),
    (50, 10, 5, '結末', FALSE),
    -- cloc/単発/蕎麦屋 OF THE DEAD
    (51, 11, 1, 'プリプレイ', FALSE),
    (52, 11, 2, '導入', FALSE),
    (53, 11, 3, 'Aパート', FALSE),
    (54, 11, 4, 'Bパート', FALSE),
    (55, 11, 5, '結末', FALSE),
    -- cloc/単発/ハロー、ヴィータ
    (56, 12, 1, 'プリプレイ', FALSE),
    (57, 12, 2, '導入', FALSE),
    (58, 12, 3, 'Aパート', FALSE),
    (59, 12, 4, 'Bパート', FALSE),
    (60, 12, 5, '結末', FALSE),
    -- shnb/単発/シノビガミ育成計画
    (61, 13, 1, 'プリプレイ', FALSE),
    (62, 13, 2, 'オープニング', FALSE),
    (63, 13, 3, 'メイン', FALSE),
    (64, 13, 4, 'クライマックス', FALSE),
    (65, 13, 5, 'エンディング', FALSE),
    -- gror/単発/ブラッドシアター
    (66, 14, 1, 'トレーラー', FALSE),
    (67, 14, 2, 'オープニング', FALSE),
    (68, 14, 3, 'ミドル', FALSE),
    (69, 14, 4, 'クライマックス', FALSE),
    (70, 14, 5, 'エンディング', FALSE),
    -- cloc/単発/ドキッ！不快だらけのホラーハウス
    (71, 15, 1, 'プリプレイ', FALSE),
    (72, 15, 2, '導入', FALSE),
    (73, 15, 3, 'Aパート', FALSE),
    (74, 15, 4, 'Bパート', FALSE),
    (75, 15, 5, '結末', FALSE)

;
