<?php
$host = 'localhost';
$user = 'IT490User';
$pass = 'password';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
