<?php

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');

$task = $_POST;

$tasksStr = file_get_contents("data.json");
$tasks = json_decode($tasksStr);

$tasks[] = $task;

$tasksStr = json_encode($tasks);

file_put_contents("data.json", $tasksStr);
echo $tasksStr;