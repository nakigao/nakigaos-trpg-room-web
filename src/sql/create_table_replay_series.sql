DROP TABLE IF EXISTS `replay_series`;
CREATE TABLE IF NOT EXISTS `replay_series` (
    id              BIGINT NOT NULL PRIMARY KEY,
    rule_unique_id  TEXT,
    is_campaign     BOOL DEFAULT FALSE,
    sequence_number INT  DEFAULT 1,
    name            TEXT,
    is_deleted      BOOL DEFAULT FALSE
);
INSERT INTO replay_series (id, rule_unique_id, is_campaign, sequence_number, name, is_deleted) VALUES
    (1, 'gror', FALSE, 1, '単発', FALSE),
    (2, 'gror', TRUE, 1, 'ゼロ特学園生活！', FALSE),
    (3, 'lsry', FALSE, 1, '単発', FALSE),
    (4, 'lsry', TRUE, 1, 'アネコのロストロイヤル', FALSE),
    (5, 'cloc', FALSE, 1, '単発', FALSE),
    (6, 'shnb', FALSE, 1, '単発', FALSE),
    (7, 'akgn', FALSE, 1, '単発', FALSE)
;
