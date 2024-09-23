<?php
ob_start();

session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="signstyle.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div id="err" class="text text-danger font-weight-bold text-center "></div></br>
          <h2>Sign In</h2>
          <form action="" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login" value="login">Sign In</button><br><br>
            <p style="text-align:center;">Create a new account? <a href ='signup.php'> Sign up</a></p>
          </form>
        </div>
      </div>
</body>
</html>

<?php

    
        if (isset($_POST["login"])) {
          $email = $_POST["email"];
          $password = $_POST["password"];
          require_once "database.php";
          $sql = "SELECT * FROM signup WHERE email ='$email'";
          $result = mysqli_query($conn, $sql);
          
          if(mysqli_num_rows($result)>0){
              
             $user = mysqli_fetch_assoc($result);
             
             $pass=$user['password'];
             
             $verify=password_verify($password,$pass);
             
            if($verify){
                $_SESSION['username']=$user['email'];
                
                //echo "<div class='alert alert-danger'>Password does not match</div>";
                 header("location: compiler.php");
                
               
            }else{
                echo '<script>
                document.getElementById("err").innerHTML="PASSWORD DOES NOT MATCHED"
                </script>';
                
            }
           

            } else {
               echo '<script>
                document.getElementById("err").innerHTML="NO RECORD FOUND"
                </script>';
            }
           
          
        }
        
 ?>



