<?php

function connection()
{
    $conn = mysqli_connect("localhost", "root", "", "modulmcu");
    return $conn;
}

?>