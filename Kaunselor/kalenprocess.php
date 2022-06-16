<?php
include('connection.php');

//You can use $_POST['']-->hide user value OR $_GET[''] show user value(url)
$perkara=$_POST['uperkara'];
$tarikh=$_POST['utarikh'];
$masa=$_POST['umasa'];
$tempoh=$_POST['utempoh'];
session_start();
$kaunselorid = $_SESSION['ic'];


{
    $sql="INSERT INTO kaunseloraction(idnamakaunselor, perkara,tarikh,masa,tempoh)VALUES('$kaunselorid', '$perkara','$tarikh','$masa','$tempoh')";//create command not execute yet

    //execute
    if($conn->query($sql)===TRUE){
        ?>
        <script>
            alert("Success");
            window.location="kalendar.php.";
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