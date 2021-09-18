<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
     <link rel="stylesheet" href="../css/ubah.css">
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
          <div class="profil">
               <div class="updategambar">
                    <div class="gantigambar">
                         <img src="../img/azqilana2.jpg" alt="azqilana">
                    </div>
                    <form action="" method="post">
                         <table>
                              <tr>
                                   <td><input type="file" name="gambar" id="gambar"></td>
                              </tr>
                              <tr>
                                   <td><button type="submit">Update</button></td>
                              </tr>
                         </table>
                    </form>
               </div>
               <form class="updatedata1" action="" method="post">
                    <table>
                         <tr>
                              <th colspan="2">Data Umum</th>
                         </tr>
                         <tr>
                              <td><a class="fas fa-user">
                              <td><input type="text" name="longname" id="longname" value="" required></td>
                         </tr>
                         <tr>
                              <td><a class="fas fa-at"></a></td>
                              <td><input type="text" name="username" id="username" value="" required></td>
                         </tr>
                         <tr>
                              <td><a class="far fa-envelope"></a></td>
                              <td><input type="email" name="email" id="email" value="" required></td>
                         </tr>
                         <tr>
                              <td><a class="fas fa-mobile"></a></td>
                              <td><input type="number" name="nomortelephon" id="nomortelephon" value="" required></td>
                         </tr>
                         <tr>
                              <td colspan="2"><button type="submit">Update</button></td>
                         </tr>
                    </table>
               </form>
               <form class="updatedata2" action="" method="post">
                    <table>
                         <tr>
                              <th colspan="2">Data Tambahan</th>
                         </tr>
                         <tr>
                              <td><a class="fas fa-birthday-cake"></a></td>
                              <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" value="29/06/2000"></td>
                         </tr>
                         <tr>
                              <td><a class="fas fa-map-marker-alt"></a></td>
                              <td><input type="text" name="alamat" id="alamat" value=""></td>
                         </tr>
                         <tr>
                              <td><a class="fas fa-building"></a></td>
                              <td><input type="text" name="pekerjaan" id="pekerjaan" value=""></td>
                         </tr>
                         <tr>
                              <td><a class="fas fa-user-graduate"></a></td>
                              <td><input type="text" name="sekolah" id="sekolah" value=""></td>
                         </tr>
                         <tr>
                              <td colspan="2"><button type="submit">Update</button></td>
                         </tr>
                    </table>
               </form>
               <form class="updatepassword" action="" method="post">
                    <table>
                         <tr>
                              <th>Update Password</th>
                         </tr>
                         <tr>
                              <td><input type="password" name="" id=""></td>
                         </tr>
                         <tr>
                              <td><input type="password" name="" id=""></td>
                         </tr>
                         <tr>
                              <td><input type="password" name="" id=""></td>
                         </tr>
                         <tr>
                              <td><button type="submit">Update</button></td>
                         </tr>
                    </table>
               </form>
               <form class="updatesosmed" action="" method="post">
                    <table>
                         <tr>
                              <th>Sosial Media</th>
                         </tr>
                         <tr>
                              <td><select name="sosmed" id="sosmed">
                                        <option value="facebook">Facebook</option>
                                        <option value="instagram">Instagram</option>
                                        <option value="tiktok">Tiktok</option>
                                        <option value="twitter">Twitter</option>
                                        <option value="linkedin">Linkedin</option>
                                        <option value="whatsapp">Whatsapp</option>
                                        <option value="telegram">Telegram</option>
                                        <option value="youtube">Youtube</option>
                                        <option value="twitch">Twitch</option>
                                        <option value="discord">Discord</option>
                                   </select></td>
                         </tr>
                         <tr>
                              <td><input type="url" name="link-sosmed" id="link-sosmed" placeholder="www.facebook.com">
                              </td>
                         </tr>
                         <tr>
                              <td><button type="submit">Update</button></td>
                         </tr>
                    </table>
               </form>
          </div>
     </main>
</body>
<script src="../js/script.js"></script>

</html>