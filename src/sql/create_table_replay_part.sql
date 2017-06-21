DROP TABLE IF EXISTS `replay_part`;
CREATE TABLE IF NOT EXISTS `replay_part` (
    id              BIGINT NOT NULL PRIMARY KEY,
    episode_id      BIGINT NOT NULL,
    sequence_number INT  DEFAULT 1,
    name            TEXT,
    is_deleted      BOOL DEFAULT FALSE
);
INSERT INTO replay_part (id, episode_id, sequence_number, name, is_deleted) VALUES
    -- 0話
    (1, 1, 1, 'トレーラー', FALSE),
    (2, 1, 2, 'オープニング', FALSE),
    (3, 1, 3, 'ミドル', FALSE),
    (4, 1, 4, 'クライマックス', FALSE),
    (5, 1, 5, 'エンディング', FALSE),
    -- 1話
    (6, 2, 1, 'トレーラー', FALSE),
    (7, 2, 2, 'オープニング', FALSE),
    (8, 2, 3, 'ミドル', FALSE),
    (9, 2, 4, 'クライマックス', FALSE),
    (10, 2, 5, 'エンディング', FALSE),
    -- 2話
    (11, 3, 1, 'トレーラー', FALSE),
    (12, 3, 2, 'オープニング', FALSE),
    (13, 3, 3, 'ミドル', FALSE),
    (14, 3, 4, 'クライマックス', FALSE),
    (15, 3, 5, 'エンディング', FALSE),
    -- 3話
    (16, 4, 1, 'トレーラー', FALSE),
    (17, 4, 2, 'オープニング', FALSE),
    (18, 4, 3, 'ミドル', FALSE),
    (19, 4, 4, 'クライマックス', FALSE),
    (20, 4, 5, 'エンディング', FALSE);
