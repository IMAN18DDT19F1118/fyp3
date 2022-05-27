<?php
include('connection.php');

//You can use $_POST['']-->hide user value OR $_GET[''] show user value(url)
$kaun=$_POST['kaunselor'];
$date=$_POST['date'];
$time=$_POST['schedule_time'];


$sql="INSERT INTO temu_janji(tarikh,masa,NamaKaunselor) VALUE ('$date','$time','$kaun')";
if($conn->query($sql)===TRUE){
    echo"New Record created successfully";
}
else{
    echo"Error".sql."<br>".$conn->error;
}
$conn->close();
?>
<script>
//direct user to page display.php
    window.location="displaystud.php"
</script>
    <?php
?>