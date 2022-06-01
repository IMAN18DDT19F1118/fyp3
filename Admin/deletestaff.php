<?php
include ('connection.php');

$uid =$_GET['id'];

$deleteusr="DELETE FROM staff WHERE ID='$uid'";
$resultdelete=$conn->query($deleteusr);

?>

<script>

window.location="displaystaff.php"    
</script>