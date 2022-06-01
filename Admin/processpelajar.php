<?php
include('connection.php');

//u can use $_POST["]->hide useer value or $_GET["]
$uic = $_POST['uic'];  
$uname=$_POST['unama'];
$upassword = $_POST['upassw'];
$utel = $_POST['unotel'];
$upend = $_POST['unopend'];
$umail = $_POST['uemail'];

$uidusr=$_POST['id'];//drp input hidden

$sql = "UPDATE pelajar SET IC_Pelajar='$uic',Nama='$uname',katalaluan='$upassword',NoTel='$utel',NoPendaftaran='$upend',email='$umail' where ID='$uidusr'";

if($conn->query($sql)===TRUE){
    echo"New Record created successfully";
}
else{
    echo"Error".sql."<br>".$conn->error;
}
$conn->close();


?>

<script>
    window.location="displaypelajar.php"
</script>