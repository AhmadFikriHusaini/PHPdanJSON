<?php
include 'koneksi.php';

$data = array();

$set_id = 22;

$query = "SELECT * FROM buku WHERE Id_buku = :id";
$select = $pdo->prepare($query);
$select->bindParam(':id', $set_id);
$select->execute();
$row = $select->fetch(PDO::FETCH_ASSOC);

echo '<b>Data dari database</b><br>';
echo '<b>Judul</b> = ' . $row['Judul'] . '<br>';
echo '<b>Penulis</b> = ' . $row['Penulis'] . '<br>';
echo '<b>Penerbit</b> = ' . $row['Penerbit'] . '<br>';
echo '<b>Tahun Terbit</b> = ' . $row['Tahun_terbit'] . '<br><br>';

if (is_array($row)) {
    $data['judul'] = $row['Judul'];
    $data['penulis'] = $row['Penulis'];
    $data['penerbit'] = $row['Penerbit'];
    $data['tahun terbit'] = $row['Tahun_terbit'];
}

// header('Content-Type: application/json');

$json = json_encode($data, JSON_PRETTY_PRINT);

echo '<b>hasil JSON</b>';
echo '<pre>';
echo $json;