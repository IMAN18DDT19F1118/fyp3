<?php
include('connection.php');

//You can use $_POST['']-->hide user value OR $_GET[''] show user value(url)
$date=$_POST['date'];
$time=$_POST['schedule_time'];

$uidt=$_POST['id'];//drp input hidden

$sql="UPDATE temu_janji SET tarikh='$date', masa='$time' where id='$uidt'";
if($conn->query($sql)===TRUE){
    echo"New Record created successfully";
}
else{
    echo"Error".$sql."<br>".$conn->error;
}
$conn->close();
?>
<script>
//direct user to page display.php
    window.location="displaypa.php"
</script>
    <?php
?>