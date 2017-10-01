<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';

$time = date("Y-m-d H:i:s");
$q = "INSERT INTO `TP_COMMENT` (`TP_POST_IDX`, `TP_NAME`, `TP_CONTENT`, `TP_DATE`) VALUES ('$tp_idx', '$t_name', '$t_content', '$time')";
$result = $mysqli->query($q);

$mysqli->close();

header('Location: '.$url['root'].'post?tp_idx='.$tp_idx);
exit();

?>