CREATE TABLE `sheet` (
  id                   BIGINT                              NOT NULL PRIMARY KEY AUTO_INCREMENT,
  password             VARCHAR(255),
  hash                 VARCHAR(255) UNIQUE,
  player_name          VARCHAR(255) DEFAULT "who are you?" NOT NULL,

  character_name       VARCHAR(255) DEFAULT "who are you?" NOT NULL,
  gender               VARCHAR(255)                                             DEFAULT "",
  age                  INT                                                      DEFAULT 0,

  like1                VARCHAR(255)                                             DEFAULT "",
  like2                VARCHAR(255)                                             DEFAULT "",
  like3                VARCHAR(255)                                             DEFAULT "",

  hate1                VARCHAR(255)                                             DEFAULT "",
  hate2                VARCHAR(255)                                             DEFAULT "",
  hate3                VARCHAR(255)                                             DEFAULT "",

  level                TINYINT DEFAULT 1                   NOT NULL,
  class                VARCHAR(255)                                             DEFAULT "",
  used_exp             INT                                                      DEFAULT 0,
  total_exp            INT                                                      DEFAULT 0,

  deposit              INT                                                      DEFAULT 0,

  intelligence         TINYINT                                                  DEFAULT 0,
  intelligence_i       TINYINT                                                  DEFAULT 0,
  intelligence_b       TINYINT                                                  DEFAULT 0,
  intelligence_g       TINYINT                                                  DEFAULT 0,
  charisma             TINYINT                                                  DEFAULT 0,
  charisma_i           TINYINT                                                  DEFAULT 0,
  charisma_b           TINYINT                                                  DEFAULT 0,
  charisma_g           TINYINT                                                  DEFAULT 0,
  survival             TINYINT                                                  DEFAULT 0,
  survival_i           TINYINT                                                  DEFAULT 0,
  survival_b           TINYINT                                                  DEFAULT 0,
  survival_g           TINYINT                                                  DEFAULT 0,
  strength             TINYINT                                                  DEFAULT 0,
  strength_i           TINYINT                                                  DEFAULT 0,
  strength_b           TINYINT                                                  DEFAULT 0,
  strength_g           TINYINT                                                  DEFAULT 0,

  hitpoint             TINYINT                                                  DEFAULT 0,
  hitpoint_i           TINYINT                                                  DEFAULT 0,
  hitpoint_b           TINYINT                                                  DEFAULT 0,
  capacity             TINYINT                                                  DEFAULT 0,
  capacity_i           TINYINT                                                  DEFAULT 0,
  capacity_b           TINYINT                                                  DEFAULT 0,
  dexterity            TINYINT                                                  DEFAULT 0,
  dexterity_i          TINYINT                                                  DEFAULT 0,
  dexterity_b          TINYINT                                                  DEFAULT 0,
  followers            TINYINT                                                  DEFAULT 0,
  followers_i          TINYINT                                                  DEFAULT 0,
  followers_b          TINYINT                                                  DEFAULT 0,

  skill1               VARCHAR(255)                                             DEFAULT "",
  skill1_description   TEXT                                                     DEFAULT "",
  skill2               VARCHAR(255)                                             DEFAULT "",
  skill2_description   TEXT                                                     DEFAULT "",
  skill3               VARCHAR(255)                                             DEFAULT "",
  skill3_description   TEXT                                                     DEFAULT "",
  skill4               VARCHAR(255)                                             DEFAULT "",
  skill4_description   TEXT                                                     DEFAULT "",
  skill5               VARCHAR(255)                                             DEFAULT "",
  skill5_description   TEXT                                                     DEFAULT "",
  skill6               VARCHAR(255)                                             DEFAULT "",
  skill6_description   TEXT                                                     DEFAULT "",
  skill7               VARCHAR(255)                                             DEFAULT "",
  skill7_description   TEXT                                                     DEFAULT "",
  skill8               VARCHAR(255)                                             DEFAULT "",
  skill8_description   TEXT                                                     DEFAULT "",
  skill9               VARCHAR(255)                                             DEFAULT "",
  skill9_description   TEXT                                                     DEFAULT "",
  skill10              VARCHAR(255)                                             DEFAULT "",
  skill10_description  TEXT                                                     DEFAULT "",
  skill11              VARCHAR(255)                                             DEFAULT "",
  skill11_description  TEXT                                                     DEFAULT "",
  skill12              VARCHAR(255)                                             DEFAULT "",
  skill12_description  TEXT                                                     DEFAULT "",

  item1                VARCHAR(255)                                             DEFAULT "",
  item1_count          TINYINT                                                  DEFAULT 0,
  item1_description    TEXT                                                     DEFAULT "",
  item2                VARCHAR(255)                                             DEFAULT "",
  item2_count          TINYINT                                                  DEFAULT 0,
  item2_description    TEXT                                                     DEFAULT "",
  item3                VARCHAR(255)                                             DEFAULT "",
  item3_count          TINYINT                                                  DEFAULT 0,
  item3_description    TEXT                                                     DEFAULT "",
  item4                VARCHAR(255)                                             DEFAULT "",
  item4_count          TINYINT                                                  DEFAULT 0,
  item4_description    TEXT                                                     DEFAULT "",
  item5                VARCHAR(255)                                             DEFAULT "",
  item5_count          TINYINT                                                  DEFAULT 0,
  item5_description    TEXT                                                     DEFAULT "",
  item6                VARCHAR(255)                                             DEFAULT "",
  item6_count          TINYINT                                                  DEFAULT 0,
  item6_description    TEXT                                                     DEFAULT "",

  material3            TINYINT                                                  DEFAULT 0,
  material4            TINYINT                                                  DEFAULT 0,
  material5            TINYINT                                                  DEFAULT 0,
  material6            TINYINT                                                  DEFAULT 0,
  material7            TINYINT                                                  DEFAULT 0,
  material8            TINYINT                                                  DEFAULT 0,
  material9            TINYINT                                                  DEFAULT 0,
  material10           TINYINT                                                  DEFAULT 0,
  material11           TINYINT                                                  DEFAULT 0,
  material12           TINYINT                                                  DEFAULT 0,

  feeling1_name        VARCHAR(255)                                             DEFAULT "",
  feeling1_loyalty     TINYINT                                                  DEFAULT 0,
  feeling1_friendship  TINYINT                                                  DEFAULT 0,
  feeling1_love        TINYINT                                                  DEFAULT 0,
  feeling1_rage        TINYINT                                                  DEFAULT 0,
  feeling1_distrust    TINYINT                                                  DEFAULT 0,
  feeling1_hostility   TINYINT                                                  DEFAULT 0,
  feeling2_name        VARCHAR(255)                                             DEFAULT "",
  feeling2_loyalty     TINYINT                                                  DEFAULT 0,
  feeling2_friendship  TINYINT                                                  DEFAULT 0,
  feeling2_love        TINYINT                                                  DEFAULT 0,
  feeling2_rage        TINYINT                                                  DEFAULT 0,
  feeling2_distrust    TINYINT                                                  DEFAULT 0,
  feeling2_hostility   TINYINT                                                  DEFAULT 0,
  feeling3_name        VARCHAR(255)                                             DEFAULT "",
  feeling3_loyalty     TINYINT                                                  DEFAULT 0,
  feeling3_friendship  TINYINT                                                  DEFAULT 0,
  feeling3_love        TINYINT                                                  DEFAULT 0,
  feeling3_rage        TINYINT                                                  DEFAULT 0,
  feeling3_distrust    TINYINT                                                  DEFAULT 0,
  feeling3_hostility   TINYINT                                                  DEFAULT 0,
  feeling4_name        VARCHAR(255)                                             DEFAULT "",
  feeling4_loyalty     TINYINT                                                  DEFAULT 0,
  feeling4_friendship  TINYINT                                                  DEFAULT 0,
  feeling4_love        TINYINT                                                  DEFAULT 0,
  feeling4_rage        TINYINT                                                  DEFAULT 0,
  feeling4_distrust    TINYINT                                                  DEFAULT 0,
  feeling4_hostility   TINYINT                                                  DEFAULT 0,
  feeling5_name        VARCHAR(255)                                             DEFAULT "",
  feeling5_loyalty     TINYINT                                                  DEFAULT 0,
  feeling5_friendship  TINYINT                                                  DEFAULT 0,
  feeling5_love        TINYINT                                                  DEFAULT 0,
  feeling5_rage        TINYINT                                                  DEFAULT 0,
  feeling5_distrust    TINYINT                                                  DEFAULT 0,
  feeling5_hostility   TINYINT                                                  DEFAULT 0,
  feeling6_name        VARCHAR(255)                                             DEFAULT "",
  feeling6_loyalty     TINYINT                                                  DEFAULT 0,
  feeling6_friendship  TINYINT                                                  DEFAULT 0,
  feeling6_love        TINYINT                                                  DEFAULT 0,
  feeling6_rage        TINYINT                                                  DEFAULT 0,
  feeling6_distrust    TINYINT                                                  DEFAULT 0,
  feeling6_hostility   TINYINT                                                  DEFAULT 0,
  feeling7_name        VARCHAR(255)                                             DEFAULT "",
  feeling7_loyalty     TINYINT                                                  DEFAULT 0,
  feeling7_friendship  TINYINT                                                  DEFAULT 0,
  feeling7_love        TINYINT                                                  DEFAULT 0,
  feeling7_rage        TINYINT                                                  DEFAULT 0,
  feeling7_distrust    TINYINT                                                  DEFAULT 0,
  feeling7_hostility   TINYINT                                                  DEFAULT 0,
  feeling8_name        VARCHAR(255)                                             DEFAULT "",
  feeling8_loyalty     TINYINT                                                  DEFAULT 0,
  feeling8_friendship  TINYINT                                                  DEFAULT 0,
  feeling8_love        TINYINT                                                  DEFAULT 0,
  feeling8_rage        TINYINT                                                  DEFAULT 0,
  feeling8_distrust    TINYINT                                                  DEFAULT 0,
  feeling8_hostility   TINYINT                                                  DEFAULT 0,
  feeling9_name        VARCHAR(255)                                             DEFAULT "",
  feeling9_loyalty     TINYINT                                                  DEFAULT 0,
  feeling9_friendship  TINYINT                                                  DEFAULT 0,
  feeling9_love        TINYINT                                                  DEFAULT 0,
  feeling9_rage        TINYINT                                                  DEFAULT 0,
  feeling9_distrust    TINYINT                                                  DEFAULT 0,
  feeling9_hostility   TINYINT                                                  DEFAULT 0,
  feeling10_name       VARCHAR(255)                                             DEFAULT "",
  feeling10_loyalty    TINYINT                                                  DEFAULT 0,
  feeling10_friendship TINYINT                                                  DEFAULT 0,
  feeling10_love       TINYINT                                                  DEFAULT 0,
  feeling10_rage       TINYINT                                                  DEFAULT 0,
  feeling10_distrust   TINYINT                                                  DEFAULT 0,
  feeling10_hostility  TINYINT                                                  DEFAULT 0,

  onesided1            VARCHAR(255)                                             DEFAULT "",
  onesided2            VARCHAR(255)                                             DEFAULT "",
  onesided3            VARCHAR(255)                                             DEFAULT "",
  sweetheart1          VARCHAR(255)                                             DEFAULT "",
  sweetheart2          VARCHAR(255)                                             DEFAULT "",
  sweetheart3          VARCHAR(255)                                             DEFAULT "",
  bestfriend1          VARCHAR(255)                                             DEFAULT "",
  bestfriend2          VARCHAR(255)                                             DEFAULT "",
  bestfriend3          VARCHAR(255)                                             DEFAULT "",
  monarch1             VARCHAR(255)                                             DEFAULT "",
  monarch2             VARCHAR(255)                                             DEFAULT "",
  monarch3             VARCHAR(255)                                             DEFAULT "",
  rival1               VARCHAR(255)                                             DEFAULT "",
  rival2               VARCHAR(255)                                             DEFAULT "",
  rival3               VARCHAR(255)                                             DEFAULT "",

  consumption          VARCHAR(255)                                             DEFAULT "",

  #   peace2               BOOL                                                     DEFAULT FALSE,
  #   peace3               BOOL                                                     DEFAULT FALSE,
  #   peace4               BOOL                                                     DEFAULT FALSE,
  #   peace5               BOOL                                                     DEFAULT FALSE,
  #   peace6               BOOL                                                     DEFAULT FALSE,
  #   peace7               BOOL                                                     DEFAULT FALSE,
  #   peace8               BOOL                                                     DEFAULT FALSE,
  #   peace9               BOOL                                                     DEFAULT FALSE,
  #   peace10              BOOL                                                     DEFAULT FALSE,
  #   peace11              BOOL                                                     DEFAULT FALSE,
  #   peace12              BOOL                                                     DEFAULT FALSE,
  #   peace13              BOOL                                                     DEFAULT FALSE,
  #   peace14              BOOL                                                     DEFAULT FALSE,
  #   peace15              BOOL                                                     DEFAULT FALSE,
  #   peace16              BOOL                                                     DEFAULT FALSE,
  #   peace17              BOOL                                                     DEFAULT FALSE,
  #   peace18              BOOL                                                     DEFAULT FALSE,
  #   peace19              BOOL                                                     DEFAULT FALSE,
  #   peace20              BOOL                                                     DEFAULT FALSE,
  #   peace21              BOOL                                                     DEFAULT FALSE,
  #   cure2                BOOL                                                     DEFAULT FALSE,
  #   cure3                BOOL                                                     DEFAULT FALSE,
  #   cure4                BOOL                                                     DEFAULT FALSE,
  #   cure5                BOOL                                                     DEFAULT FALSE,
  #   cure6                BOOL                                                     DEFAULT FALSE,
  #   cure7                BOOL                                                     DEFAULT FALSE,
  #   cure8                BOOL                                                     DEFAULT FALSE,
  #   cure9                BOOL                                                     DEFAULT FALSE,
  #   cure10               BOOL                                                     DEFAULT FALSE,
  #   cure11               BOOL                                                     DEFAULT FALSE,
  #   cure12               BOOL                                                     DEFAULT FALSE,
  #   cure13               BOOL                                                     DEFAULT FALSE,
  #   cure14               BOOL                                                     DEFAULT FALSE,
  #   cure15               BOOL                                                     DEFAULT FALSE,
  #   cure16               BOOL                                                     DEFAULT FALSE,
  #   cure17               BOOL                                                     DEFAULT FALSE,
  #   cure18               BOOL                                                     DEFAULT FALSE,
  #   cure19               BOOL                                                     DEFAULT FALSE,
  #   cure20               BOOL                                                     DEFAULT FALSE,
  #   cure21               BOOL                                                     DEFAULT FALSE,
  #   destroy2             BOOL                                                     DEFAULT FALSE,
  #   destroy3             BOOL                                                     DEFAULT FALSE,
  #   destroy4             BOOL                                                     DEFAULT FALSE,
  #   destroy5             BOOL                                                     DEFAULT FALSE,
  #   destroy6             BOOL                                                     DEFAULT FALSE,
  #   destroy7             BOOL                                                     DEFAULT FALSE,
  #   destroy8             BOOL                                                     DEFAULT FALSE,
  #   destroy9             BOOL                                                     DEFAULT FALSE,
  #   destroy10            BOOL                                                     DEFAULT FALSE,
  #   destroy11            BOOL                                                     DEFAULT FALSE,
  #   destroy12            BOOL                                                     DEFAULT FALSE,
  #   destroy13            BOOL                                                     DEFAULT FALSE,
  #   destroy14            BOOL                                                     DEFAULT FALSE,
  #   destroy15            BOOL                                                     DEFAULT FALSE,
  #   destroy16            BOOL                                                     DEFAULT FALSE,
  #   destroy17            BOOL                                                     DEFAULT FALSE,
  #   destroy18            BOOL                                                     DEFAULT FALSE,
  #   destroy19            BOOL                                                     DEFAULT FALSE,
  #   destroy20            BOOL                                                     DEFAULT FALSE,
  #   destroy21            BOOL                                                     DEFAULT FALSE,
  #   growth2              BOOL                                                     DEFAULT FALSE,
  #   growth3              BOOL                                                     DEFAULT FALSE,
  #   growth4              BOOL                                                     DEFAULT FALSE,
  #   growth5              BOOL                                                     DEFAULT FALSE,
  #   growth6              BOOL                                                     DEFAULT FALSE,
  #   growth7              BOOL                                                     DEFAULT FALSE,
  #   growth8              BOOL                                                     DEFAULT FALSE,
  #   growth9              BOOL                                                     DEFAULT FALSE,
  #   growth10             BOOL                                                     DEFAULT FALSE,
  #   growth11             BOOL                                                     DEFAULT FALSE,
  #   growth12             BOOL                                                     DEFAULT FALSE,
  #   growth13             BOOL                                                     DEFAULT FALSE,
  #   growth14             BOOL                                                     DEFAULT FALSE,
  #   growth15             BOOL                                                     DEFAULT FALSE,
  #   growth16             BOOL                                                     DEFAULT FALSE,
  #   growth17             BOOL                                                     DEFAULT FALSE,
  #   growth18             BOOL                                                     DEFAULT FALSE,
  #   growth19             BOOL                                                     DEFAULT FALSE,
  #   growth20             BOOL                                                     DEFAULT FALSE,
  #   growth21             BOOL                                                     DEFAULT FALSE,
  #   revolution2          BOOL                                                     DEFAULT FALSE,
  #   revolution3          BOOL                                                     DEFAULT FALSE,
  #   revolution4          BOOL                                                     DEFAULT FALSE,
  #   revolution5          BOOL                                                     DEFAULT FALSE,
  #   revolution6          BOOL                                                     DEFAULT FALSE,
  #   revolution7          BOOL                                                     DEFAULT FALSE,
  #   revolution8          BOOL                                                     DEFAULT FALSE,
  #   revolution9          BOOL                                                     DEFAULT FALSE,
  #   revolution10         BOOL                                                     DEFAULT FALSE,
  #   revolution11         BOOL                                                     DEFAULT FALSE,
  #   revolution12         BOOL                                                     DEFAULT FALSE,
  #   revolution13         BOOL                                                     DEFAULT FALSE,
  #   revolution14         BOOL                                                     DEFAULT FALSE,
  #   revolution15         BOOL                                                     DEFAULT FALSE,
  #   revolution16         BOOL                                                     DEFAULT FALSE,
  #   revolution17         BOOL                                                     DEFAULT FALSE,
  #   revolution18         BOOL                                                     DEFAULT FALSE,
  #   revolution19         BOOL                                                     DEFAULT FALSE,
  #   revolution20         BOOL                                                     DEFAULT FALSE,
  #   revolution21         BOOL                                                     DEFAULT FALSE,
  #   preserve2            BOOL                                                     DEFAULT FALSE,
  #   preserve3            BOOL                                                     DEFAULT FALSE,
  #   preserve4            BOOL                                                     DEFAULT FALSE,
  #   preserve5            BOOL                                                     DEFAULT FALSE,
  #   preserve6            BOOL                                                     DEFAULT FALSE,
  #   preserve7            BOOL                                                     DEFAULT FALSE,
  #   preserve8            BOOL                                                     DEFAULT FALSE,
  #   preserve9            BOOL                                                     DEFAULT FALSE,
  #   preserve10           BOOL                                                     DEFAULT FALSE,
  #   preserve11           BOOL                                                     DEFAULT FALSE,
  #   preserve12           BOOL                                                     DEFAULT FALSE,
  #   preserve13           BOOL                                                     DEFAULT FALSE,
  #   preserve14           BOOL                                                     DEFAULT FALSE,
  #   preserve15           BOOL                                                     DEFAULT FALSE,
  #   preserve16           BOOL                                                     DEFAULT FALSE,
  #   preserve17           BOOL                                                     DEFAULT FALSE,
  #   preserve18           BOOL                                                     DEFAULT FALSE,
  #   preserve19           BOOL                                                     DEFAULT FALSE,
  #   preserve20           BOOL                                                     DEFAULT FALSE,
  #   preserve21           BOOL                                                     DEFAULT FALSE,
  #   luxury2              BOOL                                                     DEFAULT FALSE,
  #   luxury3              BOOL                                                     DEFAULT FALSE,
  #   luxury4              BOOL                                                     DEFAULT FALSE,
  #   luxury5              BOOL                                                     DEFAULT FALSE,
  #   luxury6              BOOL                                                     DEFAULT FALSE,
  #   luxury7              BOOL                                                     DEFAULT FALSE,
  #   luxury8              BOOL                                                     DEFAULT FALSE,
  #   luxury9              BOOL                                                     DEFAULT FALSE,
  #   luxury10             BOOL                                                     DEFAULT FALSE,
  #   luxury11             BOOL                                                     DEFAULT FALSE,
  #   luxury12             BOOL                                                     DEFAULT FALSE,
  #   luxury13             BOOL                                                     DEFAULT FALSE,
  #   luxury14             BOOL                                                     DEFAULT FALSE,
  #   luxury15             BOOL                                                     DEFAULT FALSE,
  #   luxury16             BOOL                                                     DEFAULT FALSE,
  #   luxury17             BOOL                                                     DEFAULT FALSE,
  #   luxury18             BOOL                                                     DEFAULT FALSE,
  #   luxury19             BOOL                                                     DEFAULT FALSE,
  #   luxury20             BOOL                                                     DEFAULT FALSE,
  #   luxury21             BOOL                                                     DEFAULT FALSE,
  #   other2               BOOL                                                     DEFAULT FALSE,
  #   other3               BOOL                                                     DEFAULT FALSE,
  #   other4               BOOL                                                     DEFAULT FALSE,
  #   other5               BOOL                                                     DEFAULT FALSE,
  #   other6               BOOL                                                     DEFAULT FALSE,
  #   other7               BOOL                                                     DEFAULT FALSE,
  #   other8               BOOL                                                     DEFAULT FALSE,
  #   other9               BOOL                                                     DEFAULT FALSE,
  #   other10              BOOL                                                     DEFAULT FALSE,
  #   other11              BOOL                                                     DEFAULT FALSE,
  #   other12              BOOL                                                     DEFAULT FALSE,
  #   other13              BOOL                                                     DEFAULT FALSE,
  #   other14              BOOL                                                     DEFAULT FALSE,
  #   other15              BOOL                                                     DEFAULT FALSE,
  #   other16              BOOL                                                     DEFAULT FALSE,
  #   other17              BOOL                                                     DEFAULT FALSE,
  #   other18              BOOL                                                     DEFAULT FALSE,
  #   other19              BOOL                                                     DEFAULT FALSE,
  #   other20              BOOL                                                     DEFAULT FALSE,
  #   other21              BOOL                                                     DEFAULT FALSE,

  memo                 TEXT                                                     DEFAULT "",
  is_deleted           BOOL                                                     DEFAULT FALSE
);
