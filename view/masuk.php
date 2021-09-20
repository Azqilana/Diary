<?php
require('../proses/koneksi.php');
session_start();

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
     $id = $_COOKIE['id'];
     $key = $_COOKIE['key'];

     // ambil username berdasarkan id
     $result = mysqli_query($conn, "SELECT username FROM user_login WHERE id = $id");
     $row = mysqli_fetch_assoc($result);

     // cek cookie dan username
     if ($key === hash('sha256', $row['username'])) {
          $_SESSION['login'] = true;
     }
}

if (isset($_SESSION["login"])) {
     header("Location: index.php");
     exit;
}


if (isset($_POST["login"])) {

     $username = $_POST["username"];
     $password = $_POST["password"];

     $result = mysqli_query($conn, "SELECT * FROM user_login WHERE username = '$username'");

     // cek username
     if (mysqli_num_rows($result) === 1) {

          // cek password
          $row = mysqli_fetch_assoc($result);
          if (password_verify($password, $row["password"])) {
               // set session
               $_SESSION["login"] = true;

               // cek remember me
               if (isset($_POST['remember'])) {
                    // buat cookie
                    setcookie('id', $row['id'], time() + 60);
                    setcookie('key', hash('sha256', $row['username']), time() + 60);
               }

               header("Location: index.php");
               exit;
          }
     }

     $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
     <link rel="stylesheet" href="css/logreg.css">
     <title>Diary | Login</title>
</head>

<body>
     <main>
          <form action="" method="post">
               <table>
                    <tr>
                         <th colspan="2">
                              <h4>Login</h4>
                         </th>
                    </tr>
                    <tr>
                         <td><a class="fas fa-at"></a></td>
                         <td><input type="text" name="username" id="username"></td>
                    </tr>
                    <tr>
                         <td><a class="fas fa-lock"></a></td>
                         <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                         <td colspan="2"><button type="submit" name="login">Login</button></td>
                    </tr>
                    <tr>
                         <td colspan="2"><a>Don't Have an Account?<a href="daftar.php">Let's Register</a></a></td>
                    </tr>
               </table>
          </form>
     </main>
</body>

</html>