<?php
include('connection.php');

//You can use $_POST['']-->hide user value OR $_GET[''] show user value(url)
$ic = $_POST['ic'];  

$fname=$_POST['fnama'];

$password = $_POST['passw'];
$tel = $_POST['notel'];
$pend = $_POST['nopend'];
$mail = $_POST['email'];


//error checking
if(strlen($password)<6)
{
    //messagebox--->alert-->"Minimum number of character for name is 10"
    ?>
        <script>
            alert("Kata laluan tidak sah");
            window.location="pelajar.php.";
        </script>
    <?php
}
elseif(strlen($ic)<11)
{
    //messagebox--->alert-->"Minimum number of character for name is 10"
    ?>
        <script>
            alert("Kad pengenalan anda tidak sah");
            window.location="pelajar.php.";
        </script>
    <?php
}
elseif(strlen($pend)<10)
{
    //messagebox--->alert-->"Minimum number of character for name is 10"
    ?>
        <script>
            alert("Kad Pengenalan anda tidak sah");
            window.location="kaunselor.php.";
        </script>
    <?php
}
else
{
    $sql = "INSERT INTO pelajar (IC_Pelajar, Nama, katalaluan, NoTel, NoPendaftaran,email) VALUES ('$ic', '$fname', '$password', '$tel', '$pend','$mail')";

    //execute
    if($conn->query($sql)===TRUE){
        ?>
        <script>
            alert("Success");
            window.location="displaypelajar.php.";
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