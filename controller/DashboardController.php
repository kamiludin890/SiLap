<?php
$data = [
    "bulan" => ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun"],
    "jumlah" => [12, 19, 8, 15, 10, 20],

    "kategori" => ["Pendidikan", "Sosial", "Kesehatan"],
    "kategori_jumlah" => [10, 7, 5]
];

echo json_encode($data);
