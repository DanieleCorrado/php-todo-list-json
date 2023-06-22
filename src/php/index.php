<?php 
  header('Content-type: application/json');

  $toDoList = [
    [
      'item' => "HTML",
      'done' => true,
    ],
    [
      'item' => "CSS",
      'done' => true,
    ],
    [
      'item' => "Responsive design",
      'done' => true,
    ],
    [
      'item' => "Javascript",
      'done' => true,
    ],
    [
      'item' => "PHP",
      'done' => true,
    ],
    [
      'item' => "Laravel",
      'done' => false,
    ]
    ];

    echo json_encode($toDoList);
?>