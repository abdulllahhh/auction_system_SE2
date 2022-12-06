<?php
header('Content-Type: application/json');

$id = $_POST['ID'];

include '../include/DatabaseClass.php';
$db = new database();

$sql = "DELETE FROM users WHERE ID = '$id'";
$db->delete($sql);
echo json_encode(array('result' => 1));
