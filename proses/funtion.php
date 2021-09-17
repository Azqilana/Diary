<?php
require('koneksi.php');
session_start();
function query($query)
{
     global $conn;
     $result = mysqli_query($conn, $query);
     $rows = [];
     while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
     }
     return $rows;
}
function register($register)
{
     global $conn;

     $longname = stripslashes(htmlspecialchars(htmlspecialchars_decode($register['longname'])));
     $username = stripslashes(htmlspecialchars(htmlspecialchars_decode($register['username'])));
     $email = stripslashes(htmlspecialchars(htmlspecialchars_decode($register['email'])));
     $password = mysqli_escape_string($conn, $register['password']);

     $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

     if (mysqli_fetch_assoc($result)) {
          echo "<script> alert('Maaf Udah Ada yang Punya');</script>";

          return false;
     }

     $password = password_hash($password, PASSWORD_DEFAULT);

     // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES(null,'$longname', '$username','$email', '$password')");
     // var_dump($kirim);
     // die;

     return mysqli_affected_rows($conn);
}

