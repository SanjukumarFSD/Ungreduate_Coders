<?php
    // Server Connectivity
    $server = "localhost";
    $user = "id20886267_ungraduatecoders";
    $pass = "Kumar@123";
    $db = "id20886267_coderdb";
    $conn = mysqli_connect($server,$user,$pass,$db);
    if (!$conn) {
        die("something went wrong;");
    }
?>