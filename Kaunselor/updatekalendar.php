<?php
include('connection.php');

//u can use $_POST["]->hide useer value or $_GET["]
$uperkara=$_POST['perkarau'];
$utarikh=$_POST['tarikhu'];
$umasa=$_POST['masau'];
$utempoh=$_POST['tempohu'];
$uidusr=$_POST['id'];//drp input hidden

$sql = "UPDATE kaunseloraction SET perkara='$uperkara',tarikh='$utarikh',masa='$umasa',tempoh='$utempoh' where id='$uidusr'";

if($conn->query($sql)===TRUE){
    echo "Order has been update successfully";
}
else{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();


?>

<script>
    window.location="kalendar.php"
</script>