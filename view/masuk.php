<?php
require('../proses/aksi.php');

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
                         <td colspan="2"><button type="submit" name="submit">Login</button></td>
                    </tr>
                    <tr>
                         <td colspan="2"><a>Don't Have an Account?<a href="daftar.php">Let's Register</a></a></td>
                    </tr>
               </table>
          </form>
     </main>
</body>

</html>