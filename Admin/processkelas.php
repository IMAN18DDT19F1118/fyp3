<?php
include('connection.php');

//u can use $_POST["]->hide useer value or $_GET["]
$ujabatan=$_POST['ujabatan'];
$unama=$_POST['unama'];

$uidusr=$_POST['id'];//drp input hidden

$sql = "UPDATE kelas SET Jabatan='$ujabatan',namakelas='$unama' where ID='$uidusr'";

if($conn->query($sql)===TRUE){
    echo "Record has been update successfully";
}
else{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();


?>

<script>
    window.location="displaykelas.php"
</script>