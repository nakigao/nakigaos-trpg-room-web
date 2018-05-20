-- リプレイの各パートに紐づいてるプレイヤー
DROP TABLE IF EXISTS `replay_part_gm_pl`;
CREATE TABLE IF NOT EXISTS `replay_part_gm_pl` (
    id                      BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    rule_unique_id          TEXT   NOT NULL,
    series_id               BIGINT NOT NULL,
    episode_sequence_number BIGINT NOT NULL,
    part_sequence_number    BIGINT NOT NULL,
    is_gm                   BOOL            DEFAULT FALSE,
    user_id                 BIGINT NOT NULL,
    commnet                 TEXT,
    is_deleted              BOOL            DEFAULT FALSE
);
INSERT INTO replay_part_gm_pl (rule_unique_id, series_id, episode_sequence_number, part_sequence_number, is_gm, user_id, commnet, is_deleted) VALUES
    ('gror', 1, 1, 1, FALSE, 1, NULL, FALSE),
    ('gror', 1, 1, 1, TRUE, 2, NULL, FALSE),
    ('gror', 1, 1, 1, FALSE, 3, NULL, FALSE),
    ('gror', 1, 1, 1, FALSE, 4, NULL, FALSE),
    ('gror', 1, 1, 2, FALSE, 1, NULL, FALSE),
    ('gror', 1, 1, 2, TRUE, 2, NULL, FALSE),
    ('gror', 1, 1, 2, FALSE, 3, NULL, FALSE),
    ('gror', 1, 1, 2, FALSE, 4, NULL, FALSE),
    ('gror', 1, 1, 3, FALSE, 1, NULL, FALSE),
    ('gror', 1, 1, 3, TRUE, 2, NULL, FALSE),
    ('gror', 1, 1, 3, FALSE, 3, NULL, FALSE),
    ('gror', 1, 1, 3, FALSE, 4, NULL, FALSE),
    ('gror', 1, 1, 4, FALSE, 1, NULL, FALSE),
    ('gror', 1, 1, 4, TRUE, 2, NULL, FALSE),
    ('gror', 1, 1, 4, FALSE, 3, NULL, FALSE),
    ('gror', 1, 1, 4, FALSE, 4, NULL, FALSE),
    ('gror', 1, 1, 5, FALSE, 1, NULL, FALSE),
    ('gror', 1, 1, 5, TRUE, 2, NULL, FALSE),
    ('gror', 1, 1, 5, FALSE, 3, NULL, FALSE),
    ('gror', 1, 1, 5, FALSE, 4, NULL, FALSE),

    ('gror', 2, 1, 1, FALSE, 1, NULL, FALSE),
    ('gror', 2, 1, 1, TRUE, 2, NULL, FALSE),
    ('gror', 2, 1, 1, FALSE, 3, NULL, FALSE),
    ('gror', 2, 1, 1, FALSE, 4, NULL, FALSE),
    ('gror', 2, 1, 2, FALSE, 1, NULL, FALSE),
    ('gror', 2, 1, 2, TRUE, 2, NULL, FALSE),
    ('gror', 2, 1, 2, FALSE, 3, NULL, FALSE),
    ('gror', 2, 1, 2, FALSE, 4, NULL, FALSE),
    ('gror', 2, 1, 3, FALSE, 1, NULL, FALSE),
    ('gror', 2, 1, 3, TRUE, 2, NULL, FALSE),
    ('gror', 2, 1, 3, FALSE, 3, NULL, FALSE),
    ('gror', 2, 1, 3, FALSE, 4, NULL, FALSE),
    ('gror', 2, 1, 4, FALSE, 1, NULL, FALSE),
    ('gror', 2, 1, 4, TRUE, 2, NULL, FALSE),
    ('gror', 2, 1, 4, FALSE, 3, NULL, FALSE),
    ('gror', 2, 1, 4, FALSE, 4, NULL, FALSE),
    ('gror', 2, 1, 5, FALSE, 1, NULL, FALSE),
    ('gror', 2, 1, 5, TRUE, 2, NULL, FALSE),
    ('gror', 2, 1, 5, FALSE, 3, NULL, FALSE),
    ('gror', 2, 1, 5, FALSE, 4, NULL, FALSE),

    ('gror', 2, 2, 1, FALSE, 1, NULL, FALSE),
    ('gror', 2, 2, 1, TRUE, 2, NULL, FALSE),
    ('gror', 2, 2, 1, FALSE, 3, NULL, FALSE),
    ('gror', 2, 2, 1, FALSE, 4, NULL, FALSE),
    ('gror', 2, 2, 2, FALSE, 1, NULL, FALSE),
    ('gror', 2, 2, 2, TRUE, 2, NULL, FALSE),
    ('gror', 2, 2, 2, FALSE, 3, NULL, FALSE),
    ('gror', 2, 2, 2, FALSE, 4, NULL, FALSE),
    ('gror', 2, 2, 3, FALSE, 1, NULL, FALSE),
    ('gror', 2, 2, 3, TRUE, 2, NULL, FALSE),
    ('gror', 2, 2, 3, FALSE, 3, NULL, FALSE),
    ('gror', 2, 2, 3, FALSE, 4, NULL, FALSE),
    ('gror', 2, 2, 4, FALSE, 1, NULL, FALSE),
    ('gror', 2, 2, 4, TRUE, 2, NULL, FALSE),
    ('gror', 2, 2, 4, FALSE, 3, NULL, FALSE),
    ('gror', 2, 2, 4, FALSE, 4, NULL, FALSE),
    ('gror', 2, 2, 5, FALSE, 1, NULL, FALSE),
    ('gror', 2, 2, 5, TRUE, 2, NULL, FALSE),
    ('gror', 2, 2, 5, FALSE, 3, NULL, FALSE),
    ('gror', 2, 2, 5, FALSE, 4, NULL, FALSE),

    ('gror', 2, 3, 1, FALSE, 1, NULL, FALSE),
    ('gror', 2, 3, 1, TRUE, 2, NULL, FALSE),
    ('gror', 2, 3, 1, FALSE, 3, NULL, FALSE),
    ('gror', 2, 3, 1, FALSE, 4, NULL, FALSE),
    ('gror', 2, 3, 2, FALSE, 1, NULL, FALSE),
    ('gror', 2, 3, 2, TRUE, 2, NULL, FALSE),
    ('gror', 2, 3, 2, FALSE, 3, NULL, FALSE),
    ('gror', 2, 3, 2, FALSE, 4, NULL, FALSE),
    ('gror', 2, 3, 3, FALSE, 1, NULL, FALSE),
    ('gror', 2, 3, 3, TRUE, 2, NULL, FALSE),
    ('gror', 2, 3, 3, FALSE, 3, NULL, FALSE),
    ('gror', 2, 3, 3, FALSE, 4, NULL, FALSE),
    ('gror', 2, 3, 4, FALSE, 1, NULL, FALSE),
    ('gror', 2, 3, 4, TRUE, 2, NULL, FALSE),
    ('gror', 2, 3, 4, FALSE, 3, NULL, FALSE),
    ('gror', 2, 3, 4, FALSE, 4, NULL, FALSE),
    ('gror', 2, 3, 5, FALSE, 1, NULL, FALSE),
    ('gror', 2, 3, 5, TRUE, 2, NULL, FALSE),
    ('gror', 2, 3, 5, FALSE, 3, NULL, FALSE),
    ('gror', 2, 3, 5, FALSE, 4, NULL, FALSE),

    ('lsry', 3, 1, 1, TRUE, 1, NULL, FALSE),
    ('lsry', 3, 1, 1, FALSE, 2, NULL, FALSE),
    ('lsry', 3, 1, 1, FALSE, 3, NULL, FALSE),
    ('lsry', 3, 1, 1, FALSE, 5, NULL, FALSE),
    ('lsry', 3, 1, 2, TRUE, 1, NULL, FALSE),
    ('lsry', 3, 1, 2, FALSE, 2, NULL, FALSE),
    ('lsry', 3, 1, 2, FALSE, 3, NULL, FALSE),
    ('lsry', 3, 1, 2, FALSE, 5, NULL, FALSE),
    ('lsry', 3, 1, 3, TRUE, 1, NULL, FALSE),
    ('lsry', 3, 1, 3, FALSE, 2, NULL, FALSE),
    ('lsry', 3, 1, 3, FALSE, 3, NULL, FALSE),
    ('lsry', 3, 1, 3, FALSE, 5, NULL, FALSE),
    ('lsry', 3, 1, 4, TRUE, 1, NULL, FALSE),
    ('lsry', 3, 1, 4, FALSE, 2, NULL, FALSE),
    ('lsry', 3, 1, 4, FALSE, 3, NULL, FALSE),
    ('lsry', 3, 1, 4, FALSE, 5, NULL, FALSE),
    ('lsry', 3, 1, 5, TRUE, 1, NULL, FALSE),
    ('lsry', 3, 1, 5, FALSE, 2, NULL, FALSE),
    ('lsry', 3, 1, 5, FALSE, 3, NULL, FALSE),
    ('lsry', 3, 1, 5, FALSE, 5, NULL, FALSE),

    ('lsry', 3, 2, 1, FALSE, 1, NULL, FALSE),
    ('lsry', 3, 2, 1, TRUE, 2, NULL, FALSE),
    ('lsry', 3, 2, 1, FALSE, 4, NULL, FALSE),
    ('lsry', 3, 2, 2, FALSE, 1, NULL, FALSE),
    ('lsry', 3, 2, 2, TRUE, 2, NULL, FALSE),
    ('lsry', 3, 2, 2, FALSE, 4, NULL, FALSE),
    ('lsry', 3, 2, 3, FALSE, 1, NULL, FALSE),
    ('lsry', 3, 2, 3, TRUE, 2, NULL, FALSE),
    ('lsry', 3, 2, 3, FALSE, 4, NULL, FALSE),
    ('lsry', 3, 2, 4, FALSE, 1, NULL, FALSE),
    ('lsry', 3, 2, 4, TRUE, 2, NULL, FALSE),
    ('lsry', 3, 2, 4, FALSE, 4, NULL, FALSE),
    ('lsry', 3, 2, 5, FALSE, 1, NULL, FALSE),
    ('lsry', 3, 2, 5, TRUE, 2, NULL, FALSE),
    ('lsry', 3, 2, 5, FALSE, 4, NULL, FALSE),

    ('lsry', 4, 1, 1, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 1, 1, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 1, 1, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 1, 1, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 1, 2, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 1, 2, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 1, 2, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 1, 2, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 1, 3, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 1, 3, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 1, 3, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 1, 3, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 1, 4, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 1, 4, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 1, 4, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 1, 4, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 1, 5, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 1, 5, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 1, 5, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 1, 5, TRUE, 4, NULL, FALSE),

    ('lsry', 4, 2, 1, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 2, 1, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 2, 1, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 2, 1, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 2, 2, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 2, 2, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 2, 2, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 2, 2, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 2, 3, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 2, 3, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 2, 3, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 2, 3, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 2, 4, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 2, 4, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 2, 4, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 2, 4, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 2, 5, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 2, 5, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 2, 5, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 2, 5, TRUE, 4, NULL, FALSE),

    ('cloc', 5, 1, 1, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 1, 1, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 1, 1, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 1, 1, TRUE, 4, NULL, FALSE),
    ('cloc', 5, 1, 2, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 1, 2, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 1, 2, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 1, 2, TRUE, 4, NULL, FALSE),
    ('cloc', 5, 1, 3, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 1, 3, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 1, 3, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 1, 3, TRUE, 4, NULL, FALSE),
    ('cloc', 5, 1, 4, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 1, 4, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 1, 4, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 1, 4, TRUE, 4, NULL, FALSE),
    ('cloc', 5, 1, 5, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 1, 5, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 1, 5, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 1, 5, TRUE, 4, NULL, FALSE),

    ('cloc', 5, 2, 1, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 2, 1, TRUE, 2, NULL, FALSE),
    ('cloc', 5, 2, 1, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 2, 1, FALSE, 4, NULL, FALSE),
    ('cloc', 5, 2, 1, FALSE, 5, NULL, FALSE),
    ('cloc', 5, 2, 2, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 2, 2, TRUE, 2, NULL, FALSE),
    ('cloc', 5, 2, 2, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 2, 2, FALSE, 4, NULL, FALSE),
    ('cloc', 5, 2, 2, FALSE, 5, NULL, FALSE),
    ('cloc', 5, 2, 3, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 2, 3, TRUE, 2, NULL, FALSE),
    ('cloc', 5, 2, 3, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 2, 3, FALSE, 4, NULL, FALSE),
    ('cloc', 5, 2, 3, FALSE, 5, NULL, FALSE),
    ('cloc', 5, 2, 4, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 2, 4, TRUE, 2, NULL, FALSE),
    ('cloc', 5, 2, 4, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 2, 4, FALSE, 4, NULL, FALSE),
    ('cloc', 5, 2, 4, FALSE, 5, NULL, FALSE),
    ('cloc', 5, 2, 5, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 2, 5, TRUE, 2, NULL, FALSE),
    ('cloc', 5, 2, 5, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 2, 5, FALSE, 4, NULL, FALSE),
    ('cloc', 5, 2, 5, FALSE, 5, NULL, FALSE),

    ('cloc', 5, 3, 1, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 3, 1, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 3, 1, TRUE, 3, NULL, FALSE),
    ('cloc', 5, 3, 1, FALSE, 4, NULL, FALSE),
    ('cloc', 5, 3, 1, FALSE, 5, NULL, FALSE),
    ('cloc', 5, 3, 2, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 3, 2, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 3, 2, TRUE, 3, NULL, FALSE),
    ('cloc', 5, 3, 2, FALSE, 4, NULL, FALSE),
    ('cloc', 5, 3, 2, FALSE, 5, NULL, FALSE),
    ('cloc', 5, 3, 3, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 3, 3, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 3, 3, TRUE, 3, NULL, FALSE),
    ('cloc', 5, 3, 3, FALSE, 4, NULL, FALSE),
    ('cloc', 5, 3, 3, FALSE, 5, NULL, FALSE),
    ('cloc', 5, 3, 4, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 3, 4, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 3, 4, TRUE, 3, NULL, FALSE),
    ('cloc', 5, 3, 4, FALSE, 4, NULL, FALSE),
    ('cloc', 5, 3, 4, FALSE, 5, NULL, FALSE),
    ('cloc', 5, 3, 5, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 3, 5, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 3, 5, TRUE, 3, NULL, FALSE),
    ('cloc', 5, 3, 5, FALSE, 4, NULL, FALSE),
    ('cloc', 5, 3, 5, FALSE, 5, NULL, FALSE),

    ('cloc', 5, 4, 1, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 4, 1, TRUE, 6, NULL, FALSE),
    ('cloc', 5, 4, 1, FALSE, 7, NULL, FALSE),
    ('cloc', 5, 4, 2, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 4, 2, TRUE, 6, NULL, FALSE),
    ('cloc', 5, 4, 2, FALSE, 7, NULL, FALSE),
    ('cloc', 5, 4, 3, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 4, 3, TRUE, 6, NULL, FALSE),
    ('cloc', 5, 4, 3, FALSE, 7, NULL, FALSE),
    ('cloc', 5, 4, 4, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 4, 4, TRUE, 6, NULL, FALSE),
    ('cloc', 5, 4, 4, FALSE, 7, NULL, FALSE),
    ('cloc', 5, 4, 5, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 4, 5, TRUE, 6, NULL, FALSE),
    ('cloc', 5, 4, 5, FALSE, 7, NULL, FALSE),

    ('shnb', 6, 1, 1, FALSE, 1, NULL, FALSE),
    ('shnb', 6, 1, 1, FALSE, 2, NULL, FALSE),
    ('shnb', 6, 1, 1, TRUE, 3, NULL, FALSE),
    ('shnb', 6, 1, 1, FALSE, 4, NULL, FALSE),
    ('shnb', 6, 1, 2, FALSE, 1, NULL, FALSE),
    ('shnb', 6, 1, 2, FALSE, 2, NULL, FALSE),
    ('shnb', 6, 1, 2, TRUE, 3, NULL, FALSE),
    ('shnb', 6, 1, 2, FALSE, 4, NULL, FALSE),
    ('shnb', 6, 1, 3, FALSE, 1, NULL, FALSE),
    ('shnb', 6, 1, 3, FALSE, 2, NULL, FALSE),
    ('shnb', 6, 1, 3, TRUE, 3, NULL, FALSE),
    ('shnb', 6, 1, 3, FALSE, 4, NULL, FALSE),
    ('shnb', 6, 1, 4, FALSE, 1, NULL, FALSE),
    ('shnb', 6, 1, 4, FALSE, 2, NULL, FALSE),
    ('shnb', 6, 1, 4, TRUE, 3, NULL, FALSE),
    ('shnb', 6, 1, 4, FALSE, 4, NULL, FALSE),
    ('shnb', 6, 1, 5, FALSE, 1, NULL, FALSE),
    ('shnb', 6, 1, 5, FALSE, 2, NULL, FALSE),
    ('shnb', 6, 1, 5, TRUE, 3, NULL, FALSE),
    ('shnb', 6, 1, 5, FALSE, 4, NULL, FALSE),

    ('akgn', 7, 1, 1, TRUE, 1, NULL, FALSE),
    ('akgn', 7, 1, 1, FALSE, 2, NULL, FALSE),
    ('akgn', 7, 1, 1, FALSE, 3, NULL, FALSE),
    ('akgn', 7, 1, 1, FALSE, 4, NULL, FALSE),
    ('akgn', 7, 1, 2, TRUE, 1, NULL, FALSE),
    ('akgn', 7, 1, 2, FALSE, 2, NULL, FALSE),
    ('akgn', 7, 1, 2, FALSE, 3, NULL, FALSE),
    ('akgn', 7, 1, 2, FALSE, 4, NULL, FALSE),
    ('akgn', 7, 1, 3, TRUE, 1, NULL, FALSE),
    ('akgn', 7, 1, 3, FALSE, 2, NULL, FALSE),
    ('akgn', 7, 1, 3, FALSE, 3, NULL, FALSE),
    ('akgn', 7, 1, 3, FALSE, 4, NULL, FALSE),
    ('akgn', 7, 1, 4, TRUE, 1, NULL, FALSE),
    ('akgn', 7, 1, 4, FALSE, 2, NULL, FALSE),
    ('akgn', 7, 1, 4, FALSE, 3, NULL, FALSE),
    ('akgn', 7, 1, 4, FALSE, 4, NULL, FALSE),
    ('akgn', 7, 1, 5, TRUE, 1, NULL, FALSE),
    ('akgn', 7, 1, 5, FALSE, 2, NULL, FALSE),
    ('akgn', 7, 1, 5, FALSE, 3, NULL, FALSE),
    ('akgn', 7, 1, 5, FALSE, 4, NULL, FALSE),

    ('cloc', 5, 5, 1, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 5, 1, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 5, 1, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 5, 1, TRUE, 4, NULL, FALSE),
    ('cloc', 5, 5, 2, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 5, 2, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 5, 2, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 5, 2, TRUE, 4, NULL, FALSE),
    ('cloc', 5, 5, 3, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 5, 3, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 5, 3, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 5, 3, TRUE, 4, NULL, FALSE),
    ('cloc', 5, 5, 4, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 5, 4, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 5, 4, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 5, 4, TRUE, 4, NULL, FALSE),
    ('cloc', 5, 5, 5, FALSE, 1, NULL, FALSE),
    ('cloc', 5, 5, 5, FALSE, 2, NULL, FALSE),
    ('cloc', 5, 5, 5, FALSE, 3, NULL, FALSE),
    ('cloc', 5, 5, 5, TRUE, 4, NULL, FALSE),

    ('shnb', 6, 2, 1, FALSE, 1, NULL, FALSE),
    ('shnb', 6, 2, 1, FALSE, 2, NULL, FALSE),
    ('shnb', 6, 2, 1, TRUE, 3, NULL, FALSE),
    ('shnb', 6, 2, 1, FALSE, 4, NULL, FALSE),
    ('shnb', 6, 2, 2, FALSE, 1, NULL, FALSE),
    ('shnb', 6, 2, 2, FALSE, 2, NULL, FALSE),
    ('shnb', 6, 2, 2, TRUE, 3, NULL, FALSE),
    ('shnb', 6, 2, 2, FALSE, 4, NULL, FALSE),
    ('shnb', 6, 2, 3, FALSE, 1, NULL, FALSE),
    ('shnb', 6, 2, 3, FALSE, 2, NULL, FALSE),
    ('shnb', 6, 2, 3, TRUE, 3, NULL, FALSE),
    ('shnb', 6, 2, 3, FALSE, 4, NULL, FALSE),
    ('shnb', 6, 2, 4, FALSE, 1, NULL, FALSE),
    ('shnb', 6, 2, 4, FALSE, 2, NULL, FALSE),
    ('shnb', 6, 2, 4, TRUE, 3, NULL, FALSE),
    ('shnb', 6, 2, 4, FALSE, 4, NULL, FALSE),
    ('shnb', 6, 2, 5, FALSE, 1, NULL, FALSE),
    ('shnb', 6, 2, 5, FALSE, 2, NULL, FALSE),
    ('shnb', 6, 2, 5, TRUE, 3, NULL, FALSE),
    ('shnb', 6, 2, 5, FALSE, 4, NULL, FALSE),

    ('gror', 2, 4, 1, FALSE, 1, NULL, FALSE),
    ('gror', 2, 4, 1, TRUE, 2, NULL, FALSE),
    ('gror', 2, 4, 1, FALSE, 3, NULL, FALSE),
    ('gror', 2, 4, 1, FALSE, 4, NULL, FALSE),
    ('gror', 2, 4, 2, FALSE, 1, NULL, FALSE),
    ('gror', 2, 4, 2, TRUE, 2, NULL, FALSE),
    ('gror', 2, 4, 2, FALSE, 3, NULL, FALSE),
    ('gror', 2, 4, 2, FALSE, 4, NULL, FALSE),
    ('gror', 2, 4, 3, FALSE, 1, NULL, FALSE),
    ('gror', 2, 4, 3, TRUE, 2, NULL, FALSE),
    ('gror', 2, 4, 3, FALSE, 3, NULL, FALSE),
    ('gror', 2, 4, 3, FALSE, 4, NULL, FALSE),
    ('gror', 2, 4, 4, FALSE, 1, NULL, FALSE),
    ('gror', 2, 4, 4, TRUE, 2, NULL, FALSE),
    ('gror', 2, 4, 4, FALSE, 3, NULL, FALSE),
    ('gror', 2, 4, 4, FALSE, 4, NULL, FALSE),
    ('gror', 2, 4, 5, FALSE, 1, NULL, FALSE),
    ('gror', 2, 4, 5, TRUE, 2, NULL, FALSE),
    ('gror', 2, 4, 5, FALSE, 3, NULL, FALSE),
    ('gror', 2, 4, 5, FALSE, 4, NULL, FALSE),

    ('nvnv', 8, 1, 1, FALSE, 1, NULL, FALSE),
    ('nvnv', 8, 1, 1, FALSE, 2, NULL, FALSE),
    ('nvnv', 8, 1, 1, FALSE, 3, NULL, FALSE),

    ('nvnv', 8, 2, 1, FALSE, 1, NULL, FALSE),
    ('nvnv', 8, 2, 1, FALSE, 2, NULL, FALSE),
    ('nvnv', 8, 2, 1, FALSE, 3, NULL, FALSE),

    ('sww2', 9, 1, 1, TRUE, 1, NULL, FALSE),
    ('sww2', 9, 1, 1, FALSE, 2, NULL, FALSE),
    ('sww2', 9, 1, 1, FALSE, 3, NULL, FALSE),
    ('sww2', 9, 1, 1, FALSE, 4, NULL, FALSE),
    ('sww2', 9, 1, 2, TRUE, 1, NULL, FALSE),
    ('sww2', 9, 1, 2, FALSE, 2, NULL, FALSE),
    ('sww2', 9, 1, 2, FALSE, 3, NULL, FALSE),
    ('sww2', 9, 1, 2, FALSE, 4, NULL, FALSE),
    ('sww2', 9, 1, 3, TRUE, 1, NULL, FALSE),
    ('sww2', 9, 1, 3, FALSE, 2, NULL, FALSE),
    ('sww2', 9, 1, 3, FALSE, 3, NULL, FALSE),
    ('sww2', 9, 1, 3, FALSE, 4, NULL, FALSE),
    ('sww2', 9, 1, 4, TRUE, 1, NULL, FALSE),
    ('sww2', 9, 1, 4, FALSE, 2, NULL, FALSE),
    ('sww2', 9, 1, 4, FALSE, 3, NULL, FALSE),
    ('sww2', 9, 1, 4, FALSE, 4, NULL, FALSE),
    ('sww2', 9, 1, 5, TRUE, 1, NULL, FALSE),
    ('sww2', 9, 1, 5, FALSE, 2, NULL, FALSE),
    ('sww2', 9, 1, 5, FALSE, 3, NULL, FALSE),
    ('sww2', 9, 1, 5, FALSE, 4, NULL, FALSE),

    ('cloc', 10, 1, 1, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 1, 1, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 1, 1, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 1, 1, FALSE, 4, NULL, FALSE),
    ('cloc', 10, 1, 2, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 1, 2, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 1, 2, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 1, 2, FALSE, 4, NULL, FALSE),
    ('cloc', 10, 1, 3, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 1, 3, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 1, 3, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 1, 3, FALSE, 4, NULL, FALSE),
    ('cloc', 10, 1, 4, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 1, 4, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 1, 4, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 1, 4, FALSE, 4, NULL, FALSE),
    ('cloc', 10, 1, 5, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 1, 5, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 1, 5, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 1, 5, FALSE, 4, NULL, FALSE),

    ('gror', 2, 5, 1, FALSE, 1, NULL, FALSE),
    ('gror', 2, 5, 1, TRUE, 2, NULL, FALSE),
    ('gror', 2, 5, 1, FALSE, 3, NULL, FALSE),
    ('gror', 2, 5, 1, FALSE, 4, NULL, FALSE),
    ('gror', 2, 5, 2, FALSE, 1, NULL, FALSE),
    ('gror', 2, 5, 2, TRUE, 2, NULL, FALSE),
    ('gror', 2, 5, 2, FALSE, 3, NULL, FALSE),
    ('gror', 2, 5, 2, FALSE, 4, NULL, FALSE),
    ('gror', 2, 5, 3, FALSE, 1, NULL, FALSE),
    ('gror', 2, 5, 3, TRUE, 2, NULL, FALSE),
    ('gror', 2, 5, 3, FALSE, 3, NULL, FALSE),
    ('gror', 2, 5, 3, FALSE, 4, NULL, FALSE),
    ('gror', 2, 5, 4, FALSE, 1, NULL, FALSE),
    ('gror', 2, 5, 4, TRUE, 2, NULL, FALSE),
    ('gror', 2, 5, 4, FALSE, 3, NULL, FALSE),
    ('gror', 2, 5, 4, FALSE, 4, NULL, FALSE),
    ('gror', 2, 5, 5, FALSE, 1, NULL, FALSE),
    ('gror', 2, 5, 5, TRUE, 2, NULL, FALSE),
    ('gror', 2, 5, 5, FALSE, 3, NULL, FALSE),
    ('gror', 2, 5, 5, FALSE, 4, NULL, FALSE),

    ('lsry', 4, 4, 1, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 4, 1, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 4, 1, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 4, 1, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 4, 2, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 4, 2, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 4, 2, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 4, 2, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 4, 3, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 4, 3, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 4, 3, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 4, 3, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 4, 4, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 4, 4, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 4, 4, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 4, 4, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 4, 5, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 4, 5, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 4, 5, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 4, 5, TRUE, 4, NULL, FALSE),

    ('gror', 2, 6, 1, FALSE, 1, NULL, FALSE),
    ('gror', 2, 6, 1, TRUE, 2, NULL, FALSE),
    ('gror', 2, 6, 1, FALSE, 3, NULL, FALSE),
    ('gror', 2, 6, 1, FALSE, 4, NULL, FALSE),
    ('gror', 2, 6, 2, FALSE, 1, NULL, FALSE),
    ('gror', 2, 6, 2, TRUE, 2, NULL, FALSE),
    ('gror', 2, 6, 2, FALSE, 3, NULL, FALSE),
    ('gror', 2, 6, 2, FALSE, 4, NULL, FALSE),
    ('gror', 2, 6, 3, FALSE, 1, NULL, FALSE),
    ('gror', 2, 6, 3, TRUE, 2, NULL, FALSE),
    ('gror', 2, 6, 3, FALSE, 3, NULL, FALSE),
    ('gror', 2, 6, 3, FALSE, 4, NULL, FALSE),
    ('gror', 2, 6, 4, FALSE, 1, NULL, FALSE),
    ('gror', 2, 6, 4, TRUE, 2, NULL, FALSE),
    ('gror', 2, 6, 4, FALSE, 3, NULL, FALSE),
    ('gror', 2, 6, 4, FALSE, 4, NULL, FALSE),
    ('gror', 2, 6, 5, FALSE, 1, NULL, FALSE),
    ('gror', 2, 6, 5, TRUE, 2, NULL, FALSE),
    ('gror', 2, 6, 5, FALSE, 3, NULL, FALSE),
    ('gror', 2, 6, 5, FALSE, 4, NULL, FALSE),

    ('cloc', 10, 2, 1, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 2, 1, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 2, 1, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 2, 1, FALSE, 4, NULL, FALSE),
    ('cloc', 10, 2, 2, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 2, 2, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 2, 2, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 2, 2, FALSE, 4, NULL, FALSE),
    ('cloc', 10, 2, 3, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 2, 3, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 2, 3, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 2, 3, FALSE, 4, NULL, FALSE),
    ('cloc', 10, 2, 4, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 2, 4, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 2, 4, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 2, 4, FALSE, 4, NULL, FALSE),
    ('cloc', 10, 2, 5, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 2, 5, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 2, 5, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 2, 5, FALSE, 4, NULL, FALSE),

    ('cloc', 10, 3, 1, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 3, 1, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 3, 1, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 3, 1, FALSE, 4, NULL, FALSE),
    ('cloc', 10, 3, 2, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 3, 2, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 3, 2, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 3, 2, FALSE, 4, NULL, FALSE),
    ('cloc', 10, 3, 3, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 3, 3, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 3, 3, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 3, 3, FALSE, 4, NULL, FALSE),
    ('cloc', 10, 3, 4, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 3, 4, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 3, 4, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 3, 4, FALSE, 4, NULL, FALSE),
    ('cloc', 10, 3, 5, FALSE, 1, NULL, FALSE),
    ('cloc', 10, 3, 5, FALSE, 2, NULL, FALSE),
    ('cloc', 10, 3, 5, TRUE, 3, NULL, FALSE),
    ('cloc', 10, 3, 5, FALSE, 4, NULL, FALSE),

    ('dlhr', 11, 1, 1, FALSE, 1, NULL, FALSE),
    ('dlhr', 11, 1, 1, FALSE, 2, NULL, FALSE),
    ('dlhr', 11, 1, 1, TRUE, 3, NULL, FALSE),
    ('dlhr', 11, 1, 1, FALSE, 4, NULL, FALSE),
    ('dlhr', 11, 1, 1, FALSE, 8, NULL, FALSE),
    ('dlhr', 11, 1, 2, FALSE, 1, NULL, FALSE),
    ('dlhr', 11, 1, 2, FALSE, 2, NULL, FALSE),
    ('dlhr', 11, 1, 2, TRUE, 3, NULL, FALSE),
    ('dlhr', 11, 1, 2, FALSE, 4, NULL, FALSE),
    ('dlhr', 11, 1, 2, FALSE, 8, NULL, FALSE),
    ('dlhr', 11, 1, 3, FALSE, 1, NULL, FALSE),
    ('dlhr', 11, 1, 3, FALSE, 2, NULL, FALSE),
    ('dlhr', 11, 1, 3, TRUE, 3, NULL, FALSE),
    ('dlhr', 11, 1, 3, FALSE, 4, NULL, FALSE),
    ('dlhr', 11, 1, 3, FALSE, 8, NULL, FALSE),
    ('dlhr', 11, 1, 4, FALSE, 1, NULL, FALSE),
    ('dlhr', 11, 1, 4, FALSE, 2, NULL, FALSE),
    ('dlhr', 11, 1, 4, TRUE, 3, NULL, FALSE),
    ('dlhr', 11, 1, 4, FALSE, 4, NULL, FALSE),
    ('dlhr', 11, 1, 4, FALSE, 8, NULL, FALSE),
    ('dlhr', 11, 1, 5, FALSE, 1, NULL, FALSE),
    ('dlhr', 11, 1, 5, FALSE, 2, NULL, FALSE),
    ('dlhr', 11, 1, 5, TRUE, 3, NULL, FALSE),
    ('dlhr', 11, 1, 5, FALSE, 4, NULL, FALSE),
    ('dlhr', 11, 1, 5, FALSE, 8, NULL, FALSE),

    ('lsry', 4, 5, 1, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 5, 1, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 5, 1, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 5, 1, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 5, 2, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 5, 2, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 5, 2, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 5, 2, TRUE, 4, NULL, FALSE),
    ('lsry', 4, 5, 3, FALSE, 1, NULL, FALSE),
    ('lsry', 4, 5, 3, FALSE, 2, NULL, FALSE),
    ('lsry', 4, 5, 3, FALSE, 3, NULL, FALSE),
    ('lsry', 4, 5, 3, TRUE, 4, NULL, FALSE)

;