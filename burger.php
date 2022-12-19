<?php
require 'curlRestCalls.php';
$call = burger();
$response_code = $call['response_code'];
http_response_code($response_code);
header("Content-Type: application/json");
// header("Content-Type: text/html");
// echo json_encode($call['response']);
// echo '{"other": "'.$call['other'].'"}';
if ($response_code == '200') {
	header("Content-Type: application/json");
	echo json_encode($call['response']);
}
else {
	header("Content-Type: text/html");
	echo json_encode($call['response']);
}
?>