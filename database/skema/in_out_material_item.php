<?php
$skema = "CREATE TABLE IF NOT EXISTS in_out_material_item (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_document INT,
    id_material INT,
    nama_material text,
    qty INT,
    satuan VARCHAR(50),
    status TINYINT DEFAULT 1
);";
