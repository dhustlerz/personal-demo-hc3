<?php
/* Redirect browser */
echo $_SERVER['SERVER_NAME'];
header("Location: http://" . $_SERVER['SERVER_NAME'] . "demohc31/personal-demo-hc3/overview.php");
 exit;
?>
