<?php
require('../proses/function.php');

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$p = query("SELECT * FROM user_post WHERE id = $id")[0];
if (isset($_POST["submit"])) {
     // fitur hapus
     if (hapus($_POST) > 0) {
          // var_dump(ubahpost($_POST));
          // die();
          echo "
          	<script>
          	alert('data berhasil dihapus!');
          		document.location.href = 'index.php';
          	 </script>
          ";
     } else {
          echo "
     		<script>
     			alert('data gagal dihapus!');
     			document.location.href = '';
     		</script>
     	";
     }
     // selesai hapus
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
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
     <title>Diary</title>

</head>

<body>
     <main>
          <div class="mypost">
               <form action="" method="post">
                    <ul>
                         <li>
                              <div class="avatar"><img src="img/azqilana2.jpg" alt="azqilana"></div>
                              <h4><?= $p['username']; ?></h4>
                              <ul>
                                   <li>
                                        <input type="hidden" name='id' value="<?= $p['id'] ?>">
                                        <input type="date" name="tanggal_post" id="tanggal_post"
                                             value="<?= $p['tanggal_post'] ?>" required readonly>
                                   </li>
                                   <li><textarea name="post" id="post" rows="5" required><?= $p['post'] ?></textarea>
                                   </li>
                                   <li><button class="hapus" type="submit" name="submit">DELETE</button></li>
                              </ul>
                         </li>
                    </ul>
               </form>
          </div>
     </main>
</body>
<script src="../js/script.js"></script>

</html>