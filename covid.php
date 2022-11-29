<?php
require 'curlRestCalls.php';
$call = covid('Japan');
header("Content-Type: application/json");
echo json_encode($call['response']);
?>