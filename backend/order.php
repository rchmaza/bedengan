<?php
include 'connection.php';
include 'session.php';

$total = $_GET['total'];

$sql_order = "
    INSERT INTO `order` (total, user_id)
    VALUES ($total, $user_id);
";
$result_new_order = $db->query($sql_order);
$last_inserted_id = $db->insert_id;
echo $last_inserted_id;


$sql_order_detail = "
    INSERT INTO order_detail (name, day, price, start_date, end_date, ground_id, order_id)
SELECT
    CONCAT('Booking from cart ', c.id) AS name,
    c.day,
    g.price AS price,
    c.start_date,
    c.end_date,
    c.ground_id,
    $last_inserted_id AS order_id
FROM cart c
         JOIN ground g ON c.ground_id = g.id
WHERE c.user_id = $user_id;
";

$sql_clean_cart = "DELETE FROM cart WHERE user_id = $user_id;";


$result_order_detail = $db->query($sql_order_detail);
$result_clean_cart = $db->query($sql_clean_cart);

header("Location: ../history.php");