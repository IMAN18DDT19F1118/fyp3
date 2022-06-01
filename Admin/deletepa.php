<?php
include ('connection.php');

$uid =$_GET['id'];

$deleteusr="DELETE FROM pa WHERE ID='$uid'";
$resultdelete=$conn->query($deleteusr);

?>

<script>

window.location="displaypa.php"    
</script>