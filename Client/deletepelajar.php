<?php
include ('connection.php');

$uid =$_GET['id'];

$deleteusr="DELETE FROM pelajar WHERE ID='$uid'";
$resultdelete=$conn->query($deleteusr);

?>

<script>

window.location="displaypelajar.php"    
</script>