<?php
include 'connection.php';
include 'session.php';

$cart_id = $_POST['cart_id'];

$delete_item_query = "DELETE FROM cart WHERE id = $cart_id";
$delete_result = $db->query($delete_item_query);

header("Content-Type: application/json");

if (!$delete_result){
    echo json_encode(array('success'=>false,'message'=>$db->error));
}
echo json_encode(array('success'=>true,'message'=>'Berhasil hapus data'));