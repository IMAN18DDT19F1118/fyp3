<?php
include('connection.php');

$uid = $_GET['id'];

$deleteappointment = "DELETE FROM temu_janji WHERE id='$uid'";
$resultdelete = $conn->query($deleteappointment);

?>

<script>
    var resultdelete = confirm("Anda pasti untuk hapus ?");
    if (resultdelete) {
        //Logic to delete the item
    }
    window.location = "appointment.php"
</script>