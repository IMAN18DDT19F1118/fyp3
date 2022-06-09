<?php
require 'connection.php';
$pilihan = $_POST['pilihan'];
$id = $_POST['id'];

$sql = "UPDATE temu_janji SET pilihan = '$pilihan' WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
?>
    <script>
        alert("Updated")
        window.location = "appointment.php"
    </script>

<?php
} else {
?>
    <script>
        alert("Unable to update")
        window.location = "appointment.php"
    </script>

<?php
}

?>