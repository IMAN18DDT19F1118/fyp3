<?php
include ('connection.php');

$uid =$_GET['id'];

$deletedata="DELETE FROM myuser WHERE id='$uid'";
$resultdelete=$conn->query($deletedata);

?>