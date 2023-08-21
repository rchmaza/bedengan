<?php
$query = "
    SELECT 
        g.id AS ground_id, 
        g.name AS ground_name, 
        g.price, 
        g.description, 
        gi.id AS image_id, 
        gi.filename, 
        gi.is_cover AS is_cover_image 
    FROM 
        ground g 
    LEFT JOIN 
        ground_image gi ON g.id = gi.ground_id 
    WHERE 
        gi.id = ( 
            SELECT MIN(id) 
            FROM ground_image 
            WHERE ground_id = g.id AND is_cover = 1 
        ) 
    OR 
        gi.id IS NULL; 
";

$result = $db->query($query);
while ($row = $result->fetch_assoc()) {
    $ground_data[] = $row;
}


if (isset($_POST['add_to_cart'])) {
    echo 'DESUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU';
}