<?php
include 'connection.php';
include 'session.php';

$ground_id = $_POST['ground_id'];
$day = $_POST['day'];
$start_date = $_POST['start_date'];

$success = false;
$message = 'gagal';


if ($day > 0 && !empty($start_date)) {

    $end_date = date('Y-m-d', strtotime($start_date. " + $day days"));
    //$end_date = "2023-08-21";

    // Check if the item is already in the cart
    $check_item_query = "SELECT * FROM cart WHERE user_id = $user_id AND ground_id = $ground_id";
    $check_item_result = $db->query($check_item_query);

    if ($check_item_result->num_rows > 0) {
        // Update the quantity if the item is already in the cart
        $check_result_row =$check_item_result->fetch_assoc();
        $cart_id = $check_result_row['id'];
        $old_day = $check_result_row['day'];
        $new_day = $old_day + $day;

        $end_date = date('Y-m-d', strtotime($start_date . " +$new_day days"));

        $update_quantity_query = "UPDATE cart SET day = day + $day, start_date = '$start_date', end_date = '$end_date' WHERE id = $cart_id";
        $result = $db->query($update_quantity_query);
    } else {
        // Add the item to the cart if it's not already there
        $insert_cart_item = "INSERT INTO cart (user_id, ground_id, day, start_date, end_date) 
                            VALUES ('$user_id', '$ground_id', '$day', '$start_date', '$end_date')";
        $result = $db->query($insert_cart_item);
    }

    $success = true;
    $message = 'berhasil';

    if (!$result || !$check_item_result){
        $message = $db->error;
    }
} else {
    $message = 'Tidak boleh ada yang kosong';
}

$response = array('success' => $success, 'message' => $message);
header("Content-Type: application/json");
echo json_encode($response);