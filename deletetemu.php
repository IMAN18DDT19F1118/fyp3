<?php
include ('connection.php');

$uid =$_GET['id'];

$deletedata="DELETE FROM temu_janji WHERE id='$uid'";
$resultdelete=$conn->query($deletedata);

?>

<script>

window.location="displaystud.php"    
</script>