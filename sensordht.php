<?php
include './functions/koneksi.php';
$conn = connection();
$temp = $_GET["temp"];
$humidity = $_GET["humidity"];

$query = "UPDATE dht SET temp = '$temp', humidity ='$humidity' WHERE id=1";
mysqli_query($conn, $query);

?>