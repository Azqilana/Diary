<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
     <link rel="stylesheet" href="../css/index.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
     <title>Diary</title>
</head>

<body>
     <header>
          <nav>
               <ul>
                    <li><a class="fas fa-home" href="../index.php"> Beranda </a></li>
                    <li><a class="fas fa-user" href="../profil.php"> Profil </a></li>
                    <li><a class="fas fa-sign-out-alt" href="logout.php"> Keluar </a></li>
               </ul>
               <div class="menu-toggle">
                    <input type="checkbox">
                    <div class="avatar"><img src="../img/azqilana2.jpg" alt="azqilana"></div>
                    <h4>Muhammad Azqilana</h4>
               </div>
          </nav>
     </header>
     <main>
          <div class="mypost">
               <form action="" method="post">
                    <ul>
                         <li>
                              <div class="avatar"><img src="../img/azqilana2.jpg" alt="azqilana"></div>
                              <h4>Muhammad Azqilana</h4>
                              <ul>
                                   <li><textarea name="post" id="post" rows="5" required></textarea></li>
                                   <li><button type="submit">UPDATE</button></li>
                              </ul>
                         </li>
                    </ul>
               </form>
          </div>
</body>
<script src="../js/script.js"></script>

</html>