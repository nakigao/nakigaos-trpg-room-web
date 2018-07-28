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
    (75, 15, 5, '結末', FALSE),
    -- shnb/単発/ザ・ミスト
    (76, 16, 1, 'プリプレイ', FALSE),
    (77, 16, 2, 'オープニング', FALSE),
    (78, 16, 3, 'メイン', FALSE),
    (79, 16, 4, 'クライマックス', FALSE),
    (80, 16, 5, 'エンディング', FALSE),
    -- cloc/単発/ドキッ！不快だらけのホラーハウス
    (81, 17, 1, 'トレーラー', FALSE),
    (82, 17, 2, 'オープニング', FALSE),
    (83, 17, 3, 'ミドル', FALSE),
    (84, 17, 4, 'クライマックス', FALSE),
    (85, 17, 5, 'エンディング', FALSE),
    -- nvnv/単発/体験卓1回目
    (86, 18, 1, '読み切り', FALSE),
    -- nvnv/単発/体験卓2回目
    (87, 19, 1, '読み切り', FALSE),
    -- sww2/飯！飯！飯！/水源を求めて
    (88, 20, 1, 'トレーラー', FALSE),
    (89, 20, 2, 'オープニング', FALSE),
    (90, 20, 3, 'ミドル', FALSE),
    (91, 20, 4, 'クライマックス', FALSE),
    (92, 20, 5, 'エンディング', FALSE),
    -- cloc/単発/迷いを断つ剣
    (93, 21, 1, 'トレーラー', FALSE),
    (94, 21, 2, 'オープニング', FALSE),
    (95, 21, 3, 'ミドル', FALSE),
    (96, 21, 4, 'クライマックス', FALSE),
    (97, 21, 5, 'エンディング', FALSE),
    -- lsry/アネコのロストロイヤル/守るべきもの、失うもの
    (98, 22, 1, 'プリプレイ', FALSE),
    (99, 22, 2, '開幕', FALSE),
    (100, 22, 3, '分岐', FALSE),
    (101, 22, 4, '戦闘', FALSE),
    (102, 22, 5, '終幕', FALSE),
    -- cloc/キャンペーン/魔女の図書館/1話
    (103, 23, 1, 'プリプレイ', FALSE),
    (104, 23, 2, '導入', FALSE),
    (105, 23, 3, 'Aパート', FALSE),
    (106, 23, 4, 'Bパート', FALSE),
    (107, 23, 5, '結末', FALSE),
    -- gror/キャンペーン/5話/絶対！あたいが！一番花嫁！
    (108, 24, 1, 'トレーラー', FALSE),
    (109, 24, 2, 'オープニング', FALSE),
    (110, 24, 3, 'ミドル', FALSE),
    (111, 24, 4, 'クライマックス', FALSE),
    (112, 24, 5, 'エンディング', FALSE),
    -- lsry/アネコのロストロイヤル/非常なる現実
    (113, 25, 1, 'プリプレイ', FALSE),
    (114, 25, 2, '開幕', FALSE),
    (115, 25, 3, '分岐', FALSE),
    (116, 25, 4, '戦闘', FALSE),
    (117, 25, 5, '終幕', FALSE),
    -- gror/キャンペーン/最終話/ゼロを超える絆
    (118, 26, 1, 'トレーラー', FALSE),
    (119, 26, 2, 'オープニング', FALSE),
    (120, 26, 3, 'ミドル', FALSE),
    (121, 26, 4, 'クライマックス', FALSE),
    (122, 26, 5, 'エンディング', FALSE),
    -- gror/キャンペーン/おまけ
    (123, 27, 1, 'あとがき', FALSE),
    (124, 27, 2, '事件の真相', FALSE),
    (125, 27, 3, '拡張ルール『防衛戦』', FALSE),
    -- cloc/キャンペーン/魔女の図書館/2話
    (126, 28, 1, 'プリプレイ', FALSE),
    (127, 28, 2, '導入', FALSE),
    (128, 28, 3, 'Aパート', FALSE),
    (129, 28, 4, 'Bパート', FALSE),
    (130, 28, 5, '結末', FALSE),
    -- cloc/キャンペーン/魔女の図書館/3話
    (131, 29, 1, 'プリプレイ', FALSE),
    (132, 29, 2, '導入', FALSE),
    (133, 29, 3, 'Aパート', FALSE),
    (134, 29, 4, 'Bパート', FALSE),
    (135, 29, 5, '結末', FALSE),
    -- dlhr/単発/XXXXXXXXXX
    (136, 30, 1, 'プリプレイ', FALSE),
    (137, 30, 2, '導入', FALSE),
    (138, 30, 3, '展開', FALSE),
    (139, 30, 4, '決戦', FALSE),
    (140, 30, 5, '余韻', FALSE),
    -- lsry/アネコのロストロイヤル/世界の終幕
    (141, 31, 1, 'プリプレイ', FALSE),
    (142, 31, 2, '戦闘', FALSE),
    (143, 31, 3, '終幕', FALSE),
    -- gror/GOとぅあなざーわーるど！/プリプレイ
    (144, 32, 1, 'レギュレーション', FALSE),
    (145, 32, 2, 'ハウスルール', FALSE),
    (146, 32, 3, 'ハンドアウト', FALSE),
    -- gror/GOとぅあなざーわーるど！/第一話
    (147, 33, 1, 'トレーラー', FALSE),
    (148, 33, 2, 'オープニング', FALSE),
    (149, 33, 3, 'ミドル', FALSE),
    (150, 33, 4, 'クライマックス', FALSE),
    (151, 33, 5, 'エンディング', FALSE),
    -- gror/GOとぅあなざーわーるど！/第二話
    (152, 34, 1, 'トレーラー', FALSE),
    (153, 34, 2, 'オープニング', FALSE),
    (154, 34, 3, 'ミドル', FALSE),
    (155, 34, 4, 'クライマックス', FALSE),
    (156, 34, 5, 'エンディング', FALSE),
    -- cloc/キャンペーン/魔女の図書館/4話
    (157, 35, 1, 'プリプレイ', FALSE),
    (158, 35, 2, '導入', FALSE),
    (159, 35, 3, 'Aパート', FALSE),
    (160, 35, 4, 'Bパート', FALSE),
    (161, 35, 5, '結末', FALSE),
    -- nvnv/単発/bcf歓迎
    (162, 36, 1, '読み切り', FALSE),
    -- cloc/キャンペーン/魔女の図書館/5話
    (163, 37, 1, 'プリプレイ', FALSE),
    (164, 37, 2, '導入', FALSE),
    (165, 37, 3, 'Aパート', FALSE),
    (166, 37, 4, 'Bパート', FALSE),
    (167, 37, 5, '結末', FALSE)

;
