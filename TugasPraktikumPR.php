<?php
// 1. Membuat variabel array dan encode ke format JSON
$array = array(
    "nama" => "Budi",
    "usia" => 25,
    "pekerjaan" => "Programmer"
);

// Encode array ke format JSON
$json = json_encode($array);

// Menampilkan hasil JSON
echo "Hasil JSON: " . $json . "\n";

// 2. Membuat variabel berisi JSON, lalu decode menjadi PHP Object dan PHP Array
$json_data = $json; // Menggunakan hasil JSON dari langkah sebelumnya

// Decode JSON menjadi PHP Object
$object = json_decode($json_data);

// Akses nilai dari PHP Object
echo "Nama (dari Object): " . $object->nama . "\n";
echo "Usia (dari Object): " . $object->usia . "\n";

// Decode JSON menjadi PHP Array
$array_decoded = json_decode($json_data, true);

// Akses nilai dari PHP Array
echo "Nama (dari Array): " . $array_decoded['nama'] . "\n";
echo "Usia (dari Array): " . $array_decoded['usia'] . "\n";
?>
