<?php
$skema = "CREATE TABLE IF NOT EXISTS customer_supplier (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_customer_supplier VARCHAR(255),
    alamat TEXT,
    telpn VARCHAR(20),
    phone VARCHAR(20),
    email VARCHAR(255),
    tipe text,
    tax_number VARCHAR(50),
    status TINYINT DEFAULT 1
);";
