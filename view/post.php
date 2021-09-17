<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/index.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
     <title>Diary</title>
</head>

<body>
     <header>
          <nav>
               <ul>
                    <li><a class="fas fa-home" href="index.html"> Beranda </a></li>
                    <li><a class="fas fa-user" href="profil.html"> Profil </a></li>
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
          <div class="viewpost">
               <div class="avatar"><img src="img/azqilana2.jpg" alt="azqilana"></div>
               <h4>Muhammad Azqilana</h4>
               <div class="navbar">
                    <ul>
                         <li><a class="fas fa-edit" href="ubah/ubahpost.html">Edit</a></li>
                         <li><a class="fas fa-trash" href="">Hapus</a></li>
                    </ul>
                    <div class="menu-post">
                         <input type="checkbox">
                         <a class="fas fa-ellipsis-v"></a>
                    </div>
               </div>
               <textarea name="post" id="post" disabled readonly></textarea>
          </div>
     </main>
</body>
<script src="js/script.js"></script>

</html>