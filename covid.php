<?php
require 'curlRestCalls.php';
$country = $_GET['country'];
$call = covid($country);
header("Content-Type: application/json");
echo json_encode($call['response']);
?>