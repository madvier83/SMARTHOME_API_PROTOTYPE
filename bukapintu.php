<?php

include '../moduliot/functions/koneksi.php';
$conn = connection();
$indikator = 'pintu';

function getNilai($indikator, $conn) {
    $querySelect = "SELECT $indikator FROM indikator";
    $result = mysqli_query($conn, $querySelect);
    $data = mysqli_fetch_assoc($result);
    return $data[$indikator];
}

function setValue($nilai) {
    if ($nilai == 1) {
        return 0;
    } else {
        return 1;
    }
}

function updateValue($conn, $indikator, $value) {
    $queryUpdate = "UPDATE indikator SET $indikator=$value";
    mysqli_query($conn, $queryUpdate);
}

$data = getNilai($indikator, $conn);
$value = setValue($data);
updateValue($conn, $indikator, $value);

// echo json_encode($data);