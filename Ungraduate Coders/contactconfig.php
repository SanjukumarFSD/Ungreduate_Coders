<?php
session_start();
// server connectivity
$connect = mysqli_connect('localhost', 'id20886267_ungraduatecoders', 'Kumar@123', 'id20886267_coderdb');
// create table data
if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    
$table = " insert into contactus(name, mobile, email, comment) values('$fname', '$phone', '$email', '$comment')";
$output = mysqli_query($connect, $table);

// send email 
$to="sanjaysonkariya8561@gmail.com";
$subject="Feedback for Ungraduate Coders";
$body="Customer Name - $fname 
Mobile Number - $phone 
Customer Email - $email 
Comment - $comment";
$sender="from:sanjaysonkariya8561@gmail.com";
if(mail($to,$subject,$body,$sender))
{
    $_SESSION['status']="Thank you for your feedback";
    header("location:contactus.php");
    // echo '<script>
    // alert("Your feedback submitted")
    // </script>';
}else{
    echo "Something went wrong";
    // echo '<script>
    // alert("Your feedback not submitted")
    // </script>';
}
}
?>