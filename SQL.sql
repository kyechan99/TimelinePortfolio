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

INSERT INTO `TP_POST`(`TP_TYPE`, `TP_THUMBNAIL`, `TP_TITLE`, `TP_CONTENT`, `TP_DATE`) VALUES ('게임', 'https://lh3.googleusercontent.com/gd4sAGgkpi2BZ9RC9qYrjAFlwQxadPQZkih_hWjBX8TUxrQ67B2fYsDPznXJ44UiYd0=h900-rw', 'Shape', '<h2 id="">특징</h2>
            <ul>
                <li>리듬 터치 게임</li>
                <li>[ Cocos2d-X ] 를 이용해 처음 만들어 본 게임</li>
            </ul>
            <br/>
            <h2 id="-1">플레이 방법</h2>
            <ul>
                <li>날아오는 도형을 HP바 색에 맞추어 클릭하는 방식</li>
                <li>HP바의 색은 바뀌기 3초 전에 알려줍니다.</li>
                <li>HP바의 색은 랜덤으로 바뀌며 같은 색이 다시 나올 수 있습니다.</li>
            </ul>
            <br/>
            <h2 id="-2">수상</h2>
            <ul>
                <li>한국게임과학고등학교 24시간 내에 게임 만들기 대회</li>
            </ul>
            <br/>
            <h2 id="-3">다운로드</h2>
            <ul>
                <li>구글 플레이 : <a href="https://play.google.com/store/apps/details?id=com.threekb.shape&amp;hl=ko">링크</a></li>
            </ul>
            <br/>
            <h2 id="-4">인게임 캡처</h2>
              <p><img src="https://lh3.googleusercontent.com/gd4sAGgkpi2BZ9RC9qYrjAFlwQxadPQZkih_hWjBX8TUxrQ67B2fYsDPznXJ44UiYd0=h900-rw" alt="1" />
              <img src="https://lh3.googleusercontent.com/vI4TLkELZQPH8KM2-1IcTbAYgwPddFybEhaxgDZ-mca-Lz07Ir4bvrPESmmcg7hUGpq3=h900-rw" alt="1" />
              <img src="https://lh3.googleusercontent.com/YI9zcM08FizKWrS2C4TB7-IyZX2AOIcA15oU0seeOCQmkKkUdgPek8I6pFv-yBjceg=h900-rw" alt="1" />
              <img src="http://postfiles12.naver.net/20150627_251/kyechan99_1435411920029p7Iz1_PNG/2.PNG?type=w1" alt="1" />
              <img src="http://postfiles11.naver.net/20150627_266/kyechan99_1435411920196NO0zf_PNG/3.PNG?type=w1" alt="1" /></p>

              <p><img src="http://postfiles14.naver.net/20150627_141/kyechan99_1435412340511mTgfd_JPEG/7.png?type=w1" alt="1" />
              <img src="http://postfiles15.naver.net/20150627_142/kyechan99_1435412303736f3jAd_JPEG/2.png?type=w1" alt="1" />
              <img src="http://postfiles6.naver.net/20150627_277/kyechan99_1435412313204tuD5h_JPEG/3.png?type=w1" alt="1" /></p>

              <p><img src="http://postfiles11.naver.net/20150627_90/kyechan99_14354123196176N7No_JPEG/4.png?type=w1" alt="1" />
              <img src="http://postfiles16.naver.net/20150627_95/kyechan99_1435412326667KPxpR_JPEG/5.png?type=w1" alt="1" />
              <img src="http://postfiles15.naver.net/20150627_190/kyechan99_1435412333960rXNF7_JPEG/6.png?type=w1" alt="1" /></p>
            <br/>
            <h2 id="-5">인게임 영상</h2>
            <ul>
                <li>영상 주소 : <a href="http://blog.naver.com/kyechan99/220406377159">바로가기</a></li>
            </ul>', '2017-05-31 18:46:32')

INSERT INTO `TP_POST`(`TP_TYPE`, `TP_THUMBNAIL`, `TP_TITLE`, `TP_CONTENT`, `TP_DATE`) VALUES ('방문록', '김익명', '반갑습니다 !', '반갑습니다 !!!!!!!!!!!!!!!', date("Y-m-d H:i:s"))