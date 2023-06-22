<?php 

  header("Access-Control-Allow-Origin: http://localhost:5173");
  header("Access-Control-Allow-Headers: X-Requested-With");  
  header('Content-Type: application/json');

  $toDoList = [
    [
      'name' => "HTML",
      'done' => true,
    ],
    [
      'name' => "CSS",
      'done' => true,
    ],
    [
      'name' => "Responsive design",
      'done' => true,
    ],
    [
      'name' => "Javascript",
      'done' => true,
    ],
    [
      'name' => "PHP",
      'done' => true,
    ],
    [
      'name' => "Laravel",
      'done' => false,
    ]
  ];

    echo json_encode($toDoList);
?>