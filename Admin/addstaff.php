<?php
include('connection.php');

//You can use $_POST['']-->hide user value OR $_GET[''] show user value(url)
$ic = $_POST['ic'];  
$fname=$_POST['fnama'];
$password = $_POST['passw'];
$tel = $_POST['notel'];
$mail = $_POST['email'];


//error checking
if(strlen($password)<6)
{
    //messagebox--->alert-->"Minimum number of character for name is 10"
    ?>
        <script>
            alert("Kata laluan tidak sah");
            window.location="staff.php.";
        </script>
    <?php
}
elseif(strlen($ic)<11)
{
    //messagebox--->alert-->"Minimum number of character for name is 10"
    ?>
        <script>
            alert("Kad Pengenalan anda tidak sah");
            window.location="staff.php.";
        </script>
    <?php
}
else
{
    $sql = "INSERT INTO staff (IC_Staff, Nama, katalaluan, NoTel,email) VALUES ('$ic', '$fname', '$password', '$tel','$mail')";

    //execute
    if($conn->query($sql)===TRUE){
        ?>
        <script>
            alert("Success");
            window.location="displaystaff.php.";
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