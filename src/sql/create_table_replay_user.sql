DROP TABLE IF EXISTS `replay_user`;
CREATE TABLE IF NOT EXISTS `replay_user` (
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
    (1, 'evi', 'evi', '常に酔っ払いらしい？卓の維持管理を一手に担う', '本セッションのGMを担当', 'FF9800', '', FALSE),
    (2, 'naki', 'naki', '最近うっかり属性が露呈してきた。学園モノスキー', '本セッションのGMを担当', '673AB7', '', FALSE),
    (3, 'kaeru', 'kaeru', '正義とアウトローと連打と低身長をこよなく愛す？毒シーフっぽいのもスキらしい','本セッションのGMを担当', '4CAF50', '', FALSE),
    (4, 'aneko', 'aneko', '天下一ヒロイン武道会に出たいとかなんとか。とにかくネコとセットで出てくる','本セッションのGMを担当', '2196F3', '', FALSE),
    (5, 'jem', 'jem', 'ふぁいなるでふぁんたじーな世界から。純レギュラーメンバー','本セッションのGMを担当', 'FF4081', '', FALSE),
    (6, 'sukamomo', 'sukamomo', 'コメントください','本セッションのGMを担当', '9C27B0', '', FALSE),
    (7, 'xino', 'xino', 'コメントください','本セッションのGMを担当', '9E9E9E', '', FALSE)
;