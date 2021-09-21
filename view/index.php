<?php
require('../proses/function.php');

$post = query("SELECT * FROM user_post");


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

     // cek apakah data berhasil di tambahkan atau tidak
     if (tambah($_POST) > 0) {
          // var_dump(tambah($_POST));
          // die();
          echo "
          		<script>
          			alert('data berhasil ditambahkan!');
          			document.location.href = 'index.php';
          		</script>
          	";
     } else {
          echo "
               	<script>
               		alert('data gagal ditambahkan!');
               		document.location.href = 'index.php';
               	</script>
               ";
     }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
     <link rel="stylesheet" href="css/index.css">
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
          <div class="mypost">
               <form action="" method="post">
                    <ul>
                         <li>
                              <div class="avatar"><img src="img/azqilana2.jpg" alt="azqilana"></div>
                              <h4>Muhammad Azqilana</h4>
                              <ul>
                                   <li><textarea name="post" id="post" rows="5" required></textarea></li>
                                   <li><button type="submit" name="submit">POST</button></li>
                              </ul>
                         </li>
                    </ul>
               </form>
          </div>
          <?php foreach ($post as $p) : ?>
               <div class="post">
                    <div class="avatar"><img src="img/azqilana2.jpg" alt="azqilana"></div>
                    <h4><?= $p['username']; ?></h4>
                    <div class="navbar">
                         <ul>
                              <li><a class="fas fa-edit" href="ubah/ubahpost.php?id=<?= $p["id"]; ?>">Edit</a></li>
                              <li><a class="fas fa-trash" href="hapus.php?id=<?= $p["id"]; ?>">Hapus</a></li>
                         </ul>
                    </div>
                    <?= $p['tanggal_post'] ?>
                    <fieldset><?= $p['post'] ?></fieldset>
               </div>
          <?php endforeach; ?>
     </main>
</body>
<script src="js/script.js"></script>

</html>