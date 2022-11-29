<?php
require 'curlRestCalls.php';
$call = webcam();
// $strCall = var_export($call, true);
// echo json_encode($strCall);
header("Content-Type: application/json");
// echo json_encode($call['response'], JSON_PRETTY_PRINT);
echo json_encode($call['response']);
?>