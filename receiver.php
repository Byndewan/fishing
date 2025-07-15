<?php
$lat = $_GET['lat'] ?? 'tidak ada';
$lon = $_GET['lon'] ?? 'tidak ada';
$device = $_GET['device'] ?? 'tidak ada';

echo "Lokasi:<br>";
echo "Latitude: $lat<br>";
echo "Longitude: $lon<br><br>";

echo "Device yang digunakan:<br>";
echo htmlspecialchars($device);
?>
