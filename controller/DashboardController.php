<?php
$data = [
    "bulan" => ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
    "jumlah" => [12, 19, 8, 15, 10, 20, 18, 14, 16, 22, 25, 30],

    "kategori" => ["Makanan Ringan", "Minuman", "Makanan Berat"],
    "kategori_jumlah" => [10, 7, 5]
];

echo json_encode($data);
