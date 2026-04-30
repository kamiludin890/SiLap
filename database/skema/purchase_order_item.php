<?php
$skema = "CREATE TABLE IF NOT EXISTS purchase_order_item (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_purchase_order INT,
    id_material INT,
    qty INT,
    total DECIMAL(15,2),
    status TINYINT DEFAULT 1
);";
