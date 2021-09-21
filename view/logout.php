
<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);
ob_start();
header("Location: masuk.php");
ob_end_flush();
exit;

?>