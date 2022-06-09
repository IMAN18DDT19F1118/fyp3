<?php
include('connection.php');

//You can use $_POST['']-->hide user value OR $_GET[''] show user value(url)
$perkara=$_POST['uperkara'];
$tarikh=$_POST['utarikh'];
$masa=$_POST['umasa'];
$tempoh=$_POST['utempoh'];


{
    $sql="INSERT INTO kaunseloraction(perkara,tarikh,masa,tempoh)VALUES('$perkara','$tarikh','$masa','$tempoh')";//create command not execute yet

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