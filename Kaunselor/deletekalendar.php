<?php
include ('connection.php');

$uid =$_GET['id'];

$deletekalendar="DELETE FROM kauns WHERE id='$uid'";
$resultdelete=$conn->query($deletekalendar);

?>

<script>
var resultdelete = confirm("Want to delete?");
if (resultdelete) {
    //Logic to delete the item
}
window.location="kalendar.php"    
</script>