<?php
include 'connection.php';
include 'session.php';

$ground_id = $_GET['ground_id'];


$success = true;
$message = 'Berhasil';

$sql_detail = "SELECT * FROM ground_image WHERE ground_id = $ground_id";
$result_detail = $db->query($sql_detail);

$data = array();

if ($result_detail->num_rows > 0) {
    while ($row = $result_detail->fetch_assoc()) {
        $data[] = $row;
    }
}

if (!$result_detail){
    $success = false;
    $message = $db->error;
}

// Send data as JSON response
header('Content-Type: application/json');
echo json_encode(array('success'=>$success, 'message'=>$message, 'data' => $data));