<?php
require 'curlRestCalls.php';
$call = burger();
header("Content-Type: application/json");
echo json_encode($call['response']);
?>