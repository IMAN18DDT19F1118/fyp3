<?php
include('connection.php');

$uid = $_GET['id'];

$deletekalendar = "DELETE FROM kaunseloraction WHERE id='$uid'";
$resultdelete = $conn->query($deletekalendar);

?>

<script>
    var resultdelete = confirm("Anda pasti untuk hapus ?");
    if (resultdelete) {
        //Logic to delete the item
    }
    window.location ="kalendar.php"
</script>