-- リプレイのヘッダ情報
DROP VIEW IF EXISTS `v_replay`;
CREATE VIEW v_replay
AS
    SELECT
        replay_rule.id                 AS rule_id,
        replay_rule.unique_id          AS rule_unique_id,
        replay_series.id               AS series_id,
        replay_series.sequence_number  AS series_sequence_number,
        replay_episode.id              AS episode_id,
        replay_episode.sequence_number AS episode_sequence_number,
        replay_episode.prefix          AS episode_prefix,
        replay_part.id                 AS part_id,
        replay_part.sequence_number    AS part_sequence_number,
        replay_rule.name               AS rule_name,
        replay_series.name             AS series_name,
        replay_episode.name            AS episode_name,
        replay_part.name               AS part_name
    FROM replay_part
        LEFT JOIN replay_episode ON replay_episode.id = replay_part.episode_id
        LEFT JOIN replay_series ON replay_series.id = replay_episode.series_id
        LEFT JOIN replay_rule ON replay_rule.unique_id = replay_series.rule_unique_id
    ORDER BY replay_rule.id, replay_series.id, replay_episode.sequence_number, replay_part.sequence_number ASC;