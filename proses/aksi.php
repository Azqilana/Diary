<?php
require('../proses/function.php');


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

     // fitur daftar

          if (register($_POST) > 0) {
               echo "<script> 
               alert(' Selamat Berhasil Mendaftar Akun');</script>";
          } else {
               echo mysqli_error($conn);
          }
     //selesai daftar

     // fitur masuk
          $username = $_POST["username"];
          $password = $_POST["password"];

          $result = mysqli_query($conn, "SELECT * FROM user_login WHERE username = '$username'");

          // cek username
          if (mysqli_num_rows($result) === 1) {

               $row = mysqli_fetch_assoc($result);
               if (password_verify($password, $row["password"])) {
                    ob_start();
                    header('Location:index.php');
                    ob_end_flush();
                    die();
               }
          }

          $error = true;
     // selesai login

     //fitur tambah postingan 

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
     //selesai tambah postingan

     //fitur ubah postingan
          // cek apakah data berhasil diubah atau tidak
          if (ubahpost($_POST) > 0) {
               // var_dump(ubahpost($_POST));
               // die();
               echo "
                    <script>
                    alert('data berhasil diubah!');
                         document.location.href = '../index.php';
                    </script>
               ";
          } else {
               echo "
                    <script>
                         alert('data gagal diubah!');
                         document.location.href = '';
                    </script>
               ";
          }
     //selesai ubah postingan

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
