<?php
include("connection.php");

$query = mysqli->prepare("select * from news");
$query -> excute();
$query -> store_result();
$num_rows = $query -> numrows();

if($num_rows === 0){
  $response["status"] = "no news foud";
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

