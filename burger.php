<?php
require 'curlRestCalls.php';
$call = burger();
header("Content-Type: application/json");
// header("Content-Type: text/html");
// echo json_encode($call['response']);
echo '{"other": "'.$call['other'].'"}';
?>