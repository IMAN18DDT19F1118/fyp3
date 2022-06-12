<?php
include 'connection.php';

$komen = $_POST['komen'];
$id = $_POST['id_komen'];
$sql = "UPDATE temu_janji SET komen='" . $komen . "' WHERE ID =" . $id;

if ($conn->query($sql) === TRUE) {
    echo "<br>Komen telah disimpan";
} else {
    echo "Error updating record: " . $conn->error;
}
