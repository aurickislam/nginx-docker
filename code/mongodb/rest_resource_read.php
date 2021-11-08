<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database file
include_once 'mongodb_config.php';

//DB connection
$db = new DbManager();
$conn = $db->getConnection();

$collection = $conn->radius->users;

$document = $collection->findOne(['login' => 'aurick']);

echo json_encode(iterator_to_array($document));

?>