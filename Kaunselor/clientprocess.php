<?php
include('connection.php');

//You can use $_POST['']-->hide user value OR $_GET[''] show user value(url)
$client=$_POST['clients'];
$matrik=$_POST['matric'];
$tarikh=$_POST['ctarikh'];
$masa=$_POST['cmasa'];
$status=$_POST['cstatus'];

{
    $sql="INSERT INTO klien(namaPelajar,noMatrik,tarikh,masa,pilihan)VALUES('$client','$matrik','$tarikh','$masa','$status')";//create command not execute yet

    //execute
    if($conn->query($sql)===TRUE){
        ?>
        <script>
            alert("Success");
            window.location="appointment.php.";
        </script>
    <?php
    }
    else{
        echo"Error".$sql."<br>".$conn->error;
    }
    $conn->close();
    ?>
    
    <?php
}
?>