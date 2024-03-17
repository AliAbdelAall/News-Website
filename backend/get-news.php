<?php
include("connection.php");

$query = $mysqli->prepare("select * from news");
$query -> execute();
$query -> store_result();
$num_rows = $query -> num_rows();

if($num_rows === 0){
  $response["status"] = "no news found";
}else{
  $news_list = [];
  $query -> bind_result($id, $title, $content);
  while($query -> fetch()){
    $news = [
      "id" => $id,
      "title" => $title,
      "content" => $content
    ];
    $news_list[] = $news;
  }
  $response["status"] = "success";
  $response["news"] = $news_list;
}

echo json_encode($response);

