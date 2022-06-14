<?php
include('connection.php');

//You can use $_POST['']-->hide user value OR $_GET[''] show user value(url)
$ic=$_POST['ic'];
$jabatan=$_POST['jabatan'];
$fnama=$_POST['fnama'];



//error checking
if(strlen($fnama)<3)
{
    //messagebox--->alert-->"Minimum number of character for name is 10"
    ?>
        <script>
            alert("Kelas tidak dapat dikenalpasti");
            window.location="kelas.php.";
        </script>
    <?php
}

else
{
    $sql="INSERT INTO kelas(Jabatan,namakelas)VALUES('$jabatan','$fnama')";//create command not execute yet

    //execute
    if($conn->query($sql)===TRUE){
        ?>
        <script>
            alert("Success");
            window.location="displaykelas.php.";
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