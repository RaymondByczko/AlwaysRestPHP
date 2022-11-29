<?php
function webcam() {
$curl = curl_init();
$ra = $_ENV['ra'];

curl_setopt_array($curl, [
	CURLOPT_URL => "https://webcamstravel.p.rapidapi.com/webcams/list/country=IE?show=webcams%3Aimage%2Clocation&lang=en",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: webcamstravel.p.rapidapi.com",
		"X-RapidAPI-Key: ".$ra
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	return array('status'=>'failed', 'response'=>"cURL Error #:" . $err);
} else {
	return array('status'=>'success','response'=>$response);
}
}

function space($newsSource="") {
$curl = curl_init();
$ra = $_ENV['ra'];
$urlSuffix = "";
if ($newsSource != "") {
	$urlSuffix = "/".$newsSource;
}
if ($newsSource == "all") {
	$urlSuffix = "";
}
curl_setopt_array($curl, [
	CURLOPT_URL => "https://space-news.p.rapidapi.com/news".$urlSuffix,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: space-news.p.rapidapi.com",
		"X-RapidAPI-Key: ".$_ENV['ra']
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	return array('status'=>'failed', 'response'=>"cURL Error #:" . $err);
} else {
	return array('status'=>'success','response'=>$response);
}
}

function covid($country) {
$curl = curl_init();
$ra = $_ENV['ra'];
curl_setopt_array($curl, [
	CURLOPT_URL => "https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/total?country=".$country,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: covid-19-coronavirus-statistics.p.rapidapi.com",
		"X-RapidAPI-Key: ".$_ENV['ra']
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
if ($err) {
	return array('status'=>'failed', 'response'=>"cURL Error #:" . $err);
} else {
	return array('status'=>'success','response'=>$response);
}
}

function youtube($idVideo){

$curl = curl_init();
$ra = $_ENV['ra'];
curl_setopt_array($curl, [
	CURLOPT_URL => "https://youtube138.p.rapidapi.com/video/details/?id=".$idVideo."&hl=en&gl=US",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: youtube138.p.rapidapi.com",
		"X-RapidAPI-Key: ".$ra
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	return array('status'=>'failed', 'response'=>"cURL Error #:" . $err);
} else {
	return array('status'=>'success','response'=>$response);
}
	
}