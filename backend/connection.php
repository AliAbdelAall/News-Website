<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");

$host = "localhost";
$db_user = "root";
$db_pass = null;
$db_name = "news_db";

$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);

if ($mysqli->connect_error){
  die("Connection failed: ". $mysqli->connect_error);
}