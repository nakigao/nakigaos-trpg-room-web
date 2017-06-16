DROP TABLE IF EXISTS `replay_part`;
CREATE TABLE IF NOT EXISTS `replay_part` (
    id              BIGINT NOT NULL PRIMARY KEY,
    episode_id      BIGINT NOT NULL,
    sequence_number INT  DEFAULT 1,
    name            TEXT,
    is_deleted      BOOL DEFAULT FALSE
);
INSERT INTO replay_part (id, episode_id, sequence_number, name, is_deleted) VALUES
    (1, 1, 1, '前編', FALSE),
    (2, 1, 2, '後編', FALSE),
    (3, 2, 1, '前編', FALSE),
    (4, 2, 2, '中編', FALSE),
    (5, 2, 3, '後編', FALSE),
    (6, 3, 1, '読み切り', FALSE);