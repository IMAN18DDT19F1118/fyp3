<?php
include('connection.php');
session_start();

$ic = $_SESSION["ic"];

//You can use $_POST['']-->hide user value OR $_GET[''] show user value(url)
$pel = $_POST['pelajar'];
$kaun=$_POST['kaunselor'];
$date=$_POST['date'];
$time=$_POST['schedule_time'];


$sql="INSERT INTO temu_janji(IC_Pa, IC_Pelajar ,IC_Kaunselor, tarikh,masa) VALUE ('$ic', '$pel' ,'$kaun', '$date','$time')";
if($conn->query($sql)===TRUE){
    header("location: displaypa.php");
}
else{
}
$conn->close();