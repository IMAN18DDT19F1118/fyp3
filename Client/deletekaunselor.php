<?php
include ('connection.php');

$uid =$_GET['id'];

$deleteusr="DELETE FROM kaunselor WHERE ID='$uid'";
$resultdelete=$conn->query($deleteusr);

?>

<script>

window.location="displaykaunselor.php"    
</script>