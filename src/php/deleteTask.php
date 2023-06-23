<?php

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');

$index = $_POST['index'];

$tasksStr = file_get_contents("data.json");
$tasks = json_decode($tasksStr);

array_splice($tasks, $index, 1);

$tasksStr = json_encode($tasks);

file_put_contents("data.json", $tasksStr);
echo $tasksStr;