<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch); // Jangan lupa untuk menutup session cURL
    return $output;
} 

// alamat localhost untuk file getWisata.php
$send = curl("http://localhost/rekayasaweb/praktikum2/getwisata.php");

// mengubah JSON menjadi array
$data = json_decode($send, TRUE);

// Tampilkan data dalam format tabel HTML
echo "<table border='1'>";
echo "<tr><th>KOTA</th><th>LANDMARK</th><th>TARIF</th></tr>";

foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row["kota"] . "</td>";
    echo "<td>" . $row["landmark"] . "</td>";
    echo "<td>" . $row["tarif"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
