<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/head.html';

if (isset($tp_idx) == false) {
    $tp_idx = 0;
}
?>


<div class='w3-card-4 w3-margin w3-white animated lightSpeedIn'>
        <img src='https://pexels.imgix.net/photos/7919/pexels-photo.jpg' alt='Nature' style='width:100%'>
        <hr class='style13'>
        <div class='w3-container'>
            <h2><b>[공지사항] 학교 사이트 첫 개막</b></h2>
            <h4><b>@강예찬</b>(님)이 작성, <span class='w3-opacity'>2017-09-30</span></h4>
            &nbsp;
        </div><!-- w3-container 포스트 상단 제목 부분 -->
        <div class='w3-container' id="wrapper">
            <p>학교 커뮤니티 사이트 - KGSH Community 의 첫 모습을 여러분께 보여 드립니다 !</p>
            <img src='https://pexels.imgix.net/photos/7919/pexels-photo.jpg' alt='Nature' style='width:100%; margin-bottom:10px;' >
            <p>첫 화면인데요.</p>
            <img src='https://pexels.imgix.net/photos/7919/pexels-photo.jpg' alt='Nature' style='width:100%; margin-bottom:10px;' >
            <img src='https://pexels.imgix.net/photos/7919/pexels-photo.jpg' alt='Nature' style='width:100%; margin-bottom:10px;' >
            <p>첫 화면인데요.</p>
            <p>첫 화면인데요.</p>
            
            <div class='w3-row'>
                <div class='w3-col m8 s12'><p></p></div>
                <div class='w3-col m4 w3-hide-small'>
                    <p>
                        <span class='w3-padding-large w3-right'>
                        <b>Comments  </b>
                        <span class='w3-tag'>3</span>
                        </span>
                    </p>
                </div>
                
                <br/>
                <br/>
                <hr/>
                
                <div>
                    <p><b class='w3-tag'>asdf1234</b> 우왓 쩔어요 !!</p>
                    <p><b class='w3-tag'>test54</b> ㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇ !!</p>
                    <p><b class='w3-tag'>강예찬</b> <b>@asdf1234</b> 감사합니다 ㅎㅎ</p>
                    <hr/>
                </div>
                
                
                <form action='/' method='post' style="margin-top: -18px;">
                    <textarea class='form-control' style='border:none; resize:vertical;' placeholder='댓글 남기기'></textarea>
                    <input  type='button' class='btn btn-link btn-sm pull-right' value='완료'>
                </form><!-- 댓글 폼 -->
                <br/>
                <br/>
                <br/>
            </div>
        </div><!-- w3-container 포스트 하단 설명 부분 -->
    </div><!-- 포스트 w3-card-4 -->

    <hr>
</div><!-- 좌측 메뉴 -->

<script src="javascripts/board.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="javascripts/dot/jquery.dotdotdot.js"></script>
</body>
</html>