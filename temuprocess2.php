<?php
include('connection.php');

//You can use $_POST['']-->hide user value OR $_GET[''] show user value(url)
$date=$_POST['date'];
$time=$_POST['schedule_time'];

$sql="INSERT INTO temu_janji(tarikh,masa) VALUE ('$date','$time')";
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
    window.location="displaypa.php"
</script>
    <?php
?>