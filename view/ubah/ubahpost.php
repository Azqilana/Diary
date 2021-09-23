<?php
require('../../proses/function.php');

// ambil data di URL
$id = $_GET["id"];

// query data post berdasarkan id
$p = query("SELECT * FROM user_post WHERE id = $id")[0];
if (isset($_POST["submit"])) {
     var_dump($_POST);
     var_dump($_FILES);

     //fitur ubah postingan
     // cek apakah data berhasil diubah atau tidak
     if (ubahpost($_POST) > 0) {
          // var_dump(ubahpost($_POST));
          echo "
                    <script>
                    alert('data berhasil diubah!');
                         document.location.href = '../index.php';
                    </script>
               ";
     } else {
          die();
          echo "
                    <script>
                         alert('data gagal diubah!');
                         document.location.href = '../../proses/function.php';
                    </script>
               ";
     }
     //selesai ubah postingan
     die();
}

?>
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
                    <!-- <li><a class="fas fa-user" href="../profil.php"> Profil </a></li> -->
                    <li><a class="fas fa-sign-out-alt" href="../logout.php"> Keluar </a></li>
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
               <form action="" method="post" enctype="multipart/form-data">
                    <ul>
                         <li>
                              <div class="avatar"><img src="../img/azqilana2.jpg" alt="azqilana"></div>
                              <h4><?= $p['username']; ?></h4>
                              <ul>
                                   <li>
                                        <input type="hidden" name='id' value="<?= $p['id'] ?>">
                                        <input type="hidden" name="gambarLama" value="<?= $p["gambar"]; ?>">
                                        <input type="date" name="tanggal_post" id="tanggal_post" value="<?= $p['tanggal_post'] ?>" required readonly>
                                   </li>
                                   <li><input type="file" name="gambar" id="gambar"></li>
                                   <li><textarea name="post" id="post" rows="5" required placeholder="Tulis Postingan Disini"><?= $p['post'] ?></textarea></li>
                                   <li><img src="../img/<?= $p['gambar'] ?>" alt=""></li>
                                   <li><button class="update" type="submit" name="submit">UPDATE</button></li>
                              </ul>
                         </li>
                    </ul>
               </form>
          </div>
     </main>
</body>
<script src="../js/script.js"></script>

</html>