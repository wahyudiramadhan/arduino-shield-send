<?php
include "koneksi.php";
if (isset($_GET["id_finger"])) {
    $id_finger = $_GET["id_finger"]; 
    $sql = "INSERT INTO tb_data_finger (id_finger) VALUES ($id_finger)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . " => " . $conn->error;
    }
    $conn->close();
} else {
    echo "id_finger is not set";
}
