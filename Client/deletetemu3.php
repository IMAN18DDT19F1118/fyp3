<?php


include ('connection.php');

$uid =$_GET['id'];

$sql = "DELETE FROM temu_janji WHERE ID= '" . $uid . "'";

if ($conn->query($sql) === TRUE) {
    ?>
<script>
    alert("Temu janji telah dipadam")
    window.location = "displaystaff.php";
</script>
    <?php
} else {
  echo "Error deleting record: " . $conn->error;
}

?>