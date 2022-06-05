<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<style>
body{   
    background: #eee;  
    background: url(Kaunselor.jpg);
    background-size: cover;
    background-position:top;
}  
#frm{  
    border: solid gray 1px;  
    width:25%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background: grey;  
    padding: 50px;  
}  

.form{
  font-family: "Roboto",sans-serif;
  position: relative;
  z-index: 1;
  background-color: #FFFFFF;
  opacity: 99%;
  max-width: 260px;
  margin: 200px auto 100px;
  padding: 10px 45px 30px 45px;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  border-radius: 10px;
}

.form p{
  font-size: 15px;
  padding: 1px;
  text-align: center;
}
.form input{
  outline: 0;
  border-radius: 10px;
  background: #F2F2F2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form input:hover{
  background-color: #D3F8F9;
  transition: all 1s ease 0s;
}
.form input:focus{
  background-color: #D3F8F9;
  transition: all 1s ease 0s;
}
.form button{
  text-transform: uppercase ;
  outline: 0;
  border-radius: 10px;
  background: #7FFFD4;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #7FFFD4;
  font-size: 14px;
  cursor: pointer;
}
.form button:hover, .form button:active, .form button:focus{
  background-color: #0000FF ;
  transition: all 1s ease 0s;
}

.form .message{
  margin: 15px 0 0;
  color: #B3B3B3;
  font-size: 12px;
}
.form  .message{
  color: #06C5CF;
  text-decoration: none ;
}
h2{
    font-size : 55px;
}
</style>
<body> 
    <center> 
    <h2>Sistem Kaunseling PTSS</h2>
</center>
    <div id = "frm" class ="form">  
        <h1>LOGIN</h1>  
        <form name="f1" action = "login.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> Username </label>  
                <input type = "text" id ="ic" name  = "ic_admin" required />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" required />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" name ="login"/>  
            </p>  
        </form>  
    </div>  
    <script>  
            function validation()  
            {  
                var id=document.f1.ic.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("IC and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("IC is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>
</html>