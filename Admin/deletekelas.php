<?php
include ('connection.php');

$uid =$_GET['id'];

$deleteusr="DELETE FROM kelas WHERE ID='$uid'";
$resultdelete=$conn->query($deleteusr);

?>

<script>

window.location="displaykelas.php"    
</script>