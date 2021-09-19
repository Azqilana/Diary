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
     $gambar = "logo.png";
     $nomortelephon = 0;
     $jenis_kelamin = "";
     $tanggal_lahir = "";
     $tempat_tinggal = "";
     $pekerjaan = "";
     $sekolah = "";



     $result = mysqli_query($conn, "SELECT username FROM user_login WHERE username = '$username'");


     if (mysqli_fetch_assoc($result)) {
          echo "<script> alert('Maaf Udah Ada yang Punya');</script>";

          return false;
     }

     $password = password_hash($password, PASSWORD_DEFAULT);

     // tambahkan baru ke database
     $query =  "INSERT INTO user_login VALUES(null,'$longname', '$username','$email', '$password');";
     $query .= "INSERT INTO user_profile VALUES
     (null,'$longname', '$username','$email','$nomortelephon','$gambar','$jenis_kelamin','$tanggal_lahir','$tempat_tinggal','$pekerjaan','$sekolah')";
     mysqli_multi_query($conn, $query);



     return mysqli_affected_rows($conn);
}
?>
