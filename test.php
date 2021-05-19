<?php

include_once 'database.php';

$db = new Database();
$db->getConnection();

$db->closeConnection();

echo 'test';



/*
 * getTeachers
 * getGroups
 *
 * getTableByTeachers
 * getTableByGroups
 *
 * */




