<?php
$skema = "CREATE TABLE IF NOT EXISTS invoice_item (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_invoice INT,
    id_material INT,
    nama_material text,
    qty INT,
    total DECIMAL(15,2),
    status TINYINT DEFAULT 1
);";
