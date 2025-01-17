<?php
// Set the header to return JSON
//header('Content-Type: application/json');

$data=[
    "name"=>"abhishek",
    "age"=>20,
    "add"=>"banwari ka pura"
];
echo json_encode($data);
?>