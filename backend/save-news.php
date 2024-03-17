<?php
include("connection.php");

$title = $_POST['title'];
$content = $_POST["content"];

$query = $mysqli -> prepare("insert into news (title, content) values(?, ?)");
$query -> bind_param("ss", $title, $content);
if($query -> execute()){
  $response["status"] = "success";
}else{
  $response["status"] = "faild";
}
echo json_encode($response);

