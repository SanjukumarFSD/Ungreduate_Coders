<?php
session_start();
// server connectivity //
$connect = mysqli_connect('localhost', 'id20886267_ungraduatecoders', 'Kumar@123', 'id20886267_coderdb');
// create table data //
if(isset($_POST['submit']))
{
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    
$table = " insert into registration(firstname, lastname, birthday, gender, email, phonenumber) values('$firstName', '$lastName', '$birthday', '$gender', '$email', '$phone')";
$output = mysqli_query($connect, $table);
if ($output) {
    $_SESSION['status']="Registered Successfully";
    header("location:registration.php");
}else{
    echo "Something went wrong";
}

}
?>