#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
$serverName="localhost";
$email="email";
$password="password";

//Connect to Database
$conn=mysqli_connect($serverName, $username, $password, $accounts);

if ($conn) {
die ("Connection failed:") .(mysqli_connect_error());
}
echo"Connection successful";

if (mysqli_connect_error())
{
	echo "Failed to connect to MySQL:".mysql_connect_error();
	exit();
}
print "Successfully connect to MySql.<br><br><br>";

//submit query to Database
function doLogin($email,$password)
{
   
$sql="INSERT INTO users (email, password) Values ('email', 'password')";

($t = msqli_query ($db, $sql)) or die (mysql_error($db));

$num = mysql_num_rows($t);

//$s="SELECT  * FROM users WHERE ";
//echo"<br>$s<br>";
//($t=mysquli_query($db, $s)) or die (mysqli_error($db));
//$num = mysql_num_rows($t);

if ($num >0)

{return true;} 

else
{return false;}

}

//Validate login credentials match

$Username = POST_['email'];
$Password = POST_['password'];

$select1="SELECT FROM users WHERE email=$email AND password=$Password";
($t=mysquli_query($db, $select1)) or die (mysqli_error($db));
$num = mysql_num_rows($t);

if ($num >0) 

{
 return true;
 echo "Login Successful";
}
else
{
 return false;
 echo "Login Failed";
}

function requestProcessor($request)
{
  echo "received request".PHP_EOL;
  var_dump($request);
  if(!isset($request['type']))
  {
    return "ERROR: unsupported message type";
  }
  switch ($request['type'])
  {
    case "login":
      return doLogin($request['email'],$request['password']);
    case "validate_session":
      return doValidate($request['sessionId']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

echo "testRabbitMQServer BEGIN".PHP_EOL;
$server->process_requests('requestProcessor');
echo "testRabbitMQServer END".PHP_EOL;
mysqli_free_result($t);
mysqli_close($db);
exit("<br>Interaction completed.<br><br>");
mysquli_close($IT490);
?>
