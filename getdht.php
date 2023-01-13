<?php
include './functions/koneksi.php';
$conn = connection();

$query = "SELECT * FROM dht";
$result = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($result);
echo json_encode($data);
?>