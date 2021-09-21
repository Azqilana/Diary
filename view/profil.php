<?php
require('../proses/function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
     <link rel="stylesheet" href="css/profil.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
     <title>Diary</title>
</head>

<body>
     <header>
          <nav>
               <ul>
                    <li><a class="fas fa-home" href="index.php"> Beranda </a></li>
                    <li><a class="fas fa-user" href="profil.php"> Profil </a></li>
                    <li><a class="fas fa-sign-out-alt" href="logout.php"> Keluar </a></li>
               </ul>
               <div class="menu-toggle">
                    <input type="checkbox">
                    <div class="avatar"><img src="img/azqilana2.jpg" alt="azqilana"></div>
                    <h4>Muhammad Azqilana</h4>
               </div>
          </nav>
     </header>
     <main>
          <div class="profil">
               <a class="fas fa-edit" href="ubah/ubahprofil.php"></a>
               <div class="avatar-profil">
                    <img src="img/azqilana2.jpg" alt="azqilana">
               </div>
               <div class="sosmed">
                    <a href="" class="fab fa-facebook"></a>
               </div>
               <table>
                    <tr>
                         <td><a class="fas fa-user"></a></td>
                         <td><input type="text" name="longname" id="longname" value="" disabled readonly></td>
                    </tr>
                    <tr>
                         <td><a class="fas fa-at"></a></td>
                         <td><input type="text" name="username" id="username" value="" disabled readonly></td>
                    </tr>
                    <tr>
                         <td><a class="far fa-envelope"></a></td>
                         <td><input type="email" name="email" id="email" value="" disabled readonly></td>
                    </tr>
                    <tr>
                         <td><a class="fas fa-mobile"></a></td>
                         <td><input type="number" name="nomortelephon" id="nomortelephon" value="" disabled readonly></td>
                    </tr>
                    <tr>
                         <td><a class="fas fa-birthday-cake"></a></td>
                         <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" value="2000-06-21" disabled readonly></td>
                    </tr>
                    <tr>
                         <td><a class="fas fa-venus-mars"></a></td>
                         <td><input type="text" name="jenis_kelamin" id="jenis_kelamin" value="" disabled readonly></td>
                    </tr>
                    <tr>
                         <td><a class="fas fa-map-marker-alt"></a></td>
                         <td><input type="text" name="tempat_tinggal" id="tempat_tinggal" value="" disabled readonly></td>
                    </tr>
                    <tr>
                         <td><a class="fas fa-building"></a></td>
                         <td><input type="text" name="pekerjaan" id="pekerjaan" value="" disabled readonly></td>
                    </tr>
                    <tr>
                         <td><a class="fas fa-user-graduate"></a></td>
                         <td><input type="text" name="sekolah" id="sekolah" value="" disabled readonly></td>
                    </tr>
               </table>
          </div>
     </main>
</body>
<script src="js/script.js"></script>

</html>