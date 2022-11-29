<?php
require 'curlRestCalls.php';
$idVideo = $_GET['idVideo'];
$call = youtube($idVideo);
header("Content-Type: application/json");
echo json_encode($call['response']);
?>