<?php
$servername="localhost";
$username="root";
$password="";
$dbname="kaunseling";

error_reporting(E_ERROR | E_WARNING | E_PARSE);




$conn=new mysqli("localhost","root","","kaunseling");

//Check Connection
if(!$conn)
{
    die("Connection Failed :".mysqli_connect_error());

}
else{
    echo"Connection is succesfully created";
}
?>