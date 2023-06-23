<?php

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');

$index = $_POST['index'];
$name = $_POST['taskName'];
$status = $_POST['taskStatus'];

$tasksStr = file_get_contents("data.json");
$tasks = json_decode($tasksStr);

if($status === "false") {

  $tasks[$index] = [
    "name" => $name,
    "complete" => "true"
  ];

} else {

  $tasks[$index] = [
    "name" => $name,
    "complete" => "false"
  ];

}


$tasksStr = json_encode($tasks);

file_put_contents("data.json", $tasksStr);
echo $tasksStr;