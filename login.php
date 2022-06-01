<?php      
    include('connection.php');  
    $ic = $_POST['ic_admin'];  
    $password = $_POST['pass'];  
    session_start();
      
        //to prevent from mysqli injection  
        $ic = stripcslashes($ic);  
        $password = stripcslashes($password);  
        $ic = mysqli_real_escape_string($conn, $ic);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from admin where IC_Admin = '$ic' and Password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
           echo "login successful";
			$_SESSION['ic'] = $ic;
			header('location:Admin/Admin.php');
		}else{
            ?>
            <script>
                alert("IC / Katalaluan tidak tepat");
                window.location="index.php";
            </script>
            <?php
		}

        $sql = "select *from kaunselor where IcKaunselor = '$ic' and katalaluan = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "login successful";
             $_SESSION['ic'] = $ic;
             header('location:Kaunselor/kaunselor.php');
         }else{
             ?>
             <script>
                 alert("IC / Katalaluan tidak tepat");
                 window.location="index.php";
             </script>
             <?php

         }

         $sql = "select * from pelajar where IC_Pelajar = '$ic' and katalaluan = '$password'";  
         $result = mysqli_query($conn, $sql);  
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
         $count = mysqli_num_rows($result);  
           
         if($count == 1){  
             echo "login successful";
              $_SESSION['ic'] = $row["ID"];
              header('location:Client/studPage.php');
          }else{
              ?>
              <script>
                  alert("IC / Katalaluan tidak tepat");
                  window.location="index.php";
              </script>
              <?php
 
          }
        
?>  