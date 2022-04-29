<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test";

error_reporting(E_ERROR | E_WARNING | E_PARSE);

$conn = mysqli_connect($servername,$username,$password,$dbname);

//Option2
//$conn=new mysqli("localhost","root","","test");

//Check Connection
if(!$conn)
{
    die("Connection Failed :".mysqli_connect_error());

}
else{
    echo"Connection is succesfully created";
}
?>