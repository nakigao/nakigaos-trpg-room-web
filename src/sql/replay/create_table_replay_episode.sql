DROP TABLE IF EXISTS `replay_episode`;
CREATE TABLE IF NOT EXISTS `replay_episode` (
    id              BIGINT NOT NULL PRIMARY KEY,
    series_id       BIGINT NOT NULL,
    sequence_number INT  DEFAULT 1,
    prefix          TEXT,
    name            TEXT,
    is_deleted      BOOL DEFAULT FALSE
);
INSERT INTO replay_episode (id, series_id, sequence_number, prefix, name, is_deleted) VALUES
    (1, 1, 1, '', '給料日', FALSE),
    (2, 2, 1, '第1話', '燃える校舎', FALSE),
    (3, 2, 2, '第2話', '栄光のマラソン大会', FALSE),
    (4, 2, 3, '第3話', 'あむあいゆあまざー！？', FALSE),

    (5, 3, 1, '', '戦争屋の誘い', FALSE),
    (6, 3, 2, '', 'フィギュアイズマイン', FALSE),
    (7, 4, 1, '第0話', '小さな心の大きな一歩', FALSE),
    (8, 4, 2, '第1話', '王女の決別', FALSE),

    (9, 5, 1, '', '美味しいワインの造り方', FALSE),
    (10, 5, 2, '', '都近一族殺人事件', FALSE),
    (11, 5, 3, '', '蕎麦屋 OF THE DEAD', FALSE),
    (12, 5, 4, '', 'ハロー、ヴィータ', FALSE),

    (13, 6, 1, '', 'シノビガミ育成計画', FALSE),

    (14, 7, 1, '', 'ブラッドシアター', FALSE),

    (15, 5, 5, '', 'ドキッ！不快だらけのホラーハウス', FALSE),

    (16, 6, 2, '', 'ザ・ミスト', FALSE),

    (17, 2, 4, '第4話', '事件No.90993', FALSE),

    (18, 8, 1, '', '体験卓1回目', FALSE),
    (19, 8, 2, '', '体験卓2回目', FALSE),

    (20, 9, 1, '第1話', '水源を求めて', FALSE),
    (21, 6, 3, '', '迷いを断つ剣', FALSE),
    (22, 4, 3, '', '守るべきもの、失うもの', FALSE),

    (23, 10, 1, '第1話', '奇妙なビブリオマニア', FALSE),

    (24, 2, 5, '第5話', '絶対！あたいが！一番花嫁！', FALSE)

;
