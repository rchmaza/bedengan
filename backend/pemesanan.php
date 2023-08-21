<?php
$sql_query = "
    SELECT
        o.id AS order_id,
        o.total,
        o.status,
        o.order_date,
        u.id AS user_id,
        u.name AS user_name,
        u.username,
        u.phone,
        u.is_admin
    FROM `order` o
    JOIN user u ON o.user_id = u.id;";

$result = $db->query($sql_query);
while ($row = $result->fetch_assoc()) {
    $result_data[] = $row;
}


if (isset($_POST['update_status'])) {
    $status = $_POST['status'];
    $order_id = $_POST['order_id'];
    $sql_manage = "UPDATE `order` SET status = '$status' WHERE id = $order_id;";
    $db->query($sql_manage);
    header("Refresh:0");
}