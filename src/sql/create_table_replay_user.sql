-- リプレイのユーザーテーブル
DROP TABLE `replay_user`;
CREATE TABLE `replay_user` (
    id         BIGINT NOT NULL PRIMARY KEY,
    class      TEXT,
    name       TEXT,
    pl_comment TEXT,
    gm_comment TEXT,
    color_hex  TEXT,
    memo       TEXT,
    is_deleted BOOL DEFAULT FALSE
);
INSERT INTO replay_user (id, class, name, pl_comment, gm_comment, color_hex, memo, is_deleted) VALUES
    (1, 'evi', 'evi', '常に酔っ払いらしい？', '本セッションのGMを担当', 'FF9800', '', FALSE),
    (2, 'naki', 'naki', '最近うっかり属性が露呈してきた', '本セッションのGMを担当', '673AB7', '', FALSE),
    (3, 'kaeru', 'kaeru', '正義とアウトローと連打と低身長をこよなく愛す','本セッションのGMを担当', '4CAF50', '', FALSE),
    (4, 'aneko', 'aneko', '天下一ヒロイン武道会に出たいとかなんとか','本セッションのGMを担当', '2196F3', '', FALSE),
    (5, 'jem', 'jem', 'NO COMMENT','本セッションのGMを担当', 'FF4081', '', FALSE);