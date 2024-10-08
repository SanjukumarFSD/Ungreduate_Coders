<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="signstyle.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
        <?php
        if(isset($_POST['submit']))
        {
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordRepeat = $_POST['repeat_password'];
            
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();
            if (empty($fullname) OR empty($email) OR empty($password)) {
              array_push($errors,"All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              array_push($errors,"Email is not valid");
            }
            if (strlen($password)<8) {
              array_push($errors,"Passsword must be at least 8 charactes long");
            }
            if ($password!==$passwordRepeat) {
              array_push($errors,"Passsword does not match");
            }

            require_once "database.php";
            $sql = "SELECT * FROM signup WHERE email='$email'";
            $result = mysqli_query($conn,$sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
              array_push($errors,"Email already exists!");
            }


            if (count($errors)>0) {
              foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
              }
            }else{
              $sql = "INSERT INTO signup(full_name, email, password) values( ?, ?, ?)";
              $stmt = mysqli_stmt_init($conn);
              $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
              if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullname, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
              }else {
                die("Something went wrong");
              }

            }   
        }
        ?>      
          <h2>Sign Up</h2>
          <form action="" method="post">
            <input type="text" placeholder="Full Name" name="fullname" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="password" placeholder="Confirm Password" name="repeat_password" required>
            <button type="submit" name="submit">Sign Up</button><br><br>
            <p>By clicking the Sign Up button, you agree to our <a href ='#'> Terms and Conditions</a> and <a href='#'>Privacy Policy</a></p> 
            <p style="text-align:center;">Already have an account? <a href ='signin.php'> Sign in</a></p>
          </form>
        </div>
      </div>

</body>
</html>

