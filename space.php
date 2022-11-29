<?php
require 'curlRestCalls.php';
// $newsSource = "guardian";
$newsSource = $_GET['newsSource'];
$call = space($newsSource);
header("Content-Type: application/json");
echo json_encode($call['response']);
?>