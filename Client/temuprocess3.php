<?php
include('connection.php');
session_start();

$ic = $_SESSION["ic"];

//You can use $_POST['']-->hide user value OR $_GET[''] show user value(url)
$kaun=$_POST['kaunselor'];
$date=$_POST['date'];
$time=$_POST['schedule_time'];


$sql="INSERT INTO temu_janji(IC_Staff, IC_Kaunselor, tarikh,masa) VALUE ('$ic', '$kaun', '$date','$time')";
if($conn->query($sql)===TRUE){
    header("location: displaystaff.php");
}
else{
}
$conn->close();
