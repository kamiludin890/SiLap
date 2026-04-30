<?php
$skema = "CREATE TABLE IF NOT EXISTS in_out_material (
    id INT AUTO_INCREMENT PRIMARY KEY,
    no_doc VARCHAR(50),
    tanggal_doc DATE,
    tanggal_in_out DATE,
    jenis_doc VARCHAR(50),
    tipe_doc VARCHAR(50),
    id_customer_supplier INT,
    status TINYINT DEFAULT 1
);";
