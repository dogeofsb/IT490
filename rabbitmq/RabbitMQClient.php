#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

///used for login and register files
function doLogin($email, $password){
$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
if (isset($argv[1]))
{
  $msg = $argv[1];
}
else
{
  $msg = "Login";
}
$request = array();
$request['type'] = "Login";
$request['email'] = "$email";
$request['password'] = "$password";
$request['message'] = $msg;
$response = $client->send_request($request);
//$response = $client->publish($request);

echo "client received response: ".PHP_EOL;
print_r($response);
echo "\n\n";
echo $argv[0]." END".PHP_EOL;
}

function doRegister($firstname, $lastname, $email, $password){
$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
if (isset($argv[1]))
{
  $msg = $argv[1];
}
else
{
  $msg = "Register";
}
$request = array();
$request['type'] = "Register";
$request['firstname'] = "$firstname";
$request['lastname'] = "$lastname";
$request['email'] = "$email";
$request['password'] = "$password";
$request['message'] = $msg;
$response = $client->send_request($request);
//$response = $client->publish($request);

echo "client received response: ".PHP_EOL;
print_r($response);
echo "\n\n";
echo $argv[0]." END".PHP_EOL;	
}
