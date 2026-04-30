<?php
$skema = "CREATE TABLE IF NOT EXISTS konversi_satuan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_material INT,
    dari_satuan VARCHAR(50),
    ke_satuan VARCHAR(50),
    faktor_konversi DECIMAL(15,2),
    status TINYINT DEFAULT 1
);";
