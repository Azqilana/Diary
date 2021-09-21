<?php
require('proses/function.php');
if( !isset($_SESSION["submit"]) ) {
	header("Location:../masuk.php");
	exit;
}

$profil = query("SELECT * FROM user_profile WHERE username='azqilana'");


?>
<?php foreach ($profil as $pro) : ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Diary</title>
    </head>
    <body>
    
    <table>
        <tr>
            <td><img src="view/img/<?= $pro['gambar'] ?>" alt=""></td>
        </tr>
        <tr>
            <td><?= $pro['longname'] ?></td>
        </tr>
        <tr>
            <td><?= $pro['username'] ?></td>
        </tr>
        <tr>
            <td><?= $pro['gambar'] ?></td>
        </tr>
        <tr>
            <td><?= $pro['gambar'] ?></td>
        </tr>
        <tr>
            <td><?= $pro['gambar'] ?></td>
        </tr>
        <tr>
            <td><?= $pro['gambar'] ?></td>
        </tr>
        <tr>
            <td><?= $pro['gambar'] ?></td>
        </tr>
        <tr>
            <td><?= $pro['gambar'] ?></td>
        </tr>
        <tr>
            <td><?= $pro['gambar'] ?></td>
        </tr>
    </table>
    </body>
    </html>
    <?php endforeach; ?>