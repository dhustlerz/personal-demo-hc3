<?php
/* Redirect browser */
echo $_SERVER['SERVER_NAME'];
header("Location: http://" . $_SERVER['SERVER_NAME'] . "/personal-demo-hc3/overview.php");
 exit;
?>
