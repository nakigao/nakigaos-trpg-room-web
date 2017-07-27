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

    (13, 6, 1, '', 'シノビガミ育成計画', FALSE)
;
