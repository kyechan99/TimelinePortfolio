<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';

$tp_type = $_GET['tp_type'];
$tp_idx = $_GET['tp_idx'];

if (isset($tp_type) == false) {
    $tp_type = "최신";
}
if (isset($tp_idx) == false) {
    $tp_idx = 1;
}

$q = "SELECT * FROM TP_POST WHERE TP_IDX < '$tp_idx' ORDER BY TP_IDX DESC";

if ($tp_type != "최신") {
    $q = "SELECT * FROM TP_POST WHERE TP_IDX < '$tp_idx' and TP_TYPE = '$tp_type' ORDER BY TP_IDX DESC";
}

$result = $mysqli->query($q);
if ($result->num_rows >= 1)
{
    $data = $result->fetch_array();
    $arr['idx'] = $data['TP_IDX'];
    if ($data['TP_TYPE'] != "방문록")
        $arr['card'] =  "<img src='" . $data['TP_THUMBNAIL'] . "' alt=' Thumbnail : null' style='width:100%'>" .
                        "<hr class='style13' style='margin-top: 7px'>" .
                        "<div class='w3-container'>" .
                        "<h3><b>" . $data['TP_TITLE'] . "</b></h3>" .
                        "<h5><b>@강예찬</b>(님)이 작성, <span class='w3-opacity'>" . $data['TP_DATE'] . "</span></h5>" .
                        "</div>" .
                        "<div class='w3-container'>" .
                        "<div class='w3-row'>" .
                        "<div class='w3-col m8 s12'>" .
                        "<a href='/post?tp_idx=" . $data['TP_IDX'] . "&tp_type=" . $data['TP_TYPE'] . "'>" .
                        "<button class='w3-button w3-padding-large w3-white w3-border'><b>READ MORE »</b>" .
                        "</button>" .
                        "</a>" .
                        "<p>" .
                        "</p>" .
                        "</div>" .
                        "<div class='w3-col m4 w3-hide-small'>" .
                        "<p><span class='w3-padding-large w3-right'><b>Comments  </b> <span class='w3-tag'>2</span></span></p>" .
                        "</div>" .
                        "</div>" .
                        "</div>";
    else
        $arr['card'] =  "<hr class='style13' style='margin-top: 7px'>" .
                        "<div class='w3-container'>" .
                        "<h3><b>" . $data['TP_TITLE'] . "</b></h3>" .
                        "<h5><b>@" . $data['TP_THUMBNAIL'] . "</b>(님)이 작성, <span class='w3-opacity'>" . $data['TP_DATE'] . "</span></h5>" .
                        "</div>" .
                        "<div class='w3-container'>" .
                        "<p>". $data['TP_CONTENT'] . "</p>" .
                        "<div class='w3-row'>" .
                        "<div class='w3-col m8 s12'>" .
                        "<a href='/post?tp_idx=" . $data['TP_IDX'] . "&tp_type=" . $data['TP_TYPE'] . "'>" .
                        "<button class='w3-button w3-padding-large w3-white w3-border'><b>READ MORE »</b>" .
                        "</button>" .
                        "</a>" .
                        "<p>" .
                        "</p>" .
                        "</div>" .
                        "<div class='w3-col m4 w3-hide-small'>" .
                        "<p><span class='w3-padding-large w3-right'><b>Comments  </b> <span class='w3-tag'>2</span></span></p>" .
                        "</div>" .
                        "</div>" .
                        "</div>";
}
else 
{
    $arr['idx'] = 1000;
    $arr['card'] =  "<hr class='style13' style='margin-top: 7px'>" .
                        "<div class='w3-container'>" .
                        "<h3><b> 더 이상 글이 없습니다. </b></h3>" .
                        "</div>" .
                        "<div class='w3-container'>" .
                        "<p> 최신 글 부터 다시 불러 들입니다. </p>" .
                        "<div class='w3-row'>" .
                        "<div class='w3-col m8 s12'>" .
                        "<p>" .
                        "</p>" .
                        "</div>" .
                        "<div class='w3-col m4 w3-hide-small'>" .
                        "</div>" .
                        "</div>" .
                        "</div>";
}

if ($arr == NULL) echo "FAIL";
else echo json_encode($arr);

?>