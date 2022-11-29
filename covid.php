<?php
require 'curlRestCalls.php';
$call = covid();
header("Content-Type: application/json");
echo json_encode($call['response']);
?>