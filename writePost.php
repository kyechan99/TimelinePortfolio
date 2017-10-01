<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';

$time = date("Y-m-d H:i:s");
$q = "INSERT INTO `TP_POST`(`TP_TYPE`, `TP_THUMBNAIL`, `TP_TITLE`, `TP_CONTENT`, `TP_DATE`) VALUES ('방문록', '$t_name', '$t_title', '$t_content', '$time')";
$result = $mysqli->query($q);

$mysqli->close();

header('Location: '.$url['root']);
exit();

?>