CREATE TABLE IF NOT EXISTS `TP_POST` (
  `TP_IDX` bigint(200) unsigned NOT NULL auto_increment,
  `TP_TYPE` varchar(4) NOT NULL,
  `TP_THUMBNAIL` varchar(20) NOT NULL,
  `TP_TITLE` varchar(20) NOT NULL,
  `TP_CONTENT` text NOT NULL,
  `TP_DATE` datetime NOT NULL,
  PRIMARY KEY (`TP_IDX`)
) ENGINE = MyISAM DEFAULT CHARSET = utf8 AUTO_INCREMENT = 1;

# TP_TYPE 에는 글의 장르가 들어감
## Ex) 게임, 웹, 공부, 방문록
### 방문록 장르에는 작성자가 아닌 익명의 누군가가 글을 남기고 갈때 작성됨
### 이때 작성된 글은 TP_THUMBNAIL이 익명의 이름이 됨

INSERT INTO `TP_POST`(`TP_TYPE`, `TP_THUMBNAIL`, `TP_TITLE`, `TP_CONTENT`, `TP_DATE`) VALUES ('게임', 'basic.png', '제목예시', '내용예시', '2017-05-31 18:46:32')

CREATE TABLE IF NOT EXISTS `TP_COMMENT` (
  `TP_IDX` bigint(200) unsigned NOT NULL auto_increment,
  `TP_POST_IDX` bigint(200) NOT NULL,
  `TP_NAME` varchar(20) NOT NULL,
  `TP_CONTENT` text NOT NULL,
  `TP_DATE` datetime NOT NULL,
  PRIMARY KEY (`TP_IDX`)
) ENGINE = MyISAM DEFAULT CHARSET = utf8 AUTO_INCREMENT = 1;


INSERT INTO `TP_COMMENT`(`TP_POST_IDX`, `TP_NAME`, `TP_CONTENT`, `TP_DATE`) VALUES ('3', 'asdf1234', '오오옹', date("Y-m-d H:i:s"))

INSERT INTO `TP_POST`(`TP_TYPE`, `TP_THUMBNAIL`, `TP_TITLE`, `TP_CONTENT`, `TP_DATE`) VALUES ('방문록', '김익명', '반갑습니다 !', '반갑습니다 !!!!!!!!!!!!!!!', date("Y-m-d H:i:s"))