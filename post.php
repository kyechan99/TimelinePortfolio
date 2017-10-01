<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/head.html';

if (isset($tp_idx) == false) {
    $tp_idx = 1;
}

// Post 글 불러오기
$q = "SELECT * FROM TP_POST WHERE TP_IDX = '$tp_idx'";
$result = $mysqli->query($q);
$data = $result->fetch_array();


// Post 댓글 불러오기
$q2 = "SELECT * FROM TP_COMMENT WHERE TP_POST_IDX = '$tp_idx' ORDER BY TP_IDX ASC";
$result2 = $mysqli->query($q2);


?>

<style>
        img {
            width:100%; 
            margin-bottom:10px;
        }
</style>


<div class='w3-card-4 w3-margin w3-white animated lightSpeedIn'>
        <? if ($data['TP_TYPE'] != "방문록") echo "<img src=".$data['TP_THUMBNAIL']." alt='Nature' style='width:100%'>"; ?>
        <hr class='style13' style="margin-top: -8px">
        <div class='w3-container'>            
            <h2><b><? echo $data['TP_TITLE']; ?></b></h2>
            <h4><b><? if ($data['TP_TYPE'] == "방문록") echo "@".$data['TP_THUMBNAIL']; else echo "@강예찬"; ?></b>(님)이 작성, <span class='w3-opacity'><? echo $data['TP_DATE']; ?></span></h4>
            &nbsp;
        </div><!-- w3-container 포스트 상단 제목 부분 -->
        <div class='w3-container' id="wrapper">
            <? echo $data['TP_CONTENT']; ?>
                        
            <div class='w3-row'>
                <div class='w3-col m8 s12'><p></p></div>
                <div class='w3-col m4 w3-hide-small'>
                    <p>
                        <span class='w3-padding-large w3-right'>
                        <b>Comments  </b>
                        <span class='w3-tag'><? echo $result2->num_rows; ?></span>
                        </span>
                    </p>
                </div>
                
                <br/>
                <br/>
                <hr/>
                
                <div>
                    <?
                    if ($result2->num_rows == 0)
                        echo " 댓글이 없습니다.";
                    else
                    {
                        while ($data2 = $result2->fetch_array())
                        {
                            echo "<p><b class='w3-tag'>" . $data2['TP_NAME'] . "</b> " . $data2['TP_CONTENT'] . "</p>";
                        }
                    }
                    ?>
                </div><!-- 댓글 란 -->
                
                <hr/>
                
                <form method='POST' action='writeComment?tp_idx=<? echo $tp_idx; ?>' style="margin-top: -18px;">
                    <textarea class='form-control' id="t_name" name="t_name" style='border:none; resize:none; height:35px;' placeholder='이름'></textarea>
                    <textarea class='form-control' id="t_content" name="t_content" style='border:none; resize:vertical;' placeholder='댓글 남기기'></textarea>
                    <input  type='submit' class='btn btn-link btn-sm pull-right' value='완료'>
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