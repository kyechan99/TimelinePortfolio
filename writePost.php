<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';


$q = "INSERT INTO `TP_POST`(`TP_TYPE`, `TP_THUMBNAIL`, `TP_TITLE`, `TP_CONTENT`, `TP_DATE`) VALUES ('방문록', '$t_name', '$t_title', '$t_content', '2017-05-31 18:46:32')";
$result = $mysqli->query($q);

$mysqli->close();

header('Location: '.$url['root']);
exit();

?>