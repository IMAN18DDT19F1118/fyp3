<?php
include('Client/connection.php');

//You can use $_POST['']-->hide user value OR $_GET[''] show user value(url)
$ic=$_POST['ic'];
$fnama=$_POST['fnama'];
$password=$_POST['passw'];



//error checking
if(strlen($password)<6)
{
    //messagebox--->alert-->"Minimum number of character for name is 10"
    ?>
        <script>
            alert("Minimum number of character 6");
            window.location="kaunselor.php.";
        </script>
    <?php
}

else
{
    $sql="INSERT INTO kaunselor(IcKaunselor,Nama,katalaluan)VALUES('$ic','$fnama','$password')";//create command not execute yet

    //execute
    if($conn->query($sql)===TRUE){
        ?>
        <script>
            alert("Success");
            window.location="displaykaunselor.php.";
        </script>
    <?php
    }
    else{
        echo"Error".sql."<br>".$conn->error;
    }
    $conn->close();
    ?>
    
    <?php
}
?>