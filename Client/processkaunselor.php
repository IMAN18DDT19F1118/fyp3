<?php
include('connection.php');

//u can use $_POST["]->hide useer value or $_GET["]
$uic=$_POST['uic'];
$unama=$_POST['unama'];
$upassword=$_POST['upassw'];
$uidusr=$_POST['id'];//drp input hidden

$sql = "UPDATE kaunselor SET IcKaunselor='$uic',Nama='$unama',katalaluan='$upassword' where ID='$uidusr'";

if($conn->query($sql)===TRUE){
    echo "Record has been update successfully";
}
else{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();


?>

<script>
    window.location="displaykaunselor.php"
</script>