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
    JOIN user u ON o.user_id = u.id
    WHERE u.id = '$user_id';";

$history_result = $db->query($sql_query);
while ($row = $history_result->fetch_assoc()) {
    $history_data[] = $row;
}