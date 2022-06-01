<?php
include('connection.php');

//u can use $_POST["]->hide useer value or $_GET["]
$uic = $_POST['uic'];  
$uname=$_POST['unama'];
$upassword = $_POST['upassw'];
$utel = $_POST['unotel'];
$umail = $_POST['uemail'];

$uidusr=$_POST['id'];//drp input hidden

$sql = "UPDATE staff SET IC_Staff='$uic',Nama='$uname',katalaluan='$upassword',NoTel='$utel',email='$umail' where ID='$uidusr'";

if($conn->query($sql)===TRUE){
    echo "Record has been update successfully";
}
else{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();


?>

<script>
    window.location="displaystaff.php"
</script>