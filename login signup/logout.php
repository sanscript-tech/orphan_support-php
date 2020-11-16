<?php
//logout.php
setcookie("type", "", time()-3600);

header("location:login.php");

?>
