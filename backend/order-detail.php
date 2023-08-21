<?php
include 'connection.php';
include 'session.php';

$order_id = $_GET['order_id'];

$success = true;
$message = 'Berhasil';

$sql_detail = "SELECT * FROM order_detail WHERE order_id = $order_id";
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
