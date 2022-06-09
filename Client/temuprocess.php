<?php
include('connection.php');
session_start();

$ic = $_SESSION["ic"];

//You can use $_POST['']-->hide user value OR $_GET[''] show user value(url)
$kaun=$_POST['kaunselor'];
$date=$_POST['date'];
$time=$_POST['schedule_time'];
$status = "Belum Diluluskan";


$sql="INSERT INTO temu_janji(IC_Pelajar, IC_Kaunselor, tarikh,masa, pilihan) VALUE ('$ic', '$kaun', '$date','$time','$status')";
if($conn->query($sql)===TRUE){
    header("location: displaystud.php");
}
else{
}
$conn->close();
