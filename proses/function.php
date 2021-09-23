<?php
session_start();
// koneksi database
$conn = mysqli_connect("localhost", "muhamma8", "Azqilana@2906", "muhamma8_diary");

//function
function query($query)
{
     global $conn;
     $result = mysqli_query($conn, $query);
     $rows = [];
     while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
     }
     return $rows;
}
function register($register)
{
     global $conn;

     $longname = stripslashes(htmlspecialchars(htmlspecialchars_decode($register['longname'])));
     $username = stripslashes(htmlspecialchars(htmlspecialchars_decode($register['username'])));
     $email = stripslashes(htmlspecialchars(htmlspecialchars_decode($register['email'])));
     $password = mysqli_escape_string($conn, $register['password']);
     $gambar = "logo.png";
     $nomortelephon = 0;
     $jenis_kelamin = "";
     $tanggal_lahir = "";
     $tempat_tinggal = "";
     $pekerjaan = "";
     $sekolah = "";



     $result = mysqli_query($conn, "SELECT username FROM user_login WHERE username = '$username'");


     if (mysqli_fetch_assoc($result)) {
          echo "<script> alert('Maaf Udah Ada yang Punya');</script>";

          return false;
     }

     $password = password_hash($password, PASSWORD_DEFAULT);

     // tambahkan baru ke database
     $query =  "INSERT INTO user_login VALUES(null,'$longname', '$username','$email', '$password');";
     $query .= "INSERT INTO user_profile VALUES
     (null,'$longname', '$username','$email','$nomortelephon','$gambar','$jenis_kelamin','$tanggal_lahir','$tempat_tinggal','$pekerjaan','$sekolah')";
     mysqli_multi_query($conn, $query);



     return mysqli_affected_rows($conn);
}
function tambah($data)
{
     global $conn;

     $username = $_SESSION["username"];
     $tanggal_post =date('Y-m-d');
     $jam_post = date('h:m:s');
     $post = htmlspecialchars($data["post"]);

     //upload gambar 
     $gambar = upload();
     if (!$gambar) {
          return false;
     }



     $query = "INSERT INTO user_post
				VALUES(null,'$username', '$tanggal_post', '$jam_post','$post','$gambar')
			";
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}

function upload(){
     
     $namaFile = $_FILES['gambar']['name'];
     $ukuranFile = $_FILES['gambar']['size'];
     $errorFile = $_FILES['gambar']['error'];
     $tmpName = $_FILES['gambar']['tmp_name'];


     if( $errorFile === 4 ) {
		echo "";
	}

     // gambar/bukan
     $extgambarvalid = ['jpg', 'jpeg' , 'png'];
     $extgambar = explode('.', $namaFile);
     $extgambar = strtolower(end($extgambar));

     if (!in_array($extgambar ,$extgambarvalid)) {
          die();
          echo "
          <script>
               alert('yang boleh hanya gambar! jangan jangan jahil ya');
               document.location.href = '';
          </script>
     ";
     }
// batas ukuran
     if ($ukuranFile > 1500000 ) {
          echo "
          <script>
          alert('kebesaran gambarnya penyimpanan masih dikit');
          document.location.href = '';
     </script>
";
     }

//generate nama file
$namaFilebaru = uniqid();
$namaFilebaru .= '.';
$namaFilebaru .= $extgambar;

move_uploaded_file($tmpName, '../view/img/' . $namaFilebaru);

return $namaFilebaru;

}


function hapus($data)
{
     global $conn;
     $id = $data['id'];
     mysqli_query($conn, "DELETE FROM user_post WHERE id = $id");
     return mysqli_affected_rows($conn);
}
function ubahpost($data)
{
     global $conn;

     $id = $data['id'];
     $post = htmlspecialchars($data["post"]);
     $gambarLama = $data["gambarLama"];
     if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		$gambar = ubahupload();
	}
          // var_dump($gambar);
          // die();

     $result = mysqli_query($conn, "UPDATE user_post SET post = '$post',
                                   gambar = '$gambar' WHERE id = $id");
     // var_dump($result);
     // die();
     return $result;
     
}
function ubahupload(){
     
     $namaFile = $_FILES['gambar']['name'];
     $ukuranFile = $_FILES['gambar']['size'];
     // $errorFile = $_FILES['gambar']['error'];
     $tmpName = $_FILES['gambar']['tmp_name'];


     // gambar/bukan
     $extgambarvalid = ['jpg', 'jpeg' , 'png'];
     $extgambar = explode('.', $namaFile);
     $extgambar = strtolower(end($extgambar));

     if (!in_array($extgambar ,$extgambarvalid)) {
          // die();
          echo "
          <script>
               alert('yang boleh hanya gambar! jangan jangan jahil ya');
               document.location.href = '';
          </script>
     ";
     }
// batas ukuran
     if ($ukuranFile > 1500000 ) {
          echo "
          <script>
          alert('kebesaran gambarnya penyimpanan masih dikit');
          document.location.href = '';
     </script>
";
     }

//generate nama file
$namaFilebaru = uniqid();
$namaFilebaru .= '.';
$namaFilebaru .= $extgambar;

move_uploaded_file($tmpName, '../img/' . $namaFilebaru);
// var_dump($namaFilebaru);

return $namaFilebaru;

}


