<?php
session_start();
$_SESSION[""];
session_unset();
session_destroy();

ob_start();
header("Location: masuk.php");
ob_end_flush();
exit;

?>