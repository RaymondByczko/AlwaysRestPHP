<?php
require 'curlRestCalls.php';
$country = $_GET['country'];
$call = webcam($country);
header("Content-Type: application/json");
echo json_encode($call['response']);
?>