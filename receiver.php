<?php
error_reporting(0);

if($_GET['api_key'] != 'gJBXV6vBOd') {
	header('HTTP/1.1 403 Forbidden', true, 403); echo 'Invalid API key!'; exit;
}

$secure_token = $_POST['deviceId'];

if(strlen($secure_token) != 16) {
	header('HTTP/1.1 500 Internal Server Error', true, 500); echo 'Invalid Secure Token!'; exit;
}

$sender = $_POST['strFrom'];
$message = $_POST['strMsg'];
$time = $_POST['strTime'];

if(empty($sender) || empty($message) || empty($time)) {
	header('HTTP/1.1 500 Internal Server Error', true, 500); echo 'Empty messages cannot be stored!'; exit;
}

$store = json_decode(file_get_contents(__DIR__ . '/store/' . basename($secure_token) . '.json'), true);
$store[] = [
	'sender' => $sender, 
	'message' => $message, 
	'time' => $time
];
file_put_contents(__DIR__ . '/store/' . basename($secure_token) . '.json', json_encode($store));

echo 'OK';