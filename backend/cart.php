<?php

$cart_query = " 
    SELECT
        c.id AS cart_id,
        c.day,
        c.user_id,
        c.ground_id,
        c.start_date,
        c.end_date,
        g.name AS ground_name,
        g.price AS ground_price
    FROM
        cart c
    JOIN
        ground g ON c.ground_id = g.id
    WHERE user_id = '$user_id';
";

$cart_result = $db->query($cart_query);
$totalAmount = 0;
while ($cart_row = $cart_result->fetch_assoc()) {
    $cartItems[] = $cart_row;
    $totalAmount += $cart_row['ground_price'] * $cart_row['day'];
}