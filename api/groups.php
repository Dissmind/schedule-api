<?php

include_once '../database.php';
include_once '../models/Group.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new Database();
$connection = $db->getConnection();

$query = 'SELECT * FROM `groups`';
$a =  $db->getQuery($query);

$data = [];
for ($i = 0; $i < count($a); $i++) {
    $row = $a[$i];
    array_push($data, new Group($row['id'], $row['name'], $row['year_at']));
}

$db->closeConnection();

echo json_encode($data);